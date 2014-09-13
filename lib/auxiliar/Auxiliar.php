<?php
namespace lib\auxiliar;

Class Auxiliar
{
	public static function validarPost($a) 
	{
        $arr = array();
        foreach ($a as $k => $v) 
		{
           $arr[$k] = is_array($v) ? Util::validarPost($v) : (isset($v) ? $v : null);
        }
        return $arr;
    }
	
	public static function encryptHas($str)
	{
		return sha1(md5($str.'73439e43c038115ac93a8aca666048678bd0e748'));	
	}
	
	public static function dataBr($data,$time=true)
	{
		$date = new \DateTime($data);
		return ($time) ? $date->format('d/m/Y H:i:s') : $date->format('d/m/Y');
	}
	
	public static function dataUSA($data,$time=true)
	{
		$date = new \DateTime($data);		
		return ($time) ? $date->format('Y-m-d H:i:s') : $date->format('Y-m-d');
	}
	
	public static function getBoxAcoes($edt=true, $exc=true, $vis=true)
	{
		$html = '';
		$html.= ($edt) ? '<a class="btEditar" href="javascript:;" title="Editar"><span class="glyphicon glyphicon-list-alt"></span></a>&nbsp;&nbsp;' : '';
		$html.= ($exc) ? '<a class="btExclusao" href="javascript:;" title="Apagar"><span class="glyphicon glyphicon-remove"></span></a>&nbsp;&nbsp;' : '';
		$html.= ($vis) ? '<a class="btVisualizar" href="javascript:;" title="Visualizar"><span class="glyphicon glyphicon-search"></span></a>&nbsp;&nbsp;' : '';
		
		return $html;	
	}
	
	public static function exibirFeed($stt='erro', $msg)
	{
		$typ = '';
		$ico = '';
		$res = '';
		
		switch($stt) {
			case 'ok':
				$type.='alert-success';
				$icon.='fa-check';
				break;
			case 'erro':
				$type.='alert-danger';
				$icon.='fa-warning';	
				break;
			case 'alert':
				$type.='alert-warning';
				$icon.='fa-ban';	
				break;	
			default:
				$type.='alert-info';
				$icon.='fa-info';	
				break;
		}
		
		$res+= '<div class="alert '.$typ.' alert-dismissable">';
		$res+='<i class="fa '.$ico.'"></i>';
		$res+='<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>';
		$res+='<b>'.msg.'</b></div>';
		
		return $res;
	}
	
	public static function retiraAcento($str)
	{
		return preg_replace('/[`^~\'"]/',null, iconv('UTF-8', 'ASCII//TRANSLIT',$str));
	}
	
	
}
