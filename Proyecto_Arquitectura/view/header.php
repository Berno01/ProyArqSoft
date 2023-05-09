<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mannat Themes">
        <meta name="keyword" content="">

        <title>SYNTRA | Responsive Web App Kit</title>

        <!-- Theme icon -->
        <link rel="shortcut icon" href="../public/images/favicon.ico">

        <link href="../public/plugins/morris-chart/morris.css" rel="stylesheet">
        <!-- Theme Css -->
        <link href="../public/css/bootstrap.min.css" rel="stylesheet">
        <link href="../public/css/slidebars.min.css" rel="stylesheet">
        <link href="../public/css/icons.css" rel="stylesheet">
        <link href="../public/css/menu.css" rel="stylesheet" type="text/css">
        <link href="../public/css/style.css" rel="stylesheet">

        
        <!-- DataTables -->
        <link href="../public/libs/datatables/dataTables.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Custom Css -->
        <link href="../public/css/custom.css" rel="stylesheet" type="text/css" />

        <link href="../public/css/main.css" rel="stylesheet"
    type="text/css" />
        <style type="text/css">
            .mayusculas{
                text-transform:uppercase;
            }	
            textarea {
                resize: none;
            }
        </style>




    </head>

    <body class="sticky-header">
        <section>
            <!-- sidebar left start-->
            <div class="sidebar-left">
                <div class="sidebar-left-info">

                    <div class="user-box">
                        <div class="d-flex justify-content-center">
                            <img src="../public/images/users/avatar-1.jpg" alt="" class="img-fluid rounded-circle"> 
                        </div>
                        <div class="text-center text-white mt-2">
                            <h6>Bernardo Rueda</h6>
                            <p class="text-muted m-0">Admin</p>
                        </div>
                    </div>   
                                        
                    <!--sidebar nav start-->
                    <ul class="side-navigation">
                        <li>
                            <h3 class="navigation-title">Herramientas para administrador</h3>
                        </li>
                        <li class="active">
                            <a href="escritorio.php"><i class="mdi mdi-gauge"></i> <span>Escritorio</span></a>
                        </li>
                        <li class="menu-list"><a href=""><i class="mdi mdi-buffer"></i> <span>Artículos</span></a>
                            <ul class="child-list">
                                <li><a href="articulo.php">Artículos</a></li>
                                <li><a href="categoria.php">Categorias </a></li>
                            </ul>
                        </li>

                        <li class="menu-list"><a href=""><i class="mdi mdi-buffer"></i> <span>Proveedores</span></a>
                            <ul class="child-list">
                                <li><a href="proveedor.php">Ver Proveedores</a></li>
                            </ul>
                        </li>
                        <li>





                        <li>
                            <h3 class="navigation-title">Herramientas para Personal</h3>
                        </li>

                        <li class="menu-list"><a href=""><i class="mdi mdi-diamond"></i> <span>Pedir</span></a>
                            <ul class="child-list">
                                <li><a href="icons-material.html">Realizar pedido</a></li>
                                <li><a href="icons-font-awesome.html">Ver pedidos pendientes</a></li>
                            </ul>
                        </li>
                    </ul><!--sidebar nav end-->
                </div>
            </div><!-- sidebar left end-->

            <!-- body content start-->
            <div class="body-content">
                <!-- header section start-->
                <div class="header-section">
                    <!--logo and logo icon start-->
                    <div class="logo">
                        <a href="index.html">
                            <span class="logo-img">
                                <img src="../public/images/logo_sm.png" alt="" height="26">
                            </span>
                            <!--<i class="fa fa-maxcdn"></i>-->
                            <span class="brand-name">UCB-Grupo 1</span>
                        </a>
                    </div>

                    <!--toggle button start-->
                    <a class="toggle-btn"><i class="ti ti-menu"></i></a>
                    <!--toggle button end-->

                    <!--mega menu start-->
                    <div id="navbar-collapse-1" class="navbar-collapse collapse mega-menu">
                        
                             
                    </div>
                    <!--mega menu end-->

                    <div class="notification-wrap">
                        <!--right notification start-->
                        <div class="right-notification">
                            <ul class="notification-menu">
                                <li>
                                    <a href="javascript:;" class="notification" data-toggle="dropdown">
                                        <i class="mdi mdi-bell-outline"></i>
                                        <span class="badge badge-success">4</span>
                                    </a>
                                    <ul class="dropdown-menu mailbox dropdown-menu-right">
                                        <li>
                                          <div class="drop-title">Notifications</div>
                                        </li>
                                        <li class="notification-scroll">
                                            <div class="message-center">
                                                <a href="#">
                                                    <div class="user-img"> 
                                                        <i class="ti ti-star"></i>
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>Jane A. Seward</h6>
                                                        <span class="mail-desc">Iwon meddle and...</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="user-img">
                                                        <i class="ti ti-heart"></i> 
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>Michael W. Salazar</h6>
                                                        <span class="mail-desc">Lovely gide learn for you...</span> 
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="user-img"> 
                                                        <i class="ti ti-image"></i>
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>David D. Chen</h6>
                                                        <span class="mail-desc">Send his new photo...</span> 
                                                    </div>
                                                </a> 
                                                <a href="#">
                                                    <div class="user-img"> 
                                                        <i class="ti ti-bell"></i>
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>Irma J. Hendren</h6>
                                                        <span class="mail-desc">6:00 pm our meeting so...</span> 
                                                    </div>
                                                </a> 
                                            </div>
                                        </li>
                                        <li> 
                                            <a class="text-center bg-light" href="javascript:void(0);"> 
                                                <strong>See all notifications</strong> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:;" data-toggle="dropdown">
                                        <img src="../public/images/users/avatar-1.jpg" alt="">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-menu">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success pull-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>

                                </li>

                                <li>
                                    <div class="sb-toggle-right">
                                        <i class="mdi mdi-apps"></i>
                                    </div>
                                </li>
                            </ul>
                        </div><!--right notification end-->
                    </div>
                </div>
                <!-- header section end-->