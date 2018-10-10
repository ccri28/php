
<?php

if(isset($_POST['submit']))
{
  codifica();
}
else
{
  showform();
}

function codifica()
{
  $parola = $_POST['parola'];
  $parola_md5 = md5($parola);
  print $parola_md5;
}

?>



<?php
function showform()
{
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    <center>
      <h2>Codifica la parola in md5:</h2>
      <form action="" method="post">
        <p><input type="text" name="parola" placeholder="Inserisci la parola da codificare" required></p>
        <p><input type="submit" name="submit" value="Codifica">
           <input type="reset" value="Annulla">
        </p>
      </form>
    </center>
  </body>
  </html>
<?php
}
?>
