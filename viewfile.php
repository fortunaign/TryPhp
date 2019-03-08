<?php
include('prueba.php');
$bob = new BobDemo();
$a = $bob->selectBlob($i);
header("Content-Type:".$a['mime']);
echo $a['bdata'];


