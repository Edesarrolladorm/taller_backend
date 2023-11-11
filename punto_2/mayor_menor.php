<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/calculadora.css">
    <link rel="shortcut icon" href="img/favicon.jpg">
    <title>Mayor o menor de edad</title>
</head>

<body>
   
        <img class="home" src="img/hogar.png" alt="inicio"> 
    <div class="main-frame-cal">
        <form action="" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Edad</label>
                <input type="number" name="edad" class="form-control" id="exampleFormControlInput1" placeholder="Digite su edad">
            </div>
            <button type="submit" name="verificar" class="btn btn-outline-info">Operar</button>
        </form>

        <?php

        $edad = 0;

        if (isset($_POST['verificar'])) {
            $edad = $_POST['edad'];
            if ($edad >= 18) {
                echo '<img src="img/mayor.jpg" alt="mayor">'; // agregar imagen 
                echo '<div style="color:blue;">'; // agregar color al texto
                echo "<h4>Su edad es: $edad años <br> usted es mayor de edad</h4>";
                echo '<div>';
            } else if (18 > $edad && 0 < $edad) {
                echo '<img src="img/niño.jpg" alt="menor">';
                echo '<div style="color:yellow;">';
                echo "<h4>Su edad es: $edad años <br> usted es menor de edad</h4>";
                echo '<div>';
            } else {
                echo '<img src="img/no_valido.jpg" alt="exis">';
                echo '<div style="color:red;">';
                echo "<h4> No valido </h4> ";
                echo '<div>';
            }
        }

        ?>
        <!-- agregar aimación -->
        <div class="animation-wrapper">
            <div class="animation-item"></div>
        </div>
    </div>
</body>

</html>