<?php
namespace model\usuario;

class Excecao extends \Exception
{
    public function __construct($msg = "")
    {
        parent::__construct($msg);
    }
}