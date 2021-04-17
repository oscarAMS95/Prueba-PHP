<?php
    use PHPMailer\PHPMailer\PHPMailer;
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";
?>
<html>
    <head>
        <title>Contacto</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </head>

    <body class="bdy">
        <?php include('navbar.php');?>
        <h2 class="txt">Contáctanos</h2>
        <form class="fm1" action="form.php" method="post">
            <div class="form-group">
                <label class="lbl">Nombre(s):</label>
                <input class="form-control col-centered col-md-4" type="text" name="nombre" required>
            </div>
            <div class="form-group">
                <label class="lbl">Apellidos:</label>
                <input class="form-control col-centered col-md-4" type="text" name="apellidos" required>
            </div>
            <div class="form-group">
                <label class="lbl">Número Telefónico:</label>
                <input class="form-control col-centered col-md-4" type="text" name="telefono" required>
            </div>
            <div class="form-group">
                <label class="lbl">Correo Electrónico:</label>
                <input class="form-control col-centered col-md-4" type="text" name="email" required>
            </div>
            <div class="form-group">
                <label class="lbl">Asunto:</label>
                <textarea class="form-control col-centered col-md-4" rows="4" cols="50" type="text" name="asunto" required></textarea><br>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
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
            $mail->Username = "tech@gmail.com";  //Aqui se ingresa un correo electronico de Gmail
            $mail->Password = 'passw00rd';       //Contraseña
            $mail->Port = 587;
            $mail->SMTPSecure = "tls";

            $mail->isHTML(true);
            $mail->setFrom("empleos@solucionesdelmar.com", $nombre);
            $mail->addAddress("empleos@solucionesdelmar.com");
            $mail->Subject = "Consulta";
            $mail->Body = nl2br("Nombre(s): $nombre\nApellidos: $apellidos\nTelefono: $telefono\nCorreo Electronico: $email\nAsunto: $asunto");

            try {
                $mail->send();
                $message = "La informacion ha sido enviada correctamente!";
                echo "<script type='text/javascript'>alert('$message');</script>";
            } catch (Exception $e) {
                echo "Mailer Error: " . $mail->ErrorInfo;
            }
        }
    ?>

</html>