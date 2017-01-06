<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema de registro (ADULTOS)&quot;Iglesia Sion&quot;</title>
<script>  

function revisar() { 
if(document.formulario.cedula.value == "") { alert('Revisa la cedula') ; return false ; } 
if(document.formulario.nombre.value == "") { alert('Debes poner el nombre') ; return false ; } 
if(document.formulario.apellido.value == "") { alert('Debes poner el apellido') ; return false ; } 
if(document.formulario.telef.value == "") { alert('Ingresa numero ');
    return false;}
else{ 
    return true;
}
} 

</script>
<link rel="stylesheet" media="screen" href="styles.css" >
</head>
<body><div align="center">
<form name="formulario"  action="registro.php" method="POST" onSubmit="return revisar();" class="form">
    <ul>
        <li>
             <h2>Sistema de registro iglesia Sion.</h2>
             <span class="required_notification">Los items con * son obligatorios</span>
        </li>
        <li>
            <label for="nombre">Nombres :</label>
           <input type="text" name="nombre" size="34" placeholder="Nombre Nombre"  required />
           <span class="form_hint">Coloque ambos nombres</span>
        </li>
        <li>
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellido" size="34" placeholder="Apellido Apellido" required />
        <span class="form_hint">Coloque ambos Apellidos</span>
        </li>
         <li>
    <label for="Cedula">Cedula:</label>
    <input type="text" name="cedula" size="16" placeholder="00000000" required />
    <span class="form_hint">Si es un niño, coloque 01 antes de la cedula de la madre</span>
</li>
        <li>
            <label for="edad">Edad:</label>
            <input type="text" name="edad" size="34" placeholder="00" required /> <span class="form_hint">Utilize numeros ejemplo "17"</span>
        </li>
        <li>
            <label for="sexo">Sexo:</label>
            <div class="styled"><select name=sexo>
        <option value=Masculino>Masculino</option>
        <option value=Femenino>Femenino</option>
        </select></div>
        </li>
        <li>
        Fecha de nacimiento
        </li>

 <li>
    <label for="dia">dia:</label>
    <div class="styled"><select name=mes>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
        </select></div>
</li>
 <li>
    <label for="mes">Mes:</label>
    <div class="styled"><select name=mes>
        <option value="Enero">1-Enero</option>
        <option value="Febrero">2-Febrero</option>
        <option value="Marzo">3-Marzo</option>
        <option value="Abril">4-Abril</option>
        <option value="Mayo">5-Mayo</option>
        <option value="Junio">6-Junio</option>
        <option value="Julio">7-Julio</option>
        <option value="Agosto">8-Agosto</option>
        <option value="Septiembre">9-Septiembre</option>
        <option value="Octubre">10-Octubre</option>
        <option value="Noviembre">11-Noviembre</option>
        <option value="Diciembre">12-Diciembre</option>
        </select></div>
</li>
 <li>
    <label for="anyo">Año:</label>
    <input type="text" name="anyo" size="34" placeholder="1900" /> <span class="form_hint">Coloque en numeros</span>
</li>
 <li>
    <label for="ministeriop">Ministerio Principal:</label>
    <div class="styled"><select name=ministeriop>
        <option value="Educacion Cristiana">Educacion Cristiana</option>
        <option value="Mujeres">Mujeres</option>
        <option value="Danza">Danza</option>
        <option value="Carcelario">Carcelario</option>
        <option value="Cocina">Cocina</option>
        <option value="Teatro">Teatro</option>
        <option value="Administrativo">Administrativo</option>
        <option value="Infantil">Infantil</option>
        <option value="Misioneros">Misioneros</option>
        <option value="Jovenes">Jovenes</option>
        <option value="Matrimonios y Parejas">Matrimonios y Parejas</option>
        <option value="Intercesion">Intercesion</option>
        <option value="Hombres">Hombres</option>
        <option value="Edad dorada">Edad dorada</option>
        <option value="Juvenil">Juvenil</option>
        <option value="Alcance y Consolidacion">Alcance y Consolidacion</option>
        <option value="Adoracion y alabanza">Adoracion y alabanza</option>
        <option value="Protocolo">Protocolo</option>
        <option value="Diaconos">Diaconos</option>
        <option value="Informatica">Informatica</option>
	<option value="Ninguno">Ninguno</option>
      </select></div>
</li>
 <li>
    <label for="ministerios">Ministerio Secundario:</label>
   <div class="styled"> <select name=ministerios>
        <option value="Educacion Cristiana">Educacion Cristiana</option>
        <option value="Mujeres">Mujeres</option>
        <option value="Danza">Danza</option>
        <option value="Carcelario">Carcelario</option>
        <option value="Cocina">Cocina</option>
        <option value="Teatro">Teatro</option>
        <option value="Administrativo">Administrativo</option>
        <option value="Educacion Cristiana">Educacion Cristiana</option>
        <option value="Infantil">Infantil</option>
        <option value="Misioneros">Misioneros</option>
        <option value="Jovenes">Jovenes</option>
        <option value="Matrimonios y Parejas">Matrimonios y Parejas</option>
        <option value="Intercesion">Intercesion</option>
        <option value="Hombres">Hombres</option>
        <option value="Edad dorada">Edad dorada</option>
        <option value="Juvenil">Juvenil</option>
        <option value="Alcance y Consolidacion">Alcance y Consolidacion</option>
        <option value="Adoracion y alabanza">Adoracion y alabanza</option>
        <option value="Protocolo">Protocolo</option>
        <option value="Diaconos">Diaconos</option>
        <option value="Informatica">Informatica</option>
	<option value="Ninguno">Ninguno</option>
      </select></div>
</li>
 <li>
    <label for="bautizado">Se ha bautizado?</label>
  <div class="styled">  <select name=bautizado>
        <option value="Si">Si</option>
        <option value="No">No</option>
      </select></div>
</li>
 <li>
    <label for="profesion">Profesion u Oficio::</label>
   <div class="styled"> <select name=profesion>
  	    <option value="Estudiante">Estudiante</option>
		<option value="Abogado">Abogado</option>
        <option value="Arquitecto">Arquitecto</option>
        <option value="Artesano">Artesano</option>
        <option value="Bombero">Bombero</option>
        <option value="Carnicero">Carnicero</option>
        <option value="Comerciante">Comerciante</option>
        <option value="Secretaria">Secretaria</option>
        <option value="Dentista">Dentista</option>
        <option value="Deportista">Deportista</option>
        <option value="Dietista">Dietista</option>
        <option value="Electricista">Electricista</option>
        <option value="Enfermero">Enfermero</option>
        <option value="Estetista">Estetista</option>
        <option value="Farmaceutico">Farmaceutico</option>
        <option value="Fontanero">Fontanero</option>
        <option value="Fotografo">Fotografo</option>
        <option value="Funerario">Funerario</option>
        <option value="Herrador">Herrador</option>
        <option value="Ingeniero">Ingeniero</option>
        <option value="Tecnico">Tecnico</option>
        <option value="Masajista">Masajista</option>
        <option value="Mecanico">Mecanico</option>
        <option value="Medico">Medico</option>
        <option value="Notario">Notario</option>
        <option value="Policia">Policia</option>
        <option value="Opto-tecnico">Opto-Tecnico</option>
        <option value="Ortofonista">Ortofonista</option>
        <option value="Ortoprotesista">Ortoprotesista</option>
        <option value="Ama de casa">Ama de casa</option>
        <option value="Ortoptista">Ortoptista</option>
        <option value="Ostepata">Ostepata</option>
        <option value="Panadero">Panadero</option>
        <option value="Pastelero">Pastelero</option>
        <option value="Peluquero">Peluquero</option>
        <option value="Pescadero">Pescadero</option>
        <option value="Pirotecnico">Pirotecnico</option>
        <option value="Construccion">Construccion</option>
        <option value="Profesor de baile">Profesor de baile</option>
        <option value="Profesor">Profesor</option>
        <option value="Psicologo">Psicologo</option>
        <option value="Psicomotricista">Psicomotricista</option>
        <option value="Topografo">Topografo</option>
        <option value="Teologo">Teologo</option>
        <option value="Veterinario">Veterinario</option>
        <option value="Otro">Otro</option>
        </select></div>
</li>
 <li>
    <label for="estadocivil">Estado Civil:</label>
    <div class="styled"><select name=estadocivil>
        <option value="Soltero">Soltero</option>
        <option value="Casado">Casado</option>
        <option value="Viudo">Viudo</option>
        <option value="Separado">Separado</option>
        <option value="Concubinato">Concubinato</option>
        </select></div>
</li>
 <li>
    <label for="estado">Estado:</label>
  <div class="styled">  <select name="estado">
  <option>Lara</option>
  <option>Amazonas</option>
  <option>Anzoategui</option>
  <option>Apure</option>
  <option>Aragua</option>
  <option>Barinas</option>
  <option>Bolivar</option>
  <option>Carabobo</option>
  <option>Cojedes</option>
  <option>Delta Amacuro</option>
  <option>Distrito Capital</option>
  <option>Falcon</option>
  <option>Guarico</option>
  <option>Merida</option>
  <option>Miranda</option>
  <option>Monagas</option>
  <option>Nueva Esparta</option>
  <option>Portuguesa</option>
  <option>Sucre</option>
  <option>Tachira</option>
  <option>Trujillo</option>
  <option>Yaracuy</option>
  <option>Zulia</option>
  <option>Vargas</option>
</select></div>
</li>
 <li>
    <label for="municipio">Municipio (Lara):</label>
   <div class="styled"> <select name="municipio">
      <option value="Fuera de lara">Fuera de Lara</option>
      <option value="IRIBARREN">IRIBARREN</option>
      <option value="ANDRES E BLANCO">ANDRES E BLANCO</option>
      <option value="CRESPO">CRESPO</option>
      <option value="JIMENEZ">JIMENEZ</option>
      <option value="MORAN">MORAN</option>
      <option value="SIMON PLANAS">SIMON PLANAS</option>
      <option value="TORRES">TORRES</option>
      <option value="PALAVECINO">PALAVECINO</option>
      <option value="URDANETA">URDANETA</option></select></div>
</li>
 <li>
    <label for="parroquia">Parroquia:</label>
  <div class="styled">  <select name="parroquia">
      <option value="Fuera de lara">Fuera de lara</option>
      <option value="AGUEDO F. ALVARADO">AGUEDO F. ALVARADO</option>
      <option value="BUENA VISTA">BUENA VISTA</option>
      <option value="CATEDRAL">CATEDRAL</option>
      <option value="EL CUJI">EL CUJI</option>
      <option value="JUAN DE VILLEGAS">JUAN DE VILLEGAS</option>
      <option value="JUAREZ">JUAREZ</option>
      <option value="LA CONCEPCION">LA CONCEPCION</option>
      <option value="SANTA ROSA">SANTA ROSA</option>
      <option value="TAMACA">TAMACA</option>
      <option value="UNION">UNION</option>
      <option value="PIO TAMAYO">PIO TAMAYO</option>
      <option value="QBDA. HONDA DE GUACHE">QBDA. HONDA DE GUACHE</option>
      <option value="YACAMBU">YACAMBU</option>
      <option value="FREITEZ">FREITEZ</option>
      <option value="JOSE MARIA BLANCO">JOSE MARIA BLANCO</option>
      <option value="CRNEL. MARIANO PERAZA">CRNEL. MARIANO PERAZA</option>
      <option value="CUARA">CUARA</option>
      <option value="DIEGO DE LOZADA">DIEGO DE LOZADA</option>
      <option value="JOSE BERNARDO DORANTE">JOSE BERNARDO DORANTE</option>
      <option value="JUAN B RODRIGUEZ">JUAN B RODRIGUEZ</option>
      <option value="PARAISO DE SAN JOSE">PARAISO DE SAN JOSE</option>
      <option value="SAN MIGUEL">SAN MIGUEL</option>
      <option value="TINTORERO">TINTORERO</option>
      <option value="ANZOATEGUI">ANZOATEGUI</option>
      <option value="BOLIVAR">BOLIVAR</option>
      <option value="GUARICO">GUARICO</option>
      <option value="HILARIO LUNA Y LUNA">HILARIO LUNA Y LUNA</option>
      <option value="HUMOCARO ALTO">HUMOCARO ALTO</option>
      <option value="HUMOCARO BAJO">HUMOCARO BAJO</option>
      <option value="LA CANDELARIA">LA CANDELARIA</option>
      <option value="MORAN">MORAN</option>
      <option value="AGUA VIVA">AGUA VIVA</option>
      <option value="CABUDARE">CABUDARE</option>
      <option value="JOSE G. BASTIDAS">JOSE G. BASTIDAS</option>
      <option value="BURIA">BURIA</option>
      <option value="GUSTAVO VEGAS LEON">GUSTAVO VEGAS LEON</option>
      <option value="SARARE">SARARE</option>
      <option value="ALTAGRACIA">ALTAGRACIA</option>
      <option value="ANTONIO DIAZ">ANTONIO DIAZ</option>
      <option value="CAMACARO">CAMACARO</option>
      <option value="CASTANEDA">CASTAÑEDA</option>
      <option value="CECILIO ZUBILLAGA">CECILIO ZUBILLAGA</option>
      <option value="CHIQUINQUIRA">CHIQUINQUIRA</option>
      <option value="EL BLANCO">EL BLANCO</option>
      <option value="ESPINOZA LOS MONTEROS">ESPINOZA LOS MONTEROS</option>
      <option value="HERIBERTO ARROYO">HERIBERTO ARROYO</option>
      <option value="LARA">LARA</option>
      <option value="LAS MERCEDES">LAS MERCEDES</option>
      <option value="MANUEL MORILLO">MANUEL MORILLO</option>
      <option value="MONTA A VERDE">MONTA A VERDE</option>
      <option value="MONTES DE OCA">MONTES DE OCA</option>
      <option value="REYES VARGAS">REYES VARGAS</option>
      <option value="TORRES">TORRES</option>
      <option value="TRINIDAD SAMUEL">TRINIDAD SAMUEL</option>
      <option value="MOROTURO">MOROTURO</option>
      <option value="SAN MIGUEL">SAN MIGUEL</option>
      <option value="SIQUISIQUE">SIQUISIQUE</option>
      <option value="XAGUAS">XAGUAS</option>
  	  </select></div>
</li>
 <li>
    <label for="direccion">Direccion:</label>
    <input type="text" name="direccion" size="100" />
</li>
 <li>
    <label for="gci">Es miembro de GCI:</label>
   <div class="styled"> <select name=gci>
        <option value="Si">Si</option>
        <option value="No">No</option>
        </select></div>
</li>
 <li>
    <label for=lider">Lider del GCI:</label>
    <input type="text" name="lider" size="34" placeholder="Nombre Nombre Apellido Apellido" /> <span class="form_hint">Nombre completo</span>
</li>
 <li>
    <label for="correo">Correo:</label>
    <input type="text" name="correo" size="34" placeholder="correo@outlook.com" />
</li>
 <li>
    <label for="telefono">Telefono:</label>
    <input type="text" name="telefono" size="34" placeholder="04160000000">
</li>
<li>
<div align="left">
<button class="submit" type="submit">Registrar</button><button class="submit" type="reset">Limpiar</button></div>
 </li>
 </ul>
 </form>
<hr><p align="center">Desarrollado por el ministerio de informatica</p>
</body>
</html>