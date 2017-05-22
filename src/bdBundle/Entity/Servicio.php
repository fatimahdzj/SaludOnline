<?php

namespace bdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicio
 */
class Servicio
{
    /**
     * @ORM\OneToMany(targetEntity="Medico", mappedBy="servicio")
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
    private $nomserv;


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
     * Set nomserv
     *
     * @param string $nomserv
     * @return Servicio
     */
    public function setNomserv($nomserv)
    {
        $this->nomserv = $nomserv;

        return $this;
    }

    /**
     * Get nomserv
     *
     * @return string 
     */
    public function getNomserv()
    {
        return $this->nomserv;
    }
}
