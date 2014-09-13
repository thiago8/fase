
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo BASE_URL ?>/img/avatar5.png" class="img-circle" alt="Usuário" />
                        </div>
                        <div class="pull-left info">
                            <p>Olá, <?php echo \model\usuario\Controlador::getUsuarioLogado()->getNome(); ?></p>

                            <a href="javascript:;"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="<?php echo BASE_URL ?>/home/">
                                <i class="fa fa-th"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="<?php echo BASE_URL ?>/relatorio/">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Relátorios</span>
                            </a>
                        </li>
						
						 <li class="treeview">
                            <a href="<?php echo BASE_URL ?>/graficos/">
                                <i class="fa fa-circle"></i>
                                <span>Gráficos</span>
                            </a>
                        </li>
						
                        <li class="treeview">
                            <a href="javascript:;">
                                <i class="fa fa-laptop"></i>
                                <span>Sociais</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo BASE_URL ?>/facebook/"><i class="fa fa-angle-double-right"></i> Facebook</a></li>
                                <li><a href="<?php echo BASE_URL ?>/twitter/"><i class="fa fa-angle-double-right"></i> Twitter</a></li>
                                <li><a href="<?php echo BASE_URL ?>/youtube/"><i class="fa fa-angle-double-right"></i> Youtube</a></li>
                                <li><a href="<?php echo BASE_URL ?>/analytics/"><i class="fa fa-angle-double-right"></i> Analytics</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-file"></i> <span>Documentos</span>
                            </a>
                        </li>                        
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-cogs"></i> <span>Configurações</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo BASE_URL ?>/perfil/"><i class="fa fa-angle-double-right"></i> Perfil</a></li>
                                <li><a href="<?php echo BASE_URL ?>/modulos/"><i class="fa fa-angle-double-right"></i> Módulos</a></li>
                                <li><a href="<?php echo BASE_URL ?>/acoes/"><i class="fa fa-angle-double-right"></i> Ações</a></li>
                                <li><a href="<?php echo BASE_URL ?>/usuario/"><i class="fa fa-angle-double-right"></i> Usuários</a></li>
								<li><a href="<?php echo BASE_URL ?>/login/logout.php"><i class="fa fa-angle-double-right"></i> Sair</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>