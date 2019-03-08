<?php
require('personal_api.php');
if(isset($_POST['addnew']))
{
    $datos = array($_POST['titulo'], $_POST['texto']);
    $db = db_mysql("tryphp");
    
    $query = "select max(id) as id from noticia";
    $res = mysqli_query($db,$query);
    $row = mysqli_fetch_assoc($res);

    if(is_null($res))
    {
        $datos[] = 0;
    }
    
    $datos[2] = $row['id'];
    $datos[2]+=1;

    $query = "insert into noticia(id, titulo, texto, fecha) values( '".$datos[2]."', '".$datos[0]."', '".$datos[1]."', (select now()))";
    $res = mysqli_query($db, $query);

    mysqli_close($db);
    header("location: form.php");
}