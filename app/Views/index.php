<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">

    <title>Umami Ramen & Sushi</title>
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark static-top" style="background-color: #ff4219"><!---->
        <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="img/logo.png" alt="..." height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <!--
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>-->

                <li class="nav-item">
                    <a class="nav-link" href="#">Promociones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Menú</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">¿Quienes somos?</a>
                </li>
                <li>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                </li>
                
            </ul>
        </div>
        </div>
    </nav>

    <div class="container">

        <!--carrusel-->
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/comida1.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/comida2.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <!--Contenido-->
          <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-7">
                        <h5 class="card-title">Nuestro menu</h5>
                        <p class="card-text">¿De que tienes antojo el dia de hoy?</p>
                        <a href="#" class="btn btn-primary">Conoce nuestros platillos</a>
                    </div>
                    <div class="col-3">
                        <img src="img/comida2.png" class="d-block mw-100" alt="...">
                    </div>
                </div>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <img src="img/comida2.png" class="d-block mw-100" alt="...">
                    </div>
                    <div class="col-3"></div>
                    <div class="col-6">
                        <h5 class="card-title">Promociones</h5>
                        <p class="card-text">Descubre nuevas ofertas para ti</p>
                        <a href="#" class="btn btn-primary">Descubrir</a>
                    </div>
                </div>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-5">
                        <h5 class="card-title mt-5">Nuestra sucursal</h5>
                        <p class="card-text">Conoce donde esta nuestra sucursal</p>
                    </div>
                    <div class="col-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14939.020628421415!2d-100.39462251230928!3d20.598054148693624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35bcadcb01419%3A0x2eb228f3b408677d!2sUmami%20Ramen%20Bar!5e0!3m2!1ses-419!2smx!4v1642719778763!5m2!1ses-419!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
          </div>

    </div>
          <!--Footer-->
          <footer class="bg-dark text-center text-white">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
              <!-- Section: Social media -->
              <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fa fa-facebook-f"></i
                ></a>
          
                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fa fa-google"></i
                ></a>
          
                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fa fa-instagram"></i
                ></a>
          
                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fa fa-github"></i
                ></a>
              </section>
              <!-- Section: Social media -->
            </div>
            <!-- Grid container -->
          
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              © 2022 Copyright:
              <a class="text-white" href="#">Umami Ramen & Sushi</a>
            </div>
            <!-- Copyright -->
          </footer>

        

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>