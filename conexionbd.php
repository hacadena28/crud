
<?php
$tipoDeDocumento = $_GET['tipoDeDocumento'];
$cedula = $_GET['cedula'];
$primerNombre = $_GET['primerNombre'];
$segundoNombre = $_GET['segundoNombre'];
$primerApellido = $_GET['primerApellido'];
$segundoApellido = $_GET['segundoApellido'];
$genero = $_GET['genero'];
$edad = $_GET['edad'];
$correo = $_GET['correo'];
$url = $_GET['url'];
$fecha   = $_GET['fecha'];
$hora = $_GET['hora'];
$archivo = $_GET['archivo'];
$placa = $_GET['placa'];
$price = $_GET['price'];
$futbol = $_GET['futbol'];
$basquetbol = $_GET['basquetbol'];
$ciclismo = $_GET['ciclismo'];
$atletismo= $_GET['atletismo'];
if($futbol == "on"){
    $futbol = true;
}else{
    $futbol = false;
}
if($basquetbol == "on"){
    $basquetbol = true;
}else{
    $basquetbol = false;
}
if($ciclismo == "on"){
    $ciclismo = true;
}else{
    $ciclismo = false;
}
if($atletismo == "on"){
    $atletismo = true;
}else{
    $atletismo = false;
}

session_start();
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "crud";
$EnlaceBD = mysqli_connect($host,$user,$pass,$dbname);
if(!$EnlaceBD){
    die("Connection failed: " . mysqli_connect_error());
}

$sql= "INSERT INTO personas (Cedula,TipoDeCedula,PrimerNombre,SegundoNombre,PrimerApellido,SegundoApellido
,Genero,Edad,Correo,Url,HoraActual,Archivo,placa,ConocimentoHtml,Futbol,Basquetbol,Ciclismo,Atletismo)
VALUES ('$cedula','$tipoDeDocumento','$primerNombre','$segundoNombre',
'$primerApellido','$segundoApellido','$genero','$edad','$correo','$url','$hora',
'$archivo','$placa','$price','$futbol','$basquetbol','$ciclismo','$atletismo')";

if(!mysqli_query($EnlaceBD,$sql)){
    echo'error';
}else{
    
    echo "
    <script language = 'javascript'>
    alert('datos guardados');
    window.location'index.php'
    </script>";
}



?>

