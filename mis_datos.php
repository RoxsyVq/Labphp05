<?php
if(isset($_POST['enviar'])) {
  echo "Hola <b>". $_POST['nombre'] ." " . $_POST['apellidos'] . "</b> que tal estas<br>";
  echo "Eres " . $_POST['sexo'] . "<br>";
  echo "Tienes " . $_POST['edad'] . "<br>";
  echo "Tu sistema favorito es " . $_POST['sistema'] . "<br>";
  if(isset($_POST['futbol'])){
    echo "Te gusta el futbol <br>";
  }else{
    echo "No te gusta el futbol <br>";
  }
  if($_POST['Aficcciones']!=""){
    echo "Tus Aficcciones son:<br>";
    echo nl2br($_POST['Aficcciones']);
  }else {
    echo "No tienes Aficcciones <br>";
  }
}
echo "<br>";
echo "<a href='formulario.html'>Volver al formulario";
?>
