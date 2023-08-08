<?php
  /*
    En PHP, las variables se pueden declarar en cualquier parte del script

    El alcance la una variable es la parte del script donde se puede hacer referencia/utiliazr la variable.

    PHP tiene tres ámbitos de variables diferentes:

      -local
      -global
      -estático

    Alcance Global y Local

    Una variable declarada fuera de una función tiene un ALCANCE GLOBAL y solo se puede acceder fuera de una función.

    Variable con alcance global:
  */

  $x = 5;

  function myTest() {
    // Usando x dentro de esta función generaremos un error
    echo "<p>La variable x dentro de la función: $x</p>";
  }

  myTest();

  echo "<p>La variable x fuera de la función es: $x</p>";
?>