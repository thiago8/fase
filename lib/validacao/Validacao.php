<?php
namespace lib\validacao;

Class Validacao
{
	private $_arrayValues = array();
	private $_arrayRules = array();	
	private $_arrayText = array();		
	
	public function setRules($valor, $regra, $txt)
	{
		$this->_arrayValues[] = $valor;
		$this->_arrayRules[] = $regra;
		$this->_arrayText[] = $txt;
	}

	public function validar()
	{		
		foreach($this->_arrayValues as $k=>$v)
		{
			$r = explode(',', $this->_arrayRules[$k]);
			foreach($r as $a =>$b)
			{
				//eval("\$this->_is" . ucfirst(strtolower($b)) . "(\"".$v."\",\"".$this->_arrayText[$k]."\");");										
				call_user_func(
								array(
										$this, 
										"_is" . ucfirst(strtolower($b))
									  ), 
								$k
							  );
			}
		}
	}
	
	private function _isCep($k)
	{
		if(empty($this->_arrayValues[$k]) || !preg_match("/^\d{5}-\d{3}$/", $this->_arrayValues[$k]))
		{
			throw new \lib\validacao\Excecao('Campo "'.$this->_arrayText[$k].'" não é um CEP válido');
		}
	}
	
	private function _isRequired($k)
	{
		if($this->_arrayValues[$k] == '')
		{
			throw new \lib\validacao\Excecao('Campo "'.$this->_arrayText[$k].'" é obrigatorio.');
		}
	}
	
	private function _isNumeric($k)
	{		
		if(!is_numeric($this->_arrayValues[$k]))
		{
			throw new \lib\validacao\Excecao('Campo "'.$this->_arrayText[$k].'" não é númerico.');
		}
	}
	
	private function _isEmail($k)
	{
		if(!filter_var($this->_arrayValues[$k], FILTER_VALIDATE_EMAIL))
		{
			throw new \lib\validacao\Excecao('Campo "'.$this->_arrayText[$k].'" não é uma e-mail válido.');
		}
	}
}