<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MKL - Iniciar sesion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row encabezado d-flex">
        <div class="col-12 col-md-12 col-lg-6">
            <img class="img align-left pt-4 pr-4" src="img/LOGO MKL-01.png" alt="logo">
        <div class="row menu d-flex">
            <div class="col-12 col-md-11 offset-md-1 col-lg-12 offset-lg-6 ">
                <nav class="nav button">
                   <a class="nav-item nav-link d-flex p-3 ml-4 mr-4 text-white" href="index1.php"><h5>Inicio</h5></a>
                   <a class="nav-item nav-link d-flex p-3 ml-4 mr-4 text-white" href="registrate.php"><h5>Registrate</h5></a>
                   <a class="nav-item nav-link d-flex p-3 ml-4 mr-4 text-white" href="pgnts-frctes.php"><h5>Preguntas Frecuentes</h5></a>
                </nav>  
            </div>
        </div>
        </div>
        </div>
        <article class="row principal d-block">
          <div class="col-12 col-md-11 offset-md-1 col-lg-8 offset-lg-2 ">        
            <div class="login">
                <form class="form-horizontal mt-5 mb-5">
                    <div class="form-group">
                          <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="email" placeholder="example@example.com">
                        </div>
                    </div>
                    <div class="form-group">
                          <label class="control-label col-sm-2" for="pwd">Contraseña:</label>
                        <div class="col-sm-10"> 
                          <input type="contraseña" class="form-control" id="pwd" placeholder="Ingresar contraseña">
                        </div>
                    </div>
                    <div class="form-group"> 
                        <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                          <label><input type="checkbox"> Recordarme</label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="ingresar" class="btn btn-default">Ingresar</button>
                        </div>
                    </div>
                  </form>
          </div>
        </article>
        <footer class="pie">
          <div class="row encabezado d-flex">
            <div class="row menu d-flex">
                <div class="col-12 col-md-11 offset-md-1 col-lg-12 offset-lg-8">
                  <nav class="nav button">
                    <a class="nav-item nav-link d-flex p-3 ml-4 mr-4 text-white" href="index1.php"><h5>Inicio</h5></a>
                    <a class="nav-item nav-link d-flex p-3 ml-4 mr-4 text-white" href="registrate.php"><h5>Registrate</h5></a>
                    <a class="nav-item nav-link d-flex p-3 ml-4 mr-4 text-white" href="pgnts-frctes.php"><h5>Preguntas Frecuentes</h5></a>
                  </nav>  
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-2 offset-lg-10">
                <img class="img align-right pb-4 pr-4" href="#" src="img/LOGO MKL-01.png" alt="logo">
              </div>
            </div>  
          </footer>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
</body>
</html>