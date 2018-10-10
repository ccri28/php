<?php

if(isset($_POST["submit"]))
{
    codifica();
}
else
{
    showform();
}


function codifica()
{
  include "head.php";
  $parola=$_POST["parola"];
  $parola_codificata=md5($parola);
  ?>
  <center>
  <?php
  print $parola_codificata;
  ?>
  </center>
  <?php
}





function showform()
{
?>
  <!DOCTYPE html>
  <html>
  <?php include "head.php"; ?>
    <body>
    <center>
      <h1>Codifica la parola, con l'algoritmo md5:</h1>
      <form action="" method="post">
        <p><input type="text" name="parola" required></p>
        <input type="submit" name="submit" value="Codifica">
      </form>
    </center>
    </body>
  </html>
<?php
}
?>
