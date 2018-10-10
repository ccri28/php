<?php
  $saluto = "Benvenuto sul nostro sito!";

  if(isset($_COOKIE["ultimavisita"]))
  {
    $saluto = "Bentornato sul nostro sito!";
  }

  setcookie("ultimavisita", time());
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2><?php echo $saluto; ?></h2>
    <?php
      if(isset($_COOKIE["ultimavisita"]))
      {
        echo "L'ultima volta che sei stato sul nostro sito è stato il ".date( "d/m/Y");
        echo ", alle ore: ".date( "H:i:s.", $_COOKIE["ultimavisita"]);
        echo "<h5>Se vuoi cancellare il cookie, <a href='cancella.php'>clicca qui</a></h5>";
      }
      else
      {
        echo "Non sei mai stato qui prima?!";
      }

    ?>
  </body>
</html>
