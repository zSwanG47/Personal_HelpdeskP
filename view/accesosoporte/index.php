<?php
    require_once("../../config/conexion.php");
    if(isset($_POST["enviar"]) and $_POST["enviar"]=="si"){
        require_once("../../models/Usuario.php");
        $usuario = new Usuario();
        $usuario->login();
    }
?>
<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Amazon Experience - Acceso</title>

	<link href="img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="img/favicon.png" rel="icon" type="image/png">
	<link href="img/favicon.ico" rel="shortcut icon">

    <link rel="stylesheet" href="../../public/css/lib/bootstrap-sweetalert/sweetalert.css">
    <link rel="stylesheet" href="../../public/css/separate/vendor/sweet-alert-animations.min.css">

    <link rel="stylesheet" href="../../public/css/separate/pages/login.min.css">
    <link rel="stylesheet" href="../../public/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="../../public/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/main.css">

    <style>
            .page-footer {
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                background-color: #56ee19;
                color: white;
                text-align: center;
                padding: 10px 0;
                font-size: 14px;
            }

            .page-footer a {
                color: white;
                text-decoration: none;
            }

            .page-footer a:hover {
                text-decoration: underline;
            }

            .footer-image {
            max-width: 100px; 
            height: auto; 
            margin-bottom: 10px; 
            display: block;
            margin-left: auto;
            margin-right: auto;
            }

            .sign-box {
                width: 100%;
                padding: 20px;
                border: 1px solid #ddd;
                border-radius: 10px;
                background-color: #f9f9f9;
            }

            .sign-title {
                font-size: 22px;
                margin-bottom: 20px;
                text-align: center;
            }

            .form-group {
                margin-bottom: 15px;
            }

            .form-group input {
                width: 100%;
                padding: 10px;
                border-radius: 5px;
                border: 1px solid #ccc;
                font-size: 16px;
            }

            .btn {
                width: 100%;
                padding: 10px;
                background-color: #56ee19;
                color: white;
                border: none;
                border-radius: 5px;
                font-size: 16px;
            }

            .btn:hover {
                background-color: #218838;
            }

            .reset a {
                color: #56ee19;
                font-size: 14px;
            }

            .reset a:hover {
                text-decoration: underline;
                color: #218838;
            }

            .page-center {
            background-image: url('../../public/fondo_amazonExperience.jpg');
            background-size: cover;         /* Para que se ajuste bien a la pantalla */
            background-position: center;    /* Centra la imagen */
            background-repeat: no-repeat;   /* No se repite */
            background-attachment: fixed;   /* Se queda fijo al hacer scroll */
            }

            
            .sign-box {
                background-color: rgba(255, 255, 255, 0.9); 
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);    
            }

        </style>
</head>
<body>
    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">

            <form class="sign-box" action="" method="post" id="login_form">
                    <input type="hidden" name="origen" value="accesosoporte">
                    <input type="hidden" id="rol_id" name="rol_id" value="2">

                    <div class="sign-avatar">
                        <img src="../../public/2.jpg" alt="" id="imgtipo">
                    </div>
                    <header class="sign-title">Acceso Soporte</header>

                    <!-- TODO: validar segun valor al iniciar session -->
                    <?php
                        if (isset($_GET["m"])){
                            switch($_GET["m"]){
                                case "1";
                                    ?>
                                        <div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <i class="font-icon font-icon-warning"></i>
                                            El Usuario y/o Contraseña son incorrectos.
                                        </div>
                                    <?php
                                break;

                                case "2";
                                    ?>
                                        <div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <i class="font-icon font-icon-warning"></i>
                                            Los campos estan vacios.
                                        </div>
                                    <?php
                                break;

                                case "3":
                                    ?>
                                        <div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <i class="font-icon font-icon-warning"></i>
                                            Usuario no encontrando.
                                        </div>
                                    <?php
                                break;

                            }
                        }
                    ?>

                    <div class="form-group">
                        <input type="text" id="usu_correo" name="usu_correo" class="form-control" placeholder="Correo Electronico"/>
                    </div>
                    <div class="form-group">
                        <input type="password" id="usu_pass" name="usu_pass" class="form-control" placeholder="Contraseña"/>
                    </div>
                    
                    <div class="form-group">
                        <div class="float-right reset">
                            <a href="../../view/ResetPassword/">Recuperar Contraseña</a>
                        </div>
                        <div class="float-left reset">
                            <a href="../../index.php">Acceso Usuario</a>
                        </div>
                    </div>
                    <div class="form-group" style="display: flex; justify-content: center; align-items: center;">
                        <!--TODO: Botón "Iniciar sesión con Google" con atributos de datos HTML para la API -->
                        <div id="g_id_onload"
                            data-client_id="51514098151-o0ng8bc53vkf0np36ok321e0j2jcpolf.apps.googleusercontent.com"
                            data-context="signin"
                            data-ux_mode="popup"
                            data-callback="handleCredentialResponse"
                            data-auto_prompt="false"
                        >
                        </div>

                        <!--TODO: Configuración del botón de inicio de sesión con Google -->
                        <div class="g_id_signin"
                            data-type="standard"
                            data-shape="rectangular"
                            data-theme="outline"
                            data-text="signin_with"
                            data-size="large"
                            data-logo_alignment="left"
                        ></div>
                    </div>
                    <input type="hidden" name="enviar" class="form-control" value="si">
                    <button type="submit" class="btn btn-rounded">Acceder</button>
                </form>
            </div>

        </div>
    </div>

    <div class="page-footer">
            <div class="container-fluid text-center">
                <img src="../../public/logo_amazon.png" alt="Imagen de Footer" class="footer-image">

                <p>© AmazonExperience.net ♡ Made with love | <a href="https://www.amazonexperience.net/wp-content/uploads/2022/06/Terms-and-Conditions-2022.pdf" target="_blank">Terms and Conditions</a></p>
            </div>
    </div>

    <script src="../../public/js/lib/jquery/jquery.min.js"></script>
    <script src="../../public/js/lib/tether/tether.min.js"></script>
    <script src="../../public/js/lib/bootstrap/bootstrap.min.js"></script>
    <script src="../../public/js/plugins.js"></script>
    <!-- TODO: Liberia SweetAlert -->
    <script src="../../public/js/lib/bootstrap-sweetalert/sweetalert.min.js"></script>
    <script src="../../public/js/lib/match-height/jquery.matchHeight.min.js" type="text/javascript" ></script>
    <script>
        $(function() {
            $('.page-center').matchHeight({
                target: $('html')
            });

            $(window).resize(function(){
                setTimeout(function(){
                    $('.page-center').matchHeight({ remove: true });
                    $('.page-center').matchHeight({
                        target: $('html')
                    });
                },100);
            });
        });
    </script>
    <script src="../../public/js/app.js"></script>
    <script src="https://accounts.google.com/gsi/client" async></script>
    <script type="text/javascript" src="accesosoporte.js"></script>

</body>
</html>