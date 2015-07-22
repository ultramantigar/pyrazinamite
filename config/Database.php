<?php
	namespace pyrazinamite\config;
	
	class Database
	{
		public static function setConnection()
		{
			$configuration = [
				'host' => 'kimpoyebeb',
				'databse' => '',
				'username' => '',
				'password' => ''
			];
			
			return $configuration;
		}
		
		public static function getConfiguration()
		{
			//return $this->setConnection()['host'];
			return 'waw';
		}
		
		
	}