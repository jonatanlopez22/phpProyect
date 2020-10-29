<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
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
                <a class="nav-link text-white" href="punto2.php"><ion-icon name="calculator-outline"></ion-icon>Calcula</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="punto3.php"><ion-icon name="cash-outline"></ion-icon>Tu salario</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-white" href="punto4.php"><ion-icon name="man-outline"></ion-icon><ion-icon name="stats-chart-outline"></ion-icon>Estatura</a>
            </li>
            </ul>
        </div>
    </nav>

   </header>
   <main>

   <div class="container">
   <div class="row justify-content-center box">
               <img class="img-fluid img2" src="img/futbol.jpg" alt="futbol" >
           </div>
       <div class="row justify-content-center">
           <div class="col-6">

           <form action="punto4.php" method="POST">
                <div class="row mt-5">
                    <div class="col">
                    <h4>Digita tu altura</h4>
                        <input type="text" class="form-control" placeholder="altura en metros" name="altura">
                    </div>
                    
                </div>
                <button type="submit" class="btn btn-primary mt-4 bg-success" name="botonEnviar">Calcular</button>
            </form>


 


       
     
           <?php if(isset($_POST["botonEnviar"])): ?> 

<?php

   
    $sobrep4="https://i.pinimg.com/originals/46/37/84/4637847ec13ba34c266bd7b0452fc6a0.gif";
    $sobrep5="https://j.gifs.com/L9D79p.gif";
    $sobrep6=" https://media.giphy.com/media/4j9XOYo6IVDK8/200w.gif";
  
    
    $altura=$_POST["altura"];
?>

   <?php if($altura<1.70): ?>
   <h4 class="text-success"><?php echo("Biotipo bajo"); ?></h5>
   <?php elseif($altura>=1.70 && $altura<1.80): ?>
    <h4 class="text-success"><?php echo("Biotipo promedio"); ?></h5>
   <?php else: ?>
    <h4 class="text-success"><?php echo("Biotipo Superior"); ?></h5>          
   <?php endif ?>
<?php endif ?>
         
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


