<?php namespace config;
	
	class database
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
		
		public  function getConnection()
		{
			$connection = $this->setConnection();
			$host = $connection['host'];
			$databse = $connection['databse'];
			$username = $connection['username'];
			$password = $connection['password'];

			$mysqlConnect = mysql_connect($host , $username , $password);
			$mysqlDatabase = mysql_select_db($databse);
		
			if(!$mysqlConnect || !$mysqlDatabase)
			{
				echo 'Error Database : Cek your Configuration Database in config/database.php';
			}

		}
		
		
	}