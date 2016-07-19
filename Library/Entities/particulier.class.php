<?php

namespace PS\MembersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * particulier
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PS\MembersBundle\Entity\particulierRepository")
 */
class particulier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Mlle_part", type="string", length=10)
     */
    private $mllePart;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=20)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=100)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=100)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_com", type="string", length=10)
     */
    private $refCom;
    private $error=0;

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
     * Set mllePart
     *
     * @param string $mllePart
     * @return particulier
     */
    public function setMllePart($mllePart)
    {
        $this->mllePart = $mllePart;
    
        return $this;
    }

    /**
     * Get mllePart
     *
     * @return string 
     */
    public function getMllePart()
    {
        return $this->mllePart;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return particulier
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return particulier
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set contact
     *
     * @param string $contact
     * @return particulier
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    
        return $this;
    }

    /**
     * Get contact
     *
     * @return string 
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return particulier
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return particulier
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    
        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set refCom
     *
     * @param string $refCom
     * @return particulier
     */
    public function setRefCom($refCom)
    {
        $this->refCom = $refCom;
    
        return $this;
    }

    /**
     * Get refCom
     *
     * @return string 
     */
    public function getRefCom()
    {
        return $this->refCom;
    }

    public function seterror()
    {
        return $this->error++;
    }
     public function geterror()
    {
        return $this->error;
    }
}
