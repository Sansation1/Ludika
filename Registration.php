<?php
require 'Conexion/Config.php';
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $Fecha_registro = date("Y-m-d H:i:s");
   $duplicate = mysqli_query($conn, "SELECT * FROM usuarios where username='$username' or  email ='$email'");
   if (mysqli_num_rows($duplicate) > 0) {
    echo
    "<script>alert('El nombre de usuario o el correo electrónico ya han sido tomados');</script>";
   } else {
    if($password == $confirmpassword){
        $query = "INSERT INTO usuarios values ('','$name','$username','$email','$password','$Fecha_registro','','','')";
        mysqli_query($conn,$query);
        echo
        "<script>
                alert('Registro Exitoso');
                window.location.href = 'Login.php';
            </script>";

    }
    else{
        echo
        "<script>alert('La contraseña no concuerda o ya ha sido ocupada');</script>";


    }

   }
   
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Introducción a los Videojuegos:">
        <link rel="stylesheet" href="CSS/login_Registration.css"></link>
        
        <link rel="website icon" type="png" href="https://media.discordapp.net/attachments/1383667341551865918/1383672168369623202/LUDIKA_1.webp?ex=684fa4a0&is=684e5320&hm=b550b8b9ce516e85ee05f50618a4a42867209b4ecdbad95a4534bd787a94ec10&=&format=webp" class="img2"></link>
    <title>Registration</title>
</head>
<body>
        <section class="section2">
            <div class="contenedor">
                <div class="formulario">
                    <form  method="post" autocomplete="off" action="#" class="login-form">
                    <h2>Registro de nuevos usuarios</h2>

                    <div class="input-contenedor">
                        <i class='bx bxs-rename' ></i>
                        <label for="name"></label>
                        <img src="images/name.png" class="icono">
                        <input type="text" name="name" id="name" required value=""  placeholder="Nombre">
                    </div> 
                    <div>
                        <div class="input-contenedor">
                            <i class='bx bxs-user' ></i>
                         <label for="username"></label>
                         <img src="images/user.png" class="icono">
                        <input type="text" name="username" id="username" required value="" placeholder="Usuario"> 
                    </div>
                    <div class="input-contenedor">
                        <i class='bx bx-envelope' ></i>
                         <label for="email"></label>
                         <img src="images/email.png" class="icono">
                         <input type="email" name="email" id="email" required value="" placeholder="Correo Electronico"> <br>
                    </div> 
                    <div class="input-contenedor">
                        <i class='bx bxs-lock-open' ></i>
                         <label for="password"></label>
                         <img src="images/password.png" class="icono">
                        <input type="password" name="password" id="password"  required class="input1" placeholder="Contraseña">
                    </div> 
                    <div class="input-contenedor">
                        <i class='bx bxs-lock' ></i>
                         <label for="confirmpassword"></label>
                         <img src="images/confirm_password.png" class="icono">
                         <input type="password" name="confirmpassword" id="confirmpassword" required value="" placeholder="Confirma tu Contraseña">
                    </div> 
                 
                    <div class="Inicio">
                        <button type="submit" name="submit" class="Iniciar" >Registrar</button>   
                        <h5>Si deseas iniciar secion preciona</h5><br>
                        <a href="Login.php" class="boton">Inicio</a>    
                    </div>
                </form>
                
                </div>
            </div>
        </section>
</body>
</html>
