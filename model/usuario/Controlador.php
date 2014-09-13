<?php
namespace model\usuario;

Class Controlador
{	
	public function __construct()
	{
		//num tem nada pra hoje
	}	
	
	private function _getValidacao()
	{
		return \model\factory\Factory::montar('validacao');
	}
	
	private function _getRepositorio()
	{
		return \model\factory\Factory::montar('repositoriousuario');
	}
	
	public static function estaLogado()
	{
		return (!empty($_SESSION[USER_LOGADO])) ? $_SESSION[USER_LOGADO] : false;
	}
	
	public static function redirectLogin()
	{		
		if(!self::estaLogado())
		{
			\config\Rotas::redirect();
		}
	}
	
	public static function getUsuarioLogado()
	{
		return unserialize($_SESSION[USER_LOGADO]);
	}
	
	public function logar($login, $pass)
	{
		$v = $this->_getValidacao();
		$v->setRules($login,'required','LOGIN');
		$v->setRules($pass,'required','SENHA');
		$v->validar();		
		
		$objUsu = \model\factory\Factory::montar('usuario');
		$objUsu->setLogin($login);
		$objUsu->setSenha($pass);
		
		$obj = $this->_getRepositorio()->logar($objUsu);

		if(is_null($obj->getId()))
		{
			throw new \model\usuario\Excecao('Nenhum usuário encontrado');
		}		
		$_SESSION[USER_LOGADO] = serialize($obj);
	}
	
	public static function logout()
	{		
		unset($_SESSION[USER_LOGADO]);
		self::redirectLogin();
	}
	
	public function visualizar($id)
	{		
		$v = $this->_getValidacao();
		$v->setRules($id,'required','ID');
		$v->validar();		
		
		$objUsu = \model\factory\Factory::montar('usuario');
		$objUsu->setId($id);
		
		return $this->_getRepositorio()->visualizar($objUsu);
	}
	
	public function adicionar(Usuario $objUsuario)
	{
	
	}
	
	public function alterar(Usuario $objUsuario)
	{
	
	}
	
	public function apagar(Usuario $objUsuario)
	{
	
	}
	
	public function contar(Usuario $objUsuario)
	{
	
	}
	
	public function listarAtivos()
	{
		return $this->_getRepositorio()->listarAtivos();
	}
}