<?php namespace config;
	
	class database
	{
		public  function setConnection()
		{
			$configuration = [
				'host' => 'localhost',
				'database' => 'pyrazinamite',
				'username' => 'root',
				'password' => ''
			];
			
			return $configuration;
		}
		
		public  function getConnection()
		{
	
			$connection = $this->setConnection();

			$host = $connection['host'];
			$database = $connection['database'];
			$username = $connection['username'];
			$password = $connection['password'];

			$mysqlConnect = mysql_connect($host , $username , $password);
			$mysqlDatabase = mysql_select_db($database);

			if(!$mysqlConnect || !$mysqlDatabase)
			{
				echo 'error database configuration , connection or database name incorrect cek your configuration in config/database.php';
			}
		}
		
		
	}