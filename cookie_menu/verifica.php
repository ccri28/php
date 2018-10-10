<center>
  <h1><?php echo $saluto; ?></h1>
  <?php include "menu.php"; ?>
  <?php
    if(isset($_COOKIE["ultimavisita"]))
    {
      echo "L'ultima vosta che hai visitato il nostro portale è stato il ".date("d/m/Y");
      echo ", alle ore: ".date("H:i:s.", $_COOKIE["ultimavisita"]);
    }
    else
    {
      echo "Non sei mai stato sul nostro portale?";
    }
  ?>
</center>
