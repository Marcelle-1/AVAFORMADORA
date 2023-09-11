<!DOCTYPE html>
<html lang="pt-BR">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Densidade</title>
</head>
<body>
<section class="container">
    <div class="card-panel teal lighten-2 row center">
    <?php
        function densidade(){
            $massa = $_GET['massa'] ;  
            $volume = $_GET['volume'];

            $densidade = $massa / $volume;
            
            echo "<h5> O valor da densidade é: $densidade</h5>";
        }
        echo densidade();
    ?>
    </div>
    <a href="index.php" class="waves-effect waves-light btn column s4 "> Voltar</a>
</section>

</body>
</html>