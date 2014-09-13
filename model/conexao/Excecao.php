<?php
namespace model\conexao;

class Excecao extends \Exception
{
    public function __construct($msg = "")
    {
        parent::__construct($msg);
    }
}