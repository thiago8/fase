<?php
\model\usuario\Controlador::redirectLogin();
include(BASE_INCLUDES . DS . 'inc.topo.php');
include(BASE_INCLUDES . DS . 'inc.menu.php');
?>
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dashboard 
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo BASE_URL ?>/home/"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-blue">
					<div class="inner">
						<h3>
							1
						</h3>
						<p>
							FACEBOOK
						</p>
					</div>
					<div class="icon">						
						<i class="ion ion-social-facebook"></i>						
					</div>
					<a href="<?php echo BASE_URL ?>/facebook/" class="small-box-footer">
						Acessar  <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-green">
					<div class="inner">
						<h3>
							2
						</h3>
						<p>
							RELÁTORIOS
						</p>
					</div>
					<div class="icon">
						<i class="ion ion-stats-bars"></i>	
					</div>
					<a href="<?php echo BASE_URL ?>/relatorio/" class="small-box-footer">
						Acessar  <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-yellow">
					<div class="inner">
						<h3>
							3
						</h3>
						<p>
							USUÁRIOS
						</p>
					</div>
					<div class="icon">
						<i class="ion ion-person-add"></i>
					</div>
					<a href="<?php echo BASE_URL ?>/usuario/" class="small-box-footer">
						Acessar  <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div><!-- ./col -->			
		</div><!-- /.row -->
		
		<div class="row">			
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-red">
					<div class="inner">
						<h3>
							4
						</h3>
						<p>
							GRÁFICOS
						</p>
					</div>
					<div class="icon">
						<i class="ion ion-pie-graph"></i>
					</div>
					<a href="<?php echo BASE_URL ?>/graficos/" class="small-box-footer">
						Acessar  <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div><!-- ./col -->
			
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-maroon">
					<div class="inner">
						<h3>
							5
						</h3>
						<p>
							DOCUMENTOS
						</p>
					</div>
					<div class="icon">
						<i class="ion ion-document"></i>
					</div>
					<a href="<?php echo BASE_URL ?>/documentos/" class="small-box-footer">
						Acessar  <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div><!-- ./col -->
			
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-purple">
					<div class="inner">
						<h3>
							6
						</h3>
						<p>
							CONFIGURAÇÕES
						</p>
					</div>
					<div class="icon">
						<i class="ion ion-settings"></i>
					</div>
					<a href="<?php echo BASE_URL ?>/configuracoes/" class="small-box-footer">
						Acessar  <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div><!-- ./col -->
			
		</div><!-- /.row -->
		
	</section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->
<?php include(BASE_INCLUDES . DS . 'inc.rodape.php'); ?>