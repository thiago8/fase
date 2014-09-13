<?php
namespace config;

Class Rotas
{
	private $_url;
	private $_file;
	private $_extensoes = array('.php', '.html', '.js', '.css', '.swf');	
	
	public function __construct($url)
	{
		$this->_setUrl($url);
		$this->_mapear();		
	}
	
	private function _setUrl($url)
	{		
		$url.= (strrpos($url, ".php") == false ) ? 'index.php' : '';
		$this->_url = $url;
	}
	
	private function _getExt()
	{
		return strtolower(substr($this->_url, strrpos($this->_url, ".")));
	}
	
	private function _mapear()
	{	
		if(empty($this->_url))
		{
			$this->_file = 'index.php';
		}
		else
		{			
			if(in_array($this->_getExt(), $this->_extensoes))
			{
				$arrFinal = $arrParam = explode('/', $this->_url);
				$c = 1;
				$a = 0 ;
				foreach($arrParam as $p)
				{
					if(is_numeric($p))
					{
						$param = "id$c";
						$$param = $p;
						
						unset($arrFinal[$a]);
						$c++;					
					}
					$a++;					
				}
				$this->_file = implode('/', $arrFinal);		
			}			
			else
			{
				throw new \InvalidArgumentException('Não possui uma extensão válida!');
			}
		}

		if(file_exists(BASE_PAGES . DS . $this->_file))
		{			
			include(BASE_PAGES . DS . $this->_file);
		}
		else if(file_exists(BASE_AJAX . DS . $this->_file))
		{
			include(BASE_AJAX . DS . $this->_file);
		}
		else
		{
			throw new \RuntimeException ('Página não encontrada!');
		}
	}
	
	public static function redirect()
	{
		header('Location: '.BASE_URL.'/login/');
	}
}
