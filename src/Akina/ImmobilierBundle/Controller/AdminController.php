<?php

namespace Akina\ImmobilierBundle\Controller;
use Akina\ImmobilierBundle\Entity\Biens;
use Akina\ImmobilierBundle\Form\BiensType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\Common\Collections\Criteria;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
     public function addAction()
    {
    
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AkinaImmobilierBundle:Biens');

        $listbien = $repository->findAll();
       return $this->render('AkinaImmobilierBundle:Admin:add.html.twig',
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

   

}
