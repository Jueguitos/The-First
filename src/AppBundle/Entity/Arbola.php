<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Arbola
 *
 * @ORM\Table(name="ARBOLA", indexes={@ORM\Index(name="refclase", columns={"refclase"}), @ORM\Index(name="refhabilidades", columns={"refhabilidades"})})
 * @ORM\Entity
 */
class Arbola
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tipo", type="boolean", nullable=true)
     */
    private $tipo;

    /**
     * @var \Clase
     *
     * @ORM\ManyToOne(targetEntity="Clase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="refclase", referencedColumnName="nombre")
     * })
     */
    private $refclase;

    /**
     * @var \Habilidades
     *
     * @ORM\ManyToOne(targetEntity="Habilidades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="refhabilidades", referencedColumnName="nombre")
     * })
     */
    private $refhabilidades;



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
     * Set tipo
     *
     * @param boolean $tipo
     *
     * @return Arbola
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
     * Set refclase
     *
     * @param \AppBundle\Entity\Clase $refclase
     *
     * @return Arbola
     */
    public function setRefclase(\AppBundle\Entity\Clase $refclase = null)
    {
        $this->refclase = $refclase;

        return $this;
    }

    /**
     * Get refclase
     *
     * @return \AppBundle\Entity\Clase
     */
    public function getRefclase()
    {
        return $this->refclase;
    }

    /**
     * Set refhabilidades
     *
     * @param \AppBundle\Entity\Habilidades $refhabilidades
     *
     * @return Arbola
     */
    public function setRefhabilidades(\AppBundle\Entity\Habilidades $refhabilidades = null)
    {
        $this->refhabilidades = $refhabilidades;

        return $this;
    }

    /**
     * Get refhabilidades
     *
     * @return \AppBundle\Entity\Habilidades
     */
    public function getRefhabilidades()
    {
        return $this->refhabilidades;
    }
}
