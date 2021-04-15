<?php

namespace App\Controller;

use App\Entity\Caisson;
use App\Form\CaissonType;
use App\Repository\CaissonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/caisson")
 */
class CaissonController extends AbstractController
{
    /**
     * @Route("/", name="caisson_index", methods={"GET"})
     */
    public function index(CaissonRepository $caissonRepository): Response
    {
        return $this->render('caisson/index.html.twig', [
            'caissons' => $caissonRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="caisson_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $caisson = new Caisson();
        $form = $this->createForm(CaissonType::class, $caisson);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($caisson);
            $entityManager->flush();
            $this->addFlash('success', 'Caisson Ajouté');
            return $this->redirectToRoute('caisson_index');
        }

        return $this->render('caisson/new.html.twig', [
            'caisson' => $caisson,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="caisson_show", methods={"GET"})
     */
    public function show(Caisson $caisson): Response
    {
        return $this->render('caisson/show.html.twig', [
            'caisson' => $caisson,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="caisson_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Caisson $caisson): Response
    {
        $form = $this->createForm(CaissonType::class, $caisson);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success', 'Caisson Modifié');
            return $this->redirectToRoute('caisson_index');

        }

        return $this->render('caisson/edit.html.twig', [
            'caisson' => $caisson,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="caisson_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Caisson $caisson): Response
    {
        if ($this->isCsrfTokenValid('delete'.$caisson->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($caisson);
            $entityManager->flush();
            $this->addFlash('error', 'Caisson Supprimé');
        }

        return $this->redirectToRoute('caisson_index');
    }
}
