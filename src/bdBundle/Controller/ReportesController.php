<?php

namespace bdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use bdBundle\Model\Model;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use bdBundle\Entity\Usuarios;
use bdBundle\Entity\Usuario;
use bdBundle\Entity\Medico;
use bdBundle\Form\MedicoType;
use Symfony\Component\HttpFoundation\Response;

class ReportesController extends Controller
{
    //Metodo para la pagina de inicio
    public function reportesAction()
    { 
           
       
   $datos=$this->getDoctrine()->getRepository('bdBundle:Medico')->findAll();
        
   echo"datos";
       
      
        $this->get('knp_snappy.pdf')->generateFromHtml(
    $this->renderView(
        'bdBundle:Reportes:reportes.html.twig',compact("datos")),'C:\Users\dulce\Desktop\file.pdf');
  return $this->render('bdBundle:Reportes:reportes.html.twig');
    }
}
