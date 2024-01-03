<?php
include_once 'header.php';
if (!isset($_SESSION["iddoador"])) {
  header("location: index.php");
  exit();
}

?>
<div id="myModal" class="modal">
  <div class="modal-content">
    <h2 class="display-6 fw-bold mb-5"><span class="underline pb-2" style="color: rgb(1,113,61);">Doação enviada!</span></h2>
    <a href="index.php"><button class="btn btn-primary shadow" name="closePopup" style="background: rgb(1,113,61);">Voltar à pagina principal</button></a>
  </div>
</div>
<div class="form-holder container my-5">
    <h2 class="display-6 fw-bold mb-5"><span class="underline pb-1" style="color: rgb(1,113,61);">Cadastre seu óleo!</span></h2>
    <form action="includes/cad-oil.inc.php" method="post" id="oil-collection-form" enctype="multipart/form-data">

      <div class="mb-3">
        <label for="amount" class="form-label">Quantidade de Óleo (em litros):</label>
        <input type="text" name="qtdOleo" id="amount" class="form-control" maxlength="4" required>
      </div>

      <div class="mb-3">
        <label for="address" class="form-label">Informação adicional:</label>
        <textarea id="address" name="infoAdicional" class="form-control" rows="3" required></textarea>
      </div>

      <div class="mb-3">
        <label for="oil-photo" class="form-label">Foto do Óleo:</label>
        <input type="file" name="foto" id="oil-photo" class="form-control" required>
      </div>

      <button class="btn btn-primary shadow" type="submit" name="submit" style="background: rgb(1,113,61);">Cadastrar</button>

    <?php
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "stmtfailed") {
        echo "<p>Algo deu errado</p>";
      } else if ($_GET["error"] == "none") {
        echo "<script> window.onload = function() {
          openModal();
      }; </script>";
      }
    }
    ?>
  </form>
  <?php
  include_once 'footer.php';
  ?>
  <script src="js/cad-oilScript.js" defer></script>

  </html>