<!DOCTYPE html>
<html>
  <?php include "head.php"; ?>
  <body>
    <center>
      <h1>Benvenuto sul portale!</h1>
      <h2>Per visualizzare il contenuto, devi indicare la tua eta': </h2>
      <form action="ricevo.php" method="post">
        <select name="anni">
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
        </select>
        <input type="submit" value="Invia">
      </form>
    </center>
  </body>
</html>
