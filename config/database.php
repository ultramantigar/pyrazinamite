<?php
	namespace pyrazinamite\config;
	
	class Database
	{
		public static function setConnection()
		{
			$configuration = [
				'host' => 'localhost',
				'databse' => 'pyrazinamite',
				'username' => 'root',
				'password' => ''
			];
			
			return $configuration;
		}
		
		public static function getConfiguration()
		{
			return $this->setConnection()['host'];
		}
		
		
	}