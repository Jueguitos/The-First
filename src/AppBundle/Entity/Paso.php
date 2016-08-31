<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paso
 *
 * @ORM\Table(name="PASO")
 * @ORM\Entity
 */
class Paso
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
     * @ORM\Column(name="mova", type="string", length=30, nullable=true)
     */
    private $mova;

    /**
     * @var string
     *
     * @ORM\Column(name="movd", type="string", length=30, nullable=true)
     */
    private $movd;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="vidatq", type="integer", nullable=true)
     */
    private $vidatq;

    /**
     * @var integer
     *
     * @ORM\Column(name="viddef", type="integer", nullable=true)
     */
    private $viddef;

    /**
     * @var string
     *
     * @ORM\Column(name="inic", type="string", length=30, nullable=true)
     */
    private $inic;



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
     * Set mova
     *
     * @param string $mova
     *
     * @return Paso
     */
    public function setMova($mova)
    {
        $this->mova = $mova;

        return $this;
    }

    /**
     * Get mova
     *
     * @return string
     */
    public function getMova()
    {
        return $this->mova;
    }

    /**
     * Set movd
     *
     * @param string $movd
     *
     * @return Paso
     */
    public function setMovd($movd)
    {
        $this->movd = $movd;

        return $this;
    }

    /**
     * Get movd
     *
     * @return string
     */
    public function getMovd()
    {
        return $this->movd;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return Paso
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
     * Set vidatq
     *
     * @param integer $vidatq
     *
     * @return Paso
     */
    public function setVidatq($vidatq)
    {
        $this->vidatq = $vidatq;

        return $this;
    }

    /**
     * Get vidatq
     *
     * @return integer
     */
    public function getVidatq()
    {
        return $this->vidatq;
    }

    /**
     * Set viddef
     *
     * @param integer $viddef
     *
     * @return Paso
     */
    public function setViddef($viddef)
    {
        $this->viddef = $viddef;

        return $this;
    }

    /**
     * Get viddef
     *
     * @return integer
     */
    public function getViddef()
    {
        return $this->viddef;
    }

    /**
     * Set inic
     *
     * @param string $inic
     *
     * @return Paso
     */
    public function setInic($inic)
    {
        $this->inic = $inic;

        return $this;
    }

    /**
     * Get inic
     *
     * @return string
     */
    public function getInic()
    {
        return $this->inic;
    }
}
