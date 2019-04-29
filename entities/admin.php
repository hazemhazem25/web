<?php
	class admin 
	{
		private $id_admin;
		private $login_admin;
		private $mdp_admin;
		private $nom_admin;
		private $pre_admin;
	}

		public function get_id()
		{
			return $this->id_admin;
		}

		public function set_id($id)
		{
			$this->id_admin = $id;
		}

		public function get_login()
		{
			return $this->login_admin;
		}

		public function set_login($log)
		{
			$this->login_admin = $log;
		}

		public function get_mdp()
		{
			return $this->mdp_admin;
		}

		public function set_mdp($mdp)
		{
			$this->mdp_admin = $mdp;
		}

		public function get_nom()
		{
			return $this->nom_admin;
		}

		public function set_nom($no)
		{
			$this->nom_admin = $no;
		}

		public function get_pre()
		{
			return $this->pre_admin;
		}

		public function set_pre($p)
		{
			$this->pre_admin = $p;
		}
	}
?>