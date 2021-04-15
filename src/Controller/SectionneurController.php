<?php

namespace App\Controller;
use App\Entity\Sectionneur;
use App\Form\SectionneurType;
use App\Repository\SectionneurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SectionneurController extends AbstractController
{
    /**
     * @Route("/sectionneur", name="sectionneur_liste",methods="GET")
     */
    public function index(SectionneurRepository $sectionneurRepository): Response
    {
        $sectionneurs= ($sectionneurRepository->findAll());
        return $this->render('sectionneur/index.html.twig', compact('sectionneurs'));
    }

    /**
     * @Route("/sectionneur/create", name="sectionneur_create", methods="GET|POST")
     */
    public function create(Request $request, EntityManagerInterface $em):Response
    {
        $sectionneur=new Sectionneur;

        $form= $this->createForm(SectionneurType::class, $sectionneur);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em->persist($sectionneur);
            $em->flush();

            $this->addFlash('success', 'Sectionneur Enregistré');

            return $this->redirectToRoute('sectionneur_liste');
        }
        return $this->render('sectionneur/create.html.twig',[
            'form'=>$form->createView()
        ]);
    }

    /**
     * @Route("/sectionneur/show", name="sectionneur_show", methods="GET")
     */

    public function show (Sectionneur $sectionneur)
    {
        return $this-> render('sectionneur/show.html.twig', compact('sectionneur'));
    }

    /**
     * @Route("/sectionneurs/{id<[0-9]+>}/edit", name="sectionneur_edit", methods="GET|PUT")
     */
    public function edit(Sectionneur $sectionneur, Request $request, EntityManagerInterface $em):Response
    {
        $form= $this->createForm(SectionneurType::class, $sectionneur, [
            'method'=>'PUT'
        ]);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em->flush();

            $this->addFlash('success', 'Sectionneur Modifié');

            return $this->redirectToRoute('sectionneur_liste');
        }

        return $this->render('sectionneur/edit.html.twig',[
            'sectionneur' => $sectionneur,
            'form'=>$form->createView()
        ]);
    }

    /**
     * @Route("/sectionneurs/{id<[0-9]+>}/delete", name="sectionneur_delete", methods="GET")
     */
    public function delete(Sectionneur $sectionneur, Request $request, EntityManagerInterface $em):Response
    {
        //dd($request->request->all());

        //if($this->isCsrfTokenValid('sectionneur_delete_' .$sectionneur->getNumsectionneur(), $request->request->get('csrf_token'))){

        if ($sectionneur) {
            $em->remove($sectionneur);
            $em->flush();
        }

            $this->addFlash('info', 'Sectionneur Supprimé');
        //}

        return $this->redirectToRoute('sectionneur_liste');
    }
}
