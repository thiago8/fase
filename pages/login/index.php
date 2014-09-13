<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title><?php echo TITULO ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo BASE_URL ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo BASE_URL ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo BASE_URL ?>/css/main.css" rel="stylesheet" type="text/css" />
		<script>
			var BASE_URL = '<?php echo BASE_URL?>';
		</script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Painel</div>
            <form id="formLogin" method="post" role="form">
                <div class="body bg-gray">
                    <div class="form-group">                        
						<input type="text" name="strLogin" class="form-control required" placeholder="Login"/>
						<div class='feedInput'></div>
                    </div>
                    <div class="form-group">
                        <input type="password" name="strSenha" class="form-control required" placeholder="Senha"/>
						<div class='feedInput'></div>
                    </div> 
                </div>
                <div class="footer">                                                               
                    <button name="btLogin" type="submit" class="btn bg-olive btn-block">Entrar</button>
                </div>
            </form>

            <div class="margin text-center">
                <span>Login usando redes sociais</span>
                <br/>
                <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

            </div>
        </div>
		<div class="feedBack"><div>

        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>          
		<!-- Bootstrap -->
        <script src="<?php echo BASE_URL ?>/js/bootstrap.min.js" type="text/javascript"></script>        
		<!-- Geral -->
		<script src="<?php echo BASE_URL ?>/js/func.js?i=<?php echo rand(); ?>" type="text/javascript"></script> 
		<!-- Login -->
		<script src="<?php echo BASE_URL ?>/js/login/login.js?i=<?php echo rand(); ?>" type="text/javascript"></script> 
    </body>
</html>