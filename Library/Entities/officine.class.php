<?php

namespace PS\MembersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * officine
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PS\MembersBundle\Entity\officineRepository")
 */
class officine extends \Library\Entity
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
     * @ORM\Column(name="Mlle_off", type="string", length=10)
     */
    private $mlleOff;

    /**
     * @var string
     *
     * @ORM\Column(name="des_off", type="string", length=255)
     */
    private $desOff;

    /**
     * @var string
     *
     * @ORM\Column(name="siege_off", type="string", length=50)
     */
    private $siegeOff;

    /**
     * @var string
     *
     * @ORM\Column(name="con_off", type="string", length=20)
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
     * @ORM\Column(name="mail_off", type="string", length=100)
     */
    private $mailOff;

    /**
     * @var string
     *
     * @ORM\Column(name="fax_off", type="string", length=20)
     */
    private $faxOff;

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
     * Set mlleOff
     *
     * @param string $mlleOff
     * @return officine
     */
    public function setMlleOff($mlleOff)
    {
        $this->mlleOff = $mlleOff;
    
        return $this;
    }

    /**
     * Get mlleOff
     *
     * @return string 
     */
    public function getMlleOff()
    {
        return $this->mlleOff;
    }

    /**
     * Set desOff
     *
     * @param string $desOff
     * @return officine
     */
    public function setDesOff($desOff)
    {
        $this->desOff = $desOff;
    
        return $this;
    }

    /**
     * Get desOff
     *
     * @return string 
     */
    public function getDesOff()
    {
        return $this->desOff;
    }

    /**
     * Set siegeOff
     *
     * @param string $siegeOff
     * @return officine
     */
    public function setSiegeOff($siegeOff)
    {
        $this->siegeOff = $siegeOff;
    
        return $this;
    }

    /**
     * Get siegeOff
     *
     * @return string 
     */
    public function getSiegeOff()
    {
        return $this->siegeOff;
    }

    /**
     * Set conOff
     *
     * @param string $conOff
     * @return officine
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
     * @return officine
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
     * Set mailOff
     *
     * @param string $mailOff
     * @return officine
     */
    public function setMailOff($mailOff)
    {
        $this->mailOff = $mailOff;
    
        return $this;
    }

    /**
     * Get mailOff
     *
     * @return string 
     */
    public function getMailOff()
    {
        return $this->mailOff;
    }

    /**
     * Set faxOff
     *
     * @param string $faxOff
     * @return officine
     */
    public function setFaxOff($faxOff)
    {
        $this->faxOff = $faxOff;
    
        return $this;
    }

    /**
     * Get faxOff
     *
     * @return string 
     */
    public function getFaxOff()
    {
        return $this->faxOff;
    }

    /**
     * Set refAdmin
     *
     * @param string $refAdmin
     * @return officine
     */
    public function setRefAdmin($refAdmin)
    {
       if (strlen(trim($refAdmin)) == 4) {
           $this->refAdmin = strtoupper($refAdmin);
        }
        else
        {
            $this->seterror();
        }
        
    
        return $this;

    /**
     * Get refAdmin
     *
     * @return string 
     */
    public function getRefAdmin()
    {
        return $this->refAdmin;
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
