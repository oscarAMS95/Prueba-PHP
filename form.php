<?php
    use PHPMailer\PHPMailer\PHPMailer;
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";
?>
<html>
    <head>
        <title>Contacto</title>

    </head>
    <body>
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
        <input type="submit" value="Enviar" name="submit"><br><br>
    <body>

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