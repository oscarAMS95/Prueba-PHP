<?php
    use PHPMailer\PHPMailer\PHPMailer;
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";
?>
<html>
    <head>
        <title>Contacto</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </head>
    <body style="background-color: rgb(53, 1, 15);">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><img src="img/logo.png" height="25" alt="CoolBrand">Tech Co.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">¿Quienes Somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ubicacion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form.php">Contacto</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Proyectos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Software</a>
                            <a class="dropdown-item" href="#">Hardware</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="datetime">
                <label style="color: darkgray; margin-top: 6px; margin-right: 20px;"><?php 
                    setlocale(LC_ALL, "es_ES", 'Spanish_Spain', 'Spanish');
                    echo iconv('ISO-8859-2', 'UTF-8', strftime("%A, %d de %B del %Y"));
                    date_default_timezone_set('America/Tijuana');
                    $date = date(" g:i a"); 
                    echo $date; ?></label>
            </div>
            <div class="navbar-nav ml-auto">
                <div class="nav-item dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="img/user.png" height="25" class="avatar">Bienvenido, Oscar</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Perfil</a>
                        <a href="#" class="dropdown-item">Salir de Sesion</a>
                    </div>
                </div>
            </div>
        </nav>
        <h2>Contactanos</h2>
        <form action="form.php" method="post">
            
            <label>Nombre(s):</label>
            <input type="text" name="nombre"><br><br>
            <label>Apellidos:</label>
            <input type="text" name="apellidos"><br><br>
            <label>Numero Telefonico:</label>
            <input type="text" name="telefono"><br><br>
            <label>Correo Electronico:</label>
            <input type="text" name="email"><br><br>
            <label>Asunto:</label>
            <textarea type="text" name="asunto"></textarea><br><br>
            <button type="submit" name="submit" class="btn btn-primary">Enviar Forma</button>
            <!--<input type="submit" value="Enviar" name="submit"><br><br>-->
        </form>

    <?php
        if(isset($_POST['nombre']) && isset($_POST['email'])){
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
            $asunto = $_POST['asunto'];
            
            $mail = new PHPMailer(true);

            //$mail->SMTPDebug = 3;
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = "z170.pc@gmail.com";
            $mail->Password = 'metalmaniac2.';
            $mail->Port = 587;
            $mail->SMTPSecure = "tls";


            $mail->isHTML(true);
            $mail->setFrom($email, $nombre);
            $mail->addAddress($email);
            $mail->Subject = "Test";
            $mail->Body = $asunto;

            try {
                $mail->send();
                echo "Message has been sent successfully";
            } catch (Exception $e) {
                echo "Mailer Error: " . $mail->ErrorInfo;
            }
        }
    ?>

</html>