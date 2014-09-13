$(function() 
{
	$("button[name='btLogin']").click(function()
	{		
		if(!validarCampos())
		{
			showLoad();			
			$.post(
					BASE_URL+'/login/logar.php',
					$('#formLogin').serialize(),
					function(res)
					{
						if (typeof res.status != 'undefined') 
						{
							if(res.status == 'ok')
							{
								window.location.href = BASE_URL + '/home/';
							}
							else
							{
								hideLoad();
								feed(res.status, res.msg);
							}							
						}
						else
						{
							hideLoad();
							feed('erro', 'Ocorreu um problema, tente novamente mais tarde.');
						}					
					}
			),'json'				   
		}
		return false;
	});
});