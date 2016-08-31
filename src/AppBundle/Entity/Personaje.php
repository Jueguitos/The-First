<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personaje
 *
 * @ORM\Table(name="PERSONAJE")
 * @ORM\Entity
 */
class Personaje
{
    /**
     * @var string
     *
     * @ORM\Column(name="nickname", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nickname = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="experiencia", type="integer", nullable=true)
     */
    private $experiencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="nivel", type="integer", nullable=true)
     */
    private $nivel;

    /**
     * @var integer
     *
     * @ORM\Column(name="movmax", type="integer", nullable=true)
     */
    private $movmax;

    /**
     * @var integer
     *
     * @ORM\Column(name="vida", type="integer", nullable=true)
     */
    private $vida;



    /**
     * Get nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set experiencia
     *
     * @param integer $experiencia
     *
     * @return Personaje
     */
    public function setExperiencia($experiencia)
    {
        $this->experiencia = $experiencia;

        return $this;
    }

    /**
     * Get experiencia
     *
     * @return integer
     */
    public function getExperiencia()
    {
        return $this->experiencia;
    }

    /**
     * Set nivel
     *
     * @param integer $nivel
     *
     * @return Personaje
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return integer
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set movmax
     *
     * @param integer $movmax
     *
     * @return Personaje
     */
    public function setMovmax($movmax)
    {
        $this->movmax = $movmax;

        return $this;
    }

    /**
     * Get movmax
     *
     * @return integer
     */
    public function getMovmax()
    {
        return $this->movmax;
    }

    /**
     * Set vida
     *
     * @param integer $vida
     *
     * @return Personaje
     */
    public function setVida($vida)
    {
        $this->vida = $vida;

        return $this;
    }

    /**
     * Get vida
     *
     * @return integer
     */
    public function getVida()
    {
        return $this->vida;
    }
}
