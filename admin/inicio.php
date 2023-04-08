<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/inicio.css">
</head>
<body>
    <?php
        include("../includes/navbar.php");
    ?>

    <section class="home" style="background-image: url(../img/fondo2.png); background-size: cover; background-repeat: no-repeat;background-position: center;background-attachment: fixed ;">
        <div class="text" style="display: flex; align-items: center; justify-content: center; margin-top: 200px">
            <h1>Bienvenido <?php echo $_SESSION["nombre"]; ?></h1>
        </div>
    </section>
</body>
</html>