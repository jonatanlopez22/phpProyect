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

   <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <a class="navbar-brand text-white" href="#">proyetPHP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active text-white">
                <a class="nav-link text-white" href="#"><ion-icon name="barbell-outline"></ion-icon>Peso <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="punto2.php"><ion-icon name="calculator-outline"></ion-icon>Calcula</a>
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

           <form action="index.php" method="POST">
                <div class="row mt-5">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="altura en metros" name="altura">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="peso Kg" name="peso">
                    </div>
                    
                </div>
                <button type="submit" class="btn btn-primary mt-4 bg-success" name="botonEnviar">Calcular</button>
            </form>

                </div>
                <div class="col-6">
                <?php if(isset($_POST["botonEnviar"])): ?> 

                <?php

                    $pinsuficiente="https://media1.tenor.com/images/48cfcdada76e314a65a2e92bb614fcea/tenor.gif?itemid=11791407";
                    $pnormal="https://media1.tenor.com/images/0b2953e233894dfaece757c4934df885/tenor.gif?itemid=11345744";
                    $sobrep1=" https://media.tenor.com/images/b1c17afeeb5a58ec308201ec5ddfb04c/tenor.gif";
                    $sobrep2="https://media1.tenor.com/images/fe4fc717e6f2292ba9a01873d1d9a41b/tenor.gif?itemid=10914385";
                    $sobrep3="https://media.giphy.com/media/OFlZF1rpfRIZy/giphy.gif";
                    $sobrep4="https://i.pinimg.com/originals/46/37/84/4637847ec13ba34c266bd7b0452fc6a0.gif";
                    $sobrep5="https://j.gifs.com/L9D79p.gif";
                    $sobrep6=" https://media.giphy.com/media/4j9XOYo6IVDK8/200w.gif";
                  
                    
                    $altura=$_POST["altura"];
                    $peso=$_POST["peso"];
                    $imc=$peso/($altura*$altura);
                ?>

        
                   <?php if($imc<18.5): ?>
                   <h4 class="text-warning"><?php echo(" Tu indice de masa corporal es ".$imc." tienes peso insuficiente...comete la sopita UwU"); ?></h4>
                   <img src="<?php echo($pinsuficiente)?>" class="img" alt="fotom">
                   <?php elseif($imc>18.4 && $imc<25): ?>
                    <h4 class="text-success"><?php echo(" Tu indice de masa corporal es ".$imc." tienes un peso normal"); ?></h4>
                   <img src="<?php echo($pnormal)?>" class="img" alt="fotom">
                   <?php elseif($imc>24.9 && $imc<27): ?>
                    <h4 class="text-info"><?php echo(" Tu indice de masa corporal es ".$imc." sobrepeso nivel 1"); ?></h4>
                   <img src="<?php echo($sobrep1)?>" class="img" alt="fotom">
                   <?php elseif($imc>26.9 && $imc<30): ?>
                    <h4 class="text-primary"><?php echo(" Tu indice de masa corporal es ".$imc." preobesidad"); ?></h4>
                   <img src="<?php echo($sobrep2)?>" class="img" alt="fotom">
                   <?php elseif($imc>29.9 && $imc<35): ?>
                    <h4 class="text-warning"><?php echo(" Tu indice de masa corporal es ".$imc." obesidad tipo 1"); ?></h4>
                   <img src="<?php echo($sobrep3)?>" class="img" alt="fotom">
                   <?php elseif($imc>34.9 && $imc<40): ?>
                    <h4 class="text-warning"><?php echo(" Tu indice de masa corporal es ".$imc." obesidad tipo 2  ಠ_ಠ !!!"); ?></h4>
                   <img src="<?php echo($sobrep4)?>" class="img" alt="fotom">
                   <?php elseif($imc>39.9 && $imc<45): ?>
                    <h4 class="text-danger"><?php echo(" Tu indice de masa corporal es ".$imc." obesidad tipo 3  morbida  o(╥﹏╥)o "); ?></h4>
                   <img src="<?php echo($sobrep6)?>" class="img" alt="fotom">
                   <?php else: ?>
                    <h4 class="text-danger"><?php    echo(  "Tu indice de masa corporal es ".$imc." obesidad extrema"); ?></h4>
                   <img src="<?php echo($sobrep5)?>" class="img" alt="fotom">           
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
