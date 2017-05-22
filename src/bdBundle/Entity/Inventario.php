<?php

namespace bdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inventario
 */
class Inventario
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nomprod;

    /**
     * @var int
     */
    private $existensia;

    /**
     * @var float
     */
    private $costo;

    /**
     * @var float
     */
    private $valorinv;


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
     * Set nomprod
     *
     * @param string $nomprod
     * @return Inventario
     */
    public function setNomprod($nomprod)
    {
        $this->nomprod = $nomprod;

        return $this;
    }

    /**
     * Get nomprod
     *
     * @return string 
     */
    public function getNomprod()
    {
        return $this->nomprod;
    }

    /**
     * Set existensia
     *
     * @param integer $existensia
     * @return Inventario
     */
    public function setExistensia($existensia)
    {
        $this->existensia = $existensia;

        return $this;
    }

    /**
     * Get existensia
     *
     * @return integer 
     */
    public function getExistensia()
    {
        return $this->existensia;
    }

    /**
     * Set costo
     *
     * @param float $costo
     * @return Inventario
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;

        return $this;
    }

    /**
     * Get costo
     *
     * @return float 
     */
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * Set valorinv
     *
     * @param float $valorinv
     * @return Inventario
     */
    public function setValorinv($valorinv)
    {
        $this->valorinv = $valorinv;

        return $this;
    }

    /**
     * Get valorinv
     *
     * @return float 
     */
    public function getValorinv()
    {
        return $this->valorinv;
    }
}
