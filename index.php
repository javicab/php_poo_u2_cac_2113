<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Obligatorio POO U2</title>
</head>
<body>
<?php
    $alumno = ["nombre" => "Javier",
     "apellido" => "Caballero",
      "edad" => "52",
      "hobbie" => "electronica", 
      "editor" => "Visual Studio Code",
      "so" => "Ubuntu Linux"];

    foreach($alumno as $clave => $valor){
        echo $clave . " : " . $valor . "<br>";
    }
?>
    
</body>
</html>