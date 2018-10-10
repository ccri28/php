<?php
  if(isset($_POST["submit"]))
  {
    divisione();
  }
  else
  {
    form();
  }
?>


<?php
  function form()
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
          <h3>Divisione:</h3>
          <form action="" method="post">
            <p><input type="text" name="dividendo" placeholder="Inserisci il dividendo" required></p>
            <p><input type="text" name="divisore" placeholder="Inserisci il divisore" required></p>
            <p>
              <input type="submit" name="submit" value="Dividi">
              <input type="reset" value="Annulla">
            </p>
          </form>
        </center>
      </body>
      </html>
<?php
  }
?>


<?php
function divisione()
{
  $a = $_POST["dividendo"];
  $b = $_POST["divisore"];

  if($b == 0)
  {
    echo "<center><h4>Mamma mia che errore! Non puoi dividere un numero per zero!!</h4></center>";
  }
  else
  {
    $ris = $a/$b;
    echo "<center><h4>Il risultato della divisione e': ".$ris."</h4></center>";
  }
}
?>
