<?php
\model\usuario\Controlador::redirectLogin();

try
{
	$arrUsuarios = \model\factory\Factory::montar('controladorusuario')->listarAtivos();
}
catch(\model\usuario\Excecao $e)
{
	$arrUsuarios = null;
}
catch(\model\conexao\Excecao $e)
{
	$arrUsuarios = null;
}

include(BASE_INCLUDES . DS . 'inc.topo.php');
include(BASE_INCLUDES . DS . 'inc.menu.php');
?>       
<aside class="right-side">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Usuários cadastrados
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo BASE_URL ?>/home/"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo BASE_URL ?>/usuario/">Usuário</a></li>
			<li class="active">Listando</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-body table-responsive">
						<table id="tblListagem" class="table table-bordered table-striped dataTable">
							<thead>
								<tr>
									<th>Nome</th>
									<th>Email</th>
									<th>Data de cadastro</th>
									<th>Perfil</th>
									<th>Ações</th>
								</tr>
							</thead>
							<tbody>
							<?php 
							if(count($arrUsuarios))
							{
								foreach($arrUsuarios as $usu)
								{								
							?>
								<tr>
									<td><?php echo $usu->getNome(); ?></td>
									<td><?php echo $usu->getEmail(); ?></td>
									<td><?php echo \lib\auxiliar\Auxiliar::dataBr($usu->getDataCadastro(),false) ?></td>
									<td><?php echo $usu->getObjetoPerfil(); ?></td>
									<td>										
										<p id="<?php echo $usu->getId(); ?>"><?php echo \lib\auxiliar\Auxiliar::getBoxAcoes(true,true,false); ?></p>
									</td>
								</tr>
							<?php 
								}
							}
							?>	
							</tbody>
							<tfoot>
								<tr>
									<th>Nome</th>
									<th>Email</th>
									<th>Data de cadastro</th>
									<th>Perfil</th>
									<th>Ações</th>
								</tr>
							</tfoot>
						</table>
					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>
		</div>
	</section><!-- /.content -->
</aside><!-- /.right-side -->
<?php include(BASE_INCLUDES . DS . 'inc.rodape.php'); ?>