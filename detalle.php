<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1 class="Estilo1">Recupera la variable marca y solo muestra la tabla correspondiente</h1>
    <?php
    $marca=$_GET["marca"];
    if ($marca=="honda"){?>
      <table width="550" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
    <tr>
    <td width="281" rowspan="5" class="Estilo1"><img src="images/auto.jpg" alt="" /></td>
      <td width="96" class="Estilo1"><strong>Modelo</strong></td>
      <td width="168" class="Estilo1"><strong>Honda Civic 20</strong></td>
    </tr>
    <tr>
      <td class="Estilo1">Año</td>
      <td class="Estilo1">2005</td>
    </tr>
    <tr>
      <td class="Estilo1">Recorrido</td>
      <td class="Estilo1">45500km</td>
    </tr>
    <tr>
    <td class="Estilo1">Ciudad</td>
    <td class="Estilo1">Lima</td>
  </tr>
<tr>
  <td valign="top" class="Estilo1">Precio</td>
  <td valign="top" class="Estilo1">$9.700</td>
</tr>
</table>
<?php
}
elseif ($marca=="Hyundai"){?>
  <table width="550" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
<tr>
<td width="279" rowspan="5" bgcolor="#697986" class="Estilo1"><div align="center"><img src="images/auto2.jpg" alt="" /></div></td>
  <td width="101" class="Estilo1"><strong>Modelo</strong></td>
  <td width="179" class="Estilo1"><strong>Hyundai</strong></td>
</tr>
<tr>
  <td class="Estilo1">Año</td>
  <td class="Estilo1">2007</td>
</tr>
<tr>
  <td class="Estilo1">Recorrido</td>
  <td class="Estilo1">34500km</td>
</tr>
<td class="Estilo1">Ciudad</td>
<td class="Estilo1">Lima</td>
</tr>
<tr>
<td valign="top" class="Estilo1">Precio</td>
<td valign="top" class="Estilo1">$13.800</td>
</tr>
</table>
<?php
}
elseif ($marca=="toyota"){?>
  <table width="550" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
    <tr>
<td width="272" rowspan="5" bgcolor="#FBFFFE" class="Estilo1"><div align="center"><img src="images/auto3.jpg" alt="" /></div></td>
  <td width="101" class="Estilo1"><strong>Modelo</strong></td>
  <td width="179" class="Estilo1"><strong>Toyota</strong></td>
</tr>
<tr>
  <td class="Estilo1">Año</td>
  <td class="Estilo1">2011</td>
</tr>
<tr>
  <td class="Estilo1">Recorrido</td>
  <td class="Estilo1">3000km</td>
</tr>
<td class="Estilo1">Ciudad</td>
<td class="Estilo1">Lima</td>
</tr>
<tr>
<td valign="top" class="Estilo1">Precio</td>
<td valign="top" class="Estilo1">$12.800</td>
</tr>
</table>
<?php }
else
  {echo "No existe el modelo";}
 ?>
  </body>
</html>
