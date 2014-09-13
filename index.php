<?php
error_reporting(E_STRICT);
error_reporting(E_ALL);
ini_set("display_errors", 1);

date_default_timezone_set('America/Recife');
setlocale(LC_ALL , "pt_BR"); 

header('Content-Type: text/html; charset=utf-8');
header('Access-Control-Allow-Origin: *');

session_start();

define('DS', DIRECTORY_SEPARATOR);
define('BASE_URL', "http://socialmediaview.esy.es");
//define('BASE_URL', "http://192.168.1.6/sociais");

DEFINE('TITULO', 'DashBoard');

/* Constantes Diretorios */
define('BASE_DIR', dirname(__FILE__));
define('BASE_MODEL', BASE_DIR . DS . 'model');
define('BASE_LIB', BASE_DIR . DS . 'lib');
define('BASE_PAGES', BASE_DIR . DS . 'pages');
define('BASE_INCLUDES', BASE_PAGES . DS . 'includes');
define('BASE_AJAX', BASE_DIR . DS . 'ajax');
define('BASE_ARQUIVOS', BASE_DIR . DS . 'arquivos');
/* Fim Constantes Diretorios */

define('USER_LOGADO', "123_TESTE_123");
define('USER_HASH', "73439e43c038115ac93a8aca666048678bd0e748");

/* Constantes Facebook */
define("APP_ID", 0);
define("APP_KEY", 1);
/* Fim Constantes Facebook */


/* Requires do autoload e das rotas */
require('config/Loader.php');
require('config/Rotas.php');
/* Fim Requires do autoload e das rotas */

try
{
	$url = !empty($_GET['url']) ? $_GET['url'] : '';
	$l = new \config\Loader();
	$r = new \config\Rotas($url);
}
catch(Exception $e)
{
	echo $e->getMessage();
	//header('Location: '.BASE_URL.'/404/');die();
}