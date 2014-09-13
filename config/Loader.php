<?php
namespace config;

Class Loader
{	
	public function __construct()
	{
		 spl_autoload_register(array($this, '_init'));
	}

	private function _init($class)
	{		
		$className = ltrim($class, '\\');
		$fileName = $namespace = '';
		if ($l = strrpos($class, '\\')) {
			$namespace = substr($class, 0, $l);
			$class = substr($class, $l + 1);
			$fileName  = str_replace('\\', DS, $namespace) . DS;
		}
		$fileName .= str_replace('_', DS, $class) . '.php';
		
		if(file_exists(BASE_DIR . DS . $fileName))
		{
			require(BASE_DIR . DS . $fileName);
		}
	}
}