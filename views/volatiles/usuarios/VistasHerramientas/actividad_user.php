<?php  
$actividad = $sair -> verificar_actividad_user($user_["id"]);
?>


<h3  >Consulta general - Actividad en Array&nbsp;&nbsp;<a @click = "ver_herramientas = true" class="badge red text-white">Volver</a></h3>


	
		<!--Table-->
<table class="table table-responsive">

    <!--Table head-->
    <thead class="blue-grey lighten-4">
        <tr>
            <th>Fecha Movimiento</th>
            <th>Descripción</th>
            <th>Valor</th>
            <th>Plazo</th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        <?php 
            if ($actividad == 1) 
            {
                $contratos = $sair-> Get_actividad_user($user_["id"]);
               ?>
               
                <?php 
                foreach ($contratos as $contrato) 
                {
                    ?>
                    <tr>
                     <td><?php   ?></td>
                    <td><?php  ?></td>
                    <td><?php  ?></td>
                    <td><?php  ?></td>
                    </tr>
                    <?php 
                } 
                ?>
               

               
               <?php 
            }else{
                 ?>
               <tr>
                    <th scope="row">No</th>
                    <td>No</td>
                    <td>No</td>
                    <td>No</td>
                    
               </tr>
               <?php 
            }
         ?>
        
        
        
    </tbody>
    <!--Table body-->

</table>
<!--Table-->






<?php 

include("Publicidad.php");
 ?>