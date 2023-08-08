<div class="mapWrapper" id="homePage">
<div id="locationListDiv" class="divOverMap">
<p><?php include './content/locationsList.php' ?></p>
</div>

<?php  $arr = $conn->getLocations(); ?>

<div id="map"></div>
</div>
<!-- Get map options -->
<!-- PHP logic to hide/show welcome text in the map js -->
<?php if ($siteWelcomeTextToggle !== 0) { ?>
<script>
    var defaultLocationLat = <?php echo json_encode($siteDefaultLat); ?>;
    var defaultLocationLon = <?php echo json_encode($siteDefaultLon); ?>;
    var defaultLocationZoom = <?php echo json_encode($siteDefaultZoom); ?>;
    var defaultWelcomeTextLat = <?php echo json_encode($siteWelcomeTextLat); ?>;
    var defaultWelcomeTextLon = <?php echo json_encode($siteWelcomeTextLon); ?>;
    var welcomeInformation = <?php echo json_encode($welcomeInformation); ?>;

    // Position map to Randaberg when loading Zoomlevel = 13
var map = L.map('map', { closePopupOnClick: false}).setView([defaultLocationLat, defaultLocationLon], defaultLocationZoom);

// Load map layer
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    var popup = L.popup({
          closeOnClick: true,
          closeButton: true,
          autoClose: true,
          className: 'custom-popup',
        })
        .setLatLng([defaultWelcomeTextLat, defaultWelcomeTextLon])
        .setContent(welcomeInformation)
        .openOn(map);

var hash = new L.Hash(map);

</script>

<?php ;} else { ?>

<script>

var welcomeInformation = <?php echo json_encode($welcomeInformation); ?>;

    // Position map to Randaberg when loading Zoomlevel = 13
var map = L.map('map', { closePopupOnClick: false}).setView([defaultLocationLat, defaultLocationLon], defaultLocationZoom);

// Load map layer
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

var hash = new L.Hash(map);

</script>

<?php ;} ?>    
<script src="./js/mapOptions.js"></script>

<?php for( $i=0; $i < count($arr); $i++) { ?>

<?php if ($arr[$i]['url'] == '') {
    $hideWeb = "style='display:none'";
    } else {
        $hideWeb = "";
    };
?>

<?php

if ($_SESSION['lang'] == 'en') { $markerPopupName = $arr[$i]['name']; }
    elseif ($_SESSION['lang'] == 'no') { $markerPopupName = $arr[$i]['name_no']; } 
    elseif ($_SESSION['lang'] == 'de') { $markerPopupName = $arr[$i]['name_de']; }
    elseif ($_SESSION['lang'] == 'es') { $markerPopupName = $arr[$i]['name_es']; }
    elseif ($_SESSION['lang'] == 'fr') { $markerPopupName = $arr[$i]['name_fr']; }
    else  { $markerPopupName = $arr[$i]['name']; };

if ($_SESSION['lang'] == 'en') { $markerPopupDescription = $arr[$i]['description']; }
    elseif ($_SESSION['lang'] == 'no') { $markerPopupDescription = $arr[$i]['description_no']; } 
    elseif ($_SESSION['lang'] == 'de') { $markerPopupDescription = $arr[$i]['description_de']; }
    elseif ($_SESSION['lang'] == 'es') { $markerPopupDescription = $arr[$i]['description_es']; }
    elseif ($_SESSION['lang'] == 'fr') { $markerPopupDescription = $arr[$i]['description_fr']; }
    else  { $markerPopupDescription = $arr[$i]['name']; };


$markerPopupDescriptionMarkdown = $Parsedown->text($markerPopupDescription);    
$markerId = "".$arr[$i]['id']."";
$markerPopupLat = "".$arr[$i]['lat']."";
$markerPopupLon = "".$arr[$i]['lon']."";
$markerPopupStreet = "".$arr[$i]['street']."";
$markerPopUpZip = "".$arr[$i]['zip']."";
$markerPopupCity = "".$arr[$i]['city']."";
$markerPopupUrl = "".$arr[$i]['url']."";
$markerIcon = "".$arr[$i]['icon']."";
$markerCategory = "".$arr[$i]['category']."";
$markerImage = "".$arr[$i]['img']."";

    if (preg_match('#^(https?://|www\.)#i', $markerImage) === 1 or $markerImage === '../img/dummy-image-square.jpg') {
        $imgLoc = $arr[$i]['img'];
    } else {
        $imgLoc = ' ./content/images/' . $arr[$i]['img'];
    }
    ;

?>

<script>
var markerId = <?php echo json_encode($markerId); ?>;
var markerPopupName = <?php echo json_encode($markerPopupName); ?>;
var markerPopupLat = <?php echo json_encode($markerPopupLat); ?>;
var markerPopupLon = <?php echo json_encode($markerPopupLon); ?>;
var markerPopupStreet = <?php echo json_encode($markerPopupStreet); ?>;
var markerPopUpZip = <?php echo json_encode($markerPopUpZip); ?>;
var markerPopupCity = <?php echo json_encode($markerPopupCity); ?>;
var markerPopupUrl = <?php echo json_encode($markerPopupUrl); ?>;
var markerPopupDescription = <?php echo json_encode($markerPopupDescriptionMarkdown); ?>;
var markerIcon = <?php echo $markerIcon; ?>;
var markerCategory = <?php echo json_encode($markerCategory); ?>;
var markerImage = <?php echo json_encode($imgLoc); ?>;
var hideWeb = <?php echo json_encode($hideWeb); ?>;
</script>

<script>

// Home marker
var marker = L.marker([markerPopupLat, markerPopupLon], {icon: markerIcon}, {myCustomId: markerId}).addTo(map);
marker.bindPopup("<div class='markerPopupText'><table class='markerPopupTable'><tr class='markerPopupRow'><td class='markerPopupCell' colspan='2'> <p class='markerPopupTitle'>" + markerPopupName + "<a href='https://www.google.com/maps/search/?api=1&query=" + markerPopupLat + "%2C" + markerPopupLon + "' target='_blank' title='Navigate with google Maps'><img src='../img/gmaps-marker.svg' width='20px' alt='Navigate with Google Maps'></a> <i " + hideWeb + "><a href='" + markerPopupUrl + "' target='_blank' title='Visit " + markerPopupName + "\' website'><i class='fa fa-link' aria-hidden='true'></i></i></a></p></td></tr><tr class='markerPopupRow'><td class='markerPopupCell' colspan='2'><i>" + markerPopupStreet + "<br>" + markerPopUpZip + " " + markerPopupCity + "</i></td></tr><tr class='markerPopupRow'><td class='markerPopupCell' colspan='1' style='width: 300px'><p>" + markerPopupDescription + "</p><br></td><td class='markerPopupCell' style='vertical-align:top'><img style='vertical-align: top;' src='" + markerImage + "' width='100px'></td></tr></table></div>", { closeOnClick: true });


</script>

<?php } ?>


<div class="mapWrapper" id="homePage">
<div id="locationListDiv" class="divOverMap">
<p><?php include './content/locationsList.php' ?></p>
</div>

<?php  $arr = $conn->getLocations(); ?>

<div id="map"></div>
</div>
<!-- Get map options -->
<!-- PHP logic to hide/show welcome text in the map js -->
<?php if ($siteWelcomeTextToggle !== 0) { ?>
<script>

var welcomeInformation = <?php echo json_encode($welcomeInformation); ?>;

    // Position map to Randaberg when loading Zoomlevel = 13
var map = L.map('map', { closePopupOnClick: false}).setView([58.99809646543131, 5.62152931058734], 12);

// Load map layer
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    var popup = L.popup({
          closeOnClick: true,
          closeButton: true,
          autoClose: true,
          className: 'custom-popup',
        })
        .setLatLng([58.98083, 5.62152931058734])
        .setContent(welcomeInformation)
        .openOn(map);

var hash = new L.Hash(map);

</script>

<?php ;} else { ?>

<script>

var welcomeInformation = <?php echo json_encode($welcomeInformation); ?>;

    // Position map to Randaberg when loading Zoomlevel = 13
var map = L.map('map', { closePopupOnClick: false}).setView([58.99809646543131, 5.62152931058734], 12);

// Load map layer
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

var hash = new L.Hash(map);

</script>

<?php ;} ?>    
<script src="./js/mapOptions.js"></script>

<?php for( $i=0; $i < count($arr); $i++) { ?>

<?php if ($arr[$i]['url'] == '') {
    $hideWeb = "style='display:none'";
    } else {
        $hideWeb = "";
    };
?>

<?php

if ($_SESSION['lang'] == 'en') { $markerPopupName = $arr[$i]['name']; }
    elseif ($_SESSION['lang'] == 'no') { $markerPopupName = $arr[$i]['name_no']; } 
    elseif ($_SESSION['lang'] == 'de') { $markerPopupName = $arr[$i]['name_de']; }
    elseif ($_SESSION['lang'] == 'es') { $markerPopupName = $arr[$i]['name_es']; }
    elseif ($_SESSION['lang'] == 'fr') { $markerPopupName = $arr[$i]['name_fr']; }
    else  { $markerPopupName = $arr[$i]['name']; };

if ($_SESSION['lang'] == 'en') { $markerPopupDescription = $arr[$i]['description']; }
    elseif ($_SESSION['lang'] == 'no') { $markerPopupDescription = $arr[$i]['description_no']; } 
    elseif ($_SESSION['lang'] == 'de') { $markerPopupDescription = $arr[$i]['description_de']; }
    elseif ($_SESSION['lang'] == 'es') { $markerPopupDescription = $arr[$i]['description_es']; }
    elseif ($_SESSION['lang'] == 'fr') { $markerPopupDescription = $arr[$i]['description_fr']; }
    else  { $markerPopupDescription = $arr[$i]['name']; };


$markerPopupDescriptionMarkdown = $Parsedown->text($markerPopupDescription);    
$markerId = "".$arr[$i]['id']."";
$markerPopupLat = "".$arr[$i]['lat']."";
$markerPopupLon = "".$arr[$i]['lon']."";
$markerPopupStreet = "".$arr[$i]['street']."";
$markerPopUpZip = "".$arr[$i]['zip']."";
$markerPopupCity = "".$arr[$i]['city']."";
$markerPopupUrl = "".$arr[$i]['url']."";
$markerIcon = "".$arr[$i]['icon']."";
$markerCategory = "".$arr[$i]['category']."";
$markerImage = "".$arr[$i]['img']."";

    if (preg_match('#^(https?://|www\.)#i', $markerImage) === 1 or $markerImage === '../img/dummy-image-square.jpg') {
        $imgLoc = $arr[$i]['img'];
    } else {
        $imgLoc = ' ./content/images/' . $arr[$i]['img'];
    }
    ;

?>

<script>
var markerId = <?php echo json_encode($markerId); ?>;
var markerPopupName = <?php echo json_encode($markerPopupName); ?>;
var markerPopupLat = <?php echo json_encode($markerPopupLat); ?>;
var markerPopupLon = <?php echo json_encode($markerPopupLon); ?>;
var markerPopupStreet = <?php echo json_encode($markerPopupStreet); ?>;
var markerPopUpZip = <?php echo json_encode($markerPopUpZip); ?>;
var markerPopupCity = <?php echo json_encode($markerPopupCity); ?>;
var markerPopupUrl = <?php echo json_encode($markerPopupUrl); ?>;
var markerPopupDescription = <?php echo json_encode($markerPopupDescriptionMarkdown); ?>;
var markerIcon = <?php echo $markerIcon; ?>;
var markerCategory = <?php echo json_encode($markerCategory); ?>;
var markerImage = <?php echo json_encode($imgLoc); ?>;
var hideWeb = <?php echo json_encode($hideWeb); ?>;
</script>

<script>

// Home marker
var marker = L.marker([markerPopupLat, markerPopupLon], {icon: markerIcon}, {myCustomId: markerId}).addTo(map);
marker.bindPopup("<div class='markerPopupText'><table class='markerPopupTable'><tr class='markerPopupRow'><td class='markerPopupCell' colspan='2'> <p class='markerPopupTitle'>" + markerPopupName + "<a href='https://www.google.com/maps/search/?api=1&query=" + markerPopupLat + "%2C" + markerPopupLon + "' target='_blank' title='Navigate with google Maps'><img src='../img/gmaps-marker.svg' width='20px' alt='Navigate with Google Maps'></a> <i " + hideWeb + "><a href='" + markerPopupUrl + "' target='_blank' title='Visit " + markerPopupName + "\' website'><i class='fa fa-link' aria-hidden='true'></i></i></a></p></td></tr><tr class='markerPopupRow'><td class='markerPopupCell' colspan='2'><i>" + markerPopupStreet + "<br>" + markerPopUpZip + " " + markerPopupCity + "</i></td></tr><tr class='markerPopupRow'><td class='markerPopupCell' colspan='1' style='width: 300px'><p>" + markerPopupDescription + "</p><br></td><td class='markerPopupCell' style='vertical-align:top'><img style='vertical-align: top;' src='" + markerImage + "' width='100px'></td></tr></table></div>", { closeOnClick: true });


</script>

<?php } ?>

