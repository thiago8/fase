<?php
namespace lib\log;

Class LogException extends \Exception
{
	public function __construct($msg = "")
	{
		parent::__construct($msg);
	}
}
