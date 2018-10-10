<?php
if(isset($_GET['submit']))
{
  riepilogo();
}
else
{
  showform();
}

  function riepilogo()
  {
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
<?php
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
        <h1>Invio dati:</h1>
        <form action="" method="get">
          <p><input type="text" name="nome" placeholder="Inserisci il tuo nome" required></p>
          <p><input type="text" name="cognome" placeholder="Inserisci il tuo cognome" required></p>
          <p><input type="email" name="email" placeholder="Inserisci la tua email" required></p>
          <p><input type="text" name="cell" maxlength="10" placeholder="Numero cellulare" required></p>
          <p>
            <input type="submit" name="submit" value="Invia">
            <input type="reset" value="Annulla">
          </p>
        </form>
      </center>
    </body>
    </html>
<?php
  }
?>
