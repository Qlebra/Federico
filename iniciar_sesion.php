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
                   <a class="nav-item nav-link d-flex p-3 ml-5 mr-5 text-white" href="index1.html"><h5>Inicio</h5></a>
                   <a class="nav-item nav-link d-flex p-3 ml-5 mr-5 text-white" href="registrate.html"><h5>Registrate</h5></a>
                   <a class="nav-item nav-link d-flex p-3 ml-4 mr-4 text-white" href="preguntas_frecuentes.html"><h5>Preguntas Frecuentes</h5></a>
                </nav>  
            </div>
        </div>
        </div>
        <div class="login">
        <form class="form-horizontal" action="/action_page.php">
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Email:</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Enter email">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Password:</label>
              <div class="col-sm-10"> 
                <input type="password" class="form-control" id="pwd" placeholder="Enter password">
              </div>
            </div>
            <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label><input type="checkbox"> Remember me</label>
                </div>
              </div>
            </div>
            <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </div>
          </form>
          </div>
    </div>
</body>
</html>