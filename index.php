<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="css/global.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
    <script src="js/funciones.js"></script>

    <!-- Slider seccion inicio -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css" integrity="sha256-ev+XS9lVA6/6vEe/p9pncQjsHB6g9UtAZYFLNViXxAA=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js" integrity="sha256-nHmCK+HOPMPezzS3ky9VKznMWH4sW4keT8HrMaDNbYo=" crossorigin="anonymous"></script>

    <!-- Slider seccion inicio -->
    <link rel="stylesheet" href="css/plugins/cedis_map.css">

    <!-- Slider seccion historia -->
    <link rel="stylesheet" href="css/plugins/styleslidetime.css">
    <script  src="js/scripttimeline.js"></script>

    <!-- Plugin FACEBOOK -->
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>


    <title>Grupo Embotellador Nayar</title>
</head>

<body>

    <!-- <section id="window">
        <?php // include("includes/ventana-form.php"); ?>
    </section> -->

    <header>
        <nav>
            <ul class="menu_logo">
                <li class="logo"><img src="img/logo.png" alt=""></li>
            </ul>

            <ul class="menu_mobil">
                <li class="menu_ico"><img src="img/menu.png" alt=""></li>
            </ul>

            <ul class="togle_menu">
                <li class="item"><a class="smooth" href="#inicio">Inicio</a></li>
                <li class="item"><a class="smooth" href="#cedis">CEDIS</a></li>
                <li class="item"><a class="smooth" href="#historia">Nuestra Empresa</a></li>
                <li class="item"><a class="smooth" href="#productos">Productos</a></li>
                <li class="item"><a class="smooth" href="#bolsa-trabajo">Sala de Prensa</a></li>
                <li class="item"><a class="smooth" href="#bolsa-trabajo">Bolsa de Trabajo</a></li>
                <li class="item"><a class="smooth" href="#contacto">Contacto</a></li>
                <li class="item"><a class="transparencia" href="#">Transparencia</a></li>
            </ul>
        </nav>
    </header>

    <!-- SLIDER INICIO -->

    <section id="adaptive">
        <img src="img/1.png" alt="">
        <img src="img/2.png" alt="">
        <img src="img/3.png" alt="">
    </section>
    <!-- FIN SLIDER INICIO -->


    <!-- SECTION INICIO -->
    <section id="inicio">
        <div class="p1">
            <p>Grupo Embotellador Nayar le da la más cordial bienvenida a nuestro sitio web, en la que esperamos, encuentren toda la información que necesiten acerca de quienes somos y de nuestra cultura laboral. Éste portal quiere ser tambien testimonio del desarrollo de Grupo Embotellador Nayar desde sus orígenes y evolución hasta el día de hoy, donde nos hemos preparado para atender eficientemente las demandas de nuestros clientes y consumidores</p>
        </div>

        <div>
            <ul class="flex-container-inicio">
                <li class="item" id="item1">
                    <div class="item-inicio-container">
                        <h3>Industria Mexicana de Coca Cola</h3>
                        <p>Coca Cola reconocida como una de las principales empresas con mayor responsabilidad social sustentable en México.</p>
                        <a href="#">Enviar mis Datos</a>
                    </div>
                </li>
                <li class="item" id="item2">
                    <div class="item-inicio-container">
                        <h3>Revista Voces</h3>
                        <p>Conoce los acontecimientos que se llevan a cabo así como otra información acerca del Grupo Embotellador del Nayar.</p>
                        <a href="#">Enviar mis Datos</a>
                    </div>
                </li>
                <li class="item" id="item3">
                    <div class="item-inicio-container">
                        <h3>Bolsa de Trabajo</h3>
                        <p>Entérate de las vacantes disponibles para laborar en Grupo Embotellador del Nayar y envianos tu curriculum por este medio.</p>
                        <a href="#" class="open">Enviar mis Datos</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- FIN SECTION INICIO -->



    <!-- SECTION CEDIS -->

    <?php include ("includes/cedis.inc"); ?>

    <!-- FIN SECTION CEDIS -->


    <!-- SECTION HISTORIA -->
    <section id="historia">
        <div class="title-section">
            <hr>
            <h2>Nuestra historia</h2>
        </div>
        <!-- Timeline slider INICIO -->
        <section class="cd-horizontal-timeline">
            <div class="timeline">
                <div class="events-wrapper">
                    <div class="events">
                        <ol>
                            <li><a href="#0" data-date="01/01/1953" class="selected">1953</a></li>
                            <li><a href="#0" data-date="01/01/1974">1974</a></li>
                            <li><a href="#0" data-date="01/01/1975">1975</a></li>
                            <li><a href="#0" data-date="01/01/1980">1980</a></li>
                            <li><a href="#0" data-date="01/01/1981">1981</a></li>
                            <li><a href="#0" data-date="01/01/1987">1987</a></li>
                            <li><a href="#0" data-date="01/01/1993">1993</a></li>
                            <li><a href="#0" data-date="01/01/1994">1994</a></li>
                            <li><a href="#0" data-date="01/01/1995">1995</a></li>
                            <li><a href="#0" data-date="01/01/1998">1998</a></li>
                            <li><a href="#0" data-date="01/01/2000">2000</a></li>
                            <li><a href="#0" data-date="01/01/2003">2003</a></li>
                            <li><a href="#0" data-date="01/01/2006">2006</a></li>
                            <li><a href="#0" data-date="01/01/2007">2007</a></li>
                            <li><a href="#0" data-date="01/01/2008">2008</a></li>
                            <li><a href="#0" data-date="01/01/2009">2009</a></li>
                            <li><a href="#0" data-date="01/01/2011">2011</a></li>
                            <li><a href="#0" data-date="01/01/2012">2012</a></li>
                            <li><a href="#0" data-date="01/01/2015">2015</a></li>
                        </ol>

                        <span class="filling-line" aria-hidden="true"></span>
                    </div> <!-- .events -->
                </div> <!-- .events-wrapper -->
                    
                <ul class="cd-timeline-navigation">
                    <li><a href="#0" class="prev inactive">Prev</a></li>
                    <li><a href="#0" class="next">Next</a></li>
                </ul> <!-- .cd-timeline-navigation -->
            </div> <!-- .timeline -->

            <div class="events-content">
                <ol>
                    <li class="selected" data-date="01/01/1953">
                        <div class="item-historia"><img src="https://www.prensalibre.com/wp-content/uploads/2018/12/181fbbf9-ecdb-4fa6-8221-43f0ce7cc55a.jpg?quality=82" alt=""></div>
                        
                        <div class="item-historia">
                            <h2>Llega Coca Cola a Nayarit</h2>
                            <em>1953</em>
                            <p>A 27 años de que aparece Coca Cola en México como la bebida más importante y refrescante del mundo, llega a Tepic Nayarit, naciendo así Grupo Embotellador Nayar. Esto fue gracias a la visión del Señor Don Joaquín Fernández Suarez y otros accionistas de la Ciudad de Guadalajara, que hicieron que Coca Cola sea una tradición en la mesa de las familias Nayaritas. Esta aventura inició en un pequeño local Ubicado en la Calle Veracruz entre Morelos y Zapata, con dieciocho trabajadores y dos camiones de reparto.                            </p>
                        </div>
                    </li>

                    <li data-date="01/01/1974">
                        <div class="item-historia"><img src="https://www.marketingdirecto.com/wp-content/uploads/2019/06/cocacola-1.jpg" alt=""></div>
                        
                        <div class="item-historia">
                            <h2>Foundation of Calix</h2>
                            <em>1974</em>
                            <p>Se construye el primer Centro de Distribución en Puerto Vallarta, en el estado de Jalisco, zona clave en el crecimiento de Grupo Embotellador Nayar.                            </p>
                        </div>
                    </li>

                    <li data-date="01/01/1975">
                        <div class="item-historia"><img src="https://afrodita-production.s3.amazonaws.com/images/cocacolamusicexperience2019-festival-260419.original.jpg" alt=""></div>
                        
                        <div class="item-historia">
                            <h2>100% Nayarita</h2>
                            <em>1975</em>
                            <p>La compañía cambia de accionistas, a partir de este año empresarios 100% Nayaritas adquieren la franquicia encabezados por el C.P. Antonio Echevarría Domínguez, persona siempre comprometida en el desarrollo de la marca y de la sociedad Nayarita.</p>
                        </div>
                    </li>

                    <li data-date="01/01/1980">
                        <div class="item-historia"><img src="https://afrodita-production.s3.amazonaws.com/images/cocacolamusicexperience2019-festival-260419.original.jpg" alt=""></div>
                        
                        <div class="item-historia">
                            <h2>En el Norte</h2>
                            <em>1980</em>
                            <p>Grupo Embotellador Nayar se expande a la zona norte del estado, iniciando operaciones los Centros de Distribución de Villa Hidalgo y Acaponeta</p>
                        </div>
                    </li>

                    <li data-date="01/01/1981">
                        <div class="item-historia"><img src="https://afrodita-production.s3.amazonaws.com/images/cocacolamusicexperience2019-festival-260419.original.jpg" alt=""></div>
                        
                        <div class="item-historia">
                            <h2>Se une el centro de distribución Tuxpan</h2>
                            <em>1981</em>
                            <p>Se une el centro de Distribución de Tuxpan, creciendo así el mercado de la zona norte de Nayarit.</p>
                        </div>
                    </li>

                    <li data-date="01/01/1987">
                        <div class="item-historia"><img src="https://afrodita-production.s3.amazonaws.com/images/cocacolamusicexperience2019-festival-260419.original.jpg" alt=""></div>
                        
                        <div class="item-historia">
                            <h2>La familia sigue creciendo</h2>
                            <em>1987</em>
                            <p>Ixtlán y Santiago, se unen a esta gran familia, Grupo Embotellador Nayar continúa creciendo y ofreciendo más oportunidades de empleo.</p>
                        </div>
                    </li>

                    <li data-date="01/01/1993">
                        <div class="item-historia"><img src="https://afrodita-production.s3.amazonaws.com/images/cocacolamusicexperience2019-festival-260419.original.jpg" alt=""></div>
                        
                        <div class="item-historia">
                            <h2>Se une el centro de distribución de la Peñita de Jaltemba</h2>
                            <em>1993</em>
                            <p>Grupo Embotellador Nayar inaugura su Centro de Distribución ubicado en la Peñita de Jaltemba para brindar una mejor atención al sector turismo.</p>
                        </div>
                    </li>

                    <li data-date="01/01/1994">
                        <div class="item-historia"><img src="https://afrodita-production.s3.amazonaws.com/images/cocacolamusicexperience2019-festival-260419.original.jpg" alt=""></div>
                        
                        <div class="item-historia">
                            <h2>Mejorando la calidad de nuestros productos</h2>
                            <em>1994</em>
                            <p>Preocupados siempre por mejorar la calidad de nuestros productos, nos comprometemos a cumplir con todos los requerimientos solicitados Coca Cola matriz, iniciamos con el sistema de calidad "Evolución 3".</p>
                        </div>
                    </li>

                    <li data-date="01/01/1995">
                        <div class="item-historia"><img src="https://afrodita-production.s3.amazonaws.com/images/cocacolamusicexperience2019-festival-260419.original.jpg" alt=""></div>
                        
                        <div class="item-historia">
                            <h2>Continuamos creciendo</h2>
                            <em>1995</em>
                            <p>Mezcales, Compostela y El Rosario, llegan a formar parte de Grupo Embotellador Nayar, centros de distribución que nos apoyan a continuar con el progreso y crecimiento de nuestra organización.</p>
                        </div>
                    </li>

                    <li data-date="01/01/1998">
                        <div class="item-historia"><img src="https://afrodita-production.s3.amazonaws.com/images/cocacolamusicexperience2019-festival-260419.original.jpg" alt=""></div>
                        
                        <div class="item-historia">
                            <h2>Inician las ventas de Ciel</h2>
                            <em>1998</em>
                            <p>Empezamos con la producción y venta de Agua purificada en garrafón de 20 litros de la marca Ciel, logrando rápidamente colocarse en la preferencia del consumidor.</p>
                        </div>
                    </li>

                    <li data-date="01/01/2000">
                        <div class="item-historia"><img src="https://afrodita-production.s3.amazonaws.com/images/cocacolamusicexperience2019-festival-260419.original.jpg" alt=""></div>
                        
                        <div class="item-historia">
                            <h2>Implementamos el sistema de preventas</h2>
                            <em>2000</em>
                            <p>A fin de proporcionar mejor servicio se instaura el modelo de preventa, lo que viene a revolucionar al área comercial.</p>
                        </div>
                    </li>

                    <li data-date="01/01/2003">
                        <div class="item-historia"><img src="https://afrodita-production.s3.amazonaws.com/images/cocacolamusicexperience2019-festival-260419.original.jpg" alt=""></div>
                        
                        <div class="item-historia">
                            <h2>50 aniversario</h2>
                            <em>2003</em>
                            <p>Grupo Embotellador Nayar cumple ¡50 años!</p>
                        </div>
                    </li>

                    <li data-date="01/01/2006">
                        <div class="item-historia"><img src="https://afrodita-production.s3.amazonaws.com/images/cocacolamusicexperience2019-festival-260419.original.jpg" alt=""></div>
                        
                        <div class="item-historia">
                            <h2>Incorporamos nuevos productos</h2>
                            <em>2006</em>
                            <p>Los gustos de los consumidores evolucionan día con día, incorporándonos en nuevas categorías y productos para otros nichos de mercado, incorporando la división de Preventa especializada en Productos no Carbonatados.</p>
                        </div>
                    </li>

                    <li data-date="01/01/2007">
                        <div class="item-historia"><img src="https://afrodita-production.s3.amazonaws.com/images/cocacolamusicexperience2019-festival-260419.original.jpg" alt=""></div>
                        
                        <div class="item-historia">
                            <h2>Formando alianzas</h2>
                            <em>2007</em>
                            <p>Siendo el envase PET uno de los insumos mas importantes se inician operación de soplado en sitio, formando una alianza estratégica con Bepensa a través de MegaEmpack.</p>
                        </div>
                    </li>

                    <li data-date="01/01/2008">
                        <div class="item-historia"><img src="https://afrodita-production.s3.amazonaws.com/images/cocacolamusicexperience2019-festival-260419.original.jpg" alt=""></div>
                        
                        <div class="item-historia">
                            <h2>Nos asociamos con Jugos del Valle</h2>
                            <em>2008</em>
                            <p>Grupo Embotellador Nayar se asocia para la incorporación de Jugos del Valle a las operaciones, iniciando el 14 de Enero con una rica y extensa variedad de bebidas con base en jugos y néctares, colocándose rápidamente en el gusto de nuestros consumidores.</p>
                        </div>
                    </li>

                    <li data-date="01/01/2009">
                        <div class="item-historia"><img src="https://afrodita-production.s3.amazonaws.com/images/cocacolamusicexperience2019-festival-260419.original.jpg" alt=""></div>
                        
                        <div class="item-historia">
                            <h2>Preocupados por el medio ambiente</h2>
                            <em>2009</em>
                            <p>Siempre preocupados por el cuidado del medio ambiente, se inaugura en la Planta de Tratamiento de Aguas Residuales, contribuyendo así a preservar nuestro ambiente mediante el cuidado del agua. Nos certificamos en el sistema de Calidad "Evolución 3" Cumpliendo con todos los requerimientos de Coca Cola de México.</p>
                        </div>
                    </li>

                    <li data-date="01/01/2011">
                        <div class="item-historia"><img src="https://afrodita-production.s3.amazonaws.com/images/cocacolamusicexperience2019-festival-260419.original.jpg" alt=""></div>
                        
                        <div class="item-historia">
                            <h2>Asegurando más nuestra calidad</h2>
                            <em>2011</em>
                            <p>Se logra el certificado en Food Safety System Certificación 22000 – 2010 (ISO 22000), cumpliendo con las normas internacionales de inocuidad alimentaria.</p>
                        </div>
                    </li>

                    <li data-date="01/01/2012">
                        <div class="item-historia"><img src="https://afrodita-production.s3.amazonaws.com/images/cocacolamusicexperience2019-festival-260419.original.jpg" alt=""></div>
                        
                        <div class="item-historia">
                            <h2>Socialmente responsables</h2>
                            <em>2012</em>
                            <p>Todo nuestros centros de distribución logran la certificación de Empresa Limpia, continuando siendo una empresa socialmente responsable. Recibimos de Bureau Veritas la recomendación para la certificación de ISO 9000. Se Inaugura el centro productor San Vicente ubicado en Bahía de Banderas Nayarit.</p>
                        </div>
                    </li>

                    <li data-date="01/01/2015">
                        <div class="item-historia"><img src="https://afrodita-production.s3.amazonaws.com/images/cocacolamusicexperience2019-festival-260419.original.jpg" alt=""></div>
                        
                        <div class="item-historia">
                            <h2>Grupo Embotellador Nayar recibe premio "Mejor Ejecución ICE Canal Tradicional"</h2>
                            <em>2015</em>
                            <p>Gracias al esfuerzo de los colaboradores, Coca Cola de México nos premio con este importante reconocimiento que es el resultado de la correcta aplicación de los estandares de ventas de la compañía.</p>
                        </div>
                    </li>
                </ol>
            </div> <!-- .events-content -->
        </section>
        <!-- Timeline slider FINAL -->
    </section>

    <!-- FINAL SECTION HISTORIA -->


    <!-- SECTION PRODUCTOS -->
    <section id="productos">
        <div class="title-section margin-bot-50">
            <hr>
            <h2>Nuestros Productos</h2>
        </div>

        <div>
            <ul class="flex-container-productos">
                <li class="box">
                    <img src="img/producto.jpg" alt="">
                    <h3>Coca-cola</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </li>
                
                <li class="box">
                    <img src="img/producto.jpg" alt="">
                    <h3>Coca-cola</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </li>
                
                <li class="box">
                    <img src="img/producto.jpg" alt="">
                    <h3>Coca-cola</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </li>
                
                <li class="box">
                    <img src="img/producto.jpg" alt="">
                    <h3>Coca-cola</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </li>
                
                <li class="box">
                    <img src="img/producto.jpg" alt="">
                    <h3>Coca-cola</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>              
                </li>
                
                <li class="box">
                    <img src="img/producto.jpg" alt="">
                    <h3>Coca-cola</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> 
                </li>
            </ul>

            <div class="mas-productos">
                <h1>Descubre mas productos de la familia Coca-Cola</h1>
                <a href="#">Descubre mas Productos</a>
            </div>
        </div>
    </section>

    <!-- FINAL SECTION PRODUCTOS -->


    <!-- SECTION BOLSA DE TRABAJO -->

    <section id="bolsa-trabajo">
        <div class="title-section margin-bot-50">
            <hr>
            <h2>Bolsa de Trabajo</h2>
        </div>

        <div class="parallax">
            <div class="bt-content">
                <h2>Se parte de Nuestra empresa</h2>
                <a href="#" class="open">Enviar mis Datos</a>
                <h3>Aviso</h3>
                <p>GRUPO EMBOTELLADOR NAYAR NO COBRA POR PARTICIPAR EN SUS PROCESOS DE RECLUTAMIENTO, EVALUACIÓN, SELECCIÓN Y CONTRATACIÓN DE PERSONAL.</p>
            </div>
        </div>
    </section>

    <!-- FINAL SECTION BOLSA DE TRABAJO -->



    <!-- SECTION NOTICIAS -->

    <section id="noticias">
        <div class="title-section margin-bot-50">
            <hr>
            <h2>Noticias</h2>
        </div>

        <div class="facebook">
            <div class="fb-page" 
                data-tabs="timeline,events,messages"
                data-href="https://www.facebook.com/GrupoEmbotelladorNayar/"
                data-hide-cover="false">
            </div>
        </div>
    </section>

    <!-- FINAL SECTION NOTICIAS  -->


    <!-- SECTION CONTACTO -->

    <section id="contacto">
        <div class="title-section margin-bot-50">
            <hr>
            <h2>Contacto</h2>
        </div>

        <div class="contacto-content">
            <div class="contacto-content-text">
                <h3>Envianos tus comentarios<br>¡Nos interesa mucho tu opinion!</h3>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3712.3213988953007!2d-104.88611758461433!3d21.495127477068195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8427371903a3e957%3A0x16e2bbc4f30555e4!2sEmbotelladora+del+Nayar!5e0!3m2!1ses-419!2sus!4v1565365102320!5m2!1ses-419!2sus" frameborder="0" style="border:0" allowfullscreen></iframe>

                <p>311 123 23 12</p>
                <p>informacion@dominio.com</p>
            </div>
        </div>
    </section>

    <!-- FINAL SECTION CONTACTO -->



    <!-- SECTION SIGUENOS -->

    <section id="siguenos">
        <div class="title-section">
            <hr>
            <h2>Siguenos</h2>
        </div>

        <div class="social-media">
            <img src="img/facebook.png" alt="">
            <img src="img/twitter.png" alt="">
            <img src="img/youtube.png" alt="">
            <img src="img/correo.png" alt="">
            <img src="img/instagram.png" alt="">
        </div>
    </section>

    <!-- FINAL SECTION SIGUENOS -->


    <!-- SECTION FOOTER -->

    <section id="footer">
        <ul class="flex-container-footer">
            <li class="item" id="foo-item1">
                <img class="imgcoca" src="img/logo.png" alt="">
            </li>
            <li class="item" id="foo-item2">
                <p>Av. Insurgentes #1100 | Col. Los Llanitos | C.P. 63170 <br>Tel. 2119700 | Tepic, Nayarit, Mexico. &copy 2019</p>
            </li>
            <li class="item" id="foo-item3">
                <a href="https://www.grupoalica.com.mx/" target="_blank">
                    <img class="imgalica" src="img/grupo_alica.png" alt="">
                </a>
            </li>
        </ul>
    </section>

    <!-- FINAL SECTION FOOTER -->
</body>
</html>