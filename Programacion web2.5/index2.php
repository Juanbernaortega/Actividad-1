<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" type="image/png" sizes="96x96" href="img/logo2.png">
  <meta charset="utf-8">
  <title>Ambientes Educativos Digitales</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Bell
    Theme URL: https://bootstrapmade.com/bell-free-bootstrap-4-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="index.html"><img src="img/icon.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Bell</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="#presentacion">Inicio</a></li>
          <li><a href="#definicion">Definicion</a></li>
          <li><a href="#caracteristicas">Características</a></li>
          <li><a href="#tipos">Tipos</a></li>
          <li><a href="#tendencias">Tendencias</a></li>
          <li><a href="#ventajas">Ventajas</a></li>
          <li><a href="#desventajas">Desventajas</a></li>
          <li><a href=""></a></li>
              <li><a href=""></a></li>
          <li><a href="">BIENVENIDO <BR> <strong><?php echo $_SESSION['user'];?></strong> </a></li>
         <li><a href="desconectar.php"> Cerrar Cesión </a></li>
 

        </ul>
      </nav>
      <!-- #nav-menu-container -->
  </header>
  <!-- #header -->

  <!-- About -->

  <section class="about" id="presentacion">
 <div id="myCarousel" class="carousel slide homCar">
		<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:1px solid #222; border-radius:4px;">
		  <div class="item active">
			<img src="img/banner2.jpg" alt="#" style="min-height:250px; min-width:100%"/>
		
  </section>

  <section class="cta" id="definicion">
    <div class="container">
      <div class="row" >
        <div class="col-lg-9 col-sm-12 text-lg-left text-center">
          <h2 style="margin-top:50px;">
             Definición
            </h2>
             <p class="justify">
              Cuando hablamos de ambientes educativos digitales o virtuales nos hace referencia a una educación a distancia, la cual esta siendo mediada por la tecnología, donde el internet cumple un papel muy importante y en el que se requiere al docente el cual dirige el proceso de ensenñanza – aprendizaje, el estudiante el cual ejecuta el proceso de aprendizaje realizando las diversas tareas y la tecnología la cual sirve de mediador entre el docente y el estudiante. En otras palabras un ambiente educativo digital es el conjunto de entornos de interacción sincrónica y asincrónica donde con base a un programa curricular, se llevan a cabo el proceso de enseñanza y aprendizaje, atravez de un sistema de administración de aprendizaje.
             </p>
        </div>
      </div>
    </div>
  </section>
  <section class="features" id="caracteristicas">
    <div class="container">
      <h2 class="text-center">
        Características
      </h2>
      <div class="row">
        <div class="feature-col col-lg-4 col-xs-12">
          <div class="card card-block text-center">
            <div>
              <div class="feature-icon">
                <span class="fa fa-rocket"></span>
              </div>
            </div>
            <div>
              <h3>
                Ambiente Electrónico
                </h3>
              <p>
                Es un ambiente electrónico, no material en sentido físico, creado y constituido por tecnologías digitales
              </p>
            </div>
          </div>
        </div>
        <div class="feature-col col-lg-4 col-xs-12">
          <div class="card card-block text-center">
            <div>
              <div class="feature-icon">
                <span class="fa fa-envelope"></span>
              </div>
            </div>
            <div>
              <h3>
                Programas y Aplicaciones
                </h3>
              <p>
                Las aplicaciones o programas informáticos que lo conforman sirven de soporte para las actividades formativas de docentes y alumnos.
              </p>
            </div>
          </div>
        </div>
        <div class="feature-col col-lg-4 col-xs-12">
          <div class="card card-block text-center">
            <div>
              <div class="feature-icon">
                <span class="fa fa-bell"></span>
              </div>
            </div>

            <div>
              <h3>
                Relación Docente y Alumno 
                </h3>

              <p>
                La relación didáctica no se produce en ellos “cara a cara” (como en la enseñanza presencial), sino mediada por tecnologías digitales. Por ello los EVA permiten el desarrollo de acciones educativas sin necesidad de que docentes y alumnos coincidan en el espacio o en el tiempo.3
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="feature-col col-lg-4 col-xs-12">
          <div class="card card-block text-center">
            <div>
              <div class="feature-icon">
                <span class="fa fa-database"></span>
              </div>
            </div>

            <div>
              <h3>
                 Aprendizaje Colaborativo
                </h3>

              <p>
                Es un espacio social que favorece el encuentro y la interacción de los actores. Suele basarse en el principio de aprendizaje colaborativo, que permite a los estudiantes realizar sus aportes y expresar sus inquietudes en los foros
              </p>
            </div>
          </div>
        </div>
        <div class="feature-col col-lg-4 col-xs-12">
          <div class="card card-block text-center">
            <div>
              <div class="feature-icon">
                <span class="fa fa-cutlery"></span>
              </div>
            </div>
            <div>
              <h3>
                 Su Papel
                </h3>
              <p>
                Puede ser parte de un programa de educación a distancia o ser complemento de la educación presencial.
              </p>
            </div>
          </div>
        </div>
        <div class="feature-col col-lg-4 col-xs-12">
          <div class="card card-block text-center">
            <div>
              <div class="feature-icon">
                <span class="fa fa-dashboard"></span>
              </div>
            </div>
            <div>
              <h3>
                Flexibilidad
                </h3>
              <p>
                 Conjunto de funcionalidades que permiten que el evd se adapte fácilmente a la estructura institucional, los planes de estudio, los contenidos y estilos pedagógicos de la institución en donde se quiere implantar.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="cta" id="tipos">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-sm-12 text-lg-left text-center">
          <h2 style="margin-top:50px;">
            Tipos
            </h2>
          <p class="justify">
            Los tipos de ambientes educativos digitales son:
           Las plataformas de e learning, las wikis, los blocks y redes sociales, lo que distingen a estos ambientes una de la otra es sus dimensiones tecnológicas y sus potencialidades educativas que cada uno de ellos ofrece, sirviendo de soporte a diferentes actividades educativas. La elección de uno o de otro dependerá de aquello que se quiere presentar, puede ser institucionales, didáctico, tecnologíco o personal.

          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="features" id="tendencias">
    <div class="container">
      <h2 class="text-center">
        Tendencias
      </h2>
      <div class="row">
        <div class="feature-col col-lg-4 col-xs-12">
          <div class="card card-block text-center">
            <div>
              <div class="feature-icon">
                <span class="fa fa-rocket" data-toggle="modal" data-target="#myModal"></span>


                <div id="myModal" class="modal fade col-lg-12" role="dialog">
                  <div class="modal-dialog">
                
                    <!-- Mo1dal content-->
                    <div class="modal-content">
                      <div class="modal-body">
                        
         
                  
                      </div>
                      <div class="modal-footer col-lg-12">
                     
                      </div>
                    </div>
                
                  </div>
                </div>

              </div>
            </div>
            <div>
              <h3>
                LOS MOOC
                </h3>
              <p>
                es un Curso On-line, en Abierto y Masivo. Traduciéndolo un poco, lo que quiere decir es que es un curso a distancia, accesible a través de internet donde se puede apuntar cualquier persona y prácticamente sin límite de participantes.
              </p>
            </div>
          </div>
        </div>
        <div class="feature-col col-lg-4 col-xs-12">
          <div class="card card-block text-center">
            <div>
              <div class="feature-icon">
                <span class="fa fa-envelope"></span>
              </div>
            </div>
            <div>
              <h3>
                 LOS PRE
                </h3>
              <p>
                Los Entornos Personales de Aprendizaje, son sistemas que ayudan a los estudiantes a tomar el control y gestión de su propio aprendizaje. Esto incluye el apoyo a los estudiantes para fijar sus propios objetivos de aprendizaje, gestionar su aprendizaje, la gestión de los contenidos y procesos, comunicarse con otros en el proceso de aprendizaje y lograr así los objetivos de aprendizaje.
              </p>
            </div>
          </div>
        </div>
        <div class="feature-col col-lg-4 col-xs-12">
          <div class="card card-block text-center">
            <div>
              <div class="feature-icon">
                <span class="fa fa-bell"></span>
              </div>
            </div>
            <div>
              <h3>
                Blogs, wikis y redes sociales
                </h3>
              <p>
                Son aplicaciones propias de la llamada
                web 2.0 , generación actual de la red que se caracteriza po
                r el protagonismo de los usuarios , al permitirles participar activamente en la publicación de contenidos, interactuar y coopera
                 entre sí. 
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="feature-col col-lg-4 col-xs-12">
          <div class="card card-block text-center">
            <div>
              <div class="feature-icon">
                <span class="fa fa-database"></span>
              </div>
            </div>
            <div>
              <h3>
                Foros de discusión.
                </h3>
              <p class="justify">
            De acuerdo con Romero (2008), los foros de discusión son las aplicaciones más usadas en la enseñanza a distancia a través de la red después de correo electrónico. Su funcionamiento suele ser similar en todos los foros: se crean temas y subtemas y los participantes pueden contestar a los mensajes o crear nuevos. Como se recoge en la Wikipedia
              </p>
            </div>
          </div>
        </div>

        <div class="feature-col col-lg-4 col-xs-12">
          <div class="card card-block text-center">
            <div>
              <div class="feature-icon">
                <span class="fa fa-cutlery"></span>
              </div>
            </div>

            <div>
              <h3>
                  Excellent Features
                </h3>

              <p>
                Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.
              </p>
            </div>
          </div>
        </div>

        <div class="feature-col col-lg-4 col-xs-12">
          <div class="card card-block text-center">
            <div>
              <div class="feature-icon">
                <span class="fa fa-dashboard"></span>
              </div>
            </div>

            <div>
              <h3>
                  Retina Ready
                </h3>

              <p>
                Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="cta" id="ventajas">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-sm-12 text-lg-left text-center">
          <h2 class="text-center">
            Ventajas
            </h2>
            <p class="justify">
          
              •	Más centradas en los intereses y posibilidades del estudiante
               El maestro puede cualificar su trabajo en el aula aprovechando las posibilidades que ofrecen las TIC. Por ejemplo, diversificar y enriquecer los contenidos académicos a los que hace referencia, aprovechando las múltiples fuentes de información de internet; puede mejorar las propuestas de escritura que propone a sus estudiantes utilizando el procesador de texto, lo cual les permite que se concentren más en elaborar, ampliar o precisar aspectos de contenido. 
            <br><br>
             •	Pueden estimular más el pensamiento crítico
             Diversos estudios han demostrado que, en comparación con la clase tradicional, los programas multimediales pueden ayudar al estudiante a aprender más información de manera más rápida, ahorrando hasta un 80 por ciento de tiempo en el aprendizaje
             <br> <br>
              •	Utilizan múltiples medios para presentar información
              La combinación de textos, gráficos, sonido, fotografías, animaciones y videos permite transmitir el conocimiento de manera mucho más natural, vívida y dinámica, lo cual resulta crucial para el aprendizaje.
            <br><br>
             •	Algunas investigaciones han mostrado que la presencia de varios medios ayuda a incrementar el aprendizaje. Por ejemplo, se ha encontrado que los niños aprenden mejor el contenido de un texto cuando tiene ilustraciones. Asimismo se ha establecido que cuando los estudiantes pueden escuchar una descripción verbal simultáneamente con una animación, aprenden más que cuando sólo oyen la descripción o ven la animación. 
            <br><br>
            •	Ofrecen condiciones adecuadas para el aprendizaje cooperativo
             El aprendizaje cooperativo es el empleo didáctico de grupos reducidos en los que los alumnos trabajan juntos para maximizar su propio aprendizaje y el de los demás.
              <br><br>
              •	Los docentes debemos optar por el empleo de estrategias metodológicas de aprendizaje cooperativo, donde se creen otras condiciones escolares, donde evitemos caer en la memorización y donde busquemos alternativas para que los estudiantes comprendan y compartan las experiencias en relación a un texto, asignatura o contenido; es decir que  expongan los diferentes puntos de vista acerca de un contenido, así permitiremos que el aprendizaje se socialice y se potencialice.
      
            </p>
        </div>
      </div>
    </div>
  </section>
  <section class="about" id="desventajas">
    <div class="container text-center">
      <h2 class="text-center">
        Desventajas 
        </h2>

      <p class="justify">
        •	Problemas Técnicos: Incompatibilidades entre diversos tipos de computadores y sistemas operativos, el ancho de banda disponible para Internet, la velocidad aún insuficiente de los procesadores para realizar algunas tareas (reconocimiento de voz perfeccionado, traductores automáticos). <br> 
<br>
        •	Problemas de Seguridad: Circunstancias como el riesgo de que se produzcan accesos no autorizados a los computadores que están conectados a Internet y el posible robo de información. <br>
        <br>
        •	Barreras Culturales: El idioma dominante, el inglés, en el que vienen muchas referencias e informaciones de Internet (hay muchas personas no lo conocen); la tradición en el uso de instrumentos tecnológicos avanzados (inexistente en muchos países poco desarrollados), etc.
        <br><br>
        
        •	Los niños pueden llegar a un punto donde solo querrán trabajar con la computadora.
       <br> <br>
        •	No se utilizara un material didáctico donde ellos podrán trabar e experimentar.
        <br><br>
        •	La escasa cobertura tecnológica: que no le permite el acceso a toda la población que requiera de estos servicios.
        <br><br>
        •	El facilismo, en algunas circunstancias puede facilitar las trampas, la manipulación y el fraude sino existe la presencia del docente.
        <br><br>
        •	Falta de Formación: La necesidad de unos conocimientos teóricos y prácticos que todas las personas deben aprender, la necesidad de aptitudes y actitudes favorables a la utilización de estas nuevas herramientas (alfabetización en TIC).
        s <br><br>
      </p>
    </div>
  </section>

  <!--section class="portfolio" id="ejemplos">
    <div class="container text-center">
      <h2 class="text-center">
        Ejemplos 
        </h2>

      <p>
        Voluptua scripserit per ad, laudem viderer sit ex. Ex alia corrumpit voluptatibus usu, sed unum convenire id. Ut cum nisl moderatius, Per nihil dicant commodo an.
      </p>
    </div>

    <div class="portfolio-grid">
      <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="card card-block">
            <a href="#"><img alt="" src="img/porf-1.jpg">
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    The Dude Rockin'
                  </h3>

                  <p class="card-text">
                    Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                  </p>
                </div>
              </div></a>
          </div>
        </div>
      </div>
    </div>
  </section>-->

  <footer class="site-footer">
    <div class="bottom">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-xs-12 text-lg-left text-center">
            <p class="copyright-text">
              © unicor
            </p>
            <div class="credits">
             <img src="img/logo2.png" width="50">
              <a href="https://www.unicordoba.edu.co/"> Universidad</a> de Córdoba 
            </div>
          </div>

          <div class="col-lg-6 col-xs-12 text-lg-right text-center">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#presentacion">Inicio</a>
              </li>

              <li class="list-inline-item">
                <a href="#definicion">Definicion</a>
              </li>

              <li class="list-inline-item">
               <a href="#caracteristicas">Características</a>
              </li>

              <li class="list-inline-item">
                <a href="#tipos">Tipos</a>
              </li>

              <li class="list-inline-item">
             <a href="#tendencias">Tendencias</a>
              </li>

              <li class="list-inline-item">
                <a href="#ventajas">Ventajas</a>
              </li>
              <li class="list-inline-item">
                <a href="#desventajas">Desventajas</a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </footer>
  <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>


  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/tether/js/tether.min.js"></script>
  <script src="lib/stellar/stellar.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/easing/easing.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/lockfixed/lockfixed.min.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>

</body>
</html>
