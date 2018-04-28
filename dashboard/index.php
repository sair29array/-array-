<?php 
require_once("config/conexion.php");
    session_start();
    
	require_once("config/process.php");
	$sair = new process();
    if (isset($_GET["Logout"])) 
    {
       $sair->logout(); // cerrar session
       
    }
 ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Array - Admin</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="css/plugins/timeline/timeline.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/preload.css" rel="stylesheet">

</head>

<body>
    <!--loader page -->
    <div id="contenedor">
        <div id="cargar"></div>
    </div>
    <!-- fin loader page -->
    <div id="wrapper">

        
    	<?php 
    if (isset($_SESSION['admin'])) 

      {
        $eu = $_SESSION["admin"];
        $admin_ = $sair->Get_info_admin($eu);
        foreach ($admin_ as $adm) {
            $email_admin = $adm["email"];
            $id_admin = $adm["id"];
        }
    		//Vista fija // Banner o header
    		include("views/fijas/header.php");
    		//Vista fija // menu
    		include("views/fijas/menu.php");
    	 ?>



            

        <div id="page-wrapper">
        	<?php 
        	if (!isset($_GET[':'])) {
    			include("views/volatiles/dashboard.php");
    		}else if ($_GET[":"]=="todos-los-usuarios") {
    			include("views/volatiles/todos-los-usuarios.php");
    		}else if ($_GET[":"]=="users-con-actividad") {
                include("views/volatiles/users-con-actividad.php");
            }else if ($_GET[":"]=="users-sin-actividad") {
                include("views/volatiles/users-sin-actividad.php");
            }else if ($_GET[":"]=="SolicitudesContratosUser") {
                include("views/volatiles/SolicitudesContratosUser.php"); //// Esta muestra todas las solicitudes 
            }else if ($_GET[":"]=="All-Solcitud") {
                include("views/volatiles/MostrarDetallesDeUnaSolicitudEnParticular.php"); //// Este archivo muestra una solicitud de contrato en particular
            }else if ($_GET[":"]=="All-From") {
                include("views/volatiles/TodosLosDetallesDeUnUser.php"); // /todos los detalles de un user en especififico
            }
      

      }else{
            include("login.php");
          }


        	 ?>
        </div>

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="js/plugins/morris/morris.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <script src="js/demo/dashboard-demo.js"></script>






      <!-- Page-Level Plugin Scripts - Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!--Script Loader Page -->
    <script type="text/javascript">
        window.onload = function () {
            var contenedor = document.getElementById('contenedor');
        }
        contenedor.style.visibility = 'hidden';
        contenedor.style.opacity = '0';
    </script>
    <!-- FIN Script Loader Page -->

</body>

</html>
