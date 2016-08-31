<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Habilidades
 *
 * @ORM\Table(name="HABILIDADES")
 * @ORM\Entity
 */
class Habilidades
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nombre = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="tipo", type="boolean", nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=30, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="formula", type="string", length=30, nullable=true)
     */
    private $formula;

    /**
     * @var integer
     *
     * @ORM\Column(name="nmov", type="integer", nullable=true)
     */
    private $nmov;



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
     * Set tipo
     *
     * @param boolean $tipo
     *
     * @return Habilidades
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return boolean
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Habilidades
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set formula
     *
     * @param string $formula
     *
     * @return Habilidades
     */
    public function setFormula($formula)
    {
        $this->formula = $formula;

        return $this;
    }

    /**
     * Get formula
     *
     * @return string
     */
    public function getFormula()
    {
        return $this->formula;
    }

    /**
     * Set nmov
     *
     * @param integer $nmov
     *
     * @return Habilidades
     */
    public function setNmov($nmov)
    {
        $this->nmov = $nmov;

        return $this;
    }

    /**
     * Get nmov
     *
     * @return integer
     */
    public function getNmov()
    {
        return $this->nmov;
    }
}
