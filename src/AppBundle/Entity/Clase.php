<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clase
 *
 * @ORM\Table(name="CLASE", indexes={@ORM\Index(name="refpersonaje", columns={"refpersonaje"})})
 * @ORM\Entity
 */
class Clase
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
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=30, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="shortname", type="string", length=2, nullable=true)
     */
    private $shortname;

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
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Clase
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
     * Set shortname
     *
     * @param string $shortname
     *
     * @return Clase
     */
    public function setShortname($shortname)
    {
        $this->shortname = $shortname;

        return $this;
    }

    /**
     * Get shortname
     *
     * @return string
     */
    public function getShortname()
    {
        return $this->shortname;
    }

    /**
     * Set refpersonaje
     *
     * @param \AppBundle\Entity\Personaje $refpersonaje
     *
     * @return Clase
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
}
