<?php
$usrArr = $conn->getUserInfo();
  for( $i=0; $i < count($usrArr); $i++) {

    if (isset($_SESSION['username'])) {
        if ($usrArr[$i]['username'] == $_SESSION['username'])  {
          $usrId = $usrArr[$i]['id'];
          $username = $usrArr[$i]['username'];
          $firstname = $usrArr[$i]['firstname'];
          $surname = $usrArr[$i]['surname'];
          $isAdmin = $usrArr[$i]['isAdmin'];
          $createdAt = $usrArr[$i]['created_at'];
        }
    }

  }

  $settingsArr = $conn->getGlobalSettings();
    for( $i=0; $i < count($settingsArr); $i++) {

            $settingsId = $settingsArr[$i]['id'];
            $siteTitle = $settingsArr[$i]['siteTitle'];
            $siteTitle_no = $settingsArr[$i]['siteTitle_no'];
            $siteTitle_de = $settingsArr[$i]['siteTitle_de'];
            $siteTitle_es = $settingsArr[$i]['siteTitle_es'];
            $siteTitle_fr = $settingsArr[$i]['siteTitle_fr'];
            $siteShortTitle = $settingsArr[$i]['siteShortTitle'];
            $siteShortTitle_no = $settingsArr[$i]['siteShortTitle_no'];
            $siteShortTitle_de = $settingsArr[$i]['siteShortTitle_de'];
            $siteShortTitle_es = $settingsArr[$i]['siteShortTitle_es'];
            $siteShortTitle_fr = $settingsArr[$i]['siteShortTitle_fr'];
            $siteDescription = $settingsArr[$i]['siteDescription'];
            $siteDescription_no = $settingsArr[$i]['siteDescription_no'];
            $siteDescription_de = $settingsArr[$i]['siteDescription_de'];
            $siteDescription_es = $settingsArr[$i]['siteDescription_es'];
            $siteDescription_fr = $settingsArr[$i]['siteDescription_fr'];
            $siteMaintenance = $settingsArr[$i]['siteMaintenance'];
            $siteMaintenanceText = $settingsArr[$i]['siteMaintenanceText'];
            $siteMaintenanceText_no = $settingsArr[$i]['siteMaintenanceText_no'];
            $siteMaintenanceText_de = $settingsArr[$i]['siteMaintenanceText_de'];
            $siteMaintenanceText_es = $settingsArr[$i]['siteMaintenanceText_es'];
            $siteMaintenanceText_fr = $settingsArr[$i]['siteMaintenanceText_fr'];
            $siteWelcomeTextToggle = $settingsArr[$i]['siteWelcomeTextToggle'];
            $siteWelcomeTextTitle = $settingsArr[$i]['siteWelcomeTextTitle'];
            $siteWelcomeTextTitle_no = $settingsArr[$i]['siteWelcomeTextTitle_no'];
            $siteWelcomeTextTitle_de = $settingsArr[$i]['siteWelcomeTextTitle_de'];
            $siteWelcomeTextTitle_es = $settingsArr[$i]['siteWelcomeTextTitle_es'];
            $siteWelcomeTextTitle_fr = $settingsArr[$i]['siteWelcomeTextTitle_fr'];
            $siteWelcomeText = $settingsArr[$i]['siteWelcomeText'];
            $siteWelcomeText_no = $settingsArr[$i]['siteWelcomeText_no'];
            $siteWelcomeText_de = $settingsArr[$i]['siteWelcomeText_de'];
            $siteWelcomeText_es = $settingsArr[$i]['siteWelcomeText_es'];
            $siteWelcomeText_fr = $settingsArr[$i]['siteWelcomeText_fr'];
            $siteAllowSponsors = $settingsArr[$i]['siteAllowSponsors'];
            $siteAllowCoffee = $settingsArr[$i]['siteAllowCoffee'];
            $siteCoffeeLink = $settingsArr[$i]['siteCoffeeLink'];
            $siteCopyrightText = $settingsArr[$i]['siteCopyrightText'];
            $siteCopyrightText_no = $settingsArr[$i]['siteCopyrightText_no'];
            $siteCopyrightText_de = $settingsArr[$i]['siteCopyrightText_de'];
            $siteCopyrightText_es = $settingsArr[$i]['siteCopyrightText_es'];
            $siteCopyrightText_fr = $settingsArr[$i]['siteCopyrightText_fr'];
            $siteCopyrightName = $settingsArr[$i]['siteCopyrightName'];
            $siteContactEmail = $settingsArr[$i]['siteContactEmail'];
            $siteRatufaScript = $settingsArr[$i]['siteRatufaScript'];

            if ($siteAllowCoffee !== 1 ) {
              $hideCoffeeLink = 'display:none';
            } else {
              $hideCoffeeLink = '';
            };

            if ($siteAllowSponsors !== 1 ) {
              $hideSponsorLink = 'display:none';
            } else {
              $hideSponsorLink = '';
            };

            if ($siteAllowSponsors !== 0 ) {
              $showSponsorLink = 'display:none';
            } else {
              $showSponsorLink = '';
            };

            $GLOBALS['GLOBsiteCoffeeLink'] = $siteCoffeeLink;
    }


    isset($settingsId) || $settingsId = '0';
    isset($siteTitle) || $siteTitle = 'Long Site title';
    isset($siteShortTitle) || $siteShortTitle = 'Site title';
    isset($siteDescription) || $siteDescription = 'A decription of your site';
    isset($siteWelcomeTextTitle) || $siteWelcomeTextTitle = 'Welcome!';
    isset($siteWelcomeText) || $siteWelcomeText = 'Welcome to this great tourist guide.';
    isset($siteAllowSponsors) || $siteAllowSponsors = '0';
    isset($siteAllowCoffee) || $siteAllowCoffee = '0';
    isset($siteCoffeeLink) || $siteCoffeeLink = 'buymeacoffeeusername';
    isset($siteCopyrightText) || $siteCopyrightText = 'Copyright text for footer';
    isset($siteCopyrightName) || $siteCopyrightName = 'Your name';
    isset($siteContactEmail) || $siteContactEmail = 'your@email.com';
    isset($siteMaintenance) || $siteMaintenance = '0';
    isset($siteMaintenanceText) || $siteMaintenanceText = 'The service may behave badly due to maintenance!';
    isset($siteWelcomeTextToggle) || $siteWelcomeTextToggle = '0';


// Dates
$dateNow = new \DateTime('now');
$fullDateNow = $dateNow->format('Y-m-d');
$dateMonth = $dateNow->format('m');
$dateYear = $dateNow->format('Y');
$dateDay = $dateNow->format('d');



// This year
$thisYear = $dateYear;
$today = $dateDay;

// Next year
$nextYear = $thisYear+1;

// Last year
$lastYear = $thisYear-1;

//Calculate next year
$dateDecember = $thisYear . '-12-10';

if($dateDecember < $fullDateNow) {
  $calculatedYear = $nextYear;
} else {
  $calculatedYear = $thisYear;
};

if ($_SESSION['lang'] == 'en') { $maintTextPar = htmlspecialchars_decode($siteMaintenanceText); }
    elseif ($_SESSION['lang'] == 'no') { $maintTextPar = htmlspecialchars_decode($siteMaintenanceText_no); } 
    elseif ($_SESSION['lang'] == 'de') { $maintTextPar = htmlspecialchars_decode($siteMaintenanceText_de); }
    elseif ($_SESSION['lang'] == 'es') { $maintTextPar = htmlspecialchars_decode($siteMaintenanceText_es); }
    elseif ($_SESSION['lang'] == 'fr') { $maintTextPar = htmlspecialchars_decode($siteMaintenanceText_fr); }
    else  { $maintTextPar = htmlspecialchars_decode($siteMaintenanceText); };

$maintText =$maintTextPar;
$maintText = trim(preg_replace('#^<p>|</p>$#i', '', trim($maintTextPar)));

if ($_SESSION['lang'] == 'en') { $siteCopyrightTextLng = htmlspecialchars_decode($siteCopyrightText); }
    elseif ($_SESSION['lang'] == 'no') { $siteCopyrightTextLng = htmlspecialchars_decode($siteCopyrightText_no); } 
    elseif ($_SESSION['lang'] == 'de') { $siteCopyrightTextLng = htmlspecialchars_decode($siteCopyrightText_de); }
    elseif ($_SESSION['lang'] == 'es') { $siteCopyrightTextLng = htmlspecialchars_decode($siteCopyrightText_es); }
    elseif ($_SESSION['lang'] == 'fr') { $siteCopyrightTextLng = htmlspecialchars_decode($siteCopyrightText_fr); }
    else  { $siteCopyrightTextLng = htmlspecialchars_decode($siteCopyrightText); };

$footerTextContent = "
<div class='row'>
    <div class='col-md-6 col-xs-12 text-start' id='footerLegal'>
       " . $siteCopyrightTextLng . "
    </div>
    <div class='col-md-6 col-xs-12 text-start' id='footerSponsor'>
    </div><br>
    <center><i class='fa-solid fa-copyright'></i>&nbsp;2023 Copyright " . $siteCopyrightName . "</center>
</div>";

if ($_SESSION['lang'] == 'en') { $siteShortTitleLng = $siteShortTitle; }
    elseif ($_SESSION['lang'] == 'no') { $siteShortTitleLng = $siteShortTitle_no; } 
    elseif ($_SESSION['lang'] == 'de') { $siteShortTitleLng = $siteShortTitle_de; }
    elseif ($_SESSION['lang'] == 'es') { $siteShortTitleLng = $siteShortTitle_es; }
    elseif ($_SESSION['lang'] == 'fr') { $siteShortTitleLng = $siteShortTitle_fr; }
    else  { $siteShortTitleLng = $siteShortTitle; };

if (isset($_SESSION['username'])) { $hideLoginFooter = 'display:none';} else { $hideLoginFooter=''; };

$siteFooter = "

<div class='footerLinkWrapper' id='footerLinkWrapper'>
  <a href='#' onclick='toggleFooter(); return false;' class='privacyFooterLink' id='privacyLink'><i
      class='fa-solid fa-circle-exclamation'></i>&nbsp;" . _cookies . "</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
    href='https://www.buymeacoffee.com/" . $siteCoffeeLink . "' class='privacyFooterLink' target='_blank' style='" . $hideCoffeeLink . "'><i
      class='fa-solid fa-mug-hot'></i>&nbsp;" . _buyMeACoffee . "</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
    href='?p=becomeSponsor' class='privacyFooterLink' title='" . _becomeSponsor . "' style='" . $hideSponsorLink . "'><i
      class='fa-solid fa-star'></i>&nbsp;" . _becomeMarkerSponsor . "</a><br style='" . $hideSponsorLink . "'>
  <span style='" . $hideSponsorLink . "'><i class='fa-solid fa-copyright'></i>&nbsp; " . $thisYear . " Copyright " . $siteCopyrightName . " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><i class='fa-solid fa-info'></i>&nbsp;<a href='?p=about' class='privacyFooterLink' title='" . _aboutLink . "" . $siteShortTitleLng . "'>" . _aboutLink . "</a> <span style='" . $hideLoginFooter . "'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class='fa-solid fa-right-to-bracket'></i>&nbsp; <a href='login.php' class='privacyFooterLink' title='" . _mnu_signIn . "'>" . _mnu_signIn . "</a></span>
  <span style='" . $showSponsorLink . "'><br><i class='fa-solid fa-copyright'></i>&nbsp; " . $thisYear . " Copyright " . $siteCopyrightName . "</span>
  </div>
<div class='footer' id='footerDiv'>
<a href='#' style='color: white; font-size: 12px;' onclick='toggleFooter();' id='closeFooterLink'>" . _cookieClose . "</a>
  " . $Parsedown->line($footerTextContent) . "
</div>";


//define changelog types
$chgLogType1 = 'Admin';
$chgLogType2 = 'Normal';



$welcomeInformationSponsorLink = _welcomeInformationSponsorLink;


if ($_SESSION['lang'] == 'en') { $siteWelcomeTextTitleLng = htmlspecialchars_decode($siteWelcomeTextTitle); }
    elseif ($_SESSION['lang'] == 'no') { $siteWelcomeTextTitleLng = htmlspecialchars_decode($siteWelcomeTextTitle_no); } 
    elseif ($_SESSION['lang'] == 'de') { $siteWelcomeTextTitleLng = htmlspecialchars_decode($siteWelcomeTextTitle_de); }
    elseif ($_SESSION['lang'] == 'es') { $siteWelcomeTextTitleLng = htmlspecialchars_decode($siteWelcomeTextTitle_es); }
    elseif ($_SESSION['lang'] == 'fr') { $siteWelcomeTextTitleLng = htmlspecialchars_decode($siteWelcomeTextTitle_fr); }
    else  { $siteWelcomeTextTitleLng = htmlspecialchars_decode($siteWelcomeTextTitle); };

if ($_SESSION['lang'] == 'en') { $siteWelcomeTextLng = htmlspecialchars_decode($siteWelcomeText); }
    elseif ($_SESSION['lang'] == 'no') { $siteWelcomeTextLng = htmlspecialchars_decode($siteWelcomeText_no); } 
    elseif ($_SESSION['lang'] == 'de') { $siteWelcomeTextLng = htmlspecialchars_decode($siteWelcomeText_de); }
    elseif ($_SESSION['lang'] == 'es') { $siteWelcomeTextLng = htmlspecialchars_decode($siteWelcomeText_es); }
    elseif ($_SESSION['lang'] == 'fr') { $siteWelcomeTextLng = htmlspecialchars_decode($siteWelcomeText_fr); }
    else  { $siteWelcomeTextLng = htmlspecialchars_decode($siteWelcomeText); };

//Buy me a coffee button in the welcome infomration. Translations defined here and not in locale files.    
if ($_SESSION['lang'] == 'en') { $_welcomeInformationCoffeeBtn = "<center> 
      &#x2764; Do you like this? &#x2764;<br>
      <a href='https://www.buymeacoffee.com/" . $siteCoffeeLink . "' target='_blank' title='Please buy me a coffee if you find this service useful.'><img src='https://img.buymeacoffee.com/button-api/?text=Buy me a coffee&emoji=&slug=" . $siteCoffeeLink . "&button_colour=40DCA5&font_colour=0D3D0E&font_family=Cookie&outline_colour=000000&coffee_colour=FFDD00' width='150px' /></a>
      </center></div>"; }
    elseif ($_SESSION['lang'] == 'no') { $_welcomeInformationCoffeeBtn = "<center> 
      &#x2764; Liker du dette? &#x2764;<br>
      <a href='https://www.buymeacoffee.com/" . $siteCoffeeLink . "' target='_blank' title='Spander gjerne en kaffe om du synes dette er nyttig.'><img src='https://img.buymeacoffee.com/button-api/?text=Spander en kaffe&emoji=&slug=" . $siteCoffeeLink . "&button_colour=40DCA5&font_colour=0D3D0E&font_family=Cookie&outline_colour=000000&coffee_colour=FFDD00' width='150px' /></a>
      </center></div>"; } 
    elseif ($_SESSION['lang'] == 'de') { $_welcomeInformationCoffeeBtn = "<center>
       &#x2764; Magst du das? &#x2764;<br>
       <a href='https://www.buymeacoffee.com/" . $siteCoffeeLink . "' target='_blank' title='Bitte kaufen Sie mir einen Kaffee, wenn Sie diesen Service nützlich finden.'><img src='https://img.buymeacoffee.com/button-api/?text=Kauf mir einen Kaffee&emoji=&slug=" . $siteCoffeeLink . "&button_colour=40DCA5&font_colour=0D3D0E&font_family=Cookie&outline_colour=000000&coffee_colour=FFDD00' width='150px' /></a>
       </center></div>"; }
    elseif ($_SESSION['lang'] == 'es') { $_welcomeInformationCoffeeBtn = "<center>
       &#x2764; ¿Te gusta este? &#x2764;<br>
       <a href='https://www.buymeacoffee.com/" . $siteCoffeeLink . "' target='_blank' title='Por favor, invítame un café si encuentras este servicio útil.'><img src='https://img.buymeacoffee.com/button-api/?text=Cómprame un café&emoji=&slug=" . $siteCoffeeLink . "&button_colour=40DCA5&font_colour=0D3D0E&font_family=Cookie&outline_colour=000000&coffee_colour=FFDD00' width='150px' /></a>
       </center></div>"; }
    elseif ($_SESSION['lang'] == 'fr') { $_welcomeInformationCoffeeBtn = "<center>
       &#x2764; Aimes-tu ça? &#x2764;<br>
       <a href='https://www.buymeacoffee.com/" . $siteCoffeeLink . "' target='_blank' title='Veuillez m'acheter un café si vous trouvez ce service utile.'><img src='https://img.buymeacoffee.com/button-api/?text=Buy me a coffee&emoji=&slug=" . $siteCoffeeLink . "&button_colour=40DCA5&font_colour=0D3D0E&font_family=Cookie&outline_colour=000000&coffee_colour=FFDD00' width='150px' /></a>
       </center></div>"; }
    else  { $_welcomeInformationCoffeeBtn = "<center> 
      &#x2764; Do you like this? &#x2764;<br>
      <a href='https://www.buymeacoffee.com/" . $siteCoffeeLink . "' target='_blank' title='Please buy me a coffee if you find this service useful.'><img src='https://img.buymeacoffee.com/button-api/?text=Buy me a coffee&emoji=&slug=" . $siteCoffeeLink . "&button_colour=40DCA5&font_colour=0D3D0E&font_family=Cookie&outline_colour=000000&coffee_colour=FFDD00' width='150px' /></a>
      </center></div>"; };

$welcomeInformationCoffeeBtn = "
     <div style='" . $hideCoffeeLink . "'>" . $_welcomeInformationCoffeeBtn . "</div>
";

$welcomeInformation = "<span class='welcomeTextContent'><h2 class='welcomeTextTitle'>" . $siteWelcomeTextTitleLng . "</h2>
                      " . $Parsedown->text($siteWelcomeTextLng) ." 
                      " . htmlspecialchars_decode($welcomeInformationCoffeeBtn) . "
                      " . htmlspecialchars_decode($welcomeInformationSponsorLink) . "</span>";



$homeMarkerColor = 'red';
$shopMarkerColor = 'blue';
$busMarkerColor = 'cyan';
$bikeMarkerColor = 'cyan';
$ferryMarkerColor = 'cyan';
$bakeryMarkerColor = 'Pink';
$cafeMarkerColor = 'pink';
$pizzaMarkerColor = 'pink';
$utensilsMarkerColor = 'pink';
$pubMarkerColor = 'pink';
$beachMarkerColor = 'green-light';
$hikingMarkerColor = 'green-light';
$landmarkMarkerColor = 'green-light';
$landmarkOldMarkerColor = 'green-light';
$farmMarkerColor = 'blue';
$wineMarkerColor = 'blue';
$golfMarkerColor = 'green-light';
$crossMarkerColor = 'green-light';
$farmshopMarkerColor = 'blue';
$walkingMarkerColor = 'green-light';

 ?>
