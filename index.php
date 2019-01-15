<?php 

require_once "visitas.controlador.php";

try {
    $registro = new VisitasControlador();
    $registro->accion = "carga de la pagina sin ajax";
    $confirmacion = $registro->guardarVisitaCtr();
} catch (Exception $e) {
    $confirmacion = $e->getMessage();
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Rafael Burgueño - Portfolio, reformas de baños y cocinas">
    <meta name="author" content="Rafael Burgueño">

    <link rel="icon" type="image/x-icon" href="">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <title>Burgueño baños & cocinas</title>

    <style>
        /* You can add global styles to this file, and also import other style files */
        
        @import url('https://fonts.googleapis.com/css?family=Montserrat|PT+Sans');
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        * {
            font-family: 'Montserrat', sans-serif;
            /* font-family: 'PT Sans', sans-serif; */
        }
        
        .w3-third img {
            margin-bottom: 0px;
            opacity: 0.8;
            cursor: pointer
        }
        
        .w3-third img:hover {
            opacity: 1
        }
        
        .fa-2x {
            margin: 2px 12px;
        }
        
        .abajo {
            position: relative;
            margin-bottom: 0%;
        }
        
        a {
            text-decoration-line: none;
        }
    </style>

</head>

<body class="w3-light-grey w3-content" style="max-width:1600px">

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-bar-block w3-white w3-animate-left w3-text-grey w3-collapse w3-top w3-center" style="z-index:3;width:300px;font-weight:bold" id="mySidebar"><br>

        <div class="w3-padding-64 w3-center w3-hide-medium w3-hide-small">
            <h3 class=""><b>BURGUEÑO</b></h3>
            <p class="">Baños <br> & <br> Cocinas</p>

        </div>

        <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button" title="portfolio">PORTFOLIO</a>
        <a href="#contacto" onclick="w3_close()" class="w3-bar-item w3-button" title="contacto">CONTACTO</a>
        <hr>
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hide-large">cerrar</a>


    </nav>

    <!-- Top menu on small screens -->
    <header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-16">
        <span class="w3-left w3-padding"><b> BURGUEÑO </b> <span class="w3-medium"> Baños & Cocinas </span></span>
        <!-- <a href="javascript:void(0)" class="w3-right w3-button w3-white"> -->
        <i onclick="w3_open()" class="w3-right w3-button fa fa-bars w3-text-grey w3-hover-opacity"></i>
        <!-- </a> -->

        <!-- <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">&#9776;</a> -->



    </header>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>


    <!-- !PAGE CONTENT! -->
    <div id="portfolio" class="w3-main" style="margin-left:300px">

        <!-- Push down content on small screens -->
        <div class="w3-hide-large" style="margin-top:83px"></div>

        

        <!-- Photo grid -->
        <div class="w3-row w3-animate-opacity">
            <div class="w3-third">
                <img class="w3-border" src="img/1.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/2.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/3.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/4.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/6.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/7.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/8.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/9.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/10.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/11.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/12.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/13.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/14.jpg" style="width:100%" onclick="onClick(this)" alt="">
            </div>

            <div class="w3-third">
                <img class="w3-border" src="img/15.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/16.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/17.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/18.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/19.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/20.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/21.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/22.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/23.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/24.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/27.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/28.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/38.jpg" style="width:100%" onclick="onClick(this)" alt="">
            </div>
            <div class="w3-third">
                <img class="w3-border" src="img/30.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/31.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/32.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/33.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/34.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/36.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/37.jpg" style="width:100%" onclick="onClick(this)" alt="">
                <img class="w3-border" src="img/40.jpg" style="width:100%" onclick="onClick(this)" alt="">

            </div>
        </div>
        <br><br>


        <!-- Modal for full size images on click-->
        <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
            <span class="w3-button w3-black w3-xlarge w3-display-topright">&times;</span>
            <div class="w3-modal-content w3-animate-opacity w3-center w3-transparent w3-padding-32">
                <img id="img01" class="w3-image">
                <p id="caption"></p>
            </div>
        </div>



        <!-- CONTACTO -->

        <div id="contacto" class="w3-container w3-light-grey w3-padding-32 w3-padding-large w3-animate-opacity" id="contact">
            <div class="w3-content" style="max-width:600px">

                <h4 class="w3-center">Contacto</h4>

                <hr class="" style="border-top: solid grey 1px;margin: 50px 0px">

                <p class="w3-center">tels.: 4373 8552 - 094 741 095</p>
                <p class="w3-center">email: rafaelburg@gmail.com</p>

                <hr class="" style="border-top: solid grey 1px;margin: 50px 0px">


                <div class="w3-container w3-padding-64 w3-light-grey w3-center w3-large w3-text-grey">

                    <a href="https://api.whatsapp.com/send?phone=59894741095" target="_blank" title="WhatsApp">
                        <i class="fa fa-2x fa-whatsapp" aria-hidden="true"></i>
                    </a>

                    <a href="https://www.facebook.com/rafaelburg" target="_blank" title="Facebook">
                        <i class="fa fa-2x fa-facebook-official w3-hover-opacity"></i>
                    </a>

                    <a href="https://www.instagram.com/rafael_burgueno/" target="_blank" title="Instagram">
                        <i class="fa fa-2x fa-instagram w3-hover-opacity"></i>
                    </a>

                    <a href="https://github.com/rafaelburg" target="_blank" title="GitHub">
                        <i class="fa fa-2x fa-github w3-hover-opacity"></i>
                    </a>

                    <a href="https://codepen.io/rburg/" target="_blank" title="Codepen">
                        <i class="fa fa-2x fa-codepen w3-hover-opacity"></i>
                    </a>

                </div>

                <div class="abajo w3-center w3-text-grey">
                    <h6 class="abajo">Rafael Burgueño - 2019</h6>
                </div>

            </div>
        </div>


        <!--===================================
        CONFIRMACION DE LA CAPTURA DE DATOS
        ====================================-->
        
        <?php
            /*
            if($confirmacion == 'exito'){
                echo '<div class="w3-panel w3-green">';
                echo '<h3>Notificación</h3><p>Se han guardado datos de su dirección ip.</p></div>';
            }else{
                echo '<div class="w3-panel w3-red">';
                echo '<h3>Notificación</h3><p>'. $confirmacion .'</p></div>';
            }
            */
        ?>


    </div><!--fin del PAGE CONTENT-->




    <script>
        // Script to open and close sidebar
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("myOverlay").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("myOverlay").style.display = "none";
        }

        // Modal Image Gallery
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
            var captionText = document.getElementById("caption");
            captionText.innerHTML = element.alt;
        }
    </script>

    <script src="ajax.js"></script>



</body>



</html>