<?php

require_once ("pasajero.php");
require_once ("ferry.php");
require_once ("ruta.php");
require_once ("agencia.php");
require_once ("tarifapasajero.php");
require_once ("tarifavehiculo.php");

$p1 = new Pasajero ("Juan", "A00000000", "2005-10-10", true);


$f1 = new Ferry (1, 300, 50);

$rutahp = new Ruta ("HIERRO", "PALMA", $f1, 20, 3);

$transmediterranea = new Agencia ();
$transmediterranea->inicializarRuta($rutahp);
?>

<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


    <title>Canarias</title>

  </head>

  <body>

    <header>
      <img src="imagenes/transmediterranea.png" alt"Trasmediterranea" height="100">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
       </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
       </div>
      </nav>
     

    </header>


    <div id="uno">
      <div class="container">
        <div class="row">
          <div class="col">

            <h1>Titulo</h1>
          
                    <form action ="recibeformulario.php">
                      <div class="row">
                        <div class="col form-group">
                          <input name= "Nombre" type="text" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="col form-group">
                          <input name= "Apellidos" type="text" class="form-control" placeholder="Apellidos">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col form-group">
                          <input name="Email" type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="col form-group">
                          <input name="Password" type="password" class="form-control" placeholder="Password">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-3 form-group">
                          <input name="Edad" type="number" class="form-control" placeholder="Edad">
                        </div>
                        <div class="col-md-9 form-group">
                            <select class="form-control" name="nacionalidad">
                              <option value="">Seleccione...</option>
                              <option value="espana">España</option>
                              <option value="portugal">Portugal</option>
                              <option value= "holanda">Holanda</option>
                            </select>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-9 form-group">
                          INTERESES:
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Informática
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                            <label class="form-check-label" for="defaultCheck1">
                              Biología
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                            <label class="form-check-label" for="defaultCheck1">
                              Empresas
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3 form-group">
                          GENERO
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="genero" id="exampleRadios1" value="hombre">
                              <label class="form-check-label" for="exampleRadios1">
                                Hombre
                              </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="genero" id="exampleRadios2" value="mujer">
                              <label class="form-check-label" for="exampleRadios2">
                                Mujer
                              </label>
                          </div>
                        </div>
                      </div>

                      <div class="row form-group">
                        <button type="submit" class="mx auto btn btn-primary">Sign in</button>
                      </div>
                    </form>
                  </div>

                  <div class="col">
                    <img src="imagenes/canarias2.jpg"alt"Canarias" width=100%>
                  </div>
                </div>
              </div>
            </div>
                  <div id="dos">
                    <img src="imagenes/canarias1.jpg"alt"Canarias" width=100%>
                  </div>

                  <div id="tres">
                    <div class="container">
                      <div class="row">
                        <div class="col">
                          Texto
                        </div>
                        <div class="col">
                          Formulario
                        </div>
                      </div>
                    </div>
                  </div>

           
                   
    <footer>
      <div class="container">
        <div class="row">
          <div class="col">
            <p>Trasmediterranea SL</p>
            <p>
                Avenida de la Guagua, 17<br>
                Isla de Tenerife<br>
                1001 - Islas Canarias<br>
            </p>
          </div>
          <div class="col">
            <ul>
              <li>Hierro</li>
              <li>Gomera</li>
              <li>La Palma</li>
              <li>Tenerife</li>
              <li>Gran Canaria</li>
              <li>Fuerteventura</li>
              <li>Lanzarote</li>
            </ul>
          </div>
          <div class="col">
            <p>
              Paga con tarjeta<br>
              Pasarela de pago 100% segura
            </p>
          </div>
          <div class="col">
            <p>
              Para más info busca en <a href="http://www.google.es/" target="_blank">Google</a>
            </p>  
          </div>
        </div>
      </div>
    </footer>

    <?php
    echo $transmediterranea->venderBillete ("HIERRO", "PALMA", $p1);
    ?>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>

</html>