<?php
namespace model\usuario;

Class Repositorio
{	
	private $_stat;
	
	public function __construct()
	{
		// nada há fazer
	}
	
	private function _getConn()
	{
		return \model\factory\Factory::montar('conexao')->getConn();
	}	
	
	private function _getUsuario($arr)
	{
		return new \model\usuario\Usuario(
											isset($arr['usu_id']) 	? $arr['usu_id'] : null,
											isset($arr['usu_nome']) ? $arr['usu_nome'] : null,
											isset($arr['usu_email']) ? $arr['usu_email'] : null,
											isset($arr['usu_login']) ? $arr['usu_login'] : null,
											isset($arr['usu_senha']) ? $arr['usu_senha'] : null,
											isset($arr['usu_dataCadastro']) ? $arr['usu_dataCadastro'] : null,
											isset($arr['usu_dataUltimoAcesso']) ? $arr['usu_dataUltimoAcesso'] : null,
											isset($arr['per_id']) ? $arr['per_id'] : null,
											isset($arr['usu_status']) ? $arr['usu_status'] : null
											);
	}
	
	public function adicionar(Usuario $objUsuario)
	{
		try
		{
			$this->_stat = $this->_getConn()->prepare('INSERT INTO tblusuario 
															(usu_nome,usu_email,usu_login,usu_senha,_usu_dataCadastro,usu_dataUltimoAcesso,per_id,usu_status)
															VALUES(:usu_nome,:usu_email,:usu_login,:usu_senha,NOW(),NOW(),:per_id,:usu_status)');			
			$this->_stat->bindValue(':usu_nome',	$objUsuario->getNome(),\PDO::PARAM_STR);
			$this->_stat->bindValue(':usu_email',	$objUsuario->getEmail(),\PDO::PARAM_STR);			
			$this->_stat->bindValue(':usu_login',	$objUsuario->getLogin(),\PDO::PARAM_STR);
			$this->_stat->bindValue(':usu_senha',	$objUsuario->getSenha(),\PDO::PARAM_STR);
			$this->_stat->bindValue(':per_id',		$objUsuario->getObjPerfil()->getId(),\PDO::PARAM_INT);
			$this->_stat->bindValue(':usu_status',	$objUsuario->getStatus(),\PDO::PARAM_INT);			
			$this->_stat->execute();
			
			return $this->_getConn->lastInsertId();
		}
		catch(\PDOException $e)
		{
			throw new \model\conexao\Excecao($e->getMessage());
		}
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
		try
		{
			$arrRetorno = new \ArrayObject();
			$this->_stat = $this->_getConn()->prepare('SELECT * FROM tblusuario WHERE usu_excluido = 0 AND usu_status = 1');
			$this->_stat->execute();
			
			while($res = $this->_stat->fetch(\PDO::FETCH_ASSOC))
			{
				$arrRetorno->append($this->_getUsuario($res));
			}
			
			return $arrRetorno;
		}
		catch(\PDOException $e)
		{
			throw new \model\conexao\Excecao($e->getMessage());
		}
	}
	
	public function logar(Usuario $objUsuario)
	{
		try
		{
			$this->_stat = $this->_getConn()->prepare('SELECT * FROM tblusuario WHERE usu_login = :usu_login AND usu_senha = :usu_senha AND usu_excluido = 0 AND usu_status = 1');			
			$this->_stat->bindValue(':usu_login', $objUsuario->getLogin(),\PDO::PARAM_STR);
			$this->_stat->bindValue(':usu_senha', sha1($objUsuario->getSenha().USER_HASH),\PDO::PARAM_STR);
			$this->_stat->execute();

			return $this->_getUsuario($this->_stat->fetch(\PDO::FETCH_ASSOC));
		}
		catch(\PDOException $e)
		{
			throw new \model\conexao\Excecao($e->getMessage());
		}
	}
	
	public function visualizar(Usuario $objUsuario)
	{
		try
		{
			$this->_stat = $this->_getConn()->prepare('SELECT * FROM tblusuario WHERE usu_id = :usu_id AND usu_excluido = 0 AND usu_status = 1');			
			$this->_stat->bindValue(':usu_id', $objUsuario->getId(),\PDO::PARAM_INT);
			$this->_stat->execute();

			return $this->_getUsuario($this->_stat->fetch(\PDO::FETCH_ASSOC));
		}
		catch(\PDOException $e)
		{
			throw new \model\conexao\Excecao($e->getMessage());
		}
	}
}