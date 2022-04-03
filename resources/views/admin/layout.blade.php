<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cyborg System</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="/adminlte/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminlte/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
    <link rel="stylesheet" href="/adminlte/css/skins/skin-blue.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%;">
    <div class="wrapper" style="height: auto; min-height: 100%;">
        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo apontado pro LTE pagina 2 modificar aqui para a principal -->
            <a href="index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>C</b>yborg</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Cyborg</b>System</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <!-- Menu toggle button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Você possui 4 mensagens</li>
                                <li>
                                    <!-- inner menu: contains the messages -->
                                    <ul class="menu">
                                        <li>
                                            <!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <!-- User Image -->
                                                    <img src="/adminlte/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <!-- Message title and timestamp -->
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <!-- The message -->
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                    </ul>
                                    <!-- /.menu -->
                                </li>
                                <li class="footer"><a href="#">Ver todas as mensagens</a></li>
                            </ul>
                        </li>
                        <!-- /.messages-menu -->

                        <!-- Notifications Menu -->
                        <li class="dropdown notifications-menu">
                            <!-- Menu toggle button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Você tem 10 notificações</li>
                                <li>
                                    <!-- Inner Menu: contains the notifications -->
                                    <ul class="menu">
                                        <li>
                                            <!-- start notification -->
                                            <a href="#">
                                                <i class="fa fa-users text-aqua"></i> 5 novos membros se adicionaram hoje
                                            </a>
                                        </li>
                                        <!-- end notification -->
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">Ver todos</a></li>
                            </ul>
                        </li>
                        <!-- Tasks Menu -->
                        <li class="dropdown tasks-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Você tem 9 mensagens</li>
                                <li>
                                    <!-- Inner menu: contains the tasks -->
                                    <ul class="menu">
                                        <li>
                                            <!-- Task item -->
                                            <a href="#">
                                                <!-- Task title and progress text -->
                                                <h3>
                                                    RATING para proxima hora complementar.
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <!-- The progress bar -->
                                                <div class="progress xs">
                                                    <!-- Change the css width attribute to simulate progress -->
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">Ver todas as Tarefas</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="/adminlte/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">Antônio Dias</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="/adminlte/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                    <p>
                                        Antônio Dias - Web Developer
                                        <small>Membro desde mar. 2017</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Seguidores</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Sales</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Amigos</a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Perfil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sair</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="/adminlte/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Antônio Dias</p>
                        <!-- Status -->
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- search form (Optional) -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Buscar...">
                        <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                    </div>
                </form>
                <!-- /.search form -->

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">
                    <li class="header"><i class="fa fa-star">&nbsp;</i><span><strong><b>RATINGS</b></strong></span></li>
                    <!-- Optionally, you can add icons to the links -->
                    <li class="active"><a href="#"><i class="fa fa-home"></i> <span>Início</span></a></li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-book"></i> <span>MONITORIAS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
                        <ul class="treeview-menu">
                            <li><a href="#">Minhas Monitorias</a></li>

                            <div class="container">
                                <!-- <button type="button" class="btn btn-default btn-sm">Cadastrar Monitorias</button> -->
                            </div>
                            <!--Teste modal-->

                            <!--Teste modal-->
                            <li><a href="#">Meus Ratings</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-support"></i> <span>Sobre</span></a>
                    </li>
                    <li><a href="#"><i class="fa fa-close"></i> <span>SAIR</span></a></li>

                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>QUADRO<small>&nbsp;de monitorias</small>
                </h1>
                <ol class="breadcrumb">
                    <li>

                        <!--Teste modal-->

                        <button type="button" class="btn btn-info"><span class="glyphicon glyphicon-search">&nbsp;</span>Avançada</button>&nbsp;&nbsp;&nbsp;
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">Cadastrar Monitorias</button>
                        <div class="modal modal-info fade" id="modal-info" style="display: none;">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">X</span></button>
                                        <h4 class="modal-title">Cadastro de Monitorias</h4>
                                    </div>
                                    <div class="modal-body">
                                       

                                       
                                        <!-- TESTE DE SCROLL area -->


                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Categoria:</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- Trigger modal using -->
                                                <select class="form-control">
              <option>selecionar Monitoria</option>
              <option data-toggle="modal" data-target="#myModal">HTML5 & CSS3</option>
              <option data-toggle="modal" data-target="#myModal">Javascript</option>
              <option data-toggle="modal" data-target="#myModal">ANGULAR</option>
              <option data-toggle="modal" data-target="#myModal">NODE</option>
              <option data-toggle="modal" data-target="#myModal">PHP</option>
              <option data-toggle="modal" data-target="#myModal">JAVA</option>
              <option data-toggle="modal" data-target="#myModal">Banco de Dados 1</option>
              <option data-toggle="modal" data-target="#myModal">Banco de Dados 2</option>
              <option data-toggle="modal" data-target="#myModal">Algorítimos 1</option>
              <option data-toggle="modal" data-target="#myModal">Algorítimos 2</option>
              <option data-toggle="modal" data-target="#myModal">Algorítimos 3</option>
              <option data-toggle="modal" data-target="#myModal">Sistemas Distribuidos</option>
            </select>
                                            </div>
                                        </div>&nbsp;


                                        <!-- TESTE DE SCROLL area -->

                                        <input descritex="my_monitoria" placeholder="Título da monitoria..." required="required" type="text" cols="30" rows="5" class="form-control">&nbsp;
                                        <textarea placeholder="Digite sua descrição sobre a monitoria..." cols="30" rows="5" class="form-control" style="min-width: 50%"></textarea>

                                        <p><strong><b>1° Passo.</b></strong></p>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- Teste de botoes proximo - fechar e voltar -->

                                        <button type="button" class="btn btn-outline pull-right" data-toggle="modal" data-target="#myModal1">Próximo</button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Cadastro de Monitoria</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <h6><i class="fa fa-map-marker"></i>&nbsp;&nbsp;&nbsp;Selecionar Local:</h6>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <!-- Trigger modal using -->
                                                                <select class="form-control">
              <option><span><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Local...</span></option>
              <option data-toggle="modal" data-target="#myModal">SENAC-Rs  Bloco 01</option>
              <option data-toggle="modal" data-target="#myModal">Senac-Rs Bloco 02</option>
              <option data-toggle="modal" data-target="#myModal">Senac-Rs Salas</option>
              <option data-toggle="modal" data-target="#myModal">Biblioteca</option>
              <option data-toggle="modal" data-target="#myModal">Auditório</option>
            </select>
                                                            </div>
                                                        </div>&nbsp;
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default btn-prev">Voltar</button>
                                                        <button type="button" class="btn btn-default btn-next">Proximo</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- fim do teste btn s-->

                                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Fechar</button>&nbsp;

                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>

                        <!--Teste modal-->


                    </li>
                    <!--
                    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                    <li class="active">Here</li> -->
                </ol>
            </section>

            <!-- Main content -->
            <section class="txtMtr" style="padding-left:3rem;">
                <!-- Your Page Content Here -->
                
                @yield('content')

            </section>
            <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
        </div>

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
                Projeto & Desenvolvimento / SENAC-RS
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2017 <a href="#">Tchê Ajudo</a>.</strong> All Tchê's reserved for us.
            <span style="padding-left:20px"><a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a></span>
            <span style="padding-left:20px"><a class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a></span>
            <span style="padding-left:20px"><a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a></span>
            <span style="padding-left:20px"><a class="btn btn-social-icon btn-bitbucket"><i class="fa fa-bitbucket"></i></a></span>
            <span style="padding-left:20px"><a class="btn btn-social-icon btn-dropbox"><i class="fa fa-dropbox"></i></a></span>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane active" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Atividades Recentes</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:;">
                                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Anversário de Andrei</h4>

                                    <p>Próximo dia 24 de junho</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                    <h3 class="control-sidebar-heading">Barra de Progresso</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:;">
                                <h4 class="control-sidebar-subheading">
                                    Total de ratings para próxima Hora complementar
                                    <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                                    </span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">Configurações Gerais</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
              Painel de Relatórios
              <input type="checkbox" class="pull-right" checked>
            </label>

                            <p>
                                Informações sobre as configurações gerais.
                            </p>
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.2.3 -->
    <script src="/adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="/adminlte/bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/adminlte/js/app.min.js"></script>


    <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>

</html>
