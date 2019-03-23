<!doctype html>
<html class="no-js" lang="en">
    <head>
       
        <title>Sistema Registro de Empleados  - payGO</title>
        

        <link rel="stylesheet" href="css/bootstrap.min.css">
        

        <!-- Fuentes Instaladas -->
        <link rel="stylesheet" href="fonts/fonts.css">
        <!-- Checkbox Bootstrap css-->
        <link rel="stylesheet" href="css/bootstrap2-toggle.css">

        <!-- LIBRERIA DE ESTILOS BOOTSTRAP Y JQUERY -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootbox.min.js"></script>

        <!-- LIBRERIA DE VALIDACION DEL FORMULARIO -->
        <script type="text/javascript" src="js/jquery.validate.js"></script>
        <script type="text/javascript" src="js/additional-methods.js"></script>

        <!-- Checkbox Bootstrap js-->
        <script type="text/javascript" src="js/bootstrap2-toggle.min.js"></script>

        <!-- Ocultar div de los Pasos al hacer scroll Down / Mostrar al hacer scroll up-->
        <script type="text/javascript" src="js/headroom.min.js"></script>
        <script type="text/javascript" src="js/jquery.headroom.min.js"></script>

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Header Area Start -->
        <header class="top">
       
            
            <a class="btn btn-primary" href="/" role="button">Inicio</a>
            <a class="btn btn-primary" href="crear" role="button">Crear Empleados</a>
            <a class="btn btn-primary" href="consultar" role="button">Consultar Empleados</a>
            <a class="btn btn-primary" href="actualizar" role="button">Actualizar Datos</a>
            <a class="btn btn-primary" href="eliminar" role="button">Eliminar Empleados</a>

            
       

         

        </header>
        <!-- Header Area End -->



        <!-- Background Area Start -->
        <section id="slider-container" class="slider-area"> 
            
        </section>
        <!-- Background Area End -->
        







<!-- INICIO CONTENIDO -->
        


@yield('contenido')




<!-- FIN CONTENIDO -->










        <!-- Footer Start -->
        <footer class="footer-area">
            <div class="footer-bottom text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <p>Copyright © <a href="https://paygo.com.co/" target="_blank">payGo</a> 2019. All Right Reserved By KRE.</p>
                        </div>
                        <div class="footer-social" align="center">
                            <ul>
                                <li><a href="https://www.facebook.com/groups/73854311476/?ref=group_header"><i class="zmdi zmdi-facebook"></i></a></li>
                            </ul>    
                        </div>
                    </div>
                </div>    
            </div>
        </footer>
        <!-- Footer End -->

        <script type="text/javascript" src="js/jquery.numeric.js"></script>
        <script type="text/javascript" src="js/jsnumeric.js"></script>
    </body>
</html>