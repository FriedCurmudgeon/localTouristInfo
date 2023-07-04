          <!-- Language -->
<?php 

        if (isset($_SESSION['lang']) && $_SESSION['lang'] == 'en') {
                $enSelected = 'selected'; } else { $enSelected = ''; };
                if (isset($_SESSION['lang']) && $_SESSION['lang'] == 'no') {
                $noSelected = 'selected'; } else { $noSelected = ''; };
                if (isset($_SESSION['lang']) && $_SESSION['lang'] == 'de') {
                $deSelected = 'selected'; } else { $deSelected = ''; };
                if (isset($_SESSION['lang']) && $_SESSION['lang'] == 'es') {
                $esSelected = 'selected'; } else { $esSelected = ''; };
                if (isset($_SESSION['lang']) && $_SESSION['lang'] == 'fr') {
                $frSelected = 'selected'; } else { $frSelected = ''; };

?>
<!--  
<form method='get' action='' id='form_lang' >
        Select Language : 
        <select name='lang' onchange='changeLang();' >
                <option value='en' < ?php echo $enSelected ?>>English</option>
                <option value='no' < ?php echo $noSelected ?>>Norwegian</option>
        </select>
</form> -->


<?php if(isset($_SESSION['username']))
                        echo '<div class="welcomeText">
                              <h1 class="welcomeTitle"><a href="index.php?p=home" class="titleLink">' . $siteShortTitleLng . '</a></h1>
                              <!--  Welcome <b>' . $firstname . '&nbsp;' . $surname . '</b> -->
                              
                                <form method="get" action="" id="form_lang" class="langForm">
                                        <!-- Select Language : -->
                                        <select name="lang" onchange="changeLang();" class="langForm">
                                                <option value="en" ' . $enSelected . '>🇬🇧 EN</option>
                                                <option value="no" ' . $noSelected . '>🇳🇴 NO</option>
                                                <option value="de" ' . $deSelected . '>🇩🇪 DE</option>
                                                <option value="fr" ' . $frSelected . '>🇫🇷 FR</option>
                                                <option value="es" ' . $esSelected . '>🇪🇸 ES</option>
                                        </select>
                                </form>
                                <img src="./img/logo.png" class="logoHeaderImg" alt="' . $siteShortTitle . ' Logo">

                              </div>';
                      else
                        echo '<div class="welcomeText"><h1 class="welcomeTitle"><a href="index.php?p=home" class="titleLink">' . $siteShortTitle . '</a></h1>

                                <form method="get" action="" id="form_lang" class="langForm">
                                        <!-- Select Language : -->
                                        <select name="lang" onchange="changeLang();" class="langForm">
                                                <option value="en" ' . $enSelected . '>🇬🇧 EN</option>
                                                <option value="no" ' . $noSelected . '>🇳🇴 NO</option>
                                                <option value="de" ' . $deSelected . '>🇩🇪 DE</option>
                                                <option value="fr" ' . $frSelected . '>🇫🇷 FR</option>
                                                <option value="es" ' . $esSelected . '>🇪🇸 ES</option>
                                        </select>
                                </form>
                                 <img src="./img/logo.png" class="logoHeaderImg" alt="' . $siteShortTitle . ' Logo">

                        </div>';
    
                ?>
