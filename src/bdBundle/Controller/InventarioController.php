<?php

namespace bdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use bdBundle\Model\Model;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use bdBundle\Entity\Inventario;
use bdBundle\Entity\Usuario;
use bdBundle\Entity\Medico;
use bdBundle\Form\InventarioType;
use bdBundle\Form\UsuarioType;
use Symfony\Component\HttpFoundation\Response;

class InventarioController extends Controller
{
    
    //Metodo para la pagina de inicio
    public function inventarioAction(Request $request)
    {
      // $datos=$this->getDoctrine()->getRepository('bdBundle:Inventario')->findAll();
        $em=$this->getDoctrine()->getManager();
                $query= $em->createQuery('Select p FROM bdBundle:inventario p ORDER BY p.valorinv DESC');
              $datos=$query->getResult(); 
              $suma=0;
     //   $result =
                $em->createQuery('SELECT i.nomprod FROM bdBundle:inventario i WHERE i.existensia=30');
        //SELECT  SUM(i.valorinv) FROM bdBundle:inventario i');
     //$resul=$result->getResult();  
     //   $session =$request->getSession();
          //    $session->set("nom",$resul);
        
         return $this->render('bdBundle:Inventario:inventario.html.twig',
                 array("datos" => $datos, "sum" =>$suma));
    
    }
    
}