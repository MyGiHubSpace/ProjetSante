<?php
	namespace Library\Models;
	use \Library\Entities\admin;
	use \Library\Entities\Mutuelle;
	abstract class AdminsManager extends \Library\Managers
	{
		abstract protected function saveAdmin(admin $admin);
		abstract public function getCountAdmin($prefixe);// Retourn le nombre admin
		abstract protected function saveEntityMut(Mutuelle $mutuelle); // sauveagerde la nouvelle entité

		public function save_admin_ref(admin $admin)
		{
			return $this->saveAdmin($admin);
		}

		public function save_entity_Mut(Mutuelle $mutuelle)
		{
			return $this->saveEntityMut($mutuelle);
		}
	}