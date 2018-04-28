<?php 
	
	class process 
	{
		
		public function peticion_de_acceso_admin($user,$pass)
		{
			include("conexion.php");
        $consult = mysqli_query($conn, "SELECT * FROM admin_user  ");
        	foreach ($consult as $adm_us) 
        	{
        		$acceso =  0;
        		if ($adm_us["email"]==$user && $adm_us["pass"]==$pass) 
        		{
        			$acceso = 1;
        		}
        	}

        	return $acceso;
		}



		public function Get_info_admin($email_user)
		{
			include("conexion.php");
			$consult = mysqli_query($conn, "SELECT * FROM admin_user where  email = '$email_user' ");
			return mysqli_fetch_all($consult, MYSQLI_ASSOC);

		}





		public function logout()
		{
			session_destroy();
			header('Location: ../dashboard ');
		}






		public function mostrar_usuarios_array()
		{
		include("conexion.php");
        $consult = mysqli_query($conn, "SELECT * FROM usuarios ORDER BY id ASC ");
        return mysqli_fetch_all($consult, MYSQLI_ASSOC);
		}



		public function mostrar_Un_User_en_particular($id)
		{
				include("conexion.php");
        	$consult = mysqli_query($conn, "SELECT * FROM usuarios Where id = '$id' ");
        	 return mysqli_fetch_all($consult, MYSQLI_ASSOC);
		}




		public function GetActividadOContratosVigentes()
		{
			$v = 1; /// contrato vigente
			include("conexion.php");
        	$consult = mysqli_query($conn, "SELECT * FROM contratos_servicios_users Where  contrato_activo = '$v' ");
        	 return mysqli_fetch_all($consult, MYSQLI_ASSOC);
        	
		}

		public function GetSolicitudesContratosUser()
		{
			include("conexion.php");
        	$consult = mysqli_query($conn, "SELECT * FROM contratos_servicios_users ");
        	 return mysqli_fetch_all($consult, MYSQLI_ASSOC);
		}




		public function Get_Actividad_Contratos_Activos_User($_id_user)
		{
			include("conexion.php");
        	$consult = mysqli_query($conn, "SELECT * FROM contratos_servicios_users where id_usuario = '$_id_user' AND  contrato_activo = 1 ");
        	 return mysqli_fetch_all($consult, MYSQLI_ASSOC);
		}


		public function get_notas($id_admin, $date_actual)
		{
			include("conexion.php");
        	$consult = mysqli_query($conn, "SELECT * FROM notas_o_tareas_admin Where id_admin = '$id_admin' AND fecha = '$date_actual' ");
        	 return mysqli_fetch_all($consult, MYSQLI_ASSOC);
		}

		public function GuardAnota($fecha,$nota)
		{
			?> <script type="text/javascript">alert("dd");</script> <?php 
		}





	}

 ?>