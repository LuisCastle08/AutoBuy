 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Agregar auto</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" type="image/png" href="../../images/icons/favicon2.png"/>
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.php">AUTOBUY</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="usuario/cerrar_sesion.php"><i class="fa fa-sign-out fa-lg"></i> Cerrar Sesion</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name">ADMINISTRACION</p>
        </div>
      </div>
      <ul class="app-menu">

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Agregar</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="index.php"><i class="icon fa fa-circle-o"></i>Auto</a></li>
          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span class="app-menu__label">Editar</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="editar.php"><i class="icon fa fa-circle-o"></i>Auto</a></li>
            
            <li><a class="treeview-item" href="editslider.php"><i class="icon fa fa-circle-o"></i>Carrusel</a></li>
          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="fa fa-trash-o" aria-hidden="true"></i><span class="app-menu__label">Borrar</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="borrar.php"><i class="icon fa fa-circle-o"></i>Auto</a></li>
            
          </ul>
        </li>
  
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> AGREGAR AUTOMOVIL</h1>
        </div>
        
      </div>


      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Registro</h3>
            <div class="tile-body">

              <form action="procesos/registrar.php" method="POST" enctype="multipart/form-data">
                <!--modelo-->
                <div class="form-group">
                  <label class="control-label">Modelo AutoMovil</label>
                  <input class="form-control" type="text" placeholder="Ingresa Modelo y marca" name="modelo" required>
                </div>
                <!--recorrido-->
                <div class="form-group">
                  <label class="control-label">Recorrido</label>
                  <input class="form-control" type="text" placeholder="Kilometros recorridos Km" name="kilometros" required>
                </div>
                <!--ciudad-->
                <div class="form-group">
                  <label class="control-label">Ciudad</label>
                  <input class="form-control" type="text" placeholder="Villahermosa" name="ciudad" required>
                </div>
                <!--tipo-pago-->
                <div class="form-group">
                  <label class="control-label">Tipo de pago</label>
                  <input class="form-control" type="text" placeholder="Negociable-Tarjeta-Fijo-Efectivo" name="tipodepago" required>
                </div>

                <!--Precio-->
                <div class="form-group">
                  <label class="control-label">Precio</label>
                  <input class="form-control" type="text" placeholder="$100,000" name="precio" required> 
                </div>
                <!--Descripcion-->
                <div class="form-group">
                  <label class="control-label">Descripcion</label>
                  <textarea class="form-control" rows="4" placeholder="EJEMPLO: Auto rapido con color rojo ford 2013 con vidrio roto" name="descripcion" required></textarea>
                </div>

                <div class="form-group">
                  <label class="control-label">Subir imagen de auto</label>
                  <input class="form-control" type="file" name="imguno">
                  <input class="form-control" type="file" name="imgdos">
                  <input class="form-control" type="file" name="imgtres">
                </div>
            
            </div>
            
          </div>
        </div>
        <!---->
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Ficha Tecnica</h3>
            <div class="tile-body">



              <h5 class="title-form" >Motor</h5>
                <!--combustible-->
                <div class="form-group">
                  <label class="control-label">Tipo de combustible:</label>
                  <input class="form-control" type="text" placeholder="Tipo de combustible" name="combustible" required>
                </div>
                <!--cilindros-->
                <div class="form-group">
                  <label class="control-label">Cilindros</label>
                  <input class="form-control" type="text" placeholder="Cilindros" name="cilindros" required>
                </div>
                <!--valvulas-->
                <div class="form-group">
                  <label class="control-label">Valvulas</label>
                  <input class="form-control" type="text" placeholder="Valvulas" name="valvulas" required>
                </div>
                <!--alimentacion-->
                <div class="form-group">
                  <label class="control-label">Alimentacion</label>
                  <input class="form-control" type="text" placeholder="Tipo de alimentacion" name="alimentacion" required>
                </div>

                <!--titulo-->
                <h5 class="title-form" >Performance</h5>
               <!--aceleracion-->
               <div class="form-group">
                  <label class="control-label">Aceleracion 0-100 Km/h</label>
                  <input class="form-control" type="text" placeholder="Aceleracion" name="aceleracion" required>
                </div>
                <!--cilindros-->
                <div class="form-group">
                  <label class="control-label">Velocidad máxima</label>
                  <input class="form-control" type="text" placeholder="Velocidad maxima" name="velocidad" required>
                </div>

                <!--titulo-->
                <h5 class="title-form" >Transmision y Chasis</h5>
               <!--traccion-->
               <div class="form-group">
                  <label class="control-label">Motor - Traccion</label>
                  <input class="form-control" type="text" placeholder="Traccion" name="traccion" required>
                </div>
                <!--transmision-->
                <div class="form-group">
                  <label class="control-label">Transmision</label>
                  <input class="form-control" type="text" placeholder="Trasmision" name="transmision" required>
                </div>
                <!--frenos-->
               <div class="form-group">
                  <label class="control-label">Frenos</label>
                  <input class="form-control" type="text" placeholder="Frenos" name="frenos" required>
                </div>
                <!--neumaticos-->
                <div class="form-group">
                  <label class="control-label">Neumaticos</label>
                  <input class="form-control" type="text" placeholder="Tamaño de neumaticos" name="neumaticos" required>
                </div>

                <!--titulo-->
                <h5 class="title-form" >Medidas y Capacidades</h5>
               <!--largo-->
               <div class="form-group">
                  <label class="control-label">Largo</label>
                  <input class="form-control" type="text" placeholder="Largo del carro" name="largo" required>
                </div>
                <!--Ancho-->
                <div class="form-group">
                  <label class="control-label">Ancho</label>
                  <input class="form-control" type="text" placeholder="Ancho del carro" name="ancho" required>
                </div>
                <!--Alto-->
               <div class="form-group">
                  <label class="control-label">Alto</label>
                  <input class="form-control" type="text" placeholder="Alto del carro" name="alto" required>
                </div>
                <!--tanque-->
                <div class="form-group">
                  <label class="control-label">Tanque de combustible</label>
                  <input class="form-control" type="text" placeholder="Tipo de combustible" name="tanque" required>
                </div>
        
        

                
              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Registrar</button>
            
              </form>
            </div>
            
          </div>
        </div>
      </div>


    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>