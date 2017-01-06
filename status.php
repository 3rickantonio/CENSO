<h1 align="center">Lista de Inscritos =)</h1><hr><br>
<table align="center" border="1" cellspacing=1 cellpadding=2 style="font-size: 12pt"><tr>
<td><font face="verdana"><b>Cedula</b></font></td>
<td><font face="verdana"><b>Nombre</b></font></td>
<td><font face="verdana"><b>Apellido</b></font></td>
</tr>

<?php  
  $link = @mysql_connect("localhost", "root","0000")
      or die ("Error al conectar a la base de datos.");
  @mysql_select_db("c2", $link)
      or die ("Error al conectar a la base de datos.");

  $query = "SELECT cedula, nombre, apellido FROM usuarios order by cedula";
  $result = mysql_query($query);
  $numero = 0;
  while($row = mysql_fetch_array($result))
  {
    echo "<tr><td width=\"25%\"><font face=\"verdana\">" . 
        $row["cedula"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
        $row["nombre"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
        $row["apellido"] . "</font></td>";
        
    $numero++;
  }
  echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Numero de Inscritos: " . $numero . 
      "</b></font></td></tr>";
  
  mysql_free_result($result);
  mysql_close($link);
?>
</table> 