<?php
  $nome = $_GET['nome'];
  $cognome = $_GET['cognome'];
  $email = $_GET['email'];
  $cell = $_GET['cell'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .riepilogo{
        border: 1px solid black;
        background-color: #21aabd;
        height: auto;
        width: 400px;
      }
    </style>
  </head>
  <body>
      <center>
        <h2>Invio dati effettuato con successo!</h2>
        <h3>Ecco il riepilogo dati:</h3>
        <div class="riepilogo">
          <p>Nome: <?php echo $nome; ?></p>
          <p>Cognome: <?php echo $cognome; ?></p>
          <p>Email: <?php echo $email; ?></p>
          <p>Numero di cellulare: <?php echo $cell; ?></p>
        </div>
        <h2>Verrai contattato al piu' presto dal nostro team!</h2>
      </center>
  </body>
</html>
