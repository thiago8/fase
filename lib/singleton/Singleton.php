<?php
namespace lib\singleton;

Trait Singleton
{
	private static $_instancia;
	
	public static function getInstancia()
	{
		return (!isset(self::$_instancia)) ?  new self : self::$_instancia;
	}
}