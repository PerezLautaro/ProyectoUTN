<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="index.html">
</head>
<body style="font-family: 'Ubuntu', sans-serif;">

     <!--NAVEGADOR-->

     <div class="container-fluid" id="navegador">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background: linear-gradient(#f19100,#f5ac3f);">
            <a class="navbar-brand text-white">
                <img src="" alt="">
            </a>
            <button class="navbar-toggler" data-target="#menu" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a href="index.html" class="nav-link" style="font-weight: bold;">ESTÉTICA</a>
                    </li>
                    <li class="nav-item active">
                        <a href="Salud.html" class="nav-link" style="font-weight: bold;">SALUD</a>
                    </li>
                    <li class="nav-item active">
                        <a href="nosotros.html" class="nav-link" style="font-weight: bold;">NOSOTROS</a>
                    </li>
                    <li class="nav-item active">
                        <a href="contacto.html" class="nav-link" style="font-weight: bold;">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <header>
        
        <!--PORTADA-->

        <div class="portada container-fluid">
            <img src="img/portada.jpg" alt="Portada" class="img-fluid">
        </div>

    </header>

    <main id="pagina">
        
        <!--FORMULARIO-->

        <section id="contenido" class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <h2 class="titulocontacto">Contacto</h2>
                        <form netlify action="envio.php" method="POST" id="formulario">
                            <div>
                                <label>
                                    Nombre y Apellido
                                    <input type="text" required name="nombreyapellido" placeholder="Ingrese aquí">
                                </label>
                            </div>
                            <div>
                                <label>
                                    Teléfono
                                    <input type="number" required name="numerodetelefono" placeholder="Ingrese aquí">
                                </label>
                            </div>
                            <div>
                                <label>
                                    Email
                                    <input type="email" required name="email" placeholder="mail@mail.com">
                                </label>
                            </div>
                            <div>
                                <label>
                                    Envianos tu Consulta
                                    <textarea maxlength="200" required name="mensaje" placeholder="Maximo 200 caracteres"></textarea>
                                </label>
                            </div>
            
                            <div>
                                <input class="boton" type="submit" value="Enviar">
                            </div>

                        </form>
                        <div class="redessociales">
                            <a href="https://wa.me/+542954537928">
                                <div>
                                    <img src="img/whatsapp.png" alt="whatsapp" class="img-fluid whatsapp">
                                    +54 2954 537928
                                </div>
                            </a>
                            <a href="https://www.instagram.com/esteticadonbosco/?hl=es-la">
                                <div>
                                    <img src="img/instagram.png" alt="instagram" class="img-fluid instagram">
                                    @esteticadonbosco
                                </div>
                            </a>
                            <a href="https://www.facebook.com/esteticadonbosco/">
                                <div>
                                    <img src="img/facebook.png" alt="facebook" class="img-fluid facebook">
                                    Centro de Estética Don Bosco
                                </div>
                            </a>    
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <h2 class="tituloubicacion">Ubicación</h2>
                        <div class="mapa">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3202.090130201094!2d-64.30460948498111!3d-36.62421707468419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95c2cd1ad0457a91%3A0x63f17265fc2ba4ae!2sDon%20Bosco%20863%2C%20L6300CDQ%20Santa%20Rosa%2C%20La%20Pampa!5e0!3m2!1ses-419!2sar!4v1603652143273!5m2!1ses-419!2sar" width="100%" height="500px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--FOOTER-->

    <footer>
        <div class="container-fluid">
            <div class="container">
                <h5>Don Bosco - Centro de Estética</h5> 
                <p>&copy; Diseño y Desarrollo: Lautaro Perez</p>
            </div>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   
</body>
</html>