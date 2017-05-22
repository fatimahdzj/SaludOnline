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
use bdBundle\Form\UsuarioType;
use Symfony\Component\HttpFoundation\Response;

class TrabajoController extends Controller
{
    
    //Metodo para la pagina de inicio
    public function indexpacAction()
    {
        return $this->render('bdBundle:Trabajo:indexpac.html.twig');
    }
     public function indexasAction()
    {
        return $this->render('bdBundle:Trabajo:indexas.html.twig');
    }
    //metodo para el login
    public function loginAction(Request $request)
    {
        //si se envia el formulario se va a ejecutar esta condicion
        if($request->getMethod()== "POST")
        {
           $nomusu=$request->get("nomusr");
           $pass=$request->get("pass");
          // linea para comprobar que los datos efectivamente se estan enviando: echo "Nombre Usuario=",$nombreusu,"<hr>Pass=",$contraseña;exit;
           $user=$this->getDoctrine()->getRepository('bdBundle:Usuario')->findOneby(array("nomusr"=>$nomusu,"pass"=>$pass));
           if($user){
               $session=$request->getsession();
               //obtiene el valor
              $session->set("id",$user->getId());
                 $session->set("idtipo",$user->getIdtipo());
                 //imprimir el valor
             //  echo $session->get("email");exit;
                $session=$request->getsession();  
                $id=$session->get("id");
            // return   $this->render('bdBundle:Trabajo:indexpac.html.twig',array("idusr"=>$idusr));
                 $valor=$session->get("idtipo");
                 if($valor == "1"){
               
                 return   $this->render('bdBundle:Trabajo:indexpac.html.twig',array("id"=>$id));
                   return $this->redirect($this->generateUrl('bd_homepage'));
                 }
                 else{if($valor == "2"){
                     return   $this->render('bdBundle:Trabajo:indexas.html.twig',array("id"=>$id));
                 return $this->redirect($this->generateUrl('bd_homepageindexas'));}}
                 
           }
           else{
               $this->get('session')->getFlashBag()->add('notice','LOS DATOS INGRESADOS NO SON VALIDOS,INTENTALO NUEVAMENTE.');
               return $this->redirect($this->generateUrl('bd_homepagelogin'));
           }
           
           
        }
        return $this->render('bdBundle:Trabajo:login.html.twig');
    }
    
    public function RegistrarAction(){
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $usuarios = new Usuario();
        $nomcom=$_POST['nomcom'];
            $nomusr = $_POST['nomusr'];
            $numafil = $_POST['numafil'];
            $pass = $_POST['pass'];
            $curp = $_POST['curp'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
             $pass2 = $_POST['pass2'];
          //  $idtipo=$_POST['idtipo'];
         //    $numtra=$_POST['numtra'];
  if($pass==$pass2){
    $usuarios->setNomcom($nomcom);
    $usuarios->setNomusr($nomusr);
    $usuarios->setNumafil($numafil);
    $usuarios->setPass($pass);
    $usuarios->setCurp($curp);
    $usuarios->setEmail($email);
    $usuarios->setTelefono($telefono);
    $usuarios->setIdtipo("1");
    // $usuarios->setNumtra($numtra);
 
    $em = $this->getDoctrine()->getManager();
    $em->persist($usuarios);
    $em->flush();
    $this->get('session')->getFlashBag()->add('mensaje','Usuario agregado correctamente, Ingresa tus datos');
                 if($em)  return $this->redirect($this->generateURl('bd_homepagelogin')) ;
                  else echo("Intenta de nuevo");
                  
  }
       else{
            echo("<b>VERIFICA QUE LAS CONTRASEÑAS COINCIDAN");
        }} 
      return $this->render('bdBundle:Trabajo:Registrar.html.twig');
}
  public function registroaAction()
    {
        return $this->render('bdBundle:Trabajo:registroa.html.twig');
    }
    
   public function registrosaAction(Request $request)
    {
       
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usuarios = new Usuario();
        $nomcom=$_POST['nomcom'];
            $nomusr = $_POST['nomusr'];
            //$numafil = $_POST['numafil'];
            $pass = $_POST['pass'];
            $curp = $_POST['curp'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
            $pass2 = $_POST['pass2'];
          //  $idtipo=$_POST['idtipo'];
         //    $numtra=$_POST['numtra'];
            if($pass==$pass2){
  
    $usuarios->setNomcom($nomcom);
    $usuarios->setNomusr($nomusr);
  //  $usuarios->setNumafil($numafil);
    $usuarios->setPass($pass);
    $usuarios->setCurp($curp);
    $usuarios->setEmail($email);
    $usuarios->setTelefono($telefono);
    $usuarios->setIdtipo("1");
    // $usuarios->setNumtra($numtra);
 
    $em = $this->getDoctrine()->getManager();
    $em->persist($usuarios);
    $em->flush();
    $this->get('session')->getFlashBag()->add('mensaje','Usuario agregado correctamente, Ingresa tus datos');
                 if($em)  return $this->redirect($this->generateURl('bd_homepagelogin')) ;
                  else echo("Intenta de nuevo");
                  
        }
        else{
            echo("<b>VERIFICA QUE LAS CONTRASEÑAS COINCIDAN");
        }}
        return $this->render('bdBundle:Trabajo:registrosa.html.twig');
    }
      
    //Metodo para el perfil del paciente
    public function perfilpacAction($id)
    {
      
     $user=$this->getDoctrine()->getRepository('bdBundle:Usuario')->find($id);
        
      
        return $this->render('bdBundle:Trabajo:perfilpac.html.twig', array("user"=>$user));
    }
    public function editarPAction($id,Request $request)
    {
          $datos=$this->getDoctrine()->getRepository('bdBundle:Usuario')->find($id);
          if(!$datos){
              throw $this->createNotFoundException('No existe el Usuario');
          }
        
          
          $form=$this->createForm(new UsuarioType(),$datos);
          //codigo para modificar el usuario
          $form->handleRequest($request);
                  //para corroborar que los datos que se estan enviando no contienen un error o se estan enviando en el formato que se requiere
               if($form->isValid()){
                   $es=$this->getDoctrine()->getManager();
                   $es->flush();
               if ($es)    $this->get('session')->getFlashBag()->add('mensaje','Usuario modificado correctamente');
                 
          
        }
        return $this->render('bdBundle:Trabajo:editarP.html.twig', array("form"=>$form->createView()));
    }
    
    public function eliminarPAction($id,Request $request)
    {
         
                   $es=$this->getDoctrine()->getManager();
                   $paciente=$this->getDoctrine()->getRepository('bdBundle:Usuario')->find($id);
                   if(!$paciente){
                        throw $this->createNotFoundException('No existe el usuario');
                     }
                     $es->remove($paciente);
                     $es->flush();
                     $this->get('session')->getFlashBag()->add('mensaje','Cuenta Eliminada exitosamente');
                 if($es)  return $this->redirect($this->generateURl('bd_homepagelogin')) ;
                  else echo("Intenta de nuevo");
                  
          
          
        return $this->render('bdBundle:Trabajo:eliminarP.html.twig', array("form"=>$form->createView()));
    }
}
