
<?php 
	$puntos_descuentos = $sair->GetPuntosDescuentos($user_["id"]);
	$puntos = 0;
	foreach ($puntos_descuentos as $p) 
	{
		$puntos = $puntos + $p["puntos"];
	}
 ?>

<h3  >Consulta general Puntos y descuentos &nbsp;&nbsp;<span class="badge amber darken-2">Puntos: <?php echo $puntos; ?></span>&nbsp;&nbsp;<a @click = "ver_herramientas = true" class="badge red text-white">Volver</a></h3>


	
		<!--Table-->
<table class="table table-responsive">

    <!--Table head-->
    <thead class="blue-grey lighten-4">
        <tr>
            <th></th>
            <th>Descuento</th>
            <th>Aplica a</th>
            <th>Motivo</th>
            <th>Fin del descuento</th>
            <th></th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
    	
              

               	<?php 
    			foreach ($puntos_descuentos as $pd) 
    			{

    				?>
    				<tr>
                    <td></td>
    				<td><?php echo $pd["descuento"]."%"; ?></td>
                    <td><?php echo $pd["aplica"]; ?></td>
                    <td><?php echo $pd["motivo"]; ?></td>
                    <td><?php echo $pd["fecha_fin_descuento"]; ?></td>
                    <td></td>
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
