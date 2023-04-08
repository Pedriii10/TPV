<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/categorias.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php
        include("../includes/navbar.php");
        include("../includes/conexion.php");
        $categoria1 = mysqli_query($conectar, "select nombre from categoria where id like '1'" );
        $categoria2 = mysqli_query($conectar, "select nombre from categoria where id like '2'" );
        $categoria3 = mysqli_query($conectar, "select nombre from categoria where id like '3'" );
        $categoria4 = mysqli_query($conectar, "select nombre from categoria where id like '4'" );
        $foto1 = mysqli_query($conectar, "select foto from categoria where id like '1'" );
        $foto2 = mysqli_query($conectar, "select foto from categoria where id like '2'" );
        $foto3 = mysqli_query($conectar, "select foto from categoria where id like '3'" );
        $foto4 = mysqli_query($conectar, "select foto from categoria where id like '4'" );
    ?>

    <section class="home" style="background-image: url(../img/fondoCategorias.jpg); background-size: cover; ">
        <div class="text">
            <h1 style=" position: relative; color: white">Categorias</h1>
            <a href="" data-bs-toggle="modal" data-bs-target="#nuevaCategoria"><button class="add"> Añadir Categria </button></a>

            <div class="cajaPadre">

                <div class="cajon">
                    <div class="borrar">
                        <a href="">
                            <i class='bx bx-x icono' style="font-size: 45px;"></i>
                        </a>
                    </div>
                    <div class="borrar" style="margin-top: 45px">
                        <a href="">
                            <i class='bx bxs-pencil icono'></i>
                        </a>
                    </div>
                    <a href="">
                        <img src="../img/camiseta-1.png" alt="" class="imagenes">
                    </a>
                    <hr class="hr">
                    <a href="">
                        <h3 class="h3">
                            <?php
                        while($fila = $categoria1->fetch_assoc()){
                            echo $fila["nombre"];
                        }
                             ?>
                        </h3>
                    </a>
                </div>

                <div class="cajon" >
                    <div class="borrar">
                        <a href="">
                            <i class='bx bx-x icono' style="font-size: 45px;"></i>
                        </a>
                    </div>
                    <div class="borrar" style="margin-top: 45px">
                        <a href="">
                            <i class='bx bxs-pencil icono'></i>
                        </a>
                    </div>
                    <a href="">
                        <img src="../img/botas.png" alt="" class="imagenes">
                    </a>
                    <hr class="hr">
                    <a href="">
                        <h3 class="h3">
                            <?php
                                while($fila = $categoria2->fetch_assoc()){
                                    echo $fila["nombre"];
                                }
                             ?>
                        </h3>
                    </a>
                </div>

                <div class="cajon" >
                    <div class="borrar">
                        <a href="">
                            <i class='bx bx-x icono' style="font-size: 45px;"></i>
                        </a>
                    </div>
                    <div class="borrar" style="margin-top: 45px">
                        <a href="">
                            <i class='bx bxs-pencil icono'></i>
                        </a>
                    </div>
                    <a href="">
                        <img src="../img/balon.png" alt="" class="imagenes">
                    </a>
                    <hr class="hr">
                    <a href="">
                        <h3 class="h3">
                            <?php
                                while($fila = $categoria3->fetch_assoc()){
                                    echo $fila["nombre"];
                                }
                             ?>
                        </h3>
                    </a>
                </div>

                <div class="cajon" >
                    <div class="borrar">
                        <a href="">
                            <i class='bx bx-x icono' style="font-size: 45px;"></i>
                        </a>
                    </div>
                    <div class="borrar" style="margin-top: 45px">
                        <a href="">
                            <i class='bx bxs-pencil icono'></i>
                        </a>
                    </div>
                    <a href="">
                        <img src="../img/ 
                            <?php
                                while($fila = $foto4->fetch_assoc()){
                                    echo $fila["foto"];
                                }
                             ?>
                             " alt="" class="imagenes">
                    </a>
                    <hr class="hr">
                    <a href="">
                        <h3 class="h3">
                            <?php
                                while($fila = $categoria4->fetch_assoc()){
                                    echo $fila["nombre"];
                                }
                             ?>
                        </h3>
                    </a>
                </div>

                
            </div>
        </div>
    </section>
</body>
</html>