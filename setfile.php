<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Archivo</title>
    <style>
        .btn-send {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <form action="upfile.php" method="post" enctype="multipart/form-data">
        <p>Seleccione el archivo</p>
        <input type="file" name="myfile" size="40" id="" required>
        <br>
        <input type="submit" class="btn-send" name="btn" value="Subir">
    </form>
    <ul>
        <?php
        require('prueba.php');
        $b - new BobDemo();

        foreach($b->selectAll() as $r){
            echo "<a><li>".$r['mime']."</li></a>";
        }
        ?>
    </ul>
    
</body>
</html>