<?php 

    if(!empty($_POST))
    {
        $alert='';
        if(empty($_POST['nombre'])||($_POST['pat'])||($_POST['mat'])||($_POST['date'])||($_POST['sexo'])||($_POST['email'])||($_POST['tel_movil'])||($_POST['tel_fijo'])||($_POST['direccion'])||($_POST['num_i'])||($_POST['num_e'])||($_POST['myFile'])||($_POST['vacante']))
        {
                $alert='<p> Todos los campos son obligatorios</p>';  
        }else{
            include "conexion.php";
            
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
            <div class="alert"> </div>
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
            <div><label for="vacante">Vacante </label>
            <input type='text' name="vacante" id="vacante"></div>
        </form>
            <br>
             <div class="botones"><input type='submit' value='Regresar'>  <input type='submit' value='Registrar'></div>
        </div>
            
    
    </body>



</html>


<!-- generar usuario y contrasena en automatico -->