<?php
	
	class user{
		public $name;
		public $login;
		public $password;
		public $number_phone;
		public $email;
		
		/** 
	    construtor
	    **/
		function __construct($name, $login, $password, $number_phone, $email){
			$this->name = $name;
			$this->login = $login;
			$this->password = $password;
			$this->number_phone = $number_phone;
			$this->email = $email;
		}
		public function pergarValores()
		{
			$colunas = "name, login, password, number_phone, email";

			return $colunas;
		}
	}
?>