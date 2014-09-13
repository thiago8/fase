<?php
try
{
	$arrFed = array('status' => 'ok', 'msg' => 'Sucesso!');
	$u = \model\factory\Factory::montar('controladorusuario')->logar($_POST['strLogin'],$_POST['strSenha']);
}
catch(\model\usuario\Excecao $e)
{
	$arrFed = array('status' => 'erro', 'msg' => ''.$e->getMessage().'');
}
catch(\lib\validacao\Excecao $e)
{
	$arrFed = array('status' => 'alert', 'msg' => ''.$e->getMessage().'');
}
catch(\mobel\conexao\Excecao $e)
{
	$arrFed = array('status' => 'erro', 'msg' => ''.$e->getMessage().'');
}

catch(\Exception $e)
{
	$arrFed = array('status' => 'erro', 'msg' => ''.$e->getMessage().'');
}
header('Content-Type: application/json');
echo json_encode($arrFed);
?>