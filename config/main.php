<?php namespace config;

class main
{
	public function application()
	{
		$configuration = [

			'security.salt' => 'perwasean',

		];

		return $configuration;

	}


	public function run_application()
	{
		$app = $this->application();

		if(empty($app['security.salt']))
		{
			echo 'Error Configuration : Security.salt not define , cek in config/main.php';
		}else{
			return $this->application();
		}
	}
}

?>