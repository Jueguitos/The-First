<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pelea
 *
 * @ORM\Table(name="PELEA", indexes={@ORM\Index(name="refpersonaje", columns={"refpersonaje"}), @ORM\Index(name="refround", columns={"refround"})})
 * @ORM\Entity
 */
class Pelea
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var boolean
     *
     * @ORM\Column(name="win", type="boolean", nullable=true)
     */
    private $win;

    /**
     * @var \Personaje
     *
     * @ORM\ManyToOne(targetEntity="Personaje")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="refpersonaje", referencedColumnName="nickname")
     * })
     */
    private $refpersonaje;

    /**
     * @var \Round
     *
     * @ORM\ManyToOne(targetEntity="Round")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="refround", referencedColumnName="id")
     * })
     */
    private $refround;



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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Pelea
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set win
     *
     * @param boolean $win
     *
     * @return Pelea
     */
    public function setWin($win)
    {
        $this->win = $win;

        return $this;
    }

    /**
     * Get win
     *
     * @return boolean
     */
    public function getWin()
    {
        return $this->win;
    }

    /**
     * Set refpersonaje
     *
     * @param \AppBundle\Entity\Personaje $refpersonaje
     *
     * @return Pelea
     */
    public function setRefpersonaje(\AppBundle\Entity\Personaje $refpersonaje = null)
    {
        $this->refpersonaje = $refpersonaje;

        return $this;
    }

    /**
     * Get refpersonaje
     *
     * @return \AppBundle\Entity\Personaje
     */
    public function getRefpersonaje()
    {
        return $this->refpersonaje;
    }

    /**
     * Set refround
     *
     * @param \AppBundle\Entity\Round $refround
     *
     * @return Pelea
     */
    public function setRefround(\AppBundle\Entity\Round $refround = null)
    {
        $this->refround = $refround;

        return $this;
    }

    /**
     * Get refround
     *
     * @return \AppBundle\Entity\Round
     */
    public function getRefround()
    {
        return $this->refround;
    }
}
