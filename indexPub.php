<?php
// Initialize the session
session_start();

header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

//Define localization for PHP

// XX $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
// XX $acceptLang = ['en', 'no', 'de', 'es', 'fr'];
// XX $lang = in_array($lang, $acceptLang) ? $lang : 'en';
// XX $_SESSION['lang'] = $lang;
// include 'locale/lang_' . $lang . '.php';


// Set Language variable
// Direct override beats session
$lang = $_GET['lang'] ?: $_SESSION['lang'];
$available_langs = array('en', 'no', 'de', 'es', 'fr');

// If the requested language isn't available, or not provided, fall back to first
if (!in_array($lang, $available_langs))
  $lang = $available_langs[0];

// Store it in the session and include the template
$_SESSION['lang'] = $lang;
include 'locale/lang_' . $lang . '.php';

if (isset($_GET['lang']) && !empty($_GET['lang'])) {
  $_SESSION['lang'] = $_GET['lang'];

  if (isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']) {
    echo "<script type='text/javascript'> location.reload(); </script>";
  }
}

// Include Language file
if (isset($_SESSION['lang'])) {
  include "locale/lang_" . $_SESSION['lang'] . ".php";
} else {
  include "locale/lang_en.php";
}


//setlocale(LC_ALL, 'no_NB.utf-8', 'nor');
//Locale::setDefault('no_NB.utf-8');
//date_default_timezone_set('Europe/Oslo');
include('./config/parsedown.php');
$Parsedown = new Parsedown();
require_once('./config/db.php'); // Load database queries
require_once('./config/variables.php'); // Load user-defined variables
require_once('./config/functions.php'); // Load functions
// require_once('./config/lang/no_NO.php'); // Define localization
//isSessionUsernameSet(); // If session variable is not set it will redirect to login page


$isAdmin = '';
$isGuest = '';

//$_SESSION['hideFooter'] = $_GET['hideFooter'];
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta name='description' content='A tourists go-to guide to stores, attractions and hot-spots in Randaberg. Detailed map with all the interesting locations marked.'>
    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
    <title>Visit Randaberg - a guide to The Green Village outside Stavanger</title>  
    <!-- meta name="viewport" content="width=device-width, initial-scale=1" -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  
    <!-- Load stylesheets from functions.php -->
    <?php loadStyleSheets() ?>
      <!-- Load external scripts from functions.php -->
    <?php loadExternalScripts() ?>
    <!-- Load scripts in functions.php -->
    <?php loadInternalScripts() ?>
    <!-- Load Web analytics form Piwik Pro -->
    <?php loadWebAnalytics() ?>
    
  
  <script>
 function changeLang(){
  document.getElementById('form_lang').submit();
 }
 </script>

<div class="pageWrapper">
<!-- Include menu -->

  <?php include './content/menu.php'; ?>




<!-- Main content -->
<div class='main' id='main_content'>

  <!-- Mainteneance notification -->
  <!-- Uncomment the following line before maintenance -->
  <?php
    if ($siteMaintenance === 1) {
    echo ('<div class="alert alert-danger attention" id="attention"><i class="fa fa-exclamation-triangle"></i> <strong>' . $Parsedown->line($maintText) . '</strong></div>');
  }
  ?>
  <!-- END Mainteneancenotification -->

  <!-- Holiday notifications -->
  <?php holidayGreetings()  ?>
  <!-- END holiday notifications -->


      <?php
        /* Fetches the variables in the URL and every files in the folder you are including from */
        $handlername = 'p';                        // converts the links to ?p=xxx. Change if you want.
        $side = (isset($_GET[$handlername]) ? $_GET[$handlername] : null);          // Don't change this

        $rep=opendir('./content/');            // the folder where you put your included files
            while ($file = readdir($rep))
                {
                    if($file != '..' && $file !='.' && $file !='')
                    {
                        $filer[]=$file;
                    }
                }
            closedir($rep);
            clearstatcache();


        /* This is the include part. Paste this where you want your content to appear. */
        if (!isset ($side))
        {

            include "./content/home.php";    // this file gets included when tere is no ?p= in the url
        } else {
            $side = $side . ".php";                // change the file type if you're not using .php

            if (in_array ($side, $filer)) {        // checks if the file exists
                $side="./content/" . $side;
                include $side;
            } else {
                include "./content/404.php"; // file to include if the requested file does not exist
            }
        }

      ?>

  </div> <!-- END main content -->


  
    <?php echo $siteFooter ?>
  
    <?php  $arr = $conn->getLocations(); //missions get loaded in missionsContent.php ?>

      </div> <!-- END .pageWrapper -->
    
</body>
</html>


