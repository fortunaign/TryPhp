<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
<?php

    $menu = array("form.php", "upfile.php");
    $text = array("Noticias", "Subir Archivos");
    for($i=0;$i<count($menu);$i++){
        echo "<a href='".$menu[$i]."'>".$text[$i]."</a><br>";
    }

    // if(){
    //     echo "Si";
    // }else{
    //     echo "No";
    // }

    // function SETTEXTO($text){
    //     $ctexto = strtr($text,"aeiou","12345");
    //     return $ctexto;
    // }

    // function GETTEXTO($text){
    //     $uctexto = strtr($text,"12345","aeiou");
    //     return $uctexto;
    // }

    // $fullName = "Ignacio Fortuna Guzman";

    // echo "Texto enviado: ". $fullName;
    // echo "<br>Texto recibido: ".SETTEXTO($fullName);
    
    // ereg(pattern,string)

    //Variables
    //Enteros
    //Binarios de punto Flotantes
    //Vectores
    //String
    //Objetos

    //      \n Nueva línea 
    //      \r Salto de carro (carring return) 
    //      \t Tabulación 
    //      \\ Barra invertida 
    //      \$ Signo pesos 
    //      \” Comillas doble

    // $datos = array(
    //     "user a" => array(
    //         "name" => "Ignacio",
    //         "apellidos" => "Fortuna Guzman",
    //         "edad" => "24 Años",
    //     ),
    //     "user b" => array(
    //         "name" => "Vielka",
    //         "apellidos" => "Muños",
    //         "edad" => "22 Años",
    //     ) 
    // );

    // echo "<br>";

    // for($i = 0; $i < 5; $i++){
    //     for($j=0; $j < 5;$j++){
    //         $matris[$i][$j] = ($i * $i) - $j;
    //     }
    // }

    // for($i = 0; $i < 5; $i++){
    //     for($j=0; $j < 5;$j++){
    //         echo $matris[$i][$j];
    //         echo "\t";
    //     }
    //     echo "<br>";
    // }

    // $vocals[0] = "a";
    // $vocals[1] = "e";
    // $vocals[2] = "i";
    // $vocals[3] = "o";
    // $vocals[4] = "u";

    // foreach($vocals as $vocal){
    //     echo $vocal."<br>";
    // }

    // function suma($a, $b)
    // {
    //     $r = $a + $b;
    //     return $r;
    // }

    // function producto($a, $b)
    // {
    //     $r = $a * $b;
    //     return $r;
    // }
    
    // echo "<br>";
    // echo suma(5, 32);
    // echo "<br>";    
    // echo producto(5.3, 32.2);

?>
    
</body>
</html>