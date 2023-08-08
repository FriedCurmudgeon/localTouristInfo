<?php
// If session variable is not set it will redirect to login page using header
function isSessionUsernameSet() {
  if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header("location: indexPub.php");
    exit;
  }
}

// If no user logged in, redirect using javascript instead of header
function noUserRedirect() {
  if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    echo "<script type='text/javascript'>window.location.href = '../indexPub.php'</script>";
  }; // If session variable is not set it will redirect to login page
}

// Load external scripts in header of index
function loadExternalScripts() {
  echo '
  <!-- Load Bootstrap libraries -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <!-- Load jquery library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  ';
}

function loadWebAnalytics() {
  echo '
   <!-- Load Piwik Pro web analyzer -->
  <script type="text/javascript">
(function(window, document, dataLayerName, id) {
window[dataLayerName]=window[dataLayerName]||[],window[dataLayerName].push({start:(new Date).getTime(),event:"stg.start"});var scripts=document.getElementsByTagName("script")[0],tags=document.createElement("script");
function stgCreateCookie(a,b,c){var d="";if(c){var e=new Date;e.setTime(e.getTime()+24*c*60*60*1e3),d="; expires="+e.toUTCString()}document.cookie=a+"="+b+d+"; path=/"}
var isStgDebug=(window.location.href.match("stg_debug")||document.cookie.match("stg_debug"))&&!window.location.href.match("stg_disable_debug");stgCreateCookie("stg_debug",isStgDebug?1:"",isStgDebug?14:-1);
var qP=[];dataLayerName!=="dataLayer"&&qP.push("data_layer_name="+dataLayerName),isStgDebug&&qP.push("stg_debug");var qPString=qP.length>0?("?"+qP.join("&")):"";
tags.async=!0,tags.src="https://visitrandaberg.containers.piwik.pro/"+id+".js"+qPString,scripts.parentNode.insertBefore(tags,scripts);
!function(a,n,i){a[n]=a[n]||{};for(var c=0;c<i.length;c++)!function(i){a[n][i]=a[n][i]||{},a[n][i].api=a[n][i].api||function(){var a=[].slice.call(arguments,0);"string"==typeof a[0]&&window[dataLayerName].push({event:n+"."+i+":"+a[0],parameters:[].slice.call(arguments,1)})}}(i[c])}(window,"ppms",["tm","cm"]);
})(window, document, "dataLayer", "370ad5b7-8c9c-4991-924f-22aa702be0f8");
</script>
  ';
}


// Load stylesheets in header of index
function loadStyleSheets() {
  echo '
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
  <link rel="apple-touch-icon" sizes="180x180" href="/img/icon/apple-touch-icon.png?v=1.2">
  <link rel="icon" type="image/png" sizes="32x32" href="/img/icon/favicon-32x32.png?v=1.2">
  <link rel="icon" type="image/png" sizes="16x16" href="/img/icon/favicon-16x16.png?v=1.2">
  <link rel="manifest" href="/img/icon/site.webmanifest?v=1.2">
  <link rel="mask-icon" href="/img/icon/safari-pinned-tab.svg?v=1.2" color="#5bbad5">
  <link rel="shortcut icon" href="/img/icon/favicon.ico?v=1.2">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="/img/icon/browserconfig.xml?v=1.2">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" type="text/css" href="./css/style.css" title="Default" />
  <link rel="stylesheet" type="text/css" href="./css/menu.css" />
  <link rel="stylesheet" type="text/css" href="./css/toggleDiv.css" /> 
  <!-- Google Font fraework -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- Leaflet CSS link -->
  <link rel="stylesheet" href="./css/leaflet.extra-markers.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>';
}

// Load internal scripts in header of index
function loadInternalScripts() {
  echo '
  <script src="./js/leaflet.extra-markers.js"></script>
  <script src="./js/clipboard.min.js"></script>
  <script src="./js/leaflet-hash.js"></script>
  <script src="./js/functions.js"></script>
  <!-- Show/Hide div -->
  <script type="text/javascript" language="JavaScript">
    function HideContent(d) {
      document.getElementById(d).style.display = "none";
    }
    function ShowContent(d) {
      document.getElementById(d).style.display = "block";
    }
    function ReverseDisplay(d) {
      if(document.getElementById(d).style.display == "none") { document.getElementById(d).style.display = "block"; }
    else { document.getElementById(d).style.display = "none"; }
    }
  </script>
  ';
}

function includeSponsorList() {
  echo '
        <h2>' . _sponsorLst_H2 . '</h2>
        <p>
            ' . _noSponsorLst_text . '
        </p>
        ';
}

// Securing form-data input
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


function errorMessage404header() {
  echo 'Å, salige stund uten like(t).<br>Det er visst ingenting her.';
 }

function errorMessage404footer() {
 echo '<kbd>404 page not found</kbd>';
}

// Creates a back-button
function btnBack() {
  echo '<a href="?p=settings#settingsPersonal" class="backButton">Back</a>';
}

// Creates a back-button
function btnBackToUserSettings() {
  echo '<a href="?p=settings" class="backButton">Back</a>';
}

function btnBackToPersonalUserSettings() {
  echo '<a href="?p=settings#settingsPersonal" class="backButton">Back</a>';
}

function btnBackToAdminlUserSettings() {
  echo '<a href="?p=settings#settingsAllUsers" class="backButton">Back</a>';
}

// Creates a back-button
function btnBackToAddLocation() {
  echo '<a href="?p=_addLocation" class="backButton">Back</a>';
}

function btnBackToLocationsSettings()
{
  echo '<a href="?p=settings#settingsLocations" class="backButton">Back</a>';
}




// What year are we in?
function thisYear() {
  echo date('Y');
}


function getRandomString($length=12, $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVXYZ0123456789!_-"){
    return substr(str_shuffle($chars),0,$length);
}

function holidayGreetings() {
    $dateNow = new \DateTime('now');
    $fullDateNow = $dateNow->format('Y-m-d');
    $dateChristmasStart = '2020-12-21';
    $dateChristmasEnd = '2020-12-30';
    $dateNewYearStart = '2019-12-31';
    $dateNewYearEnd = '2020-01-05';
    if ($fullDateNow >= $dateChristmasStart && $fullDateNow < $dateChristmasEnd) {
      echo '<div class="christmas alert-christmas" id="attention"><center><i class="fas fa-holly-berry"></i> <b>Merry Christmas!</b> <i class="fas fa-holly-berry"></i></center></div>';
    } else {
      if ($fullDateNow >= $dateNewYearStart && $fullDateNow < $dateNewYearEnd) {
        echo '<div class="christmas alert-newYear" id="attention"><center><i class="fas fa-glass-cheers"></i> <b>Happy New Year!</b> <i class="fas fa-glass-cheers"></i></center></div>';
      }
    }
  };


function hide_email($email)
{
  $character_set = '+-.0123456789@ABCDEFGHIJKLMNOPQRSTUVWXYZ_abcdefghijklmnopqrstuvwxyz';
  $key = str_shuffle($character_set);
  $cipher_text = '';
  $id = 'e' . rand(1, 999999999);
  for ($i = 0; $i < strlen($email); $i += 1)
    $cipher_text .= $key[strpos($character_set, $email[$i])];
  $script = 'var a="' . $key . '";var b=a.split("").sort().join("");var c="' . $cipher_text . '";var d="";';
  $script .= 'for(var e=0;e<c.length;e++)d+=b.charAt(a.indexOf(c.charAt(e)));';
  $script .= 'document.getElementById("' . $id . '").innerHTML="<a href=\\"mailto:"+d+"\\">"+d+"</a>"';
  $script = "eval(\"" . str_replace(array("\\", '"'), array("\\\\", '\"'), $script) . "\")";
  $script = '<script type="text/javascript">/*<![CDATA[*/' . $script . '/*]]>*/</script>';
  return '<span id="' . $id . '">[javascript protected email address]</span>' . $script;

};
 ?>
