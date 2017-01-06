<html>
<head>
<script> 
function mensaje(){
    alert('Error');
    }
</script>
</head>
</html>

<?php
//Crear conexión a la Base de Datos
$conexion = mysql_connect("localhost","root","0000");
if (!$conexion) {
die("Fallo la conexión a la Base de Datos: " . mysql_error());
}

//Seleccionar la Base de Datos a utilizar
$seleccionar_bd = mysql_select_db("c2", $conexion);
if (!$seleccionar_bd) {
die("Fallo la selección de la Base de Datos: " . mysql_error());
}

//Tomar los campos provenientes del Formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$anyo = $_POST['anyo'];
$ministeriop = $_POST['ministeriop'];
$ministerios = $_POST['ministerios'];
$bautizado = $_POST['bautizado'];
$profesion = $_POST['profesion'];
$estadocivil = $_POST['estadocivil'];
$estado = $_POST['estado'];
$municipio = $_POST['municipio'];
$parroquia = $_POST['parroquia'];
$direccion = $_POST['direccion'];
$gci = $_POST['gci'];
$lider = $_POST['lider'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];


//Insertar campos en la Base de Datos
$consulta = mysql_query("SELECT cedula FROM usuarios WHERE cedula = {$cedula}" );
$total_encontrado = mysql_num_rows($consulta);

if ($total_encontrado > 0) {
 echo ("<h3 align='center'>cedula ya registrada. </h3>");

 }else{
     $insertar = mysql_query("INSERT INTO usuarios VALUES ('{$nombre}','{$apellido}','{$cedula}','{$edad}','{$sexo}','{$dia}','{$mes}', '{$anyo}' ,'{$ministeriop}','{$ministerios}','{$bautizado}','{$profesion}','{$estadocivil}','{$estado}','{$municipio}','{$parroquia}','{$direccion}','{$gci}','{$lider}','{$correo}','{$telefono}')") or die("Error: ". mysql_error());
     echo("<center>");
     echo ("<h3>Registro Realizado con exito.</h3>");
     echo ("<h3>Gracias =)</h3>");
     echo ("<form name='form2' action='index.php'><input type='submit' value='Regristrar otro usuario'></input>
     </form>");
     echo ("</center>");
     }
if (!$insertar) {
    
    
     echo("<center>");
     echo ("<form name='form3' action='index.php'><input type='submit' value='Regresar a pagina de registro'></input>
     </form>");
     die("<h4>Error interno. Contacte al administrador</h4>");
     echo ("</center>");


}
//Cerrar conexión a la Base de Datos
mysql_close($conexion);
?>
