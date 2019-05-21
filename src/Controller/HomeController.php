<?php

namespace App\Controller;

use App\Entity\Moto;
use App\Repository\MotoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(MotoRepository $repo)
    {
        
        $results = $repo->findAll();

        return $this->render('home/index.html.twig', [
            'results' => $results
        ]);
    }

    /**
     * retourne une vue du produit cliqué
     *@Route("/show/{id}", name="show")
     * @return Response
     */
    public function show(MotoRepository $repo, $id){

        $result = $repo->find($id);
        return $this->render('home/show.html.twig', [
            'moto' => $result
        ]);
    }

    /**
     * Retourne la page de contact
     *@Route("/contact", name="contact_page")
     * @return Response
     */
    public function contact(){
        return $this->render("home/contact.html.twig");
    }

    /**
     * Permet de rajouter une moto dans la DB
     *@Route("addMoto", name="add_moto")
     * @return Response
     */
    public function addMoto(EntityManagerInterface $manager){
            
            $sport = new Moto();
            $softail = new Moto();
          
            $sport->setModel('Sportster')
                ->setPrice(89);
            $softail->setModel('Softail')
                     ->setPrice(67);

            
            $manager->persist($softail);
            $manager->persist($sport);
            $manager->flush();

        return $this->render('add.html.twig');
    }
}
