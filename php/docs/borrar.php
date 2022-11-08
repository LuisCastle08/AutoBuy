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
    <title>Borrar autos</title>
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

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="fa fa-trash" aria-hidden="true"></i><span class="app-menu__label">Borrar</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="borrar.php"><i class="icon fa fa-circle-o"></i>Auto</a></li>
          </ul>
        </li>
  
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Borrar informacion del Auto</h1>
        </div>
        
      </div>
      


      <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">AUTOS</h3>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                  <th>ID</th>
                  <th>Modelo</th>
                    <th>Recorrido</th>
                    <th>Ciudad</th>
                    <th>Tipo de pago</th>
                    <th>Precio</th>
                    <th>Descripcion</th>
                    <th>Imagen1</th>
                    <th>Imagen2</th>
                    <th>Imagen3</th>
                    <th>Borrar</th>
                  </tr>
                </thead>

                <?php
            
            include ('conexion/conexion.php');

            $consulta_mysqli = "SELECT * FROM autos";
            $resultado_consulta_mysqli = mysqli_query($conexion, $consulta_mysqli);

            while($registro = mysqli_fetch_array($resultado_consulta_mysqli)){
                $id = $registro["id"];
                $modelo = $registro["modelo"];
                $marca = $registro["kilometros"];
                $ciudad = $registro["ciudad"];
                $tipodepago = $registro["tipodepago"];
                $precio = $registro["precio"];
                $descripcion = $registro["descripcion"];
                $imagen1 = $registro["imguno"];
                $imagen2 = $registro["imgdos"];
                $imagen3 = $registro["imgtres"];

        ?>

                <tbody>
                  <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $modelo; ?></td>
                    <td><?php echo $marca; ?></td>
                    <td><?php echo $ciudad; ?></td>
                    <td><?php echo $tipodepago; ?></td>
                    <td><?php echo $precio; ?></td>
                    <td><?php echo $descripcion; ?></td>
                    <td><img src="procesos/<?php echo $imagen1; ?>" width = "100px" alt=""></td>
                    <td><img src="procesos/<?php echo $imagen2; ?>" width = "100px" alt=""></td>
                    <td><img src="procesos/<?php echo $imagen3; ?>" width = "100px" alt=""></td>
                    <td><a class="btn btn-primary borrar" href="borrarex.php?id=<?php echo $id?>"><i class="fa fa-lg fa-trash"></i></a></td>
                   
                  </tr>
                  
                  <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      
    </main>

    <script src="js/confirmacionborrar.js"></script>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
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