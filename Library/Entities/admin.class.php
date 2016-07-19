<?php

namespace Library\Entities;

class admin extends \Library\Entity
{
    
    //private $id;

    private $refadmin;
    private $refadminOk=""; // contient la bonne reference pour la bdd
    private $login;

    private $mdp;
    private $error=0;
    private $nbreAdmin=0;
    
    // public function getId()
    // {
    //     return $this->id;
    // }

    
    public function setrefadmin($refadmin)
    {
        //Contrait 1

        if (strlen(trim($refadmin)) == 4) {
           $this->refadmin = strtoupper($refadmin);
        }
        else
        {
            $this->seterror();
        }
    
        return $this;
    }

    
    public function getRefAdmin()
    {
       
        return $this->refadmin;
    }

    
    public function setlogin($login)
    {
        $length=strlen(trim($login));
        if( $length<= 5 AND $length >= 20 ) $this->login = $login; else $this->geterror();
    
        return $this;
    }

    
    public function getLogin()
    {
        return $this->login;
    }

    
    public function setmdp($mdp)
    {
        $length=strlen(trim($mdp));
        if( $length<= 5 AND $length >= 20 ) $this->mdp = $mdp; else $this->geterror();
    
        return $this;
    }

    
    public function getMdp()
    {
        return $this->mdp;
    }

    public function seterror()
    {
        return $this->error++;
    }
     public function geterror()
    {
        return $this->error;
    }

    protected function setnbreAdmin($nbreAdmin)
    {
        $nbreAdmin=intval($nbreAdmin);
        if(is_numeric($nbreAdmin)){
            $this->nbreAdmin=$nbreAdmin;
        } 
        else{ $this->seterror();}
    }

    protected function getnbreAdmin()
    {
        return $this->nbreAdmin;
    }
    // Incrementaire
    protected function RecupNouvelNbreAdmin($nbre)
    {
        self::setnbreAdmin($nbre); // verifie le format du nombre
        if($this->geterror() > 0) 
        {
            $this->setrefadminOk(''); // il ya erreur
        }
        else
        {
          $compteur= self::getnbreAdmin()+1; // Valeur incrementer à 1
          // Complete les 0gt à gauches
          $this->setrefadminOk(str_pad($compteur, 3,"0",STR_PAD_LEFT));
        }
    }

    public function getrefComplet($nombre)
    {
        self::RecupNouvelNbreAdmin($nombre);
         if($this->getrefadminOk() == '') 
        {
            return '';
        }
         else
         {
            $partieDroite=$this->getrefadminOk();

             return $this->getRefAdmin().$partieDroite;
         }
         
    }

    public function setrefadminOk($refadminOk)
    {
        $this->refadminOk=$refadminOk;
        return $this;  
    }

    public function getrefadminOk()
    {
       
        return $this->refadminOk;  
    }

}
