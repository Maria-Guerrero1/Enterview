<?php 

include ("conexion.php");
if(isset($_POST['usu']) && !empty($_POST['usu']) &&
   isset($_POST['clave']) && !empty($_POST['clave']) && 
   isset($_POST['nombre']) && !empty($_POST['nombre']) && 
   isset($_POST['pat']) && !empty($_POST['pat']) &&
   isset($_POST['mat']) && !empty($_POST['mat']) &&
   isset($_POST['rol']) && !empty($_POST['rol'])){

    mysqli_query($conection, "INSERT INTO Usuarios (USUARIO,CONTRASEÑA,NOMBRE,APATERNO,AMATERNO,ID_ROL) VALUES ('$_POST[usu]','$_POST[clave]','$_POST[nombre]','$_POST[pat]','$_POST[mat]','$_POST[rol]')");
echo "Datos insertados";
}else{
    echo "error al insertar datios";
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
                <div> <label for="usu">Usuario </label>
                    <input type='text' name="usu" id="usu"> 
                    <label for="contra">clave</label>
                    <input type='password' name="clave" id="contra"> 
                    <legend> <h4 style="text-align:center">Datos personales</h4></legend>
                    <div><label for="nombre">Nombre </label>
                        <input type='text' name="nombre" id="nombre" placeholder="Nombre completo"></div>
                    <div><label label form="pat">Apellido paterno </label> 
                        <input type='text' name="pat" id="pat" placeholder="Apellido paterno"> </div>
                    <div><label for="mat">Apellido materno </label>
                        <input type='text' name="mat" id="mat" placeholder="Apellido materno"> </div>

                    <div> <label for="rol">Tipo de usuario</label></div>
                    <select id="rol" name="rol">
                        <option value="1">Aspirante</option>
                        <option value="2">Administrador</option>
                    </select>

                    <div class="botones"> <input type='submit' value='Registrar'></div>
                </div>

            </form>
            <br>

        </div>


    </body>



</html>


<!-- generar usuario y contrasena en automatico -->