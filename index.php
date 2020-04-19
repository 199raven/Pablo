<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Viajes TriPanel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">

    <link rel="apple-touch-icon" sizes="57x57" href="/icons/apple-icon-57x57.png">

    <link rel="stylesheet" href="plugins/animate/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="60x60" href="/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
    <link rel="manifest" href="/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body class="bgid">

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="productos.html">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contactenos</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        </nav>
    </header>
    <!--<a href="index.html "><img src="imagenes/LogoTriPanel%20(1).ico" width="86" alt="" > </a> </div>-->

    <main>
        <h2 class="h3 d-flex justify-content-center mt-3 rti"> Productos </h2>
        <section class=" pt-3 mt-4 container-fluid    ">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="imagenes/carousel.jpg" class="d-block w-100" alt="adsda" height="400">
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/carousel1.jpg" class="d-block w-100" alt="..." height="400">
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/carousel2.jpg" class="d-block w-100" alt="..." height="400">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">CATEGORIAS</li>
                        <li class="nav-item">Computadoras</li>
                        <li class="nav-item">Salud y Bellesa</li>
                        <li class="nav-item">Electronica de Consumo</li>
                        <li class="nav-item">Herramientas</li>
                        <li class="nav-item">Celulares</li>
                    </ul>
                </div>
            </nav>
            <section class=" row justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="imagenes/asdsa.png" class="card-img-top" alt="asdsa" width="200" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Nombre Producto</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <h6>$99999</h6>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="imagenes/asdsa.png" class="card-img-top" alt="asdsa" width="200" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Nombre Producto</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <h6>$99999</h6>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>

                </div>
                <div class="card" style="width: 18rem;">
                    <img src="imagenes/asdsa.png" class="card-img-top" alt="asdsa" width="200" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Nombre Producto</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <h6>$99999</h6>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="imagenes/asdsa.png" class="card-img-top" alt="asdsa" width="200" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Nombre Producto</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <h6>$99999</h6>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>



            </section>
            <section class=" row justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="imagenes/asdsa.png" class="card-img-top" alt="asdsa" width="200" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Nombre Producto</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <h6>$99999</h6>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="imagenes/asdsa.png" class="card-img-top" alt="asdsa" width="200" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Nombre Producto</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <h6>$99999</h6>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>

                </div>
                <div class="card" style="width: 18rem;">
                    <img src="imagenes/asdsa.png" class="card-img-top" alt="asdsa" width="200" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Nombre Producto</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <h6>$99999</h6>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="imagenes/asdsa.png" class="card-img-top" alt="asdsa" width="200" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Nombre Producto</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <h6>$99999</h6>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>

            </section>
            <section class=" row justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="imagenes/asdsa.png" class="card-img-top" alt="asdsa" width="200" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Nombre Producto</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <h6>$99999</h6>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="imagenes/asdsa.png" class="card-img-top" alt="asdsa" width="200" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Nombre Producto</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <h6>$99999</h6>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>

                </div>
            </section>

            <!--------------------------------FOOTER------------------------------------>>

            <?php include('footer.php');
    ?>
 <!--------------------------------FOOTER------------------------------------>>
    </main>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="plugins/wow/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>




</body>

</html>