<?php
	namespace Library;
	class Page extends ApplicationComponent
	{
		protected $contentFile;
		protected $vars = array();
		
		public function addVar($var, $value)
		{
			if (!is_string($var) || is_numeric($var) || empty($var))
			{
				throw new \InvalidArgumentException('Le nom de la variable doit être une chaine de caractère non nulle');
			}
			$this->vars[$var] = $value;
		}
		
		public function getGeneratedPage()
		{
			/* var_dump( $this->contentFile );
			die( __FILE__.':'. __LINE__ ); */
			
			if (!file_exists($this->contentFile))
			{
				
				echo 'Une erreur est survenue sur la vue';
				exit();
			}
			$user = new \Library\User($this->app);
			extract($this->vars);
			ob_start();
			require $this->contentFile;
			$content = ob_get_clean();
			
			ob_start();
			if($this->app->name() == "Frontend")
			{
				switch($this->contentFile)
				{
					case  __DIR__.'/../Applications/'.$this->app->name().'/Modules/Inscriptions/Views/Preinscriptions.php':
						require __DIR__.'/../Applications/'.$this->app->name().'/Templates/layoutAdmin.php'; //Templates des modules
					break;
					case  __DIR__.'/../Applications/'.$this->app->name().'/Modules/Inscriptions/Views/TraitRefAdmin.php':
						require __DIR__.'/../Applications/'.$this->app->name().'/Templates/layoutTraitRefAdmin.php'; //Templates des modules
					break;
					
					default : require __DIR__.'/../Applications/'.$this->app->name().'/Templates/layout.php'; //Templates des modules
				}
				
			}
			else if($this->app->name() == "Backend")
			{
				switch($this->contentFile)
				{
					case  __DIR__.'/../Applications/'.$this->app->name().'/Modules/Connexions/Views/Index.php':
						require __DIR__.'/../Applications/'.$this->app->name().'/Templates/layoutConnexion.php'; //Templates des modules
					break;
					
					default: 
						require __DIR__.'/../Applications/'.$this->app->name().'/Templates/starter.html'; //Templates des modules
				}
				
			}
			
			return ob_get_clean();
		}
		
		public function setContentFile($contentFile)
		{
			if (!is_string($contentFile) || empty($contentFile))
			{
			 throw new \InvalidArgumentException('La vue spécifiée est invalide');
			}
			$this->contentFile = $contentFile;
		}
	}