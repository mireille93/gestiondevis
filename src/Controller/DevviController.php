<?php

namespace App\Controller;

use App\Entity\Devvi;
use App\Form\DevviType;
use App\Repository\DevviRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/devvi")
 */
class DevviController extends AbstractController
{
    /**
     * @Route("/", name="devvi_index", methods={"GET"})
     */
    public function index(DevviRepository $devviRepository): Response
    {
        return $this->render('devvi/index.html.twig', [
            'devvis' => $devviRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="devvi_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $devvi = new Devvi();
        $form = $this->createForm(DevviType::class, $devvi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($devvi);
            $entityManager->flush();
            $this->addFlash('Success', 'Devis Ajouté');
            return $this->redirectToRoute('devvi_index');
        }

        return $this->render('devvi/new.html.twig', [
            'devvi' => $devvi,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="devvi_show", methods={"GET"})
     */
    public function show(Devvi $devvi): Response
    {
        return $this->render('devvi/show.html.twig', [
            'devvi' => $devvi,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="devvi_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Devvi $devvi): Response
    {
        $form = $this->createForm(DevviType::class, $devvi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success', 'Devis Modifié');
            return $this->redirectToRoute('devvi_index');
        }

        return $this->render('devvi/edit.html.twig', [
            'devvi' => $devvi,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="devvi_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Devvi $devvi): Response
    {
        if ($this->isCsrfTokenValid('delete'.$devvi->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($devvi);
            $entityManager->flush();
            $this->addFlash('error', 'Devis Supprimmé');
        }

        return $this->redirectToRoute('devvi_index');
    }

}
