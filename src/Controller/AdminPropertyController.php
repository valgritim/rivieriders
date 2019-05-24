<?php

namespace App\Controller;

use App\Entity\Moto;
use App\Form\MotoType;
use App\Repository\MotoRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Common\Persistence\ObjectManager;

class AdminPropertyController extends AbstractController
{
    private $repo;

    public function __construct(MotoRepository $repo, ObjectManager $manager)
    {
        $this->repo = $repo;
        $this->manager = $manager;
    }

    /**
     * Permet de récupérer toutes les motos de la DB
     * @Route("/admin", name="admin_property")
     * @return Response
     */
    public function index()
    {

        $properties = $this->repo->findAll();
        return $this->render('admin/property/index.html.twig', [
            'properties' => $properties,
        ]);
    }
    /**
     * Permet de créer de nouveaux véhicules
     * @Route("admin/moto/create", name="admin_property_create")     *
     * @return Response
     */
    public function createMoto(Request $request){
        $moto = new Moto();

        $form = $this->createForm(MotoType::class, $moto);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $this->manager->persist($moto);
            $this->manager->flush();
            $this->addFlash('success', "La fiche a bien été créée !");
            return $this->redirectToRoute("admin_property");
            
        }
        return $this->render("admin/property/new.html.twig", [
            'moto' => $moto,
            'form' => $form->createView()
        ]);

    }
    /**
     * Permet d'éditer une moto
     * @Route("admin/edit/{id}", name="admin_property_edit")
     * @return response
     */
    public function edit(Moto $moto, Request $request){

        $form = $this->createForm(MotoType::class, $moto);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $this->manager->flush();
            $this->addFlash("success", "La fiche a bien été modifiée !");

            return $this->redirectToRoute("admin_property");
            
        }
        

        return $this->render("admin/property/edit.html.twig", [
            'moto' => $moto,
            'form' => $form->createView()
        ]);
    }

    /**
     * Permet de supprimer une moto
     * @Route("admin/delete/{id}", name="admin_property_delete")
     * @param Moto $moto
     * @return void
     */
    public function delete(Moto $moto){
        $this->manager->remove($moto);
        $this->manager->flush();

        return $this->redirectToRoute("admin_property");


    }
}
