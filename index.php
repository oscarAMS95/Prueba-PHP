<!DOCTYPE html>
  <html>
    <head>
        <title>Inicio</title>
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
        <div style="background-color: rgb(53, 1, 15);">
            
        </div>
    </body>
  </html>