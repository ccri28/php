<?php
  if(isset($_GET["submit"]))
  {
    mostra();
  }
  else
  {
    form();
  }
?>




<?php
  function mostra()
  {
    $cognome = $_GET["cognome"];
    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $cell = $_GET["cell"];
?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body style="background-color:#21aabd;">
      <center>
        <h3>Grazie per esserti iscritto al nostro portale!</h3>
        <h4>Verrai contattato da un nostro operatore al numero di cellulare: <?php print $cell; ?></h4>
        <h5>In seguito ecco, nuovamente, il riepilogo dei dati forniti:</h5>
        <p>Cognome e nome: <?php echo $cognome." ".$nome; ?></p>
        <p>Email: <?php print $email; ?></p>
        <p>Cellulare: <?php print $cell; ?></p>
      </center>
    </body>
  </html>
<?php
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
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
      </head>
      <body style="background-color:#21aabd;">
        <center>
          <hr>
          <h3>Iscrizione al portale</h3>
          <hr>
          <form action="" method="get" data-ng-app="">
              <p><input type="text" name="cognome" placeholder="Inserisci cognome" required data-ng-model="cognome"></p>
              <p><input type="text" name="nome" placeholder="Inserisci nome" required data-ng-model="nome"></p>
              <p><input type="email" name="email" placeholder="Inserisci email" required data-ng-model="email"></p>
              <p><input type="text" name="cell" placeholder="Inserisci numero di cellulare" required maxlength="10" data-ng-model="cell"></p>
              <hr>
              <h3>Riepilogo dati</h3>
              <p>Cognome: {{cognome}}</p>
              <p>Nome: {{nome}}</p>
              <p>Email: {{email}}</p>
              <p>Cellulare: {{cell}}</p>
              <hr>
              <h4>Dopo aver controllato il riepilogo, invia i dati</h4>
              <p>
                <input type="submit" name="submit" value="Invia">
                <input type="reset" value="Annulla">
              </p>
            <hr>
          </form>
        </center>
      </body>
      </html>
<?php
  }
?>
