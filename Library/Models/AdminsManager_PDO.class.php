<?php
	namespace Library\Models;
	use \Library\Entities\admin;
	use \Library\Entities\Mutuelle;
	class AdminsManager_PDO extends AdminsManager
	{
		public function getCountAdmin($prefixe)
		{
			$requete = $this->dao->prepare('SELECT COUNT(*) as nbr FROM admin WHERE ref_admin LIKE :prefixe'); 
			$requete->bindValue(':prefixe',$prefixe.'%', \PDO::PARAM_STR);
			return $requete->execute()?$data=$requete->fetch() : null;
		}
		protected function saveAdmin(admin $admin)
		{
			
			 // Nouvel enregistrement
				$q = $this->dao->prepare('SELECT COUNT(*) as nbr FROM admin WHERE ref_admin =:ref_admin');
				$q->bindValue(':ref_admin',$admin->getrefadminOk(), \PDO::PARAM_STR);
				$data=$q->execute()? $q->fetch() : null;
				if($data != null)
				{
					if ($data['nbr'] == 0) {
						$q = $this->dao->prepare('INSERT INTO  admin(id,ref_admin,login,mdp) VALUES("NULL",:ref_admin,:login,:mdp)');
						$q->bindValue(':ref_admin',$admin->getrefadminOk(), \PDO::PARAM_STR);
						$q->bindValue(':login', "", \PDO::PARAM_STR);
						$q->bindValue(':mdp', "", \PDO::PARAM_STR);
						return $q->execute()? true : false;
					}
					else return false;
				}
				
		}

		protected function saveEntityMut(Mutuelle $mutuelle)
		{
			$requete = $this->dao->prepare('SELECT COUNT(*) as nbr FROM mutuelle WHERE mail_mut=:mail_mut'); 
			$requete->bindValue(':mail_mut',$mutuelle->getMailMut(), \PDO::PARAM_STR);
			$data=$requete->execute()?$requete->fetch() : null;
			if ($data != null) {
				if ($data['nbr']==0) { // Le mail n existe pas donc valide
					$q = $this->dao->prepare('INSERT INTO  mutuelle(id,mlle_mut,des_mut,siege_mut,con_mut,adr_mut,mail_mut,fax_mut,ref_admin) VALUES("NULL",:mlle_mut,:des_mut,:siege_mut,:con_mut,:adr_mut,:mail_mut,:fax_mut,:ref_admin)');

						$q->bindValue(':mlle_mut',$mutuelle->getMlleMut(), \PDO::PARAM_STR);
						$q->bindValue(':des_mut',$mutuelle->getDesMut(), \PDO::PARAM_STR);
						$q->bindValue(':siege_mut',$mutuelle->getSiegeMut(), \PDO::PARAM_STR);
						$q->bindValue(':con_mut',$mutuelle->getConMut(), \PDO::PARAM_STR);
						$q->bindValue(':adr_mut',$mutuelle->getAdrMut(), \PDO::PARAM_STR);
						$q->bindValue(':mail_mut',$$mutuelle->getMailMut(), \PDO::PARAM_STR);
						$q->bindValue(':fax_mut',$mutuelle->getFaxMut(), \PDO::PARAM_STR);
						$q->bindValue(':ref_admin',$mutuelle->getRefAdmin(), \PDO::PARAM_STR);
						return $q->execute()? true : false;
				}
				else return false;
			}
		}
	}