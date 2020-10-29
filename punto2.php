<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

   <header>

   <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <a class="navbar-brand text-white" href="#">proyetPHP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="index.php"><ion-icon name="barbell-outline"></ion-icon>Peso <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-white" href="punto2.php"> <ion-icon name="calculator-outline"></ion-icon>Calcula</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="punto3.php"><ion-icon name="cash-outline"></ion-icon>Tu salario</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white" href="punto4.php"><ion-icon name="man-outline"></ion-icon><ion-icon name="stats-chart-outline"></ion-icon>Estatura</a>
            </li>
            </ul>
        </div>
    </nav>

   </header>
   <main>

   <div class="container">
       <div class="row justify-content-center">
           <div class="col-6">

           <form action="punto2.php" method="POST">
                <div class="row mt-5">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="numero1" name="numero1">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="numero2" name="numero2">
                    </div>
                    
                </div>
                 <div class="form-group box">
                        <label for="exampleFormControlSelect1">Escoge tu operacion </label>
                        <select class="form-control" id="exampleFormControlSelect1" name="selet">
                <option>suma</option>
                <option>resta</option>
                <option>multiplicacion</option>
                <option>division</option>
                </select>
              </div>


                <button type="submit" class="btn btn-primary mt-4 bg-success" name="botonEnviar">calcular</button>
            </form>


            <?php if(isset($_POST["botonEnviar"])): ?> 

                <?php

                    $img=" https://media1.tenor.com/images/09dea2cb2a65be75cbf1b83b1772f0fe/tenor.gif?itemid=7570558";
                    $numero1=$_POST["numero1"];
                    $numero2=$_POST["numero2"];
                    $selet=$_POST["selet"];
                    

                    $suma=$numero1+$numero2;
                    $resta=$numero1-$numero2;
                    $multiplicacion=$numero1*$numero2;
                    $division=$numero1/$numero2;

                ?>

                   <?php if($selet=="suma"): ?>
                   <h5><?php echo("el resultado es es ".$suma); ?></h5>
                   <img src="<?php echo($img)?>" class="img" alt="fotom">
                
                   <?php elseif($selet=="resta"): ?>
                    <h5><?php echo("el resultado es es  ".$resta); ?></h5>
                    <img src="<?php echo($img)?>" class="img" alt="fotom">

                   <?php elseif($selet=="multiplicacion"): ?>
                    <h5><?php echo("el resultado es es  ".$multiplicacion); ?></h5>
                    <img src="<?php echo($img)?>" class="img" alt="fotom">   
                    
                   <?php elseif($selet=="division"): ?>
                    <h5><?php echo( "el resultado es es  ".$division); ?></h5>
                    <img src="<?php echo($img)?>" class="img" alt="fotom">

                  <?php else: ?>
                    <h5><?php echo( "deves ingresar un los valores"); ?></h5>
                   
                   <?php endif ?>
            <?php endif ?>


           </div>
       </div>
   </div>



   </main>
   <footer>

   </footer>
    <script  src = "https://unpkg.com/ionicons@5.2.3/dist/ionicons.js" > </ script>               
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html> 
