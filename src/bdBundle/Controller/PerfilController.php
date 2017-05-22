<?php

namespace bdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use bdBundle\Model\Model;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use bdBundle\Entity\Usuarios;
use bdBundle\Entity\Usuario;
use Symfony\Component\HttpFoundation\Response;

class PerfilController extends Controller
{
    
     public function perfilasAction()
    {
        return $this->render('bdBundle:Perfil:perfilas.html.twig');
    }
     public function afiliacionAction(Request $request)
    {
         $afil=$request->get("afiliado");
           $afil2=$request->get("sinafil");
         if($afil == "on")
       return $this->render('bdBundle:Trabajo:Registrar.html.twig');
        
         else {if($afil2 == "on")
        return $this->render('bdBundle:Trabajo:registrosa.html.twig');}
       return $this->render('bdBundle:Perfil:afiliacion.html.twig');
         
    }
    
     
}
