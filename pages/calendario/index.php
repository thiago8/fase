<?php
\model\usuario\Controlador::redirectLogin();

include(BASE_INCLUDES . DS . 'inc.topo.php');
include(BASE_INCLUDES . DS . 'inc.menu.php');
?>       
<aside class="right-side">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Calendário
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo BASE_URL ?>/home/"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Calendário</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">


		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
					<div class="box-body no-padding">
						<div class="box-header">
							<h3 class="box-title">Criar evento</h3>
							<input id="textoEvento" type="text" class="form-control" placeholder="Inforem a data">
							<button id="btCadastrar" rel="calendario" type="submit" class="btn btn-primary">Salvar calendário</button>
						</div>
						<!-- THE CALENDAR -->
						<div id="calendar"></div>
					</div><!-- /.box-body -->
				</div><!-- /. box -->
			</div><!-- /.col -->
		</div><!-- /.row -->


	</section><!-- /.content -->
</aside><!-- /.right-side -->
<?php include(BASE_INCLUDES . DS . 'inc.rodape.php'); ?>