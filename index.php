<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>RicardoEO</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '702443f35d0a915e724ff9658f070055e7b408a8';
    window.smartsupp||(function(d) {
      var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
      s=d.getElementsByTagName('script')[0];c=d.createElement('script');
      c.type='text/javascript';c.charset='utf-8';c.async=true;
      c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
    </script>
</head>
<body>
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            let scroll = document.documentElement;
            document.addEventListener('scroll', () => {
                var contador = 0;
                if (scroll.scrollTop == 0) {
                    document.getElementById('navegacion').style.position = "static";
                    document.getElementById('navegacion').style.background = "transparent";
                    document.getElementById('navegacion').style.borderBottom = "none";
                    document.getElementById('titulo').style.height = "86%";
                    contador = 0;
                } else if (scroll.scrollTop > 0) {
                        if (contador == 0) {
                        contador++;
                        document.getElementById('navegacion').style.position = "fixed";
                        document.getElementById('navegacion').style.background = "rgba(0, 0, 0, 0.9)";
                        document.getElementById('navegacion').style.color = "black";
                        document.getElementById('navegacion').style.transitionDuration = "1s";
                        document.getElementById('titulo').style.height = "100%";
                    }
                }
            });
        });
        function scrollToSection(){
            $('html, body').animate({
                scrollTop: $('#sobreMi').offset().top
            }, 1000);
        }
        function scrollToSection2(){
            $('html, body').animate({
                scrollTop: $('#misTrabajos').offset().top
            }, 1000);
        }
        function scrollToSection3(){
            $('html, body').animate({
                scrollTop: $('#misServicios').offset().top
            }, 1000);
        }
        function scrollToSection4(){
            $('html, body').animate({
                scrollTop: $('#miContacto').offset().top
            }, 1000);
        }

        function enviar() {
            //variables a enviar
            var nombre = document.getElementById('nombre').value;
            var correo = document.getElementById('correo').value;
            var mensaje = document.getElementById('mensaje').value;

            var dataen = 'nombre='+nombre +'&correo='+correo +'&mensaje='+mensaje;

            $.ajax({
                type: 'post',
                url: 'email.php',
                data: dataen,
                success:function(resp) {
                    alert("Correo enviado");
                }
            });
        
        return false;
        }

    </script>
<!--COMIENDO ENCABEZADO CON FOTO-->
    <header class="encabezado" id="encabezado">
        <nav class="navegacion" id="navegacion">
            <a onclick = "scrollToSection()">Sobre mi</a>
            <a onclick = "scrollToSection3()">Servicios</a>
            <a onclick = "scrollToSection2()">Trabajos</a>
            <a onclick = "scrollToSection4()">Contacto</a>
        </nav>
<!--FIN ENCABEZADO CON FOTO-->
        <div class="titulo" id="titulo">
            <p class="nombre">Hola, soy <b>Ricardo Echeverría Ortiz</b></p>
            <p class="oficio">Desarrollador de Software</p>
            <a target="_blank" href="https://www.linkedin.com/in/ricardo-echeverria-85889b153/"><button>LinkedIn</button></a>
        </div>
    </header>
    <main class="contenedor">
        <section class="yo" id="sobreMi">
            <article>
                <header>
                    <p>Sobre <b>Mí</b></p>
                </header>
                <p class="contenido">Actualmente tengo 21 años, desde temprana edad mostre interes por
                    la informática, desarrollar software, dar soporte y 
                    principalmente brindar soluciones confiables y rapidas.
                </p>
                <div class="contenedor-estudios">
                    <img src="images/diploma.png">
                    <cite>Tecnico en Informatica - Universidad Tecnica Federico Santa Maria</cite>
                </div>
            </article>
        </section>
                <img class="banner" src='images/banner.png'>
        <section class="yo" id="misServicios">
            <article>
                    <header>
                        <p>Mis <b>Servicios</b></p>
                    </header>
                    <p class="contenido">Los servicios que se ofrecen son los siguientes
                    </p>
                    <div class="servicios">
                        <div class="service">
                            <p class="t_service">Armado de computadoras</p>
                            <ul>
                                <li>
                                    Cotizacion
                                </li>
                                <li>
                                    Armado
                                </li>
                                <li>
                                    Activacion de programas
                                </li>
                                <li>
                                    Formateos
                                </li>
                            </ul>
                        </div>
                        <div class="service">
                                <p class="t_service">Desarrollo de software</p>
                                <ul>
                                    <li>
                                        Toma de requerimientos
                                    </li>
                                    <li>
                                        Diseño
                                    </li>
                                    <li>
                                            Análisis
                                    </li>
                                    <li>
                                            Programación
                                    </li>
                                </ul>
                            </div>
                            <div class="service">
                                    <p class="t_service">Desarrollo web</p>
                                    <ul>
                                        <li>
                                            Toma de requerimientos
                                        </li>
                                        <li>
                                            Diseño
                                        </li>
                                        <li>
                                                Análisis
                                        </li>
                                        <li>
                                                Programación
                                        </li>
                                    </ul>
                                </div>
                                <div class="service">
                                        <p class="t_service">Servicio técnico</p>
                                        <ul>
                                            <li>
                                                Diagnostico
                                            </li>
                                            <li>
                                                Arreglo
                                            </li>
                                            <li>
                                                Pruebas
                                            </li>
                                            <li>
                                                Entrega
                                            </li>
                                        </ul>
                                    </div>
                        </div>
                </article>
        </section>
        <section class="yo" id="misTrabajos">
                <article>
                        <header>
                            <p>Mis <b>Trabajos</b></p>
                        </header>
                        <p class="contenido">
                            <div class="contenedor_trabajos">
                                <div class="imagenes">
                                    <img class="trabajo" src="images/trabajo1.PNG">
                                    <img class="trabajo" src="images/trabajo2.PNG">
                                </div>
                            </div>
                        </p>
                </article>
        </section>
        <section class="yo" id="miContacto">
                <article>
                        <header>
                            <p>Mi <b>Contacto</b></p>
                        </header>
                        <p class="contenido">
                        </p>
                            <form onsubmit="return enviar();" class="contacto">
                                <input id="nombre" type="text" placeholder="Escriba su nombre" required><br>
                                <input id="correo" type="email" placeholder="Escriba su correo electrónico" required><br>
                                <textarea id="mensaje" placeholder="Escriba su mensaje aca"></textarea required>
                                <input type="submit" value="Enviar mensaje">
                            </form>
                </article>
        </section>
    </main>
</body>
</html>