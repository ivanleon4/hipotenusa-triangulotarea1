<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/bar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>CALCULAR LA HIPOTENUSA DE UN TRIANGULO</title>
</head>
<body>
<header>
        <div class="contenedor">
            <input type="checkbox" id="menu-bar"></input>
            <label class="icon-menu" for="menu-bar"></label>
            <nav class="menu">
                <a href=>Calculo de la Hipotenusa de un Triángulo</a>
                <a href="ejecutar.php">Limpiar</a>
            </nav>
        </div>
    </header>
<form action="" id="formulario" class="formulario">
<legend class="text-center header">Hipotenusa del Triángulo Rectángulo</legend>
    <label for="altura">Altura del Triangulo Rectangulo:</label><br>
    <select id="Altura" name="Altura" class="select">
        <option value=""></option>
        <option value="3">3</option>
      </select>
      <label class="mdb-main-label"></label>
    <br><br>

    <label for="base">Base del Triangulo Rectangulo:</label><br>
    <select id="Base" name="Base" class="select">
        <option value=""></option>
        <option value="4">4</option>
      </select>
      <label class="mdb-main-label"></label>
    <br><br>
    <button id="btncalcular" name="btn" type="button" value="calcular" class="btn btn-danger btn-lg btn-block">Calcular</button>
    <div id="error" class="error">
    </div>
</form>



<form action="" id="calculo" class="formulario2" hidden>
<?php
$ladoA = 3;
$ladoB = 4;
$hipotenusa = null;
$altura = pow(3,(2));
$base = pow(4,(2));

$hipotenusa = sqrt($altura + $base);
?> 

<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Base</th>
      <th scope="col">Altura</th>
      <th scope="col">Hipotenusa</th>
    </tr> 
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td><?php echo $base?>
      </td>
      <td><?php echo $altura?></td>
      <td><?php echo $hipotenusa?></td>
    </tr>
  </tbody>
</table>
<button id="btnclean" name="btn" type="button" value="clean" class="btn btn-danger btn-lg btn-block">Limpiar</button>

</form>
<script src="js/calcular.js"></script>
</body>
</html>