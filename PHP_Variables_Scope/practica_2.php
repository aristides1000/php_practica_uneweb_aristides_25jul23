<?php
  /* 
    Una variable declarada dentro de una función tiene un ÁMBITO LOCAL y solo se puede acceder dentro de esa función:
  */

  // Variable con alcance local:

  function myTest() {
    $x = 5; // alcance local o local scope
    echo "<p>La variable x dentro de la función es: $x</p>";
  }

  myTest();

  //Usar la variable x fuera de la función generará un error
  echo "<p>La variable x fuera de la función es: $x</p>";

  /*
    Puede tener variables locales con el mismo nombre en diferentes funciones, porque las variables locales solo son reconocidas por la función en la que se la declaran.
  */
?>