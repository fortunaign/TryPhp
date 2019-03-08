<?php
include('prueba.php');

$bob = new BobDemo();

if(isset($_POST['btn'])){
    $name = $_FILES['myfile']['tmp_name'];
    $type = $_FILES['myfile']['type'];
    //echo $name."<br>".$type;
    $bob->insertBlob($name, $type);
}

header("location:setfile.php");
