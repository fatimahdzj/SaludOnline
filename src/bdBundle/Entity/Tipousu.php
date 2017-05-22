<?php

namespace bdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Tipousu
 */
class Tipousu
{
   
    /**
     * @ORM\OneToMany(targetEntity="Usuario", mappedBy="tipousu")
     */
    protected $usuario;
 
    public function __construct()
    {
        $this->usuario = new ArrayCollection();
    }
    
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $tipousuario;


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
     * Set tipousuario
     *
     * @param string $tipousuario
     * @return Tipousu
     */
    public function setTipousuario($tipousuario)
    {
        $this->tipousuario = $tipousuario;

        return $this;
    }

    /**
     * Get tipousuario
     *
     * @return string 
     */
    public function getTipousuario()
    {
        return $this->tipousuario;
    }
}
