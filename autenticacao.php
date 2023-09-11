<!DOCTYPE html>
<html lang="pt-BR">
<head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Principal</a></li>
        <li><a href="exercicio1.php">Exercício 1</a></li>
        <li><a href="exercicio2.php">Exercício 2</a></li>
        <li><a href="exercicio3.php">Exercício 3</a></li>
      </ul>
    </div>
</nav>

<section class="container">
    
    <div class="card-panel teal lighten-2 row center">
        <?php 
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            
            if($login === 'Marcelle' && $senha === '1406'){
                echo header('Location: valid.php');
            } else {
                echo header('Location: invalid.php');
            } 
        ?>
    </div>
    <a href="index.php" class="waves-effect waves-light btn column s4 "> Voltar</a>

</section>

</body>
</html>