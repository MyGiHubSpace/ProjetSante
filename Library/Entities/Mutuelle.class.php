<?php
namespace Library\Entities;

class Mutuelle extends \Library\Entity
{
    
    //private $id;

    private $mlleMut;

    private $desMut;

    
    private $siegeMut;

    private $conMut;

    private $adrMut;

    private $mailMut;

   
    private $faxMut;

    
    private $refAdmin;


    private $error=0;
    
    // public function getId()
    // {
    //     return $this->id;
    // }

    
    public function setmlleMut($mlleMut)
    {
        
        if(strlen($mlleMut) >= 6 AND strlen($mlleMut) <= 10) $this->mlleMut = strtoupper($mlleMut);
        else $this->seterror();
    
        return $this;
    }

    
    public function getMlleMut()
    {
        return $this->mlleMut;
    }

    
    public function setdesMut($desMut)
    {
        $this->desMut = $desMut;
    
        return $this;
    }

    
    public function getDesMut()
    {
        return $this->desMut;
    }

    
    public function setsiegeMut($siegeMut)
    {
        $this->siegeMut = $siegeMut;
    
        return $this;
    }

    
    public function getSiegeMut()
    {
        return $this->siegeMut;
    }

    
    public function setconMut($conMut)
    {
        $this->conMut = $conMut;
    
        return $this;
    }

    
    public function getConMut()
    {
        return $this->conMut;
    }

    /**
     * Set adrMut
     *
     * @param string $adrMut
     * @return Mutuelle
     */
    public function setadrMut($adrMut)
    {
        $this->adrMut = $adrMut;
    
        return $this;
    }

    /**
     * Get adrMut
     *
     * @return string 
     */
    public function getAdrMut()
    {
        return $this->adrMut;
    }

    /**
     * Set mailMut
     *
     * @param string $mailMut
     * @return Mutuelle
     */
    public function setmailMut($mailMut)
    {
        $this->mailMut = $mailMut;
    
        return $this;
    }

    /**
     * Get mailMut
     *
     * @return string 
     */
    public function getMailMut()
    {
        return $this->mailMut;
    }

    /**
     * Set faxMut
     *
     * @param string $faxMut
     * @return Mutuelle
     */
    public function setfaxMut($faxMut)
    {
        $this->faxMut = $faxMut;
    
        return $this;
    }

    /**
     * Get faxMut
     *
     * @return string 
     */
    public function getFaxMut()
    {
        return $this->faxMut;
    }

    /**
     * Set refAdmin
     *
     * @param string $refAdmin
     * @return Mutuelle
     */
    public function setrefAdmin($refAdmin)
    {
         //Contraint
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
