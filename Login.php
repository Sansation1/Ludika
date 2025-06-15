<?php
require 'Conexion/config.php';
if(isset($_POST["submit"])){
    $usernameemail= $_POST['usernameemail'];
    $password= $_POST['password'];
    $result = mysqli_query($conn, "SELECT * FROM usuarios WHERE username='$usernameemail' or email='$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: Index.php");
        }
        else{
            echo
            "<script>alert('Contraseña incorrecta');</script>";
        }
    } else {
        echo
    "<script>alert('Este usuario no esta registrado');</script>";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Introducción a los Videojuegos:">
        <title>Login</title>
        <link rel="stylesheet" href="CSS/login_Registration.css"></link>
        <link rel="website icon" type="png" href="https://media.discordapp.net/attachments/1383667341551865918/1383672168369623202/LUDIKA_1.webp?ex=684fa4a0&is=684e5320&hm=b550b8b9ce516e85ee05f50618a4a42867209b4ecdbad95a4534bd787a94ec10&=&format=webp" 
        class="img2">
</head>

<body>
        <section class="section2">
            <div class="contenedor2">
                <div class="formulario">
                    <form  method="post" autocomplete="off" action="#" class="login-form">
                    <div class="borde">
                    <h2 class="texto">Iniciar sesión en LUDiKA</h2><br>
                    </div>
                    <div class="input-contenedor">
                    
                        <i class='bx bxs-user' ></i>
                        <label for="usernameemail"></label>
                        <img src="images/user.png" class="icono">
                        <input type="text" name="usernameemail" id="usernameemail" required class="input1" placeholder="Usurio o Correo electronico"> 

                      
                    </div>
    
                    <div class="input-contenedor">
                        <i class='bx bxs-lock-open' ></i>
                         <label for="password" ></label>
                         <img src="images/password.png" class="icono">
                        <input type="password" name="password" id="password"  required class="input1" placeholder="Contraseña">
                    </div>          
                    <div>
                    <button type="submit" name="submit" class="Iniciar" >Iniciar Seción</button>
                    <div class="Inicio">
                        <h5>Si no tienes una cuenta con nosotros preciona el boton registrar</h5>
                        <br><a href="Registration.php" class="boton">Registrar</a>
                    </div>
                </div>
                </form>
                </div>
            </div>       
        </section>
</body>
</html>