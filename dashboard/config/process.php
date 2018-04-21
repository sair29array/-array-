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







	


	}

 ?>