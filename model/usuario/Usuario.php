<?php
namespace model\usuario;

Class Usuario
{
	public $id;
	public $nome;
	public $email;
	public $login;
	public $senha;
	public $dataCadastro;
	public $dataUltimoAcesso;
	public $perfil;
	public $status;
	
	public function __construct($id=null, $nome=null, $email=null, $login=null, $senha=null, $dataCadastro=null, $dataUltimoAcesso=null, $perfil=null, $status=null)
	{
		$this->setId($id);
		$this->setNome($nome);
		$this->setEmail($email);
		$this->setLogin($login);
		$this->setSenha($senha);
		$this->setDataCadastro($dataCadastro);
		$this->setDataUltimoAcesso($dataUltimoAcesso);
		$this->setPerfil($perfil);
		$this->setStatus($status);
	}
	
	public function setId($id)
	{
		$this->id = $id;
	}
	
	public function getId()
	{
		return $this->id;
	}
	
	public function setNome($nome)
	{
		$this->nome = $nome;
	}
	
	public function getNome()
	{
		return $this->nome;
	}
	
	public function setEmail($email)
	{
		$this->email = $email;
	}
	
	public function getEmail()
	{
		return $this->email;
	}
	
	public function setLogin($login)
	{
		$this->login = $login;
	}
	
	public function getLogin()
	{
		return $this->login;
	}
	
	public function setSenha($senha)
	{
		$this->senha = $senha;
	}
	
	public function getSenha()
	{
		return $this->senha;
	}
	
	public function setDataCadastro($dataCadastro)
	{
		$this->dataCadastro = $dataCadastro;
	}
	
	public function getDataCadastro()
	{
		return $this->dataCadastro;
	}
	
	public function setDataUltimoAcesso($dataUltimoAcesso)
	{
		$this->dataUltimoAcesso = $dataUltimoAcesso;
	}
	
	public function getDataUltimoAcesso()
	{
		return $this->dataUltimoAcesso;
	}
	
	public function setPerfil($perfil)
	{
		$this->perfil = $perfil;
	}
	
	public function getPerfil()
	{
		return $this->perfil;
	}
	
	public function setStatus($status)
	{
		$this->status = $status;
	}
	
	public function getStatus()
	{
		return $this->status;
	}	
	
	public function getObjetoPerfil()
	{
		return ($this->perfil == 1) ? 'Administrador' : 'Usuário';
	}
}