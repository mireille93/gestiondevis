<?php

namespace App\Controller;

use App\Entity\Devvi;
use App\Entity\Item;
use App\Form\ItemType;
use App\Repository\DevviRepository;
use App\Repository\ItemRepository;
use ContainerDPu4bw6\getForm_ChoiceListFactory_CachedService;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/item")
 */
class ItemController extends AbstractController
{
    /**
     * @Route("/", name="item_index", methods={"GET","POST"})
     */
    public function index(ItemRepository $itemRepository,Request $request): Response
    {
        $item = new Item();
        $form = $this->createFormBuilder($item)
        ->add('id_devvi',EntityType::class, array('class'=>Devvi::class,'choice_label'=>'descriptiondev', 'label'=>'Devis'))
        ->getForm();
        $form->handleRequest($request);

        /*if ($form->isSubmitted() && $form->isValid()) {
            return $this->redirectToRoute('item_devis');
        }*/

        $items=$itemRepository->findByExampleField($this->get($form->get('id_devvi')->getData()));
    return $this->render('item/index.html.twig', [
            'form' => $form->createView(),
            'items'=>$items
          //  'items' => itemRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="item_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $item = new Item();
        $form = $this->createForm(ItemType::class, $item);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($item);
            $entityManager->flush();

            return $this->redirectToRoute('item_index');
        }

        return $this->render('item/new.html.twig', [
            'item' => $item,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="item_show", methods={"GET"})
     */
    public function show(Item $item): Response
    {
        return $this->render('item/show.html.twig', [
            'item' => $item,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="item_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Item $item): Response
    {
        $form = $this->createForm(ItemType::class, $item);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('item_index');
        }

        return $this->render('item/edit.html.twig', [
            'item' => $item,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="item_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Item $item): Response
    {
        if ($this->isCsrfTokenValid('delete'.$item->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($item);
            $entityManager->flush();
        }

        return $this->redirectToRoute('item_index');
    }

    /**
     * @Route("/{id}/listeitem", name="item_listeitem", methods={"GET","POST"})
     */
    public function listeitem(ItemRepository $itemRepository,Item $item): Response
    {
        return $this->render('item/listeitem.html.twig', [
            'listeitem' => $itemRepository->findByExampleField($item->getIdDevvi()),
        ]);
    }
}
