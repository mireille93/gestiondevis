<?php

namespace App\Controller;

use App\Entity\Isolateur;
use App\Form\IsolateurType;
use App\Repository\IsolateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/isolateur")
 */
class IsolateurController extends AbstractController
{
    /**
     * @Route("/", name="isolateur_index", methods={"GET"})
     */
    public function index(IsolateurRepository $isolateurRepository): Response
    {
        return $this->render('isolateur/index.html.twig', [
            'isolateurs' => $isolateurRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="isolateur_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $isolateur = new Isolateur();
        $form = $this->createForm(IsolateurType::class, $isolateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($isolateur);
            $entityManager->flush();
            $this->addFlash('Success', 'Isolateur Supprimé');

            return $this->redirectToRoute('isolateur_index');

        }

        return $this->render('isolateur/new.html.twig', [
            'isolateur' => $isolateur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="isolateur_show", methods={"GET"})
     */
    public function show(Isolateur $isolateur): Response
    {
        return $this->render('isolateur/show.html.twig', [
            'isolateur' => $isolateur,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="isolateur_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Isolateur $isolateur): Response
    {
        $form = $this->createForm(IsolateurType::class, $isolateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('Success', 'Isolateur Modifié');
            return $this->redirectToRoute('isolateur_index');
        }

        return $this->render('isolateur/edit.html.twig', [
            'isolateur' => $isolateur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="isolateur_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Isolateur $isolateur): Response
    {
        if ($this->isCsrfTokenValid('delete'.$isolateur->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($isolateur);
            $entityManager->flush();
            $this->addFlash('erreur', 'Isolateur Supprimé');
        }

        return $this->redirectToRoute('isolateur_index');
    }
}
