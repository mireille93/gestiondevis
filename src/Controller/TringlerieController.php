<?php

namespace App\Controller;

use App\Entity\Tringlerie;
use App\Form\TringlerieType;
use App\Repository\TringlerieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/tringlerie")
 */
class TringlerieController extends AbstractController
{
    /**
     * @Route("/", name="tringlerie_index", methods={"GET"})
     */
    public function index(TringlerieRepository $tringlerieRepository): Response
    {
        return $this->render('tringlerie/index.html.twig', [
            'tringleries' => $tringlerieRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="tringlerie_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tringlerie = new Tringlerie();
        $form = $this->createForm(TringlerieType::class, $tringlerie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tringlerie);
            $entityManager->flush();
            $this->addFlash('success', 'Tringlerie Ajouté');
            return $this->redirectToRoute('tringlerie_index');
        }

        return $this->render('tringlerie/new.html.twig', [
            'tringlerie' => $tringlerie,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tringlerie_show", methods={"GET"})
     */
    public function show(Tringlerie $tringlerie): Response
    {
        return $this->render('tringlerie/show.html.twig', [
            'tringlerie' => $tringlerie,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="tringlerie_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Tringlerie $tringlerie): Response
    {
        $form = $this->createForm(TringlerieType::class, $tringlerie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success', 'Tringlerie Modifié');
            return $this->redirectToRoute('tringlerie_index');
        }

        return $this->render('tringlerie/edit.html.twig', [
            'tringlerie' => $tringlerie,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tringlerie_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Tringlerie $tringlerie): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tringlerie->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tringlerie);
            $entityManager->flush();
            $this->addFlash('error', 'Tringlerie Supprimé');
        }

        return $this->redirectToRoute('tringlerie_index');
    }
}
