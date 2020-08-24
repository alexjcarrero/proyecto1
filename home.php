<?php
if ($_POST == null) {
    $nombre = "Ingrese un nombre";
    
}else {
    $nombre = "Se agrego ".$_POST['nombre'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <title>Mi primer proyecto</title> <!--TITULO DE LA PESTANA:-------- ESTO ES UN COMENTARIO-->
</head>
<body>
    <div class="container">
        <main>
            <h1>Proyecto 1</h1> <!--Las h1 - h6 tipos de titulos-->
            <h6 id="miH6">Este es mi primer proyecto</h6>
            <h6 >Este es mi primer proyecto 1.1</h6>
            <ul class="misUlLi"><!--Ul es el padre de todos los li-->
                <li type="circle">uno</li>
                <li>dos</li>
                <li>tres</li>
                <li><a href="index.html">Bootstrap</a></li>
            </ul>
    
            <ol>
                <li class="misOlLi" type="circle">uno</li>
                <li>dos</li>
                <li>tres</li>
                <li><a class="aBoots" href="index.html">Bootstrap</a></li>
                <a href="index.html" class="aBoots"><li>Bootstrap</li></a>
            </ol>
    
            <form method="POST"action="home.php?seAgregoNombre=Yes">
                <div class="row"><!--Div es una division (Block)-->
                    <div class="col-3">
                        <label for="">Nombre</label>
                        <input name="nombre" type="text" placeholder="<?= $nombre?>">
                    </div>
                    <div class="col-3">
                        <label for="">Mail</label>
                        <input name="mail" type="email">
                    </div>
                    <div class="col-3">
                        <label for="">Pass</label>
                        <input name="pass" type="password">
                    </div>

                    <div class="col-3">
                        <button type="submit">Submit</button>
                    </div>
                    
                </div>
            </form>
            
    
        </main>  
    </div>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>