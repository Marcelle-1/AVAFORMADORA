<!DOCTYPE html>
<html lang="pt-BR">
<head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - AVA FORMADORA</title>
</head>
<body>
<nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo">UNISUAM</a>
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="index.php">Principal</a></li>
            <li><a href="exercicio1.php">Exercício 1</a></li>
            <li><a href="exercicio2.php">Exercício 2</a></li>
            <li><a href="exercicio3.php">Exercício 3</a></li>
        </ul>
    </div>
    <ul id="slide-out" class="sidenav">
        <li>
        <div class="user-view">
        <a href="#user"><img class="circle" src="img/user_person_profile_avatar_icon_190943.png"></a>
        </div>
        </li>
        <li><div class="divider"></div></li>
        <li><a class="waves-effect" href="index.php">Página inicial</a></li>
        <li><a class="waves-effect" href="exercicio1.php">Exercício 1</a></li>
        <li><a class="waves-effect" href="exercicio2.php">Exercício 2</a></li>
        <li><a class="waves-effect" href="exercicio3.php">Exercício 3</a></li>
    </ul>
</nav>

<div class="container">
    <form class="row col s12 " action="process_post.php" method="POST">
        <div class=" center container ">
            <div class="input-field row">
            <input id="nome" name="nome" type="text" class="validate">
            <label for="nome">Nome</label>
            </div>
            <div class="input-field row">
            <input id="sobrenome" name="sobrenome" type="text" class="validate">
            <label for="sobrenome">Sobrenome</label>
            </div>
            <div class="row">
                <div class="input-field ">
                <input placeholder="" id="repeticao" name="repeticao" type="number" class="validate">
                <label for="repeticao" >Repetição</label>
                </div>
            </div>
            <div class="input-field ">
            <input class="waves-effect waves-light btn column s4 " type="submit" value="Enviar"></input>
            <a href="index.php" class="waves-effect waves-light btn column s4 "> Voltar</a>
            </div>
        </div>
    </form>
</div>
<?php 
    $nome = @$_POST['nome'];
    $sobrenome = @$_POST['sobrenome'];
    $repeticao = @$_POST['repeticao'];


    for($i = 1; $i <= $repeticao; $i++){
        echo "$i $nome $sobrenome <br>";
    };
?>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="./js/script.js"></script>
</body>
</html>