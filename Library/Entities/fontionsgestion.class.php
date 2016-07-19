<?php
	namespace Library\Entities;
	class fonctionsgestion extends \Library\Entity
	{
		private $gsmInfo="";
		private $error=0;
		private $mail_info;

		public function setgsmInfo($gsmInfo)
		{
			$this->gsmInfo=$gsmInfo;
		}

		public function getgsmInfo()
		{
			return $this->gsmInfo;
		}

		public function checkGsm($num)
		{
			if($num =='') return 'empty';
			else if(!preg_match('#^225([0-9]){8}$#',$num)) return 'incorrect';
			else 
			{	
				return 'ok';
			}
		}
		public function analyseGSM($gsm)
		{
			$res=$this->checkGsm($gsm);
			switch ($res) {
				case 'ok':
					// ne fait rien
					break;
				default:
					$this->setgsmInfo($res);
					$this->seterreurs();..
					break;
			}
			if($res != 'ok')
			{
				$this->setgsmInfo($res);
				$this->seterror();
			}
		}

		// Analyseur de mail
		public function analysemail($mail)
		{
			if($mail =='')
			{
				$this->seterror();
				$this->setmail_info("Champs obligatoire");
			} 
			else if(!preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#is',$mail))
			{
				$this->seterror();
				$this->setmail_info("Mail invalide");
			}
			
		}
		public function setmail_info($mail_info)
		{
			$this->mail_info=$mail_info;
		}
		
		public function getmail_info()
		{
			return $this->mail_info;
		}
		//ERROR
		public function seterror()
	    {
	        return $this->error++;
	    }
	     public function geterror()
	    {
	        return $this->error;
	    }


	}