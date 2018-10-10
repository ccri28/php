<?php
  $saluto = "Benvenuto sul nostro portale!";

  if(isset($_COOKIE["ultimavisita"]))
  {
    $saluto = "Bentornato sul nostro portale!";
  }

  setcookie("ultimavisita",time());
?>
