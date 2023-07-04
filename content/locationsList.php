
<?php  $arr = $conn->getLocations(); //missions get loaded in missionsContent.php ?>

<a href="#" id="closeLink" style="display:none">Close</a>

<div class="addressWrapper">
  <?php for( $i=0; $i < count($arr); $i++) {
    $markerId = $arr[$i]['id'];
    /* Define icons and colors for location */
    if ($arr[$i]['icon'] == 'homeMarkerIcon') { $markerIconIf = 'fa-home'; $markerIconColor = 'red'; }
    elseif ($arr[$i]['icon'] == 'shopMarkerIcon') { $markerIconIf = 'fa-cart-shopping'; $markerIconColor = 'blue'; }
    elseif ($arr[$i]['icon'] == 'busMarkerIcon') { $markerIconIf = 'fa-bus'; $markerIconColor = 'DodgerBlue'; }
    elseif ($arr[$i]['icon'] == 'bikeMarkerIcon') { $markerIconIf = 'fa-bicycle'; $markerIconColor = 'DodgerBlue'; }
    elseif ($arr[$i]['icon'] == 'ferryMarkerIcon') { $markerIconIf = 'fa-ferry'; $markerIconColor = 'DodgerBlue'; }
    elseif ($arr[$i]['icon'] == 'bakeryMarkerIcon')  {$markerIconIf = 'fa-bread-slice'; $markerIconColor = 'purple'; }
    elseif ($arr[$i]['icon'] == 'cafeMarkerIcon') { $markerIconIf = 'fa-coffee'; $markerIconColor = 'purple'; }
    elseif ($arr[$i]['icon'] == 'pizzaMarkerIcon') { $markerIconIf = 'fa-pizza-slice'; $markerIconColor = 'purple'; }
    elseif ($arr[$i]['icon'] == 'utensilsMarkerIcon') { $markerIconIf = 'fa-utensils'; $markerIconColor = 'purple'; }
    elseif ($arr[$i]['icon'] == 'pubMarkerIcon') { $markerIconIf = 'fa-beer-mug-empty'; $markerIconColor = 'purple'; }
    elseif ($arr[$i]['icon'] == 'beachMarkerIcon') { $markerIconIf = 'fa-umbrella-beach'; $markerIconColor = 'green'; }
    elseif ($arr[$i]['icon'] == 'hikingMarkerIcon') { $markerIconIf = 'fa-person-hiking'; $markerIconColor = 'green'; }
    elseif ($arr[$i]['icon'] == 'landmarkMarkerIcon') { $markerIconIf = 'fa-landmark'; $markerIconColor = 'green'; }
    elseif ($arr[$i]['icon'] == 'landmarkOldMarkerIcon') { $markerIconIf = 'fa-archway'; $markerIconColor = 'green'; }
    elseif ($arr[$i]['icon'] == 'farmMarkerIcon') { $markerIconIf = 'fa-cow'; $markerIconColor = 'green'; }
    elseif ($arr[$i]['icon'] == 'wineMarkerIcon') { $markerIconIf = 'fa-wine-bottle'; $markerIconColor = 'blue'; }
    elseif ($arr[$i]['icon'] == 'farmshopMarkerIcon') { $markerIconIf = 'fa-cow'; $markerIconColor = 'blue'; }
    elseif ($arr[$i]['icon'] == 'golfMarkerIcon') { $markerIconIf = 'fa-golf-ball-tee'; $markerIconColor = 'green'; }
    elseif ($arr[$i]['icon'] == 'crossMarkerIcon') { $markerIconIf = 'fa-cross'; $markerIconColor = 'green'; }
    elseif ($arr[$i]['icon'] == 'walkingMarkerIcon') { $markerIconIf = 'fa-person-walking'; $markerIconColor = 'green'; }
    else {$markerIconIf = ''; $markerIconColor = ''; };

    if ($_SESSION['lang'] == 'en') { $markerLngName = $arr[$i]['name']; }
    elseif ($_SESSION['lang'] == 'no') { $markerLngName = $arr[$i]['name_no']; } 
    elseif ($_SESSION['lang'] == 'de') { $markerLngName = $arr[$i]['name_de']; }
    elseif ($_SESSION['lang'] == 'es') { $markerLngName = $arr[$i]['name_es']; }
    elseif ($_SESSION['lang'] == 'fr') { $markerLngName = $arr[$i]['name_fr']; }
    else  { $markerLngName = $arr[$i]['name']; };


print_r ("<div class='addressBoxes'>
<table class='tg'>
<tbody>
  <tr>
    <td class='tg-wp8o' rowspan='2' style='padding-left: 10px;; padding-right: 5px; width: 10%;'><i class='fa-solid " . $markerIconIf . "  fa-xl' style='color: " . $markerIconColor . ";'></i></td>
    <td class='tg-73oq' style='width: 80%;'><h2 class='marker-link'><a href='#19/" . $arr[$i]['lat'] . "/" . $arr[$i]['lon'] . "' class='marker-link' data-marker-id='" . $markerId."'>" .  htmlspecialchars($markerLngName) . "</a></h2></td>
    <td class='tg-wp8o' rowspan='2' style='padding-left: 10px; padding-right: 10px; width: 10%;'><a href='https://www.google.com/maps/search/?api=1&query=" . $arr[$i]['lat'] . "," . $arr[$i]['lon'] . "'>
<i class='fas fa-map-marked-alt' style='font-size:1.5em;'></i></a></td>
  </tr>
  <tr>
    <td class='tg-73op'  style='width: 80%; font-size: 12px;'><i>" . $arr[$i]['street'] . "<br>" . $arr[$i]['zip'] . " " . $arr[$i]['city'] . "</i></td>
  </tr>
</tbody>
</table></div>");


 }



?>


</div>