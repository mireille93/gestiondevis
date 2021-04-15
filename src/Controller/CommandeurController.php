<?php

namespace App\Controller;

use App\Entity\Commandeur;
use App\Form\CommandeurType;
use App\Repository\CommandeurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/commandeur")
 */
class CommandeurController extends AbstractController
{
    /**
     * @Route("/", name="commandeur_index", methods={"GET"})
     */
    public function index(CommandeurRepository $commandeurRepository): Response
    {
        return $this->render('commandeur/index.html.twig', [
            'commandeurs' => $commandeurRepository->findAll(),

            ]);
    }

    /**
     * @Route("/new", name="commandeur_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $commandeur = new Commandeur();
        $form = $this->createForm(CommandeurType::class, $commandeur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($commandeur);
            $entityManager->flush();
            $this->addFlash('success', 'Commandeur Enregistré');
            return $this->redirectToRoute('commandeur_index');
        }

        return $this->render('commandeur/new.html.twig', [
            'commandeur' => $commandeur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="commandeur_show", methods={"GET"})
     */
    public function show(Commandeur $commandeur): Response
    {
        return $this->render('commandeur/show.html.twig', [
            'commandeur' => $commandeur,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="commandeur_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Commandeur $commandeur): Response
    {
        $form = $this->createForm(CommandeurType::class, $commandeur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success', 'Commandeur Modifié');
            return $this->redirectToRoute('commandeur_index');
        }

        return $this->render('commandeur/edit.html.twig', [
            'commandeur' => $commandeur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="commandeur_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Commandeur $commandeur): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commandeur->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($commandeur);
            $entityManager->flush();
            $this->addFlash('error', 'Commandeur Supprimmé');
        }

        return $this->redirectToRoute('commandeur_index');
    }
}
