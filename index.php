<?php

function __autoload($className)
{
	include $className.".php";
}

include dirname(__file__)."/vendor/pyrazinamite/__run.php";
	
?>