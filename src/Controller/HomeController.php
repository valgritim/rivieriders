<?php

namespace App\Controller;

use App\Entity\Moto;
use App\Notification\ContactNotification;
use App\Entity\Contact;
use App\Form\ContactType;
use App\Entity\MotoSearch;
use App\Form\MotoSearchType;
use App\Repository\MotoRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(MotoRepository $repo, Request $request)
    {
        $search = new MotoSearch();
        $form = $this->createForm(MotoSearchType::class, $search);
        $form->handleRequest($request);

        $results = $repo->findAllQuery($search);
        return $this->render('home/index.html.twig', [
            'results' => $results,
            'form' => $form->createView()
        ]);
    }

    /**
     * retourne une vue du produit cliqué
     *@Route("/show/{slug}/{id}", name="show_moto", requirements={"slug": "[a-z0-9\-]*"})
     * @return Response
     */
    public function show(Moto $moto, $slug, Request $request, ContactNotification $notification)
    {
        if($moto->getSlug() !== $slug){
            return $this->redirectToRoute("show_moto", [
                'id' => $moto->getId(),
                'slug' => $moto->getSlug()
            ], 301);
        }    

        $contact = new Contact();
        $contact->setMoto($moto);
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $notification->notify($contact);
            $this->addFlash("success", "Votre email a bien été envoyé !");
            return $this->redirectToRoute('show_moto', [                
                'id' => $moto->getId(),
                'slug' => $moto->getSlug()
                 ]);
        }
       
        return $this->render('home/show.html.twig', [
            'moto' => $moto,
            'form' => $form->createView()
            
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
