<?php
\model\usuario\Controlador::redirectLogin();
include(BASE_INCLUDES . DS . 'inc.topo.php');
include(BASE_INCLUDES . DS . 'inc.menu.php');
?>
            
<aside class="right-side">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			 Meus dados
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo BASE_URL ?>/home/"><i class="fa fa-dashboard"></i><?php echo TITULO; ?></a></li>
			<li><a href="<?php echo BASE_URL ?>/usuario/">Usuários</a></li>
			<li class="active">Meus Dados</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-6">
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Altere seus dados</h3>
					</div><!-- /.box-header -->
					<!-- form start -->
					<form role="form" id="formAlterar" name="formAlterar">
						<div class="box-body">
							<div class="form-group">
								<label for="strNome">Nome</label>
								<input type="text" class="form-control" name="strNome" id="strNome" placeholder="" value="<?php echo \model\usuario\Controlador::getUsuarioLogado()->getNome(); ?>">
							</div>
							
							<div class="form-group">
								<label for="strEmail">Email</label>
								<input type="email" class="form-control" name="strEmail" id="strEmail" placeholder="" value="<?php echo \model\usuario\Controlador::getUsuarioLogado()->getEmail(); ?>">
							</div>
							
							<div class="form-group">
								<label for="strLogin">Login</label>
								<input type="text" class="form-control" name="strLogin" id="strLogin" placeholder="" value="<?php echo \model\usuario\Controlador::getUsuarioLogado()->getLogin(); ?>">
							</div>
							
							<div class="form-group">
								<label for="strSenha">Senha</label>
								<input type="password" class="form-control" name="strSenha" id="strSenha" placeholder="" value="">
							</div>
							
							<div class="form-group">
								<label for="strConfirmeSenha">Confirme Senha</label>
								<input type="password" class="form-control" name="strConfirmeSenha" id="strConfirmeSenha" placeholder="" value="">
							</div>
						</div><!-- /.box-body -->

						<div class="box-footer">
							<button id="btAlterar" rel="usuario" type="submit" class="btn btn-primary">Salvar</button>
						</div>
					</form>
				</div><!-- /.box -->
			</div> 	<!-- /.col-md-6 -->
		</div>   <!-- /.row -->
	</section><!-- /.content -->
</aside><!-- /.right-side -->
<?php include(BASE_INCLUDES . DS . 'inc.rodape.php'); ?>