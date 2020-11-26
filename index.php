<?php
include_once("controller/Controller.php");

$controller = new Controller();

switch ($_SERVER['REQUEST_URI']) {
	case '/RabIt/ads':
		$controller->ads();
		break;
	case '/RabIt/users':
		$controller->users();
		break;
	case '/RabIt/':
		$controller->main();
		break;
	default:
		header('Location: /RabIt');
		exit;
}
