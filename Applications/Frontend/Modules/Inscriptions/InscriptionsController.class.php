<?php
	namespace Applications\Frontend\Modules\Inscriptions;
	use \Library\Entities\admin;
	use \Library\Entities\fonctionsgestion;
	class InscriptionsController extends \Library\BackController
	{
		//
		public function executePreinscriptions( \Library\HTTPRequest $request)
		{
			$this->page->addVar('title', 'Inscriptions admins');
			$this->page->addVar('resultat', $this->app->user()->getAttribute('resultat'));
			if(isset($_SESSION['resultat'])) unset($_SESSION['resultat']);
		}

		public function executeTraitRefAdmin( \Library\HTTPRequest $request)
		{
			
			
			if($request->postExists('send'))
			{
				$prefixe=$request->postExists('prefixe') ?$request->postData('prefixe'): "";
				if (!in_array($prefixe, array("AS","OF","CS","PA","SP","MU","AG"))) {
					$this->app->httpResponse()->redirect('Preinscriptions');
				}
				
				// Instance Admin
				$admin=new \Library\Entities\admin();
				$admin->setrefadmin($request->postData('ref'));
				
				if ($admin->geterror() > 0) { // Erreur detecter
					$this->page->addVar('SendingInfo',"formatError"); // Creation de variable info pour la vue
				}
				else
				{
					// Module d'insertion
					$nombreAdmin=$this->managers->getManagerOf('Admins')->getCountAdmin($prefixe); // Recupere le nombre total des admins dans la BDD
					if ($nombreAdmin != null) {
						$adminRefGenere=$admin->getrefComplet($nombreAdmin['nbr']); // Recupere la reference complete

						if($adminRefGenere == "")// Error
						{
							$this->page->addVar('SendingInfo',"InternalError"); // Message d'erreur
						}
						else
						{
							$admin->setrefadminOk($adminRefGenere); //Valide  la bonne ref
							//$this->page->addVar('SendingInfo',$admin->getrefadminOk());
							//On peut maintenant enregistrer dans la bdd
							
							if($this->managers->getManagerOf('Admins')->save_admin_ref($admin) == true)
							{
								$this->page->addVar('SendingInfo',"SendOk");
								$this->page->addVar('adminRefGenere',$adminRefGenere);
								$this->page->addVar('prefixe',$request->postData('prefixe'));
								
							}
							else {$this->page->addVar('SendingInfo',"SendError");}
						}
					}
					
				}
			}
		}
		public function executeTraitPreinscrip( \Library\HTTPRequest $request)
		{
			$this->page->addVar('title', 'Validation Pre-nscriptions admins');

			if($request->postExists('valider')){

				$prefixe=$request->postExists('prefixe') ?$request->postData('prefixe'): "";
				if ($prefixe != "") {
					switch ($prefixe) {
						case 'AS':
							//$admin=new \Library\Entities\admin();.
							break;
						
						case 'MU':
							$mutuelle = new \Library\Entities\Mutuelle(
																array(
																	'mlleMut' =>$request->postData('mats'),
																	'desMut' =>$request->postData('desi'),
																	'siegeMut' =>$request->postData('siege'),
																	'conMut' =>$request->postData('con'),
																	'adrMut' =>$request->postData('adr'),
																	'mailMut' =>$request->postData('email'),
																	'faxMut' =>$request->postData('fax'),
																	'refAdmin' =>$request->postData('ref')
																	)
																);

							$fonctiongestion= new \Library\Entities\fonctionsgestion();
							$fonctiongestion->analyseGSM($mutuelle->getConMut());// analyse le Contact

							$fonctiongestion->analysemail($mutuelle->getMailMut()); // Analyse le mail
							if($fonctiongestion->geterrors() > 0)
							{
								$this->page->addVar('errorconMut',$mutuelle->getgsmInfo());
								$this->page->addVar('errormailMut',$mutuelle->getmail_info());
							}
							if ($mutuelle->geterror()) {
								$this->page->addVar('errormlleMut',$mutuelle->getMlleMut());
							}
							// Modele d'enregistrement 
							
							$this->page->addVar('title',$mutuelle->getMlleMut());
							echo $mutuelle->getMlleMut();
							//$this->app->httpResponse()->redirect('Preinscriptions');

							if($this->managers->getManagerOf('Admins')->save_entity_Mut($mutuelle) == true)
							{
								
								$this->app->user()->setAttribute('resultat','Mutuelle enregistrée avec succes');
								$this->app->httpResponse()->redirect('Preinscriptions');
							}
						break;

						case 'SP':
						# code...
						break;

						case 'CS':
						# code...
						break;
						case 'OF':
						# code...
						break;
						case 'AG':
						# code...
						break;
						case 'PA':
						# code...
						break;
						default:
							
							break;
					}
					
				}

			}
		}


	}