<?php
include_once "header.php";
require_once "includes\dbh.inc.php";
$idDoador = $_SESSION["iddoador"];
$sql = "SELECT * FROM doacao where id_doador = $idDoador";
$allDonations = mysqli_query($conn, $sql);

?>
<div class="form-holder container">
    
    <h2 class="display-6 fw-bold mb-5"><span class="underline pb-1" style="color: rgb(1,113,61);">Minhas doações</span></h2>
    
    <div class="cards-container">
        <?php
        if (mysqli_num_rows($allDonations) > 0) {
            while ($row = mysqli_fetch_assoc($allDonations)) {
                echo '<div class="card" style="width: 18rem;">';
                echo '<img class="card-img-top" src="' . $row["image_filepath"] . '" alt="Card image cap">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title fw-bold" style="color: #01713D">ID: ' . $row["id"] . '</h5>';
                echo '<h6 class="card-title">Qtd óleo: ' . $row["quantidade_oleo"] . '</h6>';
                echo '<h6 class="card-title">Status: <span class="yellow fw-bold">' . $row["status"] . '</span></h6>';
                echo '<h6 class="card-title" style="position: relative; top: 1rem;"> Data: ' . $row["data_doacao"] . '</h6>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<p>No donations found.</p>';
        }
       
       

        
        ?>
    </div>

    <?php
    include_once "footer.php";
    ?>