<?php
	// run Connection DB;
		$db = new config\database();
		$db->getConnection();
	//

	// run configuration main application

		$app = new config\main();
		$app->run_application();

	//

?>