$.ajaxSetup({
  cache : false,
  global: false,
  type: "POST"
});

function validarCampos()
{
	var feed = false;
	$('.required').each(function()
	{		
		if(!$(this).val())		
		{				
			txt = '<label for="inputWarning" class="control-label"><i class="fa fa-warning"></i> Preencha o campo acima!</label>';
			$(this).parent().addClass('has-warning').find('.feedInput').html(txt);
			$(this).attr('style', 'border: 1px solid #f39c12 !important');	
			feed = true;
		}
		else
		{
			$(this).parent().removeClass('has-warning').find('.feedInput').html('');
			$(this).attr('style', '');				
		}
	});	
	return feed;
}

function showLoad()
{		
	$('html').addClass('box').append('<div class="overlay"></div><div class="loading-img"></div>');
}

function hideLoad()
{
	$('html').removeClass('box');
	$('html').find('.overlay').remove();
	$('html').find('.loading-img').remove();
}


function feed(status, msg)
{
	var type = '';
	var icon = '';
	var res = '';	
	$('.feedBack').html('');
	
	switch(status) {
		case 'ok':
			type+='alert-success';
			icon+='fa-check';
			break;
		case 'erro':
			type+='alert-danger';
			icon+='fa-warning';	
			break;
		case 'alert':
			type+='alert-warning';
			icon+='fa-ban';	
			break;	
		default:
			type+='alert-info';
			icon+='fa-info';	
			break;
	}
		
	res+= '<div class="alert '+type+' alert-dismissable">';
	res+='<i class="fa '+icon+'"></i>';
	res+='<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>';
	res+='<b>'+msg+'</b></div>';
	
	$('.feedBack').html(res);
}

$('.btEditar').on('click', function(){
	window.location.href = BASE_URL + '/usuario/' + $(this).parent().attr('id') + '/editar.php'
	//console.log(BASE_URL + '/usuario/' + $(this).parent().attr('id') + '/editar.php');
});

$('.btExclusao').on('click', function(){
	console.log('Apagando '+$(this).parent().attr('id'));
});

$('.btVisualizar').on('click', function(){
	console.log('Visualizando '+$(this).parent().attr('id'));
});

$('#btAlterar').on('click', function(){
	console.log('Salvando '+$(this).attr('rel'));
	
	$.post(
			BASE_URL+'/'+$(this).attr('rel')+'/alterar.php',
			$('#formAlterar').serialize(),
			function(r)
			{
			
			},'json'
	)
	return false;
});