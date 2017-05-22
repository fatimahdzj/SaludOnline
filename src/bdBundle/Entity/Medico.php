<?php

namespace bdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medico
 */
class Medico
{
    /**
     * @ORM\ManyToOne(targetEntity="Especialidad", inversedBy="medico")
     * @ORM\JoinColumn(name="idesp", referencedColumnName="id")
     */
    protected $especialidad;
    
    /**
     * @ORM\ManyToOne(targetEntity="Servicio", inversedBy="medico")
     * @ORM\JoinColumn(name="idserv", referencedColumnName="id")
     */
    protected $servicio;
    
    
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nommed;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var int
     */
    private $consultorio;

    /**
     * @var int
     */
    private $idesp;

    /**
     * @var int
     */
    private $idserv;


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
     * Set nommed
     *
     * @param string $nommed
     * @return Medico
     */
    public function setNommed($nommed)
    {
        $this->nommed = $nommed;

        return $this;
    }

    /**
     * Get nommed
     *
     * @return string 
     */
    public function getNommed()
    {
        return $this->nommed;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Medico
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
     * Set consultorio
     *
     * @param integer $consultorio
     * @return Medico
     */
    public function setConsultorio($consultorio)
    {
        $this->consultorio = $consultorio;

        return $this;
    }

    /**
     * Get consultorio
     *
     * @return integer 
     */
    public function getConsultorio()
    {
        return $this->consultorio;
    }

    /**
     * Set idesp
     *
     * @param integer $idesp
     * @return Medico
     */
    public function setIdesp($idesp)
    {
        $this->idesp = $idesp;

        return $this;
    }

    /**
     * Get idesp
     *
     * @return integer 
     */
    public function getIdesp()
    {
        return $this->idesp;
    }

    /**
     * Set idserv
     *
     * @param integer $idserv
     * @return Medico
     */
    public function setIdserv($idserv)
    {
        $this->idserv = $idserv;

        return $this;
    }

    /**
     * Get idserv
     *
     * @return integer 
     */
    public function getIdserv()
    {
        return $this->idserv;
    }
}
