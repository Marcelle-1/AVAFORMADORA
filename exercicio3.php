<!DOCTYPE html>
<html lang="pt-BR">
<head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Densidade - AVA FORMADORA</title>
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

<div class="row container">
    <form class="container" action="densidade.php" method="$_GET">
        <div class="row ">
            <div class="input-field center">
            <input id="massa" name="massa" type="number" class="validate">
            <label for="massa">Massa</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field center">
            <input id="volume" name="volume" type="number" class="validate">
            <label for="volume">Volume</label>
            </div>
        </div>
        <div class="input-field center">
            <input class="waves-effect waves-light btn column s4 " onclick="densidade()" type="submit" value="Enviar"/>
            <a href="index.php" class="waves-effect waves-light btn column s4 "> Voltar</a>
        </div>
    </form>
</div>


<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="./js/script.js"></script>

</body>
</html>