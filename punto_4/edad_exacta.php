<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/calculadora.css">
    <link rel="shortcut icon" href="img/favicon.jpg"><!-- agregar favicon -->
    <title> Edad_actual</title>
</head>

<body>
    <a href="index.html#section-respuestas">
        <img class="home" src="img/hogar.png" alt="icono">
    </a>
    <div class="main-frame-cal">
        <form action="" method="POST"> <!-- agregar action y method -->
            <h1>¿Quieres saber tu edad exacta?</h1> <br><!-- agregar h1 -->
            <div class="form-group">
                <label for="exampleFormControlInput1">Seleccione su fecha de nacimiento:</label>
                <input type="date" name="f_n" class="form-control" id="exampleFormControlInput1">
            </div>

            <button type="submit" name="verificar" class="btn btn-outline-info">Envíar</button> <!-- agregar type -->
            <!-- ingreso boton para borrar el resultado, exraido de Bootstrap -->
            <button type="submit" name="borrar" class="btn btn-outline-danger">Borrar</button>
        </form>
        <?php
        const constante_18 = 18;
        define("constante0", 0);

        if (isset($_POST['verificar'])) {
            $f_n = new DateTime($_POST['f_n']);

            $date2 = new DateTime(date("y-m-d"));

            $diff = $f_n->diff($date2);

            $edad_actual = $diff->y;
            $edad_meses = $diff->m;
            $edad_dias = $diff->d;

            if ($edad_actual  >= constante_18) {
                echo "<h3>Usted es mayor de edad, <br> ya que tiene " . $edad_actual . " años </h3>";
            } else if ($edad_actual < constante_18 &&  $edad_actual > constante0) {
                echo "<h3>Usted es menor de edad, <br> ya que tiene " . $edad_actual . " años</h3>";
            } else {
                echo "<h3>No valido</h3>";
            }
            echo "<br><b>Años: &nbsp;&nbsp; " . $edad_actual . "<br>  <b>Meses: " . $edad_meses . " <br><b>Dias:&nbsp;&nbsp;&nbsp; " . $edad_dias;
            // Opcion para borrar el campo del resultado
            unset($_POST['borrar']);
        }
        ?>
        <!-- agregar animacion -->
        <div class="animation-wrapper">
            <div class="animation-item"></div>
        </div>
    </div>
</body>

</html>