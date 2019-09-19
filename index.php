<?php
$alert = '';

if(!empty($_POST)){

//echo $alert ="ingresando......";
    if(empty($_POST['usuario'])||empty($_POST['clave']))
    {
      $alert="Ingrese usuario y clave";
    }else{
        require_once "conexion.php";
        $user = $_POST['usuario'];
        $pass = $_POST['clave'];
        $query = mysqli_query($conection,"SELECT * FROM Usuarios WHERE USUARIO= '$user' AND CONTRASEÑA= '$pass'");
        $result=mysqli_num_rows($query);
        if($result > 0)
        {
            $data =mysqli_fetch_array($query);
            print_r($data);
            session_start();
            $_SESSION['ACTIVE']=TRUE;
            $_SESSION['idUser']=$data['id_usuario'];
            $_SESSION['user']=$data['usuario'];
            $_SESSION['nombre']=$data['nombre'];
            $_SESSION['paterno']=$data['apaterno'];
            $_SESSION['materno']=$data['amaterno'];
            $_SESSION['rol']=$data['id_rol'];
            //header('location: ');
        
        }else{
            $alert= "usuario y contraseña incorrectos";
            session_destroy();
        }
    }
    
}

?>
<!DOCTYPE html>
<html lan="eng">

<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INICIO DE SESION</title>
    </head>
    <body>
<center>
    <section class="container">
              <fieldset>
            <form action="" method="post">
                
                    <legend> <h4 style="text-align:center">INICIO DE SESION</h4></legend>
                  
                  <div>  <input type="text"   name 
                    ="usuario" placeholder="&#128100;USUARIO" ></div>
                 
               <div> <input type="password" name="clave" placeholder="CONTRASEÑA"></div>
                 
                   <div class="alert"><?php echo isset($alert)? $alert: '';  ?> </div> 
                    
                   
                 <a href="">Olvide mi contraseña</a>
                 <div> <input type="submit" name="btn2" value="Iniciar sesion" ></div>
                
            </form>
        </fieldset>
    </section>
    </center>
    </body>

</html>
