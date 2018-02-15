<?php

namespace Akina\ImmobilierBundle\Controller;
use Akina\ImmobilierBundle\Entity\search;
use Akina\ImmobilierBundle\Form\searchType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\Common\Collections\Criteria;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class FrontController extends Controller
{
    /**
     * @Route("/bien/immobilier")
     */
   
     public function listAction()
    {
    
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AkinaImmobilierBundle:Biens');

        $listbien = $repository->findAll();
       return $this->render('AkinaImmobilierBundle:Front:list.html.twig',
       array("bien"=>$listbien));

    }
 public function disponibiliteAction($id)
    {
            echo $id;
            $user=$this
            ->getDoctrine()
            ->getManager()
            ->getRepository('AkinaImmobilierBundle:Biens')
            ->find($id);


            $etat = $user->getEtat();
            if($etat == 0){
                $user->setEtat(1);
            }
            else{
                $user->setEtat(0);
            }
            $em=$this
            ->getDoctrine()
            ->getManager();
            
           $em->flush($user);
return $this->redirectToRoute('listBien');

        
                }
             

                 public function searchAction(Request $request)
    {
        $admin = new search();

    $form   = $this->get('form.factory')->create(searchType::class, $admin);


    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $IdLocalite=$_POST['akina_immobilierbundle_search']['IdLocalite'];
            $IdType=$_POST['akina_immobilierbundle_search']['IdType'];
            $Prix=$_POST['akina_immobilierbundle_search']['Prix'];

      $em = $this->getDoctrine()->getManager()->getRepository('AkinaImmobilierBundle:Biens');
       $bien = $em ->findBien($IdLocalite,$Prix,$IdType);

     return $this->render('AkinaImmobilierBundle:Front:accueil.html.twig',array('Biens'=>$bien));
  return new Response($bien);
}
     return $this->render('AkinaImmobilierBundle:Front:list.html.twig', array("form"=>$form->createView()
            // ...
        ));
     
    }
}
