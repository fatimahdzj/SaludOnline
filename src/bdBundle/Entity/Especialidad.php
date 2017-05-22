<?php

namespace bdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Especialidad
 */
class Especialidad
{
    /**
     * @ORM\OneToMany(targetEntity="Medico", mappedBy="especialidad")
     */
    protected $medico;
 
    public function __construct()
    {
        $this->medico = new ArrayCollection();
    }
    
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nomesp;


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
     * Set nomesp
     *
     * @param string $nomesp
     * @return Especialidad
     */
    public function setNomesp($nomesp)
    {
        $this->nomesp = $nomesp;

        return $this;
    }

    /**
     * Get nomesp
     *
     * @return string 
     */
    public function getNomesp()
    {
        return $this->nomesp;
    }
}
