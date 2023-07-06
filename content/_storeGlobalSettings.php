<?php
require_once("./config/db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $siteTitle = test_input($_POST['siteTitle_en']);
    $siteTitle_no = test_input($_POST['siteTitle_no']);
    $siteTitle_de = test_input($_POST['siteTitle_de']);
    $siteTitle_es = test_input($_POST['siteTitle_es']);
    $siteTitle_fr = test_input($_POST['siteTitle_fr']);
    $siteShortTitle = test_input($_POST['siteShortTitle_en']);
    $siteShortTitle_no = test_input($_POST['siteShortTitle_no']);
    $siteShortTitle_de = test_input($_POST['siteShortTitle_de']);
    $siteShortTitle_es = test_input($_POST['siteShortTitle_es']);
    $siteShortTitle_fr = test_input($_POST['siteShortTitle_fr']);
    $siteDescription = test_input($_POST['siteDescription_en']);
    $siteDescription_no = test_input($_POST['siteDescription_no']);
    $siteDescription_de = test_input($_POST['siteDescription_de']);
    $siteDescription_es = test_input($_POST['siteDescription_es']);
    $siteDescription_fr = test_input($_POST['siteDescription_fr']);
    $siteWelcomeTextToggle = test_input($_POST['siteWelcomeTextToggle']);
    $siteWelcomeTextTitle = test_input($_POST['siteWelcomeTextTitle_en']);
    $siteWelcomeTextTitle_no = test_input($_POST['siteWelcomeTextTitle_no']);
    $siteWelcomeTextTitle_de = test_input($_POST['siteWelcomeTextTitle_de']);
    $siteWelcomeTextTitle_es = test_input($_POST['siteWelcomeTextTitle_es']);
    $siteWelcomeTextTitle_fr = test_input($_POST['siteWelcomeTextTitle_fr']);
    $siteWelcomeText = test_input($_POST['siteWelcomeText_en']);
    $siteWelcomeText_no = test_input($_POST['siteWelcomeText_no']);
    $siteWelcomeText_de = test_input($_POST['siteWelcomeText_de']);
    $siteWelcomeText_es = test_input($_POST['siteWelcomeText_es']);
    $siteWelcomeText_fr = test_input($_POST['siteWelcomeText_fr']);
    $siteRatufaScript = $_POST['siteRatufaScript'];
    $siteAllowSponsors = test_input($_POST['siteAllowSponsors']);
    $siteAllowCoffee = test_input($_POST['siteAllowCoffee']);
    $siteCoffeeLink = test_input($_POST['siteCoffeeLink']);
    $siteCopyrightText = test_input($_POST['siteCopyrightText_en']);
    $siteCopyrightText_no = test_input($_POST['siteCopyrightText_no']);
    $siteCopyrightText_de = test_input($_POST['siteCopyrightText_de']);
    $siteCopyrightText_es = test_input($_POST['siteCopyrightText_es']);
    $siteCopyrightText_fr = test_input($_POST['siteCopyrightText_fr']);
    $siteCopyrightName = test_input($_POST['siteCopyrightName']);
    $siteContactEmail = test_input($_POST['siteContactEmail']);
    



    $conn->storeGlobalSettings($siteTitle, $siteTitle_no, $siteTitle_de, $siteTitle_es, $siteTitle_fr, $siteShortTitle, $siteShortTitle_no, $siteShortTitle_de, $siteShortTitle_es, $siteShortTitle_fr, $siteDescription, $siteDescription_no, $siteDescription_de, $siteDescription_es, $siteDescription_fr, $siteWelcomeTextToggle, $siteWelcomeTextTitle, $siteWelcomeTextTitle_no, $siteWelcomeTextTitle_de, $siteWelcomeTextTitle_es, $siteWelcomeTextTitle_fr, $siteWelcomeText, $siteWelcomeText_no, $siteWelcomeText_de, $siteWelcomeText_es, $siteWelcomeText_fr, $siteRatufaScript, $siteAllowSponsors, $siteAllowCoffee, $siteCoffeeLink, $siteCopyrightText, $siteCopyrightText_no, $siteCopyrightText_de, $siteCopyrightText_es, $siteCopyrightText_fr, $siteCopyrightName, $siteContactEmail);
    ?>
    
<div class='card'>
    <div class="card-body">
        <h2 class='card-title'>The global settings was saved</h2>
        <p class='card-text'>
            <i class="fa-solid fa-check" style="color: #10cb14;"></i>
            The global settings for "<?php echo $siteTitle; ?>" was successfully saved.
        </p><br>
        <?php btnBackToUserSettings(); ?>
    </div>
</div>
<?php } ?>
