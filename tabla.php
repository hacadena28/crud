<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Tabla personas</title>
    <link rel="stylesheet" type="text/css" href="Style.css">


</head>
<body>
    <div class="top">
        <h1>Tabla Personas</h1>
    </div>
    <div class ="cuerpo">
        
        
       
<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "crud";
$EnlaceBD = mysqli_connect($host,$user,$pass,$dbname);

if(!$EnlaceBD){
    die("Connection failed: " . mysqli_connect_error());
}

$tildes = $EnlaceBD->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente

$result = mysqli_query($EnlaceBD, "SELECT * FROM personas");

//$row= mysqli_fetch_array($result);
?>
<table>
<tr>
        <th><strong>Cedula</strong></td>
        <th><strong>Tipo De Documento</strong></td>
        <th><strong>P. Nombre</strong></td>
        <th><strong>S. Nombre</strong></td>
        <th><strong>P. Apellido</strong></td>
        <th><strong>S. Apellido</strong></td>
        <th><strong>Genero</strong></td>
        <th><strong>Edad</strong></td>
        <th><strong>Correo</strong></td>
        <th><strong>URL</strong></td>
        <th><strong>Hora</strong></td>
        <th><strong>Archivo</strong></td>
        <th><strong>Placa</strong></td>
        <th><strong>%Html</td>
        <th><strong>Futbol</strong></td>
        <th><strong>Basquetbol</strong></td>
        <th><strong>Ciclismo</strong></td>
        <th><strong>Atletismo</strong></td>
    </tr>

<?php while ($row = mysqli_fetch_array($result)){?>

   

    <?php

    mostrarDatos($row);

}
    


?>
</table>
</div>
    <?php
   
        //Ejemplo aprenderaprogramar.com

        function mostrarDatos($resultados) {?>
            <?php
                if ($resultados !=NULL) {?>
                    <br>
                    <tr>
                        <td><?php echo $resultados['Cedula'];?></td>
                        <td><?php echo $resultados['TipoDeCedula'];?></td>
                        <td><?php echo $resultados['PrimerNombre'];?></td>
                        <td><?php echo $resultados['SegundoNombre'];?></td>
                        <td><?php echo $resultados['PrimerApellido'];?></td>
                        <td><?php echo $resultados['SegundoApellido'];?></td>
                        <td><?php echo $resultados['Genero'];?></td>
                        <td><?php echo $resultados['Edad'];?></td>
                        <td><?php echo $resultados['Correo'];?></td>
                        <td><?php echo $resultados['Url'];?></td>
                        <td><?php echo $resultados['HoraActual'];?></td>
                        <td><?php echo $resultados['Archivo'];?></td>
                        <td><?php echo $resultados['placa'];?></td>
                        <td><?php echo $resultados['ConocimentoHtml'];?></td>
                        <td><?php echo $resultados['Futbol'];?></td>
                        <td><?php echo $resultados['Basquetbol'];?></td>
                        <td><?php echo $resultados['Ciclismo'];?></td>
                        <td><?php echo $resultados['Atletismo'];?></td>
                    </tr>          
                    <?php
                    }else {
                    echo"escribiendo1";
        }

}?>

<?php
mysqli_free_result($result);
mysqli_close($EnlaceBD);
?>
</body>
</html>