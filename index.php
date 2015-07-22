<?php

function __autoload($className) {
    $filename = $className . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}

include dirname(__file__)."/vendor/pyrazinamite/__run.php";

	
?>