<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <style>
        .noticia {
            font-family: arial;
            background-color: silver;
            width: 60%;
            
        }

        .titulo {
            color: white;
            background-color:gray;
        }

        .texto {
            font-size: 16px;
        }

        .fecha {
            font-size: 12px;
            background-color:gray;
            color: white;
        }

    </style>
</head>
<body>
    <?php
    require('personal_api.php');
    

    // Nombre de variables
    $valores = array("titulo", "texto");
    $Sexo =  array("F", "M");
    // Nombre a mostrar
    $texto = array("Titulo: ", "Texto: ");
    //$textoSexo = array("Femenino", "Masculino");
    // Formulario
    echo "<form action='addnew.php' method='post'>";
    for($i=0;$i<count($valores);$i++){
        
        if($i == 1){
            echo "<span>".$texto[$i]."</span><br><textarea name='".$valores[$i]."' cols='20' rows='5'></textarea><br>";
        }else{
            echo "<span>".$texto[$i]."</span><br><input type='text' name='".$valores[$i]."'><br>";
        }
    }
    echo "<br><input type='submit' name='addnew' value='Enviar'><input type='reset' value='Limpiar'></form><br>";

    $db = db_mysql("tryphp");
    $query = "select * from noticia order by fecha desc";
    $res = mysqli_query($db, $query);

    if(mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_assoc($res)){
        ?>
            <div class="noticia">
                <div class="titulo">
                <h3>
                    <?php 
                        echo $row['titulo'];
                    ?>
                </h3>
                </div>
                <div class="texto">
                <p>
                    <?php 
                        echo $row['texto'];
                    ?>
                </p>
                </div>
                <div class="fecha">
                <i>
                    <?php 
                        echo $row['fecha'];
                    ?>
                </i>
                </div>
            </div>
        <?php
    }
}else{
    echo "<h2>no hay noticias</h2>";
}
mysqli_close($db);
    ?>

</body>
</html>