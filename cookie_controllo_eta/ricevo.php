<?php
if(isset($_POST["anni"])){
setcookie("eta",$_POST["anni"],time()+3600);
header("Location:contenuti.php");
}

if(!isset($_POST["anni"]))
{
  header("Location:index.php");
}
 ?>
