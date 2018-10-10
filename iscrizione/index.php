
<?php
  if(isset($_GET["submit"]))
  {
    ?>
    <center>
      <h2>Iscrizione effettuata con successo!</h2>
      <h3>Ti è stata mandata una mail all'indirizzo email indicato</h3>
    </center>
    <?php
    mostra();
  }
  else
  {
    showform();
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
        <h2>Iscrizione al portale:</h2>
        <form action="" method="get">
          <p><input type="text" name="nome" placeholder="Inserisci il tuo nome" required></p>
          <p><input type="text" name="cognome" placeholder="Inserisci il tuo cognome" required></p>
          <p><input type="email" name="email" placeholder="Inserisci la tua mail" required></p>
          <p><input type="text" name="cell" maxlength="10" placeholder="Inserisci il tuo numero di cellulare" required></p>
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

<?php
  function mostra()
  {
    $nome = $_GET["nome"];
    $cognome = $_GET["cognome"];
    $email = $_GET["email"];
    $cell = $_GET["cell"];

    // definisco mittente e destinatario della mail
    $nome_mittente = "Cristian Piro";
    $mail_mittente = "cristian.piro@yahoo.com";
    $mail_destinatario = $email;

    // definisco il subject ed il body della mail
    $mail_oggetto = "Conferma Iscrizione pirotecnica";
    $mail_corpo = "Ti ringraziamo per la tua iscrizione!<br>
                   Ecco i tuoi dati:<br>
                   Nome: $nome<br>
                   Cognome: $cognome<br>
                   Email: $email<br>
                   Cellulare: $cell<br>
                   Cordiali saluti!";

    // aggiusto un po' le intestazioni della mail
    // E' in questa sezione che deve essere definito il mittente (From)
    // ed altri eventuali valori come Cc, Bcc, ReplyTo e X-Mailer
    $mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
    $mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
    $mail_headers .= "X-Mailer: PHP/" . phpversion();

    mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers);

  }
?>
