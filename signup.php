<?php
define("SERVIDOR","localhost");
define("USUARIO","root");
define("PASS","");
define("BD","base1");
$conexion = mysqli_connect(SERVIDOR,USUARIO,PASS,BD);

if($_POST){
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$direccion=$_POST['direccion'];
$direccion2=$_POST['direccion2'];
$ciudad=$_POST['ciudad'];
$estado=$_POST['estado'];
$cp=$_POST['cp'];
$sql = "INSERT INTO datos (correo,contraseña,direccion,direccion2,ciudad,estado,cp) VALUES ('{$correo}','{$contraseña}','{$direccion}','{$direccion2}','{$ciudad}','{$estado}','{$cp}')";
$ejecutar = mysqli_query($conexion, $sql);
}
?>
<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Registro de datos</title>
</head>
<body>
  <!-- Grey with black text -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark"">
  <div class="container-fluid">
      <a class="navbar-brand" href="index.html">FocaWorld</a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="index.html">Regresar al Inicio</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="#">Acerca de</a>
      </li>
      </li>
    </ul>
  </div>
</nav>



            <!-- formulario de BOOTSTRAP -->
            
            <form  action="signup.php" method="post" class="row g-3">
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Correo</label>
                  <input type="email" name="correo" class="form-control" id="inputEmail4" >
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Contraseña</label>
                  <input type="password" name="contraseña" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Direccion</label>
                  <input type="text" name="direccion" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Direccion 2</label>
                  <input type="text" name="direccion2"class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Ciudad</label>
                  <input type="text" name="ciudad" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label"></label>
                  <select id="inputState" name="estado" class="form-select">
                    <option selected>Escoja una opcion</option>
                    <option value="DIF">Distrito Federal</option>
	                  <option value="AGU">Aguascalientes</option>
	                  <option value="BCN">Baja California</option>
                    <option value="BCS">Baja California Sur</option>
                    <option value="CAM">Campeche</option>
                    <option value="CHP">Chiapas</option>
                    <option value="CHI">Chihuahua</option>
                    <option value="COA">Coahuila</option>
                    <option value="COL">Colima</option>
                    <option value="DUR">Durango</option>
                    <option value="GTO">Guanajuato</option>
                    <option value="GRO">Guerrero</option>
                    <option value="HGO">Hidalgo</option>
                    <option value="JAL">Jalisco</option>
                    <option value="MEX">M&eacute;xico</option>
                    <option value="MIC">Michoac&aacute;n</option>
                    <option value="MOR">Morelos</option>
                    <option value="NAY">Nayarit</option>
                    <option value="NLE">Nuevo Le&oacute;n</option>
                    <option value="OAX">Oaxaca</option>
                    <option value="PUE">Puebla</option>
                    <option value="QRO">Quer&eacute;taro</option>
                    <option value="ROO">Quintana Roo</option>
                    <option value="SLP">San Luis Potos&iacute;</option>
                    <option value="SIN">Sinaloa</option>
                    <option value="SON">Sonora</option>
                    <option value="TAB">Tabasco</option>
                    <option value="TAM">Tamaulipas</option>
                    <option value="TLX">Tlaxcala</option>
                    <option value="VER">Veracruz</option>
                    <option value="YUC">Yucat&aacute;n</option>
                    <option value="ZAC">Zacatecas</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <label for="inputZip" class="form-label">CP</label>
                  <input type="text" name="cp" class="form-control" limit="5" id="inputZip" >
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Verifica mis datos
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Registrarme</button>
                </div>
              </form>
        </div>
        <a href="index.html" class="link-primary">Regresar al Inicio</a>
</body>
</html>