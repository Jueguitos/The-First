<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="USUARIO", indexes={@ORM\Index(name="refpersonaje", columns={"refpersonaje"})})
 * @ORM\Entity
 */
class Usuario
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
     * @ORM\Column(name="pass", type="string", length=30, nullable=true)
     */
    private $pass;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=30, nullable=true)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="online", type="boolean", nullable=true)
     */
    private $online;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pass
     *
     * @param string $pass
     *
     * @return Usuario
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get pass
     *
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set online
     *
     * @param boolean $online
     *
     * @return Usuario
     */
    public function setOnline($online)
    {
        $this->online = $online;

        return $this;
    }

    /**
     * Get online
     *
     * @return boolean
     */
    public function getOnline()
    {
        return $this->online;
    }

    /**
     * Set refpersonaje
     *
     * @param \AppBundle\Entity\Personaje $refpersonaje
     *
     * @return Usuario
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
