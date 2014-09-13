<?php
namespace model\factory;

Class Factory
{	
	//use \lib\singleton\Singleton;	
	private function __construct()
	{
		// nada pra fazer aqui
	}
	
	public static function montar($class = null)
	{
		if(is_null($class))
		{
			throw new \InvalidArgumentException('Necessário informar nome da classe');
		}
		
		switch($class)
		{
			//Conexão
			case 'conexao' : 
							return new \model\conexao\Conexao(); 
							break;
							
			//Conexão
			case 'validacao' : 
							return new \lib\validacao\Validacao(); 
							break;				
			
			//Classe do susuário
			case 'usuario' : 
							return new \model\usuario\Usuario(); 
							break;
							
			case 'controladorusuario' : 
							return new \model\usuario\Controlador(); 
							break;
										
			case 'repositoriousuario' : 
							return new \model\usuario\Repositorio(); 
							break;
			default:
					throw new \UnexpectedValueException('Class não encontrada.');
		}		
	}
}
