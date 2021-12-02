<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>@yield('titulo')</title>
</head>
<body class="body-expanded">
        
    <div id="sidemenu" class="menu-expanded">
        <div id="header">
            <div id="title"><span> Proyecto </span></div>
            <div id="menu-btn">
                <div class="btn-proyecto"></div>
                <div class="btn-proyecto"></div>
                <div class="btn-proyecto"></div>
            </div>
        </div>

        <!--<div id="profile">
            <div class="photo"><img src="16363.png" alt="" width="30%"></div>
            <div class="name"><span>Usuario</span></div>
        </div>-->

        <div id="menu-items">
            <div class="item">
                <a href="http://localhost/proyecto/public">
                    <div class="title"><span>Empresas</span></div>
                </a>
                <a href="http://localhost/proyecto/public/proyectos">
                    <div class="title"><span>Proyectos</span></div>
                </a>
                <a href="#">
                    <div class="title"><span>Asignar alumnos</span></div>
                </a>
                <a href="#">
                    <div class="title"><span>Documentos</span></div>
                </a>
                <a href="#">
                    <div class="title"><span>Asesores</span></div>
                </a>
                <a href="#">
                    <div class="title"><span>Calificaciones</span></div>
                </a>
                <a href="#">
                    <div class="title"><span>Asesores internos</span></div>
                </a>
            </div>
        </div>
    </div>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <ul class="nav">
            <li class="nav-item active">
            <a class="nav-link" href="#"> @yield('titulo') </a>
            </li>
            <li class="nav-item">       
            </ul>
        </nav>
    </div>
    
    @yield('contenido')


</body>
</html>