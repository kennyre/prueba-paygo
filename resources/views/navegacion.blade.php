<!doctype html>
<html class="no-js" lang="en">
    <head>
       <style>
            
            .active{
                text-decoration: none;
                color: green;
            }

            .error{
                color: red;
                font-size: 12px;                
            }

       </style>
        <title>Sistema Registro de Empleados  - payGO</title>
        
        <link rel="shortcut icon" href="img/logo/icono.ico">
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
      

        <!-- Inicio de la Cabecera - Barra de Navegación -->
        <header class="top">
       
            <?php
                function activeMenu($url)
                {
                    return request()->is($url) ? 'active' : '';
                }
            ?>
            
            <a class="{{ activeMenu('/') }} btn btn-primary" 
                href="{{ route('inicio') }}" role="button">Inicio</a>

            <a class="{{ activeMenu('empleados/create') }} btn btn-primary" 
                href="{{ route('empleados.create') }}" role="button">Crear Empleados</a>

            <a class="{{ activeMenu('empleados') }} btn btn-primary" 
                href="{{ route('empleados.index') }}" role="button">Consultar Empleados</a>

            <a class="{{ activeMenu('exportar') }}btn btn-primary" 
                href="{{ route('exportar') }}" role="button">Exportar Excel</a>
            
        

        </header>
        <!-- Fin de la Cabecera -->



        <!-- Background Area Start -->
        <section id="slider-container" class="slider-area"> 
            
        </section>
        <!-- Background Area End -->
        







<!-- INICIO CONTENIDO -->
        


@yield('contenido')



<!-- FIN CONTENIDO -->









        <br><br>
        <!-- Footer Start -->
        <footer class="footer-area">
            <div class="footer-bottom text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <p>Copyright © <a href="https://paygo.com.co/" target="_blank">payGo</a> {{ date('Y') }}. All Right Reserved By KRE.</p>
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