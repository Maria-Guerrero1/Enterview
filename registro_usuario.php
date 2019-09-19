<?php 

if(!empty($_POST))
{
    $alert='';
    if(empty($_POST['nombre'])||($_POST['pat'])||($_POST['mat'])||($_POST['date'])||($_POST['sexo'])||($_POST['email'])||($_POST['tel_movil'])||($_POST['tel_fijo'])||($_POST['direccion'])||($_POST['num_i'])||($_POST['num_e'])||($_POST['myFile'])($_POST['g_estudio'])||($_POST['vacante'])||($_POST['rol'])||($_POST['usu'])||($_POST['clave']))
    {
        $alert='<p class=msg_error> Todos los campos son obligatorios</p>';  
    }else{
        include "conexion.php";
        $nombre = $_POST['nombre'];
        $a_paterno = $_POST['pat'];
        $a_materno = $_POST['mat'];
        $fecha_nac = $_POST['date'];
        $sexo = $_POST['sexo'];
        $tel_movil = $_POST['tel_movil'];
        $tel_fijo = $_POST['tel_fijo'];
        $direccion = $_POST['direccion'];
        $num_int = $_POST['num_i'];
        $num_ext = $_POST['num_e'];
        $file = $_POST['myFile'];
        $grado_e = $_POST['g_estudio'];
        $vacante = $_POST['vacante'];
        $rol = $_POST['rol'];
        $usuario = $_POST['usu'];
        $clave = $_POST['clave'];
        $user_id = $_POST['user_id'];
        
        $query_insert = mysqli_query($conection,"INSERT INTO Usuarios('USUARIO','CONTRASEÑA','NOMBRE','APATERNO','AMATERNO','ID_ROL') VALUES('$usuario','$clave','$nombre','$a_paterno','$a_materno','$rol')");
        
            if($query_insert){
                $alert='<p> usuario creado</p>'; 
            } else{
                $alert='<p> Error al crear usuario</p>'; 
            }                        

    }


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
                <div><label for="fecha_nac">Fecha de nacimiento</label></div>
                <div><input type='text' name="date" id="fecha_nac" placeholder="DD/MM/YYYY"> </div>
                <div><label>Sexo </label></div>
                <input type="radio" name="genero" value="male"> Hombre
                <input type="radio" name="genero" value="female"> Mujer

                <div><label for="email">Email </label>
                    <input type='email' name="email" id="email" placeholder= "Correo Electronico"></div>
                <div><label for="tel">Tel. movil </label>
                    <input type='text' name="tel_movil" id="tel" placeholder="Celular"> 
                    <label for="t_fijo">Tel. Fijo </label>
                    <input type='text' name="tel_fijo" id="t_fijo" placeholder="Telefono casa"></div>
                <div><label for="direccion">Direccion </label>
                    <input type='text' name="direccion" id="direccion" placeholder="Direccion"></div>
                <div><label for="num_e">Num. Exterior </label>
                    <input type='text' name="num_e" id="num_e"> 
                    <label for="num_i">Num. Interior </label>
                    <input type='text' nombre="num_i" id="num_i"></div>
                <div><label for="myFile"> Adjuntar CV. </label>
                    <input type="file" name="myFile">  </div>
                <div> <label for="g_estudio">Grado de Estudio</label></div>
                <select id="g_estudio" name="g_estudio">
                    <option value="1">Primaria</option>
                    <option value="2">Secundaria</option>
                    <option value="3">Medio superior</option>
                    <option value="4">Tecnico</option>
                    <option value="5">Licenciatura trunca</option>
                    <option value="6">Licenciatura</option>
                    <option value="7">Maestria</option>
                    <option value="8">Doctorado</option>
                </select>
                <div><label for="vacante">Vacante </label></div>
                <select id="vacante" name="vacante">
                    <option value="1">Desarrollador web</option>
                    <option value="2">Disenador</option>
                    <option value="3">Consultor</option>
                    <option value="4">Recursos humanos</option>
                    <option value="5">Contabilidad</option>
                </select>
                <div> <label for="rol">Tipo de usuario</label></div>
                <select id="rol" name="rol">
                    <option value="1">Aspirante</option>
                    <option value="2">Administrador</option>
                </select>
                <div> <label for="usu">Usuario </label>
                    <input type='text' name="usu" id="usu"> 
                    <label for="contra">clave</label>
                    <input type='password' name="clave" id="contra"> 
                    <div class="botones"> <input type='submit' value='Registrar'></div>
                </div>

            </form>
            <br>
            
        </div>


    </body>



</html>


<!-- generar usuario y contrasena en automatico -->