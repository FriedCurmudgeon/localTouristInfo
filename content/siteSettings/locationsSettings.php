<?php
// If session variable is not set it will redirect to login page 
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    echo "<script type='text/javascript'>window.location.href = '../indexPub.php'</script>";
}
;
?>

<?php if ($isAdmin === 'Y') { ?>

        <div class="content-inner locationsSettingsForm">
            <?php $arr = $conn->getLocations(); //missions get loaded in missionsContent.php ?>

            <div class='userAdminOverview'>
                <br>
                <div class="settingDescription">Here is an overview over known locations in Randaberg.<br>
                    In this overview you can edit and <i>delete</i> locations, and add new ones.<br>
                    This overview will show the location information in your chosen language.</div><br>
                    <a href='?p=_addLocation' class='btn btn-primary' role='button' title='Add nye location'><i class="fa-solid fa-plus"></i> Add a new location</a><br><br>
                    <div class='card-deck'>
                    <?php for ($i = 0; $i < count($arr); $i++) {

                        if ($_SESSION['lang'] == 'en') {
                            $markerLngName = $arr[$i]['name'];
                        } elseif ($_SESSION['lang'] == 'no') {
                            $markerLngName = $arr[$i]['name_no'];
                        } elseif ($_SESSION['lang'] == 'de') {
                            $markerLngName = $arr[$i]['name_de'];
                        } elseif ($_SESSION['lang'] == 'es') {
                            $markerLngName = $arr[$i]['name_es'];
                        } elseif ($_SESSION['lang'] == 'fr') {
                            $markerLngName = $arr[$i]['name_fr'];
                        } else {
                            $markerLngName = $arr[$i]['name'];
                        }
                        ;

                        if ($_SESSION['lang'] == 'en') {
                            $markerLngDescription = $arr[$i]['description'];
                        } elseif ($_SESSION['lang'] == 'no') {
                            $markerLngDescription = $arr[$i]['description_no'];
                        } elseif ($_SESSION['lang'] == 'de') {
                            $markerLngDescription = $arr[$i]['description_de'];
                        } elseif ($_SESSION['lang'] == 'es') {
                            $markerLngDescription = $arr[$i]['description_es'];
                        } elseif ($_SESSION['lang'] == 'fr') {
                            $markerLngDescription = $arr[$i]['description_fr'];
                        } else {
                            $markerLngDescription = $arr[$i]['name'];
                        }
                        ;

                            if (preg_match('#^(https?://|www\.)#i', $arr[$i]['img']) === 1 OR $arr[$i]['img'] === '../img/dummy-image-square.jpg') {
                                 $img = $arr[$i]['img'];
                            } else {
                                $img = ' ./content/images/' . $arr[$i]['img'] ;
                            };

                        print_r(
                            "
                            <div class='card mb-3' style='max-width: 540px;'>
                                <div class='row g-0'>
                                    <div class='col-md-4 my-auto bg-secondary' >
                                        <img src='" . $img . "' class='img-fluid border' alt='" . $markerLngName . " - image'>
                                    </div>
                                    <div class='col-md-8'>
                                        <div class='card-body'>
                                            <h5 class='card-title'>" . $markerLngName . "</h5>
                                            <p class='card-text'><b>Description:</b><br>
                                                " . $Parsedown->line($markerLngDescription) . "<br>
                                                <b>Address:</b><br>
                                                <i>" . $arr[$i]['street'] . "<br>
                                                " . $arr[$i]['zip'] . " " . $arr[$i]['city'] . "</i><br>
                                                <b>Url:</b> <a href='" . $arr[$i]['url'] . "'>" . $arr[$i]['url'] . "</a><br>
                                                <b>Coord.:</b> " . $arr[$i]['lat'] . ":" . $arr[$i]['lon'] . "<br>
                                            </p>
                                            <p class='card-text'>
                                                <a href='?p=_editLocation&id=" . $arr[$i]['id'] . "' class='btn btn-primary' role='button' title='Edit location'><i class='fas fa-pencil-alt' style='font-size:1em;'></i></a>&nbsp;&nbsp;
                                                <a href='?p=_deleteLocation&id=" . $arr[$i]['id'] . "' class='btn btn-danger locationDelete' role='button' title='Delete location'><i class='far fa-trash-alt' style='font-size:1em;'></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            "
                            );
                    } ?>
                


                </div>
                <br><br>
            </div>
        </div><br><br>


<?php } ?>