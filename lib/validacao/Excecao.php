<?php
namespace lib\validacao;

class Excecao extends \Exception
{
    public function __construct($msg = "")
    {
        parent::__construct($msg);
    }
}