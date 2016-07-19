<?php

namespace PS\MembersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * compte
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PS\MembersBundle\Entity\compteRepository")
 */
class compte
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
     * @ORM\Column(name="ref_com", type="string", length=10)
     */
    private $refCom;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=50)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=50)
     */
    private $mdp;

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
     * Set refCom
     *
     * @param string $refCom
     * @return compte
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

    /**
     * Set login
     *
     * @param string $login
     * @return compte
     */
    public function setLogin($login)
    {
        $this->login = $login;
    
        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     * @return compte
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    
        return $this;
    }

    /**
     * Get mdp
     *
     * @return string 
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set refAdmin
     *
     * @param string $refAdmin
     * @return compte
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
    }

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
