<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php"><img class="img" src="img/logo.png" height="25" alt="CoolBrand">Tech Co.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            ¿Quiénes somos?
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Misión</a>
                            <a class="dropdown-item" href="#">Visión</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ubicación</a>
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
                    setlocale(LC_ALL, "es_MX", 'Spanish_Mexican', 'Spanish');
                    date_default_timezone_set('America/Tijuana');
                    echo iconv('ISO-8859-2', 'UTF-8', strftime("%A, %d de %B del %Y"));
                    $date = date(" g:i a"); 
                    echo $date; 
                    ?></label>
            </div>
            <div class="navbar-nav ml-auto">
                <div class="nav-item dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img class="img" src="img/user.png" height="25" class="avatar">Bienvenido, Oscar!</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Perfil</a>
                        <a href="#" class="dropdown-item">Salir de Sesión</a>
                    </div>
                </div>
            </div>
        </nav>