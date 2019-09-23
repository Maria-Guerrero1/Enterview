<?php 


$alert='';
include ("conexion.php");
if(isset($_POST['nombre']) && !empty($_POST['nombre']) && 
   isset($_POST['pat']) && !empty($_POST['pat']) &&
   isset($_POST['mat']) && !empty($_POST['mat']) &&
   isset($_POST['rol']) && !empty($_POST['rol'])&&
   isset($_POST['usu']) && !empty($_POST['usu']) &&
   isset($_POST['clave']) && !empty($_POST['clave'])
   /*
   isset($_POST['fecha_nac']) && !empty($_POST['fecha_nac'])&&
   isset($_POST['sexo']) && !empty($_POST['sexo'])&&
   isset($_POST['email']) && !empty($_POST['email'])&&
   isset($_POST['tel_movil']) && !empty($_POST['tel_movil'])&&
   isset($_POST['tel_fijo']) && !empty($_POST['tel_fijo'])&&
   isset($_POST['direccion']) && !empty($_POST['direccion'])&&
   isset($_POST['myFile']) && !empty($_POST['myFile'])&&
   isset($_POST['g_estudio']) && !empty($_POST['g_estudio'])&&
   isset($_POST['vacante']) && !empty($_POST['vacante']
   )*/
  ){

    mysqli_query($conection, "INSERT INTO Usuarios (USUARIO,CONTRASEÑA,NOMBRE,APATERNO,AMATERNO,ID_ROL) VALUES ('$_POST[usu]','$_POST[clave]','$_POST[nombre]','$_POST[pat]','$_POST[mat]','$_POST[rol]')");

   /* mysqli_query($conection,"CALL Insertar('$_POST[usu]','$_POST[clave]','$_POST[nombre]','$_POST[pat]','$_POST[mat]','$_POST[rol]','$_POST[email]',
    '$_POST[tel_movil]','$_POST[direccion]','$_POST[myFile]','$_POST[g_estudio]','$_POST[vacante]','(select max(ID_USUARIO)+1 FROM Usuarios)',$_POST[tel_fijo]','$_POST[sexo]','$_POST[fecha_nac]')");
*/


    $alert='<p class="msg_error"> Datos insertados correctamente</p>'; 



}else{
    $alert='<p class="msg_error"> Todos los campos son obligatorios</p>'; 
}

?>

<!DOCTYPE html>
<html lan="eng">

    <head> 
        <title>REGISTRO</title>

        <a href="logout.php">Cerrar Sesión</a>
    </head>
    <body>
        <div class="container" name="registro">
            <legend> <h4 style="text-align:center">REGISTRAR SOLICITANTE </h4></legend>
            <div class="alert"><?php echo isset($alert)? $alert: '';  ?></div>
            <form class="contacto" action="" method="post">

                <legend> <h4 style="text-align:center">Datos personales</h4></legend>
                <div><label for="nombre">Nombre </label>
                    <input type='text' name="nombre" id="nombre" placeholder="Nombre completo"></div>
                <div><label label form="pat">Apellido paterno </label> 
                    <input type='text' name="pat" id="pat" placeholder="Apellido paterno"> </div>
                <div><label for="mat">Apellido materno </label>
                    <input type='text' name="mat" id="mat" placeholder="Apellido materno"> </div>
                <div> <label for="rol">Tipo de usuario</label></div>

                <?php
                $query_rol = mysqli_query($conection, "SELECT * FROM Roles");
                $result_rol = mysqli_num_rows($query_rol);
                ?>

                <select id="rol" name="rol">
                    <?php 
                    if($result_rol>0){
                        while ($rol=mysqli_fetch_array($query_rol)){
                    ?>
                    <option value="<?php echo $rol["ID_ROL"]; ?>"> <?php echo $rol["ROL"]?> </option>

                    <?php 
                        }
                    }
                    ?>

                </select>
                <br>
                <br>
                <div> <label for="usu">Usuario </label>
                    <input type='text' name="usu" id="usu"> 
                    <label for="contra">clave</label>
                    <input type='password' name="clave" id="contra"> 
                    <br>
                    <br>

                    <div><label for="fecha_nac">Fecha de nacimiento</label></div>
                    <div><input type='text' name="date" id="fecha_nac" placeholder="YYYY/MM/DD"> </div>

                    <div><label>Sexo </label></div>
                    <input type="radio" name="genero" value="male"> Hombre <br>
                    <input type="radio" name="genero" value="female"> Mujer
                    <div><label for="sexo">Sexo </label>
                        <input type='sexo' name="sexo" id="sexo" placeholder= "sexo"></div>

                    <br> <br>

                    <div><label for="email">Email </label>
                        <input type='email' name="email" id="email" placeholder= "Correo Electronico"></div>
                    <div><label for="tel">Tel. movil </label>
                        <input type='text' name="tel_movil" id="tel" placeholder="Celular"> 
                        <label for="t_fijo">Tel. Fijo </label>
                        <input type='text' name="tel_fijo" id="t_fijo" placeholder="Telefono casa"></div>
                    <div><label for="direccion">Direccion </label>
                        <input type='text' name="direccion" id="direccion" placeholder="Direccion"></div>

                    <!--  <div><label for="num_e">Num. Exterior </label>
<input type='text' name="num_e" id="num_e"> 
<label for="num_i">Num. Interior </label>


<input type='text' name="num_i" id="num_e">   -->

                    <label for="myFile">Archivo </label>

                    <input type='text' name="myFile" id="myFile"></div>

                <!-- <div><label for="myFile"> Adjuntar CV. </label>
<input type="file" name="myFile">  </div>-->

                <div> <label for="g_estudio">Grado de Estudio</label></div>
                <?php
                $query_GEstudio = mysqli_query($conection, "SELECT * FROM GradoEstudios");
                $result_GEstudio = mysqli_num_rows($query_GEstudio);
                ?>

                <select id="g_estudio" name="g_estudio">
                    <?php 
                    if($result_GEstudio>0){
                        while ($grado=mysqli_fetch_array($query_GEstudio)){
                    ?>
                    <option value="<?php echo $grado["ID_GE"]; ?>"> <?php echo $grado["NIVEL"]?> </option>

                    <?php 
                        }
                    }
                    ?>


                </select>

                <div><label for="vacante">Vacante </label></div>
                <?php
                $query_vacante = mysqli_query($conection, "SELECT * FROM Vacantes");
                $result_vacante= mysqli_num_rows($query_vacante);
                ?>
                <select id="vacante" name="vacante">

                    <?php 
                    if($result_vacante>0){
                        while ($vacante=mysqli_fetch_array($query_vacante)){
                    ?>
                    <option value="<?php echo $vacante["ID_V"]; ?>"> <?php echo $vacante["VACANTE"]?> </option>

                    <?php 
                        }
                    }
                    ?>


                </select>


                <div class="botones"> <input type='submit' value='Registrar'></div>


            </form>
            <br>

        </div>


    </body>



</html>


<!-- generar usuario y contrasena en automatico -->