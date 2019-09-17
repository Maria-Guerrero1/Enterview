<!DOCTYPE html>
<html lan="eng">

<head> 
     <title>REGISTRO</title>

     <a href="logout.php">Cerrar Sesión</a>
    </head>
    <body>
        <div class="container" name="registro">
            <legend> <h4 style="text-align:center">REGISTRAR SOLICITANTE </h4></legend>
            <div class="alert"></div>
        <form class="contacto">
            <legend> <h4 style="text-align:center">Datos personales</h4></legend>
            <div><label for="nombre">Nombre </label>
            <input type='text' name="nombre" id="nombre" placeholder="Nombre completo"></div>
            <div><label label form="pat">Apellido paterno </label> 
            <input type='text' name="pat" id="pat" placeholder="Apellido paterno"> </div>
            <div><label for="mat">Apellido materno </label>
            <input type='text' name="mat" id="mat" placeholder="Apellido materno"> </div>
            <div><label>Edad </label> 
            <input type="number" min="18" max="30" id="edad" name="edad" value="18"> 
            <label>Sexo </label>
            <input type="radio" name="genero" value="male"> Hombre
            <input type="radio" name="genero" value="female"> Mujer
            </div>
            <label for="email">Email </label>
            <input type='email' name="email" id="email" placeholder= "Correo Electronico">
            <div><label>Tel. movil </label>
            <input type='text' value=''> <label>Tel. Fijo </label><input type='text' value=''></div>
            <div><label>Direccion </label><input type='text' value=''></div>
            <div><label>Num. Exterior </label><input type='text' value=''> <label>Num. Interior </label><input type='text' value=''></div>
            <div><label> Adjuntar CV. </label><input type="file" name="myFile">  </div>
            <div><label>Vacante </label><input type='text' value=""></div>
        </form>
            <br>
             <div class="botones"><input type='submit' value='Regresar'>  <input type='submit' value='Registrar'></div>
        </div>
            
    
    </body>



</html>


<!-- generar usuario y contrasena en automatico -->