
<section v-if="!UpdateDataUser" class="section text-justify" id="v_Updatedata">

   <h3  >Consulta general-Tu información personal &nbsp;&nbsp;<a @click = "ver_herramientas = true" class="badge red text-white">Volver</a><a @click = "UpdateDataUser = true" class="badge blue text-white">Actualizar</a></h3> <br>

    <div class="row">
 <!--Grid column-->
        <div class="col-md-12 col-xl-12">
             <!--Grid row-->
            <div class="row">
                <div class="col-md-6">
    <table class="table table-responsive">
    <!--Table body-->
    <tbody>
        <tr>
        <td>Nombres:</td>
        <td><?php echo $user_["nombres"]; ?></td>
        </tr>

        <tr>
        <td>Apellidos:</td>
        <td><?php echo $user_["apellidos"]; ?></td>
        </tr>

        <tr>
        <td>Cedula:</td>
        <td><?php echo $user_["cedula"]; ?></td>
        </tr>

         <tr>
        <td>Email:</td>
        <td><?php echo $user_["email"]; ?></td>
        </tr>

         <tr>
        <td>Celular:</td>
        <td><?php echo $user_["celular"]; ?></td>
        </tr>


        <tr>
        <td>Ubicación:</td>
        <td><?php echo $user_["departamento_ciudad"]; ?></td>
        </tr>

        <tr>
        <td>Empresa:</td>
        <td><?php echo $user_["empresa"]. " Nit: " . $user_["nit_empresa"]; ?></td>
        </tr>

        
        
    </tbody>
    <!--Table body-->
</table>

<!--Table-->
<script>
    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
<a href="./?:=Politicas-de-Privacidad" data-toggle="tooltip" data-placement="top" title="Conoce la Política de datos de Array">¿Por qué tengo que facilitar mis datos personales?</a>
                </div>
            </div>

        </div>
    </div>
</section>





                            
<section v-if="UpdateDataUser" class="section text-justify" id="v_Updatedata">

    
<?php $actividad = $sair -> verificar_actividad_user($user_["id"]); 
///// si tiene actividad o contratos con nosotros, no puede editar su numero de cedula porque el contrato se acordó con el tutular de la misma
$actividad_empresa_user = $sair->verificar_actividad_user_Empresa($user_["id"]); // Esta función se encargará de consultar si la emprpesa del user logueado tiene actividad con nosotros
 ?>
    <h3  >Actualiza tu  información &nbsp;&nbsp;<a @click = "UpdateDataUser = false" class="badge red text-white">Volver</a></h3> <br>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-12 col-xl-12">
            <form id="contact-form" name="contact-form" action="" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                    	<label for="name" class="">Nombres:</label>  
                        <div class="md-form">
                            <input type="text" class="form-control" name="nombres" value="<?php echo $user_["nombres"]; ?>">                            
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                    	<label for="email" class="">Apellidos:</label>
                        <div class="md-form">
                            <input type="text" id="email" name="apellidos" class="form-control" value="<?php echo $user_["apellidos"]; ?>">
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
                <div class="row">
                    <?php if ($actividad ==  0) /// Si el user tiene actividades o contratos
                    {
                        ?>   
                               
                    <!--Grid column-->
                    <div class="col-md-6">
                        <label for="email" class="">Cedula:</label>
                        <div class="md-form">
                            <input  type="number" id="email" name="cedula" class="form-control " value="<?php echo $user_["cedula"]; ?>">
                        </div>
                    </div>
                    <!--Grid column-->
                     <?php }
                     else
                     { 
                        ?>
                                <!--Grid column-->
                            <div class="col-md-6 ">
                                <label for="email" class="">Cedula:</label>
                                <div class="md-form">
                                    <input disabled="true"  type="number" id="cedula" name="cedula" class="form-control " value="<?php echo $user_["cedula"]; ?>">
                                </div>
                            </div>
                            <!--Grid column-->

                         <?php 
                     }
                     
                      ?>

                      
                    <!--Grid column-->
                    <div class="col-md-6">
                    	<label for="email" class="">Ubicación:</label>
                        <div class="md-form">
                            <input type="text" id="email" name="ubicacion" class="form-control" value="<?php echo $user_["departamento_ciudad"]; ?>">
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                   <?php 
                        if ($actividad_empresa_user == 0 ) 
                        {
                            ?>
                            <!--Grid column-->
                            <div class="col-md-6">
                                <label for="name" class="">Nit empresa:</label>
                                <div class="md-form">
                                    <input type="number" id="name" name="nit_empresa" class="form-control" value="<?php echo $user_["nit_empresa"]; ?>">
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <label for="email" class="">Empresa:</label>
                                <div class="md-form">
                                    <input type="text" id="email" name="empresa" class="form-control" value="<?php echo $user_["empresa"]; ?>">
                                </div>
                            </div>
                            <!--Grid column-->
                            <?php 
                        }else
                        {
                            ?>

                                <!--Grid column-->
                            <div class="col-md-6">
                                <label for="name" class="">Nit empresa: </label>
                                <div class="md-form">
                                    <input disabled="true" type="number" id="name" name="nit_empresa" class="form-control" value="<?php echo $user_["nit_empresa"]; ?>">
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <label for="email" class="">Empresa:</label>
                                <div class="md-form">
                                    <input disabled="true" type="text" id="email" name="empresa" class="form-control" value="<?php echo $user_["empresa"]; ?>">  
                                </div>
                            </div>
                            <!--Grid column-->
                            <?php 
                        }
                    ?>

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-6">
                    	<label for="name" class="">Email:</label>
                        <div class="md-form">
                            <input type="text" id="name" name="email" class="form-control" value="<?php echo $user_["email"]; ?>">
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                    	<label for="email" class="">Celular:</label>
                        <div class="md-form">
                            <input type="text" id="email" name="celular" class="form-control" value="<?php echo $user_["celular"]; ?>">
                        </div>
                    </div>
                    <!--Grid column-->


                </div>

                 <div class="center-on-small-only">
                <button name="update" class="btn btn-primary" type="submit">Actualizar</button>
                </div>
                <!--Grid row-->
                <br><br>
                <h3>Cambia tu contraseña:</h3>
                <?php 
                 $passActual = $user_["pass"];
                 $id_user = $user_["id"];
                      ?>

                      <script>
                          var passActual =  "<?php print $passActual;?>";
                          var id_user = <?php echo $id_user; ?> ;
                      </script>
                <br>
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-4">
                        <label  v-if="actualpass === ''" for="name" class="">Contraseña Actual:</label>
                        <label v-else-if="actualpass != '' " for="name" class="">Contraseña Actual: <i v-if="actualpass === passw" class="fa fa-check"></i> <i v-else-if="actualpass != passw" class="fa fa-times"></i> </label>
                        <div class="md-form">
                            <input type="password" id="name"  v-model="actualpass" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4">
                        <label for="email" class="">Nueva Contraseña:</label>
                        <div class="md-form">
                            <input type="password" id="email"  v-model="newpass" class="form-control" >
                        </div>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-4">
                         <label  v-if="confirmnewpass === ''" for="name" class="">Confirmar contraseña nueva: </label>
                        <label v-else-if="confirmnewpass != '' " for="name" class="">Confirmar contraseña nueva: <i v-if="confirmnewpass === newpass" class="fa fa-check"></i> <i v-else-if="confirmnewpass != newpass" class="fa fa-times"></i> </label>
                        <div class="md-form">
                            <input type="password" id="email"  v-model="confirmnewpass" class="form-control" >
                        </div>
                    </div>

                    <!--Grid column-->
                    
                    <!--pre>{{$data}}</pre-->

                </div>
                <!--Grid row-->

            <div v-if="actualpass === passw">
                <div v-if="newpass != ''" >
                    <div v-if="confirmnewpass != ''" >
                        <div v-if="!PassUpdate">
                            <div  v-if="confirmnewpass === newpass"   class="center-on-small-only">
                            <button type="button" v-on:click="cambiar_contrasena" class="btn btn-primary" >Cambiar contraseña</button>
                            </div>
                        </div>
                        <div v-if="PassUpdate">
                            <div  v-if="confirmnewpass === newpass"   class="center-on-small-only">
                            <button type="button" v-on:click="redirect" class="btn btn-primary" >¡Listo!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
               

            </form>

            
            <div class="status"></div>
        </div>
        <!--Grid column-->

        

    </div>

</section>
<!--Section: Contact v.2-->


<?php 
    if (isset($_POST["update"])) 
    {
        $nombres = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $cedula = $_POST["cedula"];
        $ubicacion = $_POST["ubicacion"];
        $nit_empresa = $_POST["nit_empresa"];
        $empresa = $_POST["empresa"];
        $email = $_POST["email"];
        $celular = $_POST["celular"];
        if ($actividad == 0) {
             $sair->ActuaizarDatosUser($user_["id"],$nombres,$apellidos,$cedula, $ubicacion,$nit_empresa,$empresa,$email,$celular);
        }else{
            if ($actividad_empresa_user == 0) {
                $sair->ActuaizarDatosUser($user_["id"],$nombres,$apellidos,$user_["cedula"], $ubicacion,$nit_empresa,$empresa,$email,$celular);
            }else
            {
                $sair->ActuaizarDatosUser($user_["id"],$nombres,$apellidos,$user_["cedula"], $ubicacion,$user_["nit_empresa"],$user_["empresa"],$email,$celular);
            } 
             
        }
        
    }


    ////// NOTAS:  |||

    /*  Si el user tiene actividad con nosotros, no necesariamente su empresa tiene que tener actividad con nosotrs , pero para que una empresa tenga actividad con nosotros un usuario debe estar enfrente de ella, es decir prevale como importante y requerimiento ser user de  array  */ 
 ?>



