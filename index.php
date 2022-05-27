<!DOCTYPE html>
<html lang="es">
<head>  
    <title>Formulario HTML5</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <link rel="cone" type="text/php" href="conexionbd.php">
</head>
<body>
    <div class="top">
        <h1>Formulario HTML5</h1>
    </div>
    <div class="container">
        <div class="containerDatos">  
   
            <form name="datos" action="conexionbd.php" method="get">
                <div class="personal">
                    <h3>Informacion Personal</h3>
                    <label for="tipoDeDocumento">Tipo de documento: </label>
                    <!--combobox Despliega una lista con diferentes opciones select-->
                    <select name="tipoDeDocumento" id="tipoDeDocumento">
                        <!--cada option es un item en la lista del comboBox-->
                        <option value="tarjetaDeIdentidad">Tajeta de identidad</option>
                        <option value="cedulaDeCiudadania">Cedula de ciudadania</option>
                        <option value="cedulaExtranjera">Cedula extranjera</option>
                    </select>
                    <br>
                    <label for="cedula">Cedula: </label>
                    <input type="text" id="cedula" name="cedula" placeholder="Cedula" pattern="[0-9]{10}"required>
                    <br>
                    <label for="primerNombre">Primer Nombre: </label>
                    <input type="text" id="primerNombre" name="primerNombre" placeholder="Primer Nombre"/>
                    <br>
                    <label for="segundoNombre">Segundo Nombre: </label>
                    <input type="text" id="segundoNombre" name="segundoNombre" placeholder="Segundo Nombre" />
                    <br>
                    <label for="primerApellido">Primer Apellido: </label>
                    <input type="text" id="primerApellido" name="primerApellido" placeholder="Primer Apellido" />
                    <br>
                    <label for="segundoApellido">Segundo Apellido: </label>
                    <input type="text" id="segundoApellido" name="segundoApellido" placeholder="Segundo Apellido" />
                    <br>
                    <!--El type radio genera un circulo o varios para selecionar la opcion preferencial
                    para lograr q solo se seleccione uno se debe utilizar el mismo name para cada uno de los circulos
                    el id seria el nombre de variable por el cual se hara referencia a dicho circulo-->
                    <label for="genero">Genero: </label>
                    <input type="radio" id="masculino" name="genero" value ="masculino">
                    <!--Por utlimo se utiliza el span para precedir el circulo y darle un significado -->
                    <span>Masculino</span>
                    <input type="radio" id="femenino" name="genero" value ="femenino">
                    <span>Femenino</span>
                    <input type="radio" id="otros" name="genero" value ="otros">
                    <span>Otros</span>
                    <br>
                    <label for="edad">Edad</label>
                    <input type="number" id="edad" name="edad">
                </div>
                <div class="contacto">
                    <h3>Informacion de contacto</h3>
                    <label for="correo">Correo: </label>
                    <input type="email" id="correo" name="correo" placeholder="Correo" required/>
                    <br>
                    <label for="URL">URL: </label>
                    <input type="url" id="url" name="url" placeholder="URL" />
                    <br>
                    <label for="fecha">Fecha De nacimiento: </label>
                    <input type="Date" id="fecha" name="fecha" placeholder="Fecha">
                </div>
                <div class="adicional">
                    <h3>Informacion Adicional</h3>
                    <label for="hora">Hora Actual: </label>
                    <input type="time" id="hora" name="hora" placeholder="Hora">
                    <br>
                    <label for="archivo">Archivo: </label>
                    <input type="file" id="archivo" name="archivo">
                    <br>
                    <label for="placa">Placa</label>
                    <input type="text" pattern="[A-Za-z]{3}[-][0-9]{3}" name="placa" id="placa" placeholder="ABC-123" />
                    <br>
                    <label for="price">Conocimineto de HTML </label>
                    <input type="range" name="price" id="price" min="0" max="100" step="1" value="50">
                    <output class="price-output" for="price"></output>
                    <br>
                </div>

                <div class="elegirDeporte">
                    <h3>Elije los deportes que practica</h3>
                    <legend>Futbol<input type="checkbox" name="futbol" id="futbol" default = "off" /></legend>     
                    <legend>Basquetbol: <input type="checkbox" name="basquetbol" id="basquetbol" default = "off" /></legend>  
                    <legend>Ciclismo: <input type="checkbox" name="ciclismo" id="ciclismo" default = "off" /></legend>    
                    <legend>Atletismo: <input type="checkbox" name="atletismo" id="atletismo " default = "off" /></legend>                
                </div>
                <hr>
                <button class="boton" type="post">Tipo sumit</button>
                <button class="boton" type="reset">Tipo reset</button>
                <input class = "boton" type="button" value="Mostrar" onclick="tabla()">
            </form>      
        </div>
    </div>   
</body>
    <script type="text/javascript" src="java.js"></script>
</html>