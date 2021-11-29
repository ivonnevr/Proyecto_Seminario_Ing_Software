<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Equipos audiovisuales</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-sixteen.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <div class="borde">
            <img src="{{ asset('images/logo.png') }}" width="100px">
          </div>
          <a class="navbar-brand"><h2>Audiovisuales <em>Kanek</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">Inicio
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item active">
                <a class="nav-link" href="equipos">Equipos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dluxdj">DLUX DJ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="grupocalypso">Grupo Calypso</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactos">Contacto</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4><font color="red">Equipo</font></h4>
              <h2>Sonido e iluminación</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <h3>Nuestros equipos</h3>
            </div>
          </div>
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                    <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item">
                        <a href="#"><img src="{{ asset('images/pantallas.jpg') }}" alt=""></a>
                        <div class="down-content">
                          <h4><font color="red">Pantallas LED</font></h4>
                          <p>
                            Pantallas LED de 4 y 2.6 mm instaladas con todo lo necesario para su correcto funcionamiento.<br><br>
                            Puede ser instalada sobre una estructura metálica en una plataforma, como las de escenarios.<br><br><br><br>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all dev">
                      <div class="product-item">
                        <a href="#"><img src="{{ asset('images/sonido.jpg') }}" alt=""></a>
                        <div class="down-content">
                          <h4><font color="red">Sonido e iluminación</font></h4>
                          <p>
                            Renta de equipo de audio e iluminación para grupos musicales.<br><br>
                            Equipos de sonido 100% profesionales de marcas de prestigio como RCF, Yamaha, JBL, entre otras.<br><br>
                            También, sonorizamos grupos versátiles, grupos de reggae, bandas de rock, sonoras y bandas estilo sinaloense.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all gra">
                      <div class="product-item">
                        <a href="#"><img src="{{ asset('images/microfonos.jpg') }}" alt=""></a>
                        <div class="down-content">
                          <h4><font color="red">Micrófonos</font></h4>
                          <p>
                            Micrófonos inalámbricos que brindan la libertad de moverse libremente sin estar atado a un espacio limitado por el largo de un cable.<br><br>
                            Contamos con micrófonos:<br>
                            - Inalámbricos de mano<br>
                            - De diadema<br>
                            - Lavalier<br><br>
                          </p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading2">
              <h2>Escríbenos para cotizar tu evento</h2>
            </div>
          </div>

          <br><br><br>

          <form action="{{ route('equipo.store') }}" method="POST">
            @csrf
            <div class="one-half">
              <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre completo" required>
              @error('nombre')
                <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
              @enderror
            </div>
            <div class="one-half last">
              <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" required>
              @error('telefono')
                <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
              @enderror
            </div>
            <div class="one-half">
              <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo electrónico" required>
              @error('correo')
                <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
              @enderror
            </div>
            <div class="one-half last">
              <input type="date" class="form-control" name="fecha" id="fecha" required>
              @error('fecha')
                <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
              @enderror
            </div>
            <div class="one-half">
              <select name="equipo" id="equipo" class="form-control" required>
                <option value="none" disabled selected>-- Seleccione el equipo de su interés --</option>
                <option value="Pantalla">Pantalla</option>
                <option value="Sonido e iluminación">Sonido e iluminación</option>
                <option value="Micrófono">Micrófono</option>
              </select>
              @error('equipo')
                <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
              @enderror
            </div>
            <div class="one-half last">
              <input type="text" class="form-control" name="lugar" id="lugar" placeholder="Lugar del evento" required>
              @error('lugar')
                <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
              @enderror
            </div>
            <div class="one-half">
              <textarea name="mensaje" rows="2" class="form-control" id="mensaje" placeholder="Mensaje" required></textarea>
              @error('mensaje')
                <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
              @enderror
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br>
            <div class="col-lg-12" align="center">
              <button type="submit" id="form-submit" class="boton">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2021 Kanek Audiovisuales</p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    <!-- Additional Scripts -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/owl.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/isotope.js') }}"></script>
    <script src="{{ asset('js/accordions.js') }}"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
