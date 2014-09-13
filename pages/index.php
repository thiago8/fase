<?php
try{
	\model\usuario\Controlador::redirectLogin();

	header('Location: '.BASE_URL.'/home/');die();
}catch(Exception $e){
	throw new \lib\log\LogException($e->getMessage());
}