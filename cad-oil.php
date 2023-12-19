<?php
include_once 'header.php';
?>

  <div class="form-holder container my-5">
  <h2 class="display-6 fw-bold mb-5"><span class="underline pb-1" style="color: rgb(1,113,61);">Cadastre seu óleo!</span></h2>
    <form action="includes/cad-oil.inc.php" method="post" id="oil-collection-form">
      <div class="mb-3">
        <label for="amount" class="form-label">Quantidade de Óleo (em litros):</label>
        <input type="number" name="qtdOleo" id="amount" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="oil-photo" class="form-label">Foto do Óleo:</label>
        <input type="file" name = "foto" id="oil-photo" class="form-control" accept="image/*" required>
      </div>
      <div class="mb-3">
        <label for="address" class="form-label">Informação adicional:</label>
        <textarea id="address" name="additionalInformation" class="form-control" rows="3" required></textarea>
      </div>
      <button class="btn btn-primary shadow" type="submit" name="submit" style="background: rgb(1,113,61);">Cadastrar</button>
    </form>
  <?php
  include_once 'footer.php';
  ?>
</body>

</html>