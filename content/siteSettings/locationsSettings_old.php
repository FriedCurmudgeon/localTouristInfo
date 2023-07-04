<?php 
// If session variable is not set it will redirect to login page 
  if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
      echo "<script type='text/javascript'>window.location.href = '../indexPub.php'</script>";
    }; 
?>

<?php if($isAdmin === 'Y') { ?>
<input id="collapsible-locationsSettings" class="toggle" type="checkbox">
<label for="collapsible-locationsSettings" class="lbl-toggle masterArticleHeading">Locations settings</label>
<div class="collapsible-content">
<div class="content-inner locationsSettingsForm">
<?php  $arr = $conn->getLocations(); //missions get loaded in missionsContent.php ?>

<div class='userAdminOverview'>
<br><div class="settingDescription">Here is an overview over known locations in Randaberg.<br>
In this overview you can edit and <i>delete</i> locations, and add new ones.<br>
This overview will show the location information in your chosen language.</div><br><br>
<div class="addressSettingsWrapper">
<?php for( $i=0; $i < count($arr); $i++) {

if ($_SESSION['lang'] == 'en') { $markerLngName = $arr[$i]['name']; }
    elseif ($_SESSION['lang'] == 'no') { $markerLngName = $arr[$i]['name_no']; } 
    elseif ($_SESSION['lang'] == 'de') { $markerLngName = $arr[$i]['name_de']; }
    elseif ($_SESSION['lang'] == 'es') { $markerLngName = $arr[$i]['name_es']; }
    elseif ($_SESSION['lang'] == 'fr') { $markerLngName = $arr[$i]['name_fr']; }
    else  { $markerLngName = $arr[$i]['name']; };

if ($_SESSION['lang'] == 'en') { $markerLngDescription = $arr[$i]['description']; }
    elseif ($_SESSION['lang'] == 'no') { $markerLngDescription = $arr[$i]['description_no']; } 
    elseif ($_SESSION['lang'] == 'de') { $markerLngDescription = $arr[$i]['description_de']; }
    elseif ($_SESSION['lang'] == 'es') { $markerLngDescription = $arr[$i]['description_es']; }
    elseif ($_SESSION['lang'] == 'fr') { $markerLngDescription = $arr[$i]['description_fr']; }
    else  { $markerLngDescription = $arr[$i]['name']; };

  print_r ("<div class='addressSettingsBoxes'><b>". $markerLngName ."</b><br>
  <img src='".$arr[$i]['img']."' width='50px'><br>
  <b>Description:</b><br>
  ".$markerLngDescription."<br>
  <b>Address:</b><br>
  <i>".$arr[$i]['street']."<br>
  ".$arr[$i]['zip']." ".$arr[$i]['city']."</i><br>
  <b>Url:</b> <a href='".$arr[$i]['url']."'>".$arr[$i]['url']."</a><br>
  <b>Coord.:</b> ".$arr[$i]['lat'].":".$arr[$i]['lon']."<br>
  <a href='?p=_editLocation&id=".$arr[$i]['id']."' class='btn btn-primary' role='button' title='Edit location'><i class='fas fa-pencil-alt' style='font-size:1em;'></i></a>
    &nbsp;&nbsp;
    <a href='?p=_deleteLocation&id=".$arr[$i]['id']."' class='btn btn-danger locationDelete' role='button' title='Delete location'><i class='far fa-trash-alt' style='font-size:1em;'></i></a>
  </div>"
);

}


 ?>
</div>
<br><br>
</div>
</div>

<?php include ('./content/_addLocation.php'); ?>

</div>
<?php } ?>
