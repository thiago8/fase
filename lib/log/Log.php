<?php
namespace lib\log;

Trait Log
{
	use \lib\singleton\Singleton;	
	
	public static function erro($msg) 
	{
		ob_start(); 
        debug_print_backtrace(); 
        $e = ob_get_contents(); 
        ob_end_clean(); 
		$txt = "Data: ".date('H:i:s d/m/Y')."\n 
				Msg:".$msg." \n
				Debug:".$e." \n";
				
		error_log($txt, 3, BASE_LIB . DS . 'log' . DS . date('d_m_y').'_error_log.txt');
    }
}