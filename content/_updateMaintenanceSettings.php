<?php
require_once("./config/db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = intval($_POST['id']);
    $siteMaintenance = test_input($_POST['siteMaintenance']);
    $siteMaintenanceText = test_input($_POST['siteMaintenanceText_en']);
    $siteMaintenanceText_no = test_input($_POST['siteMaintenanceText_no']);
    $siteMaintenanceText_de = test_input($_POST['siteMaintenanceText_de']);
    $siteMaintenanceText_es = test_input($_POST['siteMaintenanceText_es']);
    $siteMaintenanceText_fr = test_input($_POST['siteMaintenanceText_fr']);


    $conn->updateMaintenanceSettings($id, $siteMaintenance, $siteMaintenanceText, $siteMaintenanceText_no, $siteMaintenanceText_de, $siteMaintenanceText_es, $siteMaintenanceText_fr);
    ?>

<div class='card'>
    <div class="card-body">
        <h2 class='card-title'>The settings has been changed</h2>
            <p class='card-text'>
                <i class="fa-solid fa-check" style="color: #10cb14;"></i>
                The maintenance settings has been changed!</p>
            <br>
            <?php btnBackToUserSettings(); ?>
    </div>
</div>

<?php } ?>