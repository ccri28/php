
<?php
  $links = ["index.php"=>"Homepage","contenuto.php"=>"Contenuto","contatti.php"=>"Contatti"];
?>
  <hr>
  <center>
<?php
  while(list($pag,$des)=each($links))
  {
    echo "[<a href='$pag' style='text-decoration:none;'>$des</a>]";
  }
?>
  </center>
  <hr>
