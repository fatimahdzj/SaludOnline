<?php

namespace bdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 */
class Usuarios
{
    /**
     * @var int
     */
    private $id;
    
     /**
     * @var string
     */
    private $nomcom;

    /**
     * @var string
     */
    
    private $nombre;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $pass;
    
      /**
     * @var string
     */
    private $numafil;
    
      /**
     * @var string
     */
    private $curp;
    
      /**
     * @var string
     */
    private $telefono;
    
      /**
     * @var int
     */
    private $idtipo;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
     

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuarios
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    

    /**
     * Set email
     *
     * @param string $email
     * @return Usuarios
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set pass
     *
     * @param string $pass
     * @return Usuarios
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get pass
     *
     * @return string 
     */
    public function getPass()
    {
        return $this->pass;
    }
    
    /**
     * Set numafil
     *
     * @param string $numafil
     * @return Usuarios
     */
    public function setNumafil($numafil)
    {
        $this->numafil = $numafil;

        return $this;
    }
    
    /**
     * Get numafil
     *
     * @return string 
     */
    public function getNumafil()
    {
        return $this->numafil;
    }
    
     /**
     * Set telefono
     *
     * @param string $telefono
     * @return Usuarios
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }
    
    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }
    
     /**
     * Set curp
     *
     * @param string $curp
     * @return Usuarios
     */
    public function setCurp($curp)
    {
        $this->curp = $curp;

        return $this;
    }
    
    /**
     * Get curp
     *
     * @return string 
     */
    public function getCurp()
    {
        return $this->curp;
    }
    
    
     /**
     * Set nomcom
     *
     * @param string $nomcom
     * @return Usuarios
     */
    public function setNomcom($nomcom)
    {
        $this->nomcom = $nomcom;

        return $this;
    }
    
    /**
     * Get nomcom
     *
     * @return string 
     */
    public function getNomcom()
    {
        return $this->nomcom;
    }
    
     /**
     * Set idtipo
     *
     * @param int $idtipo
     * @return Usuarios
     */
    public function setIdtipo($idtipo)
    {
        $this->idtipo = $idtipo;

        return $this;
    }
    
    /**
     * Get idtipo
     *
     * @return int 
     */
    public function getIdtipo()
    {
        return $this->idtipo;
    }

}
