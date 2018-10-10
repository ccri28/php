<?php
  $links = array("index.php" => "Homepage", "pagina2.php" => "Pagina2", "pagina3.php" => "Pagina3");

  echo "<hr>";
  while(list($pag,$desc)=each($links))
  {
    echo "[<a href=\"$pag\">$desc</a>]";
  }
  echo "<hr>";
?>
