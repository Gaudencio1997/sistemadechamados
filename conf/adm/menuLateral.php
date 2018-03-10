<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <meta charset="utf-8" />
      <title>Sistema De Chamados</title>
      <meta name="description" content="Common Buttons &amp; Icons" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
      <!-- bootstrap & fontawesome -->
      <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
      <link rel="stylesheet" href="../../assets/font-awesome/4.5.0/css/font-awesome.min.css" />
      <!-- page specific plugin styles -->
      <!-- text fonts -->
      <link rel="stylesheet" href="../../assets/css/fonts.googleapis.com.css" />
      <!-- ace styles -->
      <link rel="stylesheet" href="../../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
      <!--[if lte IE 9]>
      <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
      <![endif]-->
      <link rel="stylesheet" href="../../assets/css/ace-skins.min.css" />
      <link rel="stylesheet" href="../../assets/css/ace-rtl.min.css" />
      <!--[if lte IE 9]>
      <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
      <![endif]-->
      <!-- inline styles related to this page -->
      <!-- ace settings handler -->
      <script src="../../assets/js/ace-extra.min.js"></script>
      <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
      <!--[if lte IE 8]>
      <script src="assets/js/html5shiv.min.js"></script>
      <script src="assets/js/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="no-skin">
      <div id="navbar" class="navbar navbar-default          ace-save-state">
         <div class="navbar-container ace-save-state" id="navbar-container">
            <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <div class="navbar-header pull-left">
               <a href="home.php" class="navbar-brand">
               <small>
               <i class="fa fa-leaf"></i>
               Painel Administrativo
               </small>
               </a>
            </div>
            <div class="navbar-buttons navbar-header pull-right" role="navigation">
               <ul class="nav ace-nav">
                  <li class="light-blue dropdown-modal">
                     <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                     <img class="nav-user-photo" src="../../assets/images/avatars/Satan.png" alt="Jason's Photo" />
                     <span class="user-info">
                     <small>Bem Vindo,</small>
                     Usuário
                     </span>
                     <i class="ace-icon fa fa-caret-down"></i>
                     </a>
                     <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                           <a href="home.php">
                           <i class="ace-icon fa fa-user"></i>
                           Perfil
                           </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                           <a href="../../index.php">
                           <i class="ace-icon fa fa-power-off"></i>
                           Sair
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="main-container ace-save-state" id="main-container">
         <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
            <script type="text/javascript">
               try{ace.settings.loadState('sidebar')}catch(e){}
            </script>
            <!--Página Inicial-->
            <ul class="nav nav-list">               
               <li class="">
                  <a href="home.php">
                  <i class="menu-icon fa fa-home"></i>
                  <span class="menu-text"> Página Inicial </span>
                  </a>
                  <b class="arrow"></b>
               </li>
               <li class="">
                  <a href="#" class="dropdown-toggle">
                  <i class="menu-icon fa  fa-desktop"></i>
                  <span class="menu-text"> Gerente </span>
                  <b class="arrow fa fa-angle-down"></b>
                  </a>
                  <b class="arrow"></b>
                  <ul class="submenu">
                     <li class="">
                        <a href="form-elements.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Cadastrar
                        </a>
                        <b class="arrow"></b>
                     </li>
                     <li class="">
                        <a href="form-elements-2.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Listar
                        </a>
                        <b class="arrow"></b>
                     </li>
                  </ul>
               </li>
               <li class="">
                  <a href="#" class="dropdown-toggle">
                  <i class="menu-icon fa fa-users"></i>
                  <span class="menu-text"> Operador </span>
                  <b class="arrow fa fa-angle-down"></b>
                  </a>
                  <b class="arrow"></b>
                  <ul class="submenu">
                     <li class="">
                        <a href="form-elements.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Cadastrar
                        </a>
                        <b class="arrow"></b>
                     </li>
                     <li class="">
                        <a href="form-elements-2.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Listar
                        </a>
                        <b class="arrow"></b>
                     </li>
                  </ul>
               </li>
               <li class="">
                  <a href="#" class="dropdown-toggle">
                  <i class="menu-icon fa fa-laptop"></i>
                  <span class="menu-text"> Perfil Personalizado </span>
                  <b class="arrow fa fa-angle-down"></b>
                  </a>
                  <b class="arrow"></b>
                  <ul class="submenu">
                     <li class="">
                        <a href="form-elements.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Cadastrar
                        </a>
                        <b class="arrow"></b>
                     </li>
                     <li class="">
                        <a href="form-elements-2.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Listar
                        </a>
                        <b class="arrow"></b>
                     </li>
                  </ul>
               </li>
               <li class="">
                  <a href="#" class="dropdown-toggle">
                  <i class="menu-icon fa fa-users"></i>
                  <span class="menu-text"> Relatórios </span>
                  <b class="arrow fa fa-angle-down"></b>
                  </a>
                  <b class="arrow"></b>
                  <ul class="submenu">
                     <li class="">
                        <a href="form-elements.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Chamados
                        </a>
                        <b class="arrow"></b>
                     </li>
                     <li class="">
                        <a href="form-elements-2.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Usuários
                        </a>
                        <b class="arrow"></b>
                     </li>
                  </ul>
               </li>                
               <!--Meu Perfil-->
               <li class="">
                  <a href="#" class="dropdown-toggle">
                  <i class="menu-icon fa fa-inbox"></i>
                  <span class="menu-text"> Meu Perfil </span>
                  <b class="arrow fa fa-angle-down"></b>
                  </a>
                  <b class="arrow"></b>
                  <ul class="submenu">
                     <!--Visualizar Meu Perfil-->
                     <li class="">
                        <a href="../../adm/view/perfil.php">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Visualizar
                        </a>
                        <b class="arrow"></b>
                     </li>
                     <!--Editar Meu Perfil-->
                     <li class="">
                        <a href="jqgrid.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Editar
                        </a>
                        <b class="arrow"></b>
                     </li>
                     <!--Sair Do Perfil-->
                     <li class="">
                        <a href="jqgrid.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Sair
                        </a>
                        <b class="arrow"></b>
                     </li>
                  </ul>
               </li> 
                             
            </ul>
            <!-- /.nav-list -->
         </div>
      </div>
      <!-- basic scripts -->
      <!--[if !IE]> -->
      <script src="../../assets/js/jquery-2.1.4.min.js"></script>
      <!-- <![endif]-->
      <!--[if IE]>
      <script src="assets/js/jquery-1.11.3.min.js"></script>
      <![endif]-->
      <script type="text/javascript">
         if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
      </script>
      <script src="../../assets/js/bootstrap.min.js"></script>
      <!-- page specific plugin scripts -->
      <!-- ace scripts -->
      <script src="../../assets/js/ace-elements.min.js"></script>
      <script src="../../assets/js/ace.min.js"></script>
      <!-- inline scripts related to this page -->
      <script type="text/javascript">
         jQuery(function($) {
         	$('#loading-btn').on(ace.click_event, function () {
         		var btn = $(this);
         		btn.button('loading')
         		setTimeout(function () {
         			btn.button('reset')
         		}, 2000)
         	});
         
         	$('#id-button-borders').attr('checked' , 'checked').on('click', function(){
         		$('#default-buttons .btn').toggleClass('no-border');
         	});
         })
      </script>
   </body>
</html>