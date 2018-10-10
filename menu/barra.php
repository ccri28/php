<?php
  $links = array("menu.php" => "Homepage",
                 "pagina2.php" => "Pagina2",
                 "pagina3.php" => "Pagina3");

  //
  //$pagina_corrente = basename($PHP_SELF);

  // Visualizzazione barra di navigazione
  // Riga orizzontale prima dei link
  echo "<hr>\n";
  // Inizio a scorrere l'array
  while (list($url,$desc)=each($links)) {
    //if ($url==$pagina_corrente) {
      // Pagina corrente
      //echo "<b>$desc</b> ";
    //} else {
      // Altre pagine
      echo "[<a href=\"$url\">$desc</a>] ";
    //}
  }
  // Riga orizzontale dopo i link
  echo "<hr>\n";
?>
