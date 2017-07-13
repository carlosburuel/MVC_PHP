<?php
	require 'system/config.php';
	require CORE . '/autoload.php';
	#require 'system/core/Router.php';
	#require 'system/core/Controller.php';


	$oRouter = new Router();

	/*echo '<pre>';
	print_r($oRouter->getUri());
	echo '</pre>';*/

	$controller = $oRouter->getController();
	$metodo = $oRouter->getMethod();
	$param = $oRouter->getParam();

	/*echo "Controlador: {$controller}</br>";
	echo "Método: {$metodo}</br>";
	echo "Parámetros: {$param}</br>";*/

  require PATH_CONTROLLERS . "{$controller}/{$controller}Controller.php";

  //Completamos la clase con Controller
  $controller .= "Controller";
	$controller = new $controller();
	$controller->$metodo($param);