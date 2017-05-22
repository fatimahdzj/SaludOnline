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

class MedicoController extends Controller
{
    //Metodo para la pagina de inicio
    public function indexmedicoAction()
    {
        
        $em=$this->getDoctrine()->getManager();
                $query= $em->createQuery('Select m.id,m.nommed,m.telefono,m.consultorio,e.nomesp,s.nomserv FROM bdBundle:Medico m JOIN bdBundle:Especialidad e WITH e.id=m.idesp JOIN bdBundle:Servicio s WITH s.id=m.idserv');
              $datos=$query->getResult();  
        
        return $this->render('bdBundle:Medico:indexmedico.html.twig',compact("datos"));
    }
  
    
    //metodo para insertar medico
      public function medicoAction(Request $request)
    {
          if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $medico = new Medico();
        $nommed=$_POST['nommed'];
            $consultorio = $_POST['consultorio'];
            $telefono = $_POST['telefono'];
         
  
    $medico->setNommed($nommed);
    $medico->setConsultorio($consultorio);
    $medico->setTelefono($telefono);
    
    $gral=$request->get("gral");
            $nutri=$request->get("nutri");
            $gine=$request->get("gine");
         if($gral == "on")
              $medico->setIdesp("1");
         else {
             if($nutri == "on")
        $medico->setIdesp("2");
             else{
                 if($gine == "on")
                $medico->setIdesp("3");
             }   
         }
         
         $Cgral=$request->get("Cgral");
            $Cnutri=$request->get("Cnutri");
            $Cgine=$request->get("Cgine");
         if($Cgral == "on")
              $medico->setIdserv("1");
         else {
             if($Cnutri == "on")
        $medico->setIdserv("2");
             else{
                 if($Cgine == "on")
                $medico->setIdserv("3");
             }   
         }
    
 
    $em = $this->getDoctrine()->getManager();
    $em->persist($medico);
    $em->flush();
    $this->get('session')->getFlashBag()->add('mensaje','Médico agregado correctamente');
                 if($em)  return $this->redirect($this->generateURl('bd_homepageindexmedico')) ;
                  else echo("Intenta de nuevo");
                  
    
        } 
      return $this->render('bdBundle:Medico:medico.html.twig');
    }
    public function editarMAction($id,Request $request)
    {
          $datos=$this->getDoctrine()->getRepository('bdBundle:Medico')->find($id);
          if(!$datos){
              throw $this->createNotFoundException('No existe el medico');
          }
        
        
          $form=$this->createForm(new MedicoType(),$datos);
          //codigo para modificar el medico
          $form->handleRequest($request);
                  //para corroborar que los datos que se estan enviando no contienen un error o se estan enviando en el formato que se requiere
                 if($form->isValid()){
                   $es=$this->getDoctrine()->getManager();
                   $es->flush();
                   $this->get('session')->getFlashBag()->add('mensaje','Médico modificado correctamente');
                 if($es)  return $this->redirect($this->generateURl('bd_homepageindexmedico')) ;
                  else echo("Intenta de nuevo");
                  }
          
          
        return $this->render('bdBundle:Medico:editarM.html.twig', array("form"=>$form->createView()));
    }
    public function eliminarMAction($id,Request $request)
    {
         
                   $es=$this->getDoctrine()->getManager();
                   $medico=$this->getDoctrine()->getRepository('bdBundle:Medico')->find($id);
                   if(!$medico){
                        throw $this->createNotFoundException('No existe el producto');
                     }
                     $es->remove($medico);
                     $es->flush();
                     $this->get('session')->getFlashBag()->add('mensaje','Médico Eliminado correctamente');
                 if($es)  return $this->redirect($this->generateURl('bd_homepageindexmedico')) ;
                  else echo("Intenta de nuevo");
                  
          
          
        return $this->render('bdBundle:Medico:eliminarM.html.twig', array("form"=>$form->createView()));
    }
    public function especialidadAction(Request $request)
    {
        $m=new Medico();
          $form=$this->createForm(new MedicoType(),$m);
            $gral=$request->get("gral");
            $nutri=$request->get("nutri");
            $gine=$request->get("gine");
         if($gral == "on")
       return $this->render('bdBundle:Medico:medico.html.twig',array("espe"=>"1","form"=>$form->createView()));
         else {
             if($nutri == "on")
         return $this->render('bdBundle:Medico:medico.html.twig',array("espe"=>"2"));
             else{
                 if($gine == "on")
                 return $this->render('bdBundle:Medico:medico.html.twig',array("espe"=>"3"));
             }   
         }
       return $this->render('bdBundle:Medico:especialidad.html.twig');
         
    }
}
