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

        <!-- Theme Css -->
        <link href="../public/css/bootstrap.min.css" rel="stylesheet">
        <link href="../public/css/slidebars.min.css" rel="stylesheet">
        <link href="../public/css/icons.css" rel="stylesheet">
        <link href="../public/css/menu.css" rel="stylesheet" type="text/css">
        <link href="../public/css/style.css" rel="stylesheet">
    </head>
    <body class="sticky-header">
        <section class="bg-login">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="wrapper-page">
                            <div class="account-pages">
                                <div class="account-box">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="card-title text-center">
                                                <img src="public/images/logo_sm_2.png" alt="" class="">
                                                <h5 class="mt-3"><b>Bienvenido</b></h5>
                                                <h5 class="mt-3"><b>Ingrese su nombre de usuario y contrasena</b></h5>
                                            </div>  
                                            <form class="form mt-5 contact-form" action="verificar.php" method="POST">

                                                <div class="form-group ">
                                                    <div class="col-sm-12">
                                                    <input class="form-control form-control-line" type="text" placeholder="nombre" name="username" required="required">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-sm-12">
                                                    <input class="form-control form-control-line" type="password" placeholder="contrasena" name="password" required="required">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-12">
                                                        <label class="cr-styled">
                                                            <input type="checkbox" checked>
                                                            <i class="fa"></i> 
                                                            Remember me
                                                        </label>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                <div class="mb-3">
                                                <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Ingresar</button>
                                                </div>
                                                    </div>  
                                                <div class="form-group">
                                                <div class="">
                                                            <a href="recuperar.php" class="text-muted">¿Necesitas recuperar tu contraseña?</a>
                                                        </div>
                                                </div>

                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- jQuery -->
        <script type="text/javascript" src="../public/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../public/js/popper.min.js"></script>
        <script type="text/javascript" src="../public/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../public/js/jquery-migrate.js"></script>
        <script type="text/javascript" src="../public/js/modernizr.min.js"></script>
        <script type="text/javascript" src="../public/js/jquery.slimscroll.min.js"></script>
        <script type="text/javascript" src="../public/js/slidebars.min.js"></script>
        <!--app js-->
        <script type="text/javascript" src="../public/js/jquery.app.js"></script>
    </body>
</html>
