<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cola
 *
 * @ORM\Table(name="COLA", indexes={@ORM\Index(name="refpersonaje", columns={"refpersonaje"}), @ORM\Index(name="refhabilidades", columns={"refhabilidades"})})
 * @ORM\Entity
 */
class Cola
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=30, nullable=true)
     */
    private $nombre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="defatq", type="boolean", nullable=true)
     */
    private $defatq;

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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Cola
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
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
     * Set defatq
     *
     * @param boolean $defatq
     *
     * @return Cola
     */
    public function setDefatq($defatq)
    {
        $this->defatq = $defatq;

        return $this;
    }

    /**
     * Get defatq
     *
     * @return boolean
     */
    public function getDefatq()
    {
        return $this->defatq;
    }

    /**
     * Set refpersonaje
     *
     * @param \AppBundle\Entity\Personaje $refpersonaje
     *
     * @return Cola
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
     * Set refhabilidades
     *
     * @param \AppBundle\Entity\Habilidades $refhabilidades
     *
     * @return Cola
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
