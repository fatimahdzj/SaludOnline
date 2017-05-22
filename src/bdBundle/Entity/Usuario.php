<?php

namespace bdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 */
class Usuario
{
    /**
     * @ORM\ManyToOne(targetEntity="Tipousu", inversedBy="usuario")
     * @ORM\JoinColumn(name="idtipo", referencedColumnName="id")
     */
    protected $tipousu;
    
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nomusr;

    /**
     * @var string
     */
    private $pass;

    /**
     * @var string
     */
    private $nomcom;

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
    private $numtra;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $email;

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
     * Set nomusr
     *
     * @param string $nomusr
     * @return Usuario
     */
    public function setNomusr($nomusr)
    {
        $this->nomusr = $nomusr;

        return $this;
    }

    /**
     * Get nomusr
     *
     * @return string 
     */
    public function getNomusr()
    {
        return $this->nomusr;
    }

    /**
     * Set pass
     *
     * @param string $pass
     * @return Usuario
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
     * Set nomcom
     *
     * @param string $nomcom
     * @return Usuario
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
     * Set numafil
     *
     * @param string $numafil
     * @return Usuario
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
     * Set curp
     *
     * @param string $curp
     * @return Usuario
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
     * Set numtra
     *
     * @param string $numtra
     * @return Usuario
     */
    public function setNumtra($numtra)
    {
        $this->numtra = $numtra;

        return $this;
    }

    /**
     * Get numtra
     *
     * @return string 
     */
    public function getNumtra()
    {
        return $this->numtra;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Usuario
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
     * Set email
     *
     * @param string $email
     * @return Usuario
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
     * Set idtipo
     *
     * @param integer $idtipo
     * @return Usuario
     */
    public function setIdtipo($idtipo)
    {
        $this->idtipo = $idtipo;

        return $this;
    }

    /**
     * Get idtipo
     *
     * @return integer 
     */
    public function getIdtipo()
    {
        return $this->idtipo;
    }
}
