<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Round
 *
 * @ORM\Table(name="ROUND", indexes={@ORM\Index(name="refpaso", columns={"refpaso"})})
 * @ORM\Entity
 */
class Round
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
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="velatq", type="integer", nullable=true)
     */
    private $velatq;

    /**
     * @var integer
     *
     * @ORM\Column(name="veldef", type="integer", nullable=true)
     */
    private $veldef;

    /**
     * @var \Paso
     *
     * @ORM\ManyToOne(targetEntity="Paso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="refpaso", referencedColumnName="id")
     * })
     */
    private $refpaso;



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
     * Set numero
     *
     * @param integer $numero
     *
     * @return Round
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set velatq
     *
     * @param integer $velatq
     *
     * @return Round
     */
    public function setVelatq($velatq)
    {
        $this->velatq = $velatq;

        return $this;
    }

    /**
     * Get velatq
     *
     * @return integer
     */
    public function getVelatq()
    {
        return $this->velatq;
    }

    /**
     * Set veldef
     *
     * @param integer $veldef
     *
     * @return Round
     */
    public function setVeldef($veldef)
    {
        $this->veldef = $veldef;

        return $this;
    }

    /**
     * Get veldef
     *
     * @return integer
     */
    public function getVeldef()
    {
        return $this->veldef;
    }

    /**
     * Set refpaso
     *
     * @param \AppBundle\Entity\Paso $refpaso
     *
     * @return Round
     */
    public function setRefpaso(\AppBundle\Entity\Paso $refpaso = null)
    {
        $this->refpaso = $refpaso;

        return $this;
    }

    /**
     * Get refpaso
     *
     * @return \AppBundle\Entity\Paso
     */
    public function getRefpaso()
    {
        return $this->refpaso;
    }
}
