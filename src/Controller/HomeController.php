<?php

namespace App\Controller;

use App\Entity\Moto;
use App\Repository\MotoRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Common\Persistence\ObjectManager;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
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
     *@Route("/show/{slug}-{id}", name="show_moto", requirements={"slug": "[a-z0-9\-]*"})
     * @return Response
     */
    public function show(Moto $moto, $slug)
    {
        if($moto->getSlug() !== $slug){
            return $this->redirectToRoute("show_moto", [
                'id' => $moto->getId(),
                'slug' => $moto->getSlug()
            ], 301);
        }    
        
        return $this->render('home/show.html.twig', [
            'moto' => $moto
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
     *@Route("/addMoto", name="add_moto")
     * @return Response
     */
    public function addMoto(ObjectManager $manager){
            
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
