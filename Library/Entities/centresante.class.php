<?php

namespace PS\MembersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * centresante
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PS\MembersBundle\Entity\centresanteRepository")
 */
class centresante extends \Library\Entity
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
     * @ORM\Column(name="Mlle_cs", type="string", length=10)
     */
    private $mlleCs;

    /**
     * @var string
     *
     * @ORM\Column(name="des_cs", type="string", length=255)
     */
    private $desCs;

    /**
     * @var string
     *
     * @ORM\Column(name="con_off", type="string", length=50)
     */
    private $conOff;

    /**
     * @var string
     *
     * @ORM\Column(name="adr_off", type="string", length=50)
     */
    private $adrOff;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_cs", type="string", length=100)
     */
    private $mailCs;

    /**
     * @var string
     *
     * @ORM\Column(name="fax_cs", type="string", length=20)
     */
    private $faxCs;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_admin", type="string", length=10)
     */
    private $refAdmin;
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
     * Set mlleCs
     *
     * @param string $mlleCs
     * @return centresante
     */
    public function setMlleCs($mlleCs)
    {
        $this->mlleCs = $mlleCs;
    
        return $this;
    }

    /**
     * Get mlleCs
     *
     * @return string 
     */
    public function getMlleCs()
    {
        return $this->mlleCs;
    }

    /**
     * Set desCs
     *
     * @param string $desCs
     * @return centresante
     */
    public function setDesCs($desCs)
    {
        $this->desCs = $desCs;
    
        return $this;
    }

    /**
     * Get desCs
     *
     * @return string 
     */
    public function getDesCs()
    {
        return $this->desCs;
    }

    /**
     * Set conOff
     *
     * @param string $conOff
     * @return centresante
     */
    public function setConOff($conOff)
    {
        $this->conOff = $conOff;
    
        return $this;
    }

    /**
     * Get conOff
     *
     * @return string 
     */
    public function getConOff()
    {
        return $this->conOff;
    }

    /**
     * Set adrOff
     *
     * @param string $adrOff
     * @return centresante
     */
    public function setAdrOff($adrOff)
    {
        $this->adrOff = $adrOff;
    
        return $this;
    }

    /**
     * Get adrOff
     *
     * @return string 
     */
    public function getAdrOff()
    {
        return $this->adrOff;
    }

    /**
     * Set mailCs
     *
     * @param string $mailCs
     * @return centresante
     */
    public function setMailCs($mailCs)
    {
        $this->mailCs = $mailCs;
    
        return $this;
    }

    /**
     * Get mailCs
     *
     * @return string 
     */
    public function getMailCs()
    {
        return $this->mailCs;
    }

    /**
     * Set faxCs
     *
     * @param string $faxCs
     * @return centresante
     */
    public function setFaxCs($faxCs)
    {
        $this->faxCs = $faxCs;
    
        return $this;
    }

    /**
     * Get faxCs
     *
     * @return string 
     */
    public function getFaxCs()
    {
        return $this->faxCs;
    }

    /**
     * Set refAdmin
     *
     * @param string $refAdmin
     * @return centresante
     */
    public function setRefAdmin($refAdmin)
    {
        $this->refAdmin = $refAdmin;
    
        return $this;
    }

    /**
     * Get refAdmin
     *
     * @return string 
     */
    public function getRefAdmin()
    {
        if (strlen(trim($refAdmin)) == 4) {
           $this->refAdmin = strtoupper($refAdmin);
        }
        else
        {
            $this->seterror();
        }
        
    
        return $this;
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
