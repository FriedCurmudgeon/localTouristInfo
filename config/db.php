<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
class connectToDB
{
 private $conn;

 public function __construct()
 {
   $config = include './config/conf.php';
   $this->conn = new mysqli($config['db']['server'], $config['db']['user'], $config['db']['pass'], $config['db']['dbname']);
   //var_dump($config, $this->conn);
 }

 function __destruct()
 {
   $this->conn->close();
 }


    
       // LOCATIONS ------------------------------------
    public function storeNewLocation($name, $name_no, $name_de, $name_es, $name_fr, $street, $zip, $city, $description, $description_no, $description_de, $description_es, $description_fr, $img, $url, $lat, $lon, $icon, $category)
    {
        $statement = $this->conn->prepare("INSERT INTO markers (name, name_no, name_de, name_es, name_fr, street, zip, city, description, description_no, description_de, description_es, description_fr, img, url, lat, lon, icon, category) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        echo $this->conn->error;
        $statement->bind_param('sssssssssssssssssss', $name, $name_no, $name_de, $name_es, $name_fr, $street, $zip, $city, $description, $description_no, $description_de, $description_es, $description_fr, $img, $url, $lat, $lon, $icon, $category);
        $statement->execute();
        $statement->close();
        //$this->conn->close();
    }

    public function getLocations()
    {
        //IF / ELSE statement to hide "home" marker if user not logged in
        if(!isset($_SESSION['username'])) {
            $arr = array();
            $statement = $this->conn->prepare("SELECT id, name, name_no, name_de, name_es, name_fr, lat, lon, url, description, description_no, description_de, description_es, description_fr, img, street, zip, city, icon, category FROM markers WHERE id !='1' ORDER BY category DESC");
            echo $this->conn->error;
            $statement->bind_result($id, $name, $name_no, $name_de, $name_es, $name_fr, $lat, $lon, $url, $description, $description_no, $description_de, $description_es, $description_fr, $img, $street, $zip, $city, $icon, $category);
            $statement->execute();
            while ($statement->fetch()) {
            $arr[] = [ "id" => $id, "name" => $name, "name_no" => $name_no, "name_de" => $name_de, "name_es" => $name_es, "name_fr" => $name_fr, "lat" => $lat, "lon" => $lon, "url" => $url, "description" => $description, "description_no" => $description_no, "description_de" => $description_de, "description_es" => $description_es, "description_fr" => $description_fr, "img" => $img, "street" => $street, "zip" => $zip, "city" => $city, "icon" => $icon, "category" => $category ];
            }
            $statement->close();

            return $arr;
        }

        else {
            $arr = array();
            $statement = $this->conn->prepare("SELECT id, name, name_no, name_de, name_es, name_fr, lat, lon, url, description, description_no, description_de, description_es, description_fr, img, street, zip, city, icon, category FROM markers ORDER BY category DESC");
            echo $this->conn->error;
            $statement->bind_result($id, $name, $name_no, $name_de, $name_es, $name_fr, $lat, $lon, $url, $description, $description_no, $description_de, $description_es, $description_fr, $img, $street, $zip, $city, $icon, $category);
            $statement->execute();
            while ($statement->fetch()) {
            $arr[] = [ "id" => $id, "name" => $name, "name_no" => $name_no, "name_de" => $name_de, "name_es" => $name_es, "name_fr" => $name_fr, "lat" => $lat, "lon" => $lon, "url" => $url, "description" => $description, "description_no" => $description_no, "description_de" => $description_de, "description_es" => $description_es, "description_fr" => $description_fr, "img" => $img, "street" => $street, "zip" => $zip, "city" => $city, "icon" => $icon, "category" => $category ];
            }
            $statement->close();

            return $arr;
        }
    }


    public function getLocationsRow()
    {
        $arr = array();
        $get_id = isset($_GET['id']) ?  $_GET['id'] : '';
        $val_id = intval($get_id);
        $locationId = $val_id > 0 ? $val_id : '';
        $statement = $this->conn->prepare("SELECT id, name, name_no, name_de, name_es, name_fr, lat, lon, url, description, description_no, description_de, description_es, description_fr, img, street, zip, city, icon, category from markers where id = $locationId");
        //echo $this->conn->error;
        $statement->bind_result($id, $name, $name_no, $name_de, $name_es, $name_fr, $lat, $lon, $url, $description, $description_no, $description_de, $description_es, $description_fr, $img, $street, $zip, $city, $icon, $category);
        $statement->execute();
        while ($statement->fetch()) {
          $arr[] = [ "id" => $id, "name" => $name, "name_no" => $name_no, "name_de" => $name_de, "name_es" => $name_es, "name_fr" => $name_fr, "lat" => $lat, "lon" => $lon, "url" => $url, "description" => $description, "description_no" => $description_no, "description_de" => $description_de, "description_es" => $description_es, "description_fr" => $description_fr, "img" => $img, "street" => $street, "zip" => $zip, "city" => $city, "icon" => $icon, "category" => $category ];
        }
        $statement->close();

        return $arr;
    }

    public function updateLocation($id, $name, $name_no, $name_de, $name_es, $name_fr, $street, $zip, $city, $description, $description_no, $description_de, $description_es, $description_fr, $url, $lat, $lon, $img, $icon, $category)
    {
        $statement = $this->conn->prepare("UPDATE markers SET name = ?, name_no = ?, name_de = ?, name_es = ?, name_fr = ?, street = ?, zip = ?, city = ?, description = ?, description_no = ?, description_de = ?, description_es = ?, description_fr = ?, url = ?, lat = ?,lon = ?,img = ?,icon = ?,category = ? WHERE id = ?");
        echo $this->conn->error;
        $statement->bind_param('sssssssssssssssssssi', $name, $name_no, $name_de, $name_es, $name_fr, $street, $zip, $city, $description, $description_no, $description_de, $description_es, $description_fr, $url, $lat, $lon, $img, $icon, $category, $id);
        $statement->execute();
        $statement->close();

    }

    public function deleteLocation($id)
    {
       $statement = $this->conn->prepare("Delete from markers where id = ?");
       $statement->bind_param('i', $id);
       $statement->execute();
       $statement->close();

    }



// USER SETTINGS -----------------------------
 public function getUserInfo()
 {
     $arr = array();
     $statement = $this->conn->prepare("SELECT id, username, password, firstname, surname, isAdmin, created_at from users");
     echo $this->conn->error;
     $statement->bind_result($id, $username, $password, $firstname, $surname, $isAdmin, $created_at);
     $statement->execute();
     while ($statement->fetch()) {
     $arr[] = [ "id" => $id, "username" => $username, "password" => $password, "firstname" => $firstname, "surname" => $surname, "isAdmin" => $isAdmin, "created_at" => $created_at];
     }
     $statement->close();

     return $arr;
 }

 public function updateUserInfo($id, $username, $firstname, $surname)
 {
     $statement = $this->conn->prepare("UPDATE users SET username = ?,firstname = ?,surname = ? WHERE id = ?");
     echo $this->conn->error;
     $statement->bind_param('sssi', $username, $firstname, $surname, $id);
     $statement->execute();
     $statement->close();

 }

 public function updateUserAdminInfo($id, $isAdmin)
 {
     $statement = $this->conn->prepare("UPDATE users SET isAdmin = ? WHERE id = ?");
     echo $this->conn->error;
     $statement->bind_param('si', $isAdmin, $id);
     $statement->execute();
     $statement->close();

 }

 public function deleteUser($id)
 {
    $statement = $this->conn->prepare("Delete from users where id = ?");
    $statement->bind_param('i', $id);
    $statement->execute();
    $statement->close();

 }

 // RANDOM STRING -----------------------------
 function saveRandomStringToDatabase($randomString){
  $statement = $this->conn->prepare("INSERT INTO rndmString (randomString) VALUES (?)");
  echo $this->conn->error;
  $statement->bind_param('s',$randomString);
  $statement->execute();
  $statement->close();
 }

 public function getRandomStringRow()
 {
     $arr = array();
     $statement = $this->conn->prepare("SELECT id, randomString from rndmString");
     //echo $this->conn->error;
     $statement->bind_result($id, $randomString);
     $statement->execute();
     while ($statement->fetch()) {
       $arr[] = [ "id" => $id, "randomString" => $randomString];
     }
     $statement->close();

     return $arr;
 }

 function deleteRandomString($randomString){
   $statement = $this->conn->prepare("Delete from rndmString where randomString = ?");
   $statement->bind_param('s', $randomString);
   $statement->execute();
   $statement->close();
 }

// SITE SETTINGS -----------------------------
public function getGlobalSettings()
 {
     $arr = array();
     $statement = $this->conn->prepare("SELECT id, siteTitle, siteTitle_no, siteTitle_de, siteTitle_es, siteTitle_fr, siteShortTitle, siteShortTitle_no, siteShortTitle_de, siteShortTitle_es, siteShortTitle_fr, siteDescription, siteDescription_no, siteDescription_de, siteDescription_es, siteDescription_fr, siteMaintenance, siteMaintenanceText, siteMaintenanceText_no, siteMaintenanceText_de, siteMaintenanceText_es, siteMaintenanceText_fr, siteWelcomeTextToggle, siteWelcomeTextLat, siteWelcomeTextLon, siteWelcomeTextTitle, siteWelcomeTextTitle_no, siteWelcomeTextTitle_de, siteWelcomeTextTitle_es, siteWelcomeTextTitle_fr, siteWelcomeText, siteWelcomeText_no, siteWelcomeText_de, siteWelcomeText_es, siteWelcomeText_fr, siteRatufaScript, siteAllowSponsors, siteAllowCoffee, siteCoffeeLink, siteCopyrightText, siteCopyrightText_no, siteCopyrightText_de, siteCopyrightText_es, siteCopyrightText_fr, siteCopyrightName, siteContactEmail, siteDefaultLat, siteDefaultLon, siteDefaultZoom, siteToggleTinyMCE, siteSettingsTinyMCE from siteSettings");
     echo $this->conn->error;
     $statement->bind_result($id, $siteTitle, $siteTitle_no, $siteTitle_de, $siteTitle_es, $siteTitle_fr, $siteShortTitle, $siteShortTitle_no, $siteShortTitle_de, $siteShortTitle_es, $siteShortTitle_fr, $siteDescription, $siteDescription_no, $siteDescription_de, $siteDescription_es, $siteDescription_fr, $siteMaintenance, $siteMaintenanceText, $siteMaintenanceText_no, $siteMaintenanceText_de, $siteMaintenanceText_es, $siteMaintenanceText_fr, $siteWelcomeTextToggle, $siteWelcomeTextLat, $siteWelcomeTextLon, $siteWelcomeTextTitle, $siteWelcomeTextTitle_no, $siteWelcomeTextTitle_de, $siteWelcomeTextTitle_es, $siteWelcomeTextTitle_fr, $siteWelcomeText, $siteWelcomeText_no, $siteWelcomeText_de, $siteWelcomeText_es, $siteWelcomeText_fr, $siteRatufaScript, $siteAllowSponsors, $siteAllowCoffee, $siteCoffeeLink, $siteCopyrightText, $siteCopyrightText_no, $siteCopyrightText_de, $siteCopyrightText_es, $siteCopyrightText_fr, $siteCopyrightName, $siteContactEmail, $siteDefaultLat, $siteDefaultLon, $siteDefaultZoom, $siteToggleTinyMCE, $siteSettingsTinyMCE);
     $statement->execute();
     while ($statement->fetch()) {
     $arr[] = [ "id" => $id, "siteTitle" => $siteTitle, "siteTitle_no" => $siteTitle_no, "siteTitle_de" => $siteTitle_de, "siteTitle_es" => $siteTitle_es, "siteTitle_fr" => $siteTitle_fr, "siteShortTitle" => $siteShortTitle, "siteShortTitle_no" => $siteShortTitle_no, "siteShortTitle_de" => $siteShortTitle_de, "siteShortTitle_es" => $siteShortTitle_es, "siteShortTitle_fr" => $siteShortTitle_fr, "siteDescription" => $siteDescription, "siteDescription_no" => $siteDescription_no, "siteDescription_de" => $siteDescription_de, "siteDescription_es" => $siteDescription_es, "siteDescription_fr" => $siteDescription_fr, "siteMaintenance" => $siteMaintenance, "siteMaintenanceText" => $siteMaintenanceText, "siteMaintenanceText_no" => $siteMaintenanceText_no, "siteMaintenanceText_de" => $siteMaintenanceText_de, "siteMaintenanceText_es" => $siteMaintenanceText_es, "siteMaintenanceText_fr" => $siteMaintenanceText_fr, "siteWelcomeTextToggle" => $siteWelcomeTextToggle, "siteWelcomeTextLat" => $siteWelcomeTextLat, "siteWelcomeTextLon" => $siteWelcomeTextLon, "siteWelcomeTextTitle" => $siteWelcomeTextTitle, "siteWelcomeTextTitle_no" => $siteWelcomeTextTitle_no, "siteWelcomeTextTitle_de" => $siteWelcomeTextTitle_de, "siteWelcomeTextTitle_es" => $siteWelcomeTextTitle_es, "siteWelcomeTextTitle_fr" => $siteWelcomeTextTitle_fr, "siteWelcomeText" => $siteWelcomeText, "siteWelcomeText_no" => $siteWelcomeText_no, "siteWelcomeText_de" => $siteWelcomeText_de, "siteWelcomeText_es" => $siteWelcomeText_es, "siteWelcomeText_fr" => $siteWelcomeText_fr, "siteRatufaScript" => $siteRatufaScript, "siteAllowSponsors" => $siteAllowSponsors, "siteAllowCoffee" => $siteAllowCoffee, "siteCoffeeLink" => $siteCoffeeLink, "siteCopyrightText" => $siteCopyrightText, "siteCopyrightText_no" => $siteCopyrightText_no, "siteCopyrightText_de" => $siteCopyrightText_de, "siteCopyrightText_es" => $siteCopyrightText_es, "siteCopyrightText_fr" => $siteCopyrightText_fr, "siteCopyrightName" => $siteCopyrightName, "siteContactEmail" => $siteContactEmail, "siteDefaultLat" => $siteDefaultLat, "siteDefaultLon" => $siteDefaultLon, "siteDefaultZoom" => $siteDefaultZoom, "siteToggleTinyMCE" => $siteToggleTinyMCE, "siteSettingsTinyMCE" => $siteSettingsTinyMCE];
     }
     $statement->close();

     return $arr;
 }

 public function updateGlobalSettings($id, $siteTitle, $siteTitle_no, $siteTitle_de, $siteTitle_es, $siteTitle_fr, $siteShortTitle, $siteShortTitle_no, $siteShortTitle_de, $siteShortTitle_es, $siteShortTitle_fr, $siteDescription, $siteDescription_no, $siteDescription_de, $siteDescription_es, $siteDescription_fr, $siteWelcomeTextToggle, $siteWelcomeTextLat, $siteWelcomeTextLon, $siteWelcomeTextTitle, $siteWelcomeTextTitle_no, $siteWelcomeTextTitle_de, $siteWelcomeTextTitle_es, $siteWelcomeTextTitle_fr, $siteWelcomeText, $siteWelcomeText_no, $siteWelcomeText_de, $siteWelcomeText_es, $siteWelcomeText_fr, $siteRatufaScript, $siteAllowSponsors, $siteAllowCoffee, $siteCoffeeLink, $siteCopyrightText, $siteCopyrightText_no, $siteCopyrightText_de, $siteCopyrightText_es, $siteCopyrightText_fr, $siteCopyrightName, $siteContactEmail, $siteDefaultLat, $siteDefaultLon, $siteDefaultZoom, $siteToggleTinyMCE, $siteSettingsTinyMCE)
 {
     $statement = $this->conn->prepare("UPDATE siteSettings SET siteTitle = ?, siteTitle_no = ?, siteTitle_de = ?, siteTitle_es = ?, siteTitle_fr = ?, siteShortTitle = ?, siteShortTitle_no = ?, siteShortTitle_de = ?, siteShortTitle_es = ?, siteShortTitle_fr = ?, siteDescription = ?, siteDescription_no = ?, siteDescription_de = ?, siteDescription_es = ?, siteDescription_fr = ?, siteWelcomeTextToggle = ?, siteWelcomeTextLat = ?, siteWelcomeTextLon = ?, siteWelcomeTextTitle = ?, siteWelcomeTextTitle_no = ?, siteWelcomeTextTitle_de = ?, siteWelcomeTextTitle_es = ?, siteWelcomeTextTitle_fr = ?, siteWelcomeText = ?, siteWelcomeText_no = ?, siteWelcomeText_de = ?, siteWelcomeText_es = ?, siteWelcomeText_fr = ?, siteRatufaScript = ?, siteAllowSponsors = ?, siteAllowCoffee = ?, siteCoffeeLink = ?, siteCopyrightText = ?, siteCopyrightText_no = ?, siteCopyrightText_de = ?, siteCopyrightText_es = ?, siteCopyrightText_fr = ?, siteCopyrightName = ?, siteContactEmail = ?, siteDefaultLat = ?, siteDefaultLon = ?, siteDefaultZoom = ?, siteToggleTinyMCE = ?, siteSettingsTinyMCE = ? WHERE id = ?");
     echo $this->conn->error;
     $statement->bind_param('ssssssssssssssssssssssssssssssssssssssssssssi', $siteTitle, $siteTitle_no, $siteTitle_de, $siteTitle_es, $siteTitle_fr, $siteShortTitle, $siteShortTitle_no, $siteShortTitle_de, $siteShortTitle_es, $siteShortTitle_fr, $siteDescription, $siteDescription_no, $siteDescription_de, $siteDescription_es, $siteDescription_fr, $siteWelcomeTextToggle, $siteWelcomeTextLat, $siteWelcomeTextLon, $siteWelcomeTextTitle, $siteWelcomeTextTitle_no, $siteWelcomeTextTitle_de, $siteWelcomeTextTitle_es, $siteWelcomeTextTitle_fr, $siteWelcomeText, $siteWelcomeText_no, $siteWelcomeText_de, $siteWelcomeText_es, $siteWelcomeText_fr,$siteRatufaScript, $siteAllowSponsors, $siteAllowCoffee, $siteCoffeeLink, $siteCopyrightText, $siteCopyrightText_no, $siteCopyrightText_de, $siteCopyrightText_es, $siteCopyrightText_fr, $siteCopyrightName, $siteContactEmail, $siteDefaultLat, $siteDefaultLon, $siteDefaultZoom, $siteToggleTinyMCE, $siteSettingsTinyMCE, $id);
     $statement->execute();
     $statement->close();

 }

 public function updateMaintenanceSettings($id, $siteMaintenance, $siteMaintenanceText, $siteMaintenanceText_no, $siteMaintenanceText_de, $siteMaintenanceText_es, $siteMaintenanceText_fr)
 {
     $statement = $this->conn->prepare("UPDATE siteSettings SET siteMaintenance = ?, siteMaintenanceText = ?, siteMaintenanceText_no = ?, siteMaintenanceText_de = ?, siteMaintenanceText_es = ?, siteMaintenanceText_fr = ? WHERE id = ?");
     echo $this->conn->error;
     $statement->bind_param('ssssssi', $siteMaintenance, $siteMaintenanceText, $siteMaintenanceText_no, $siteMaintenanceText_de, $siteMaintenanceText_es, $siteMaintenanceText_fr, $id);
     $statement->execute();
     $statement->close();

 }

 public function storeGlobalSettings($siteTitle, $siteTitle_no, $siteTitle_de, $siteTitle_es, $siteTitle_fr, $siteShortTitle, $siteShortTitle_no, $siteShortTitle_de, $siteShortTitle_es, $siteShortTitle_fr, $siteDescription, $siteDescription_no, $siteDescription_de, $siteDescription_es, $siteDescription_fr, $siteWelcomeTextToggle, $siteWelcomeTextLat, $siteWelcomeTextLon, $siteWelcomeTextTitle, $siteWelcomeTextTitle_no, $siteWelcomeTextTitle_de, $siteWelcomeTextTitle_es, $siteWelcomeTextTitle_fr, $siteWelcomeText, $siteWelcomeText_no, $siteWelcomeText_de, $siteWelcomeText_es, $siteWelcomeText_fr, $siteRatufaScript, $siteAllowSponsors, $siteAllowCoffee, $siteCoffeeLink, $siteCopyrightText, $siteCopyrightText_no, $siteCopyrightText_de, $siteCopyrightText_es, $siteCopyrightText_fr, $siteCopyrightName, $siteContactEmail, $siteDefaultLat, $siteDefaultLon, $siteDefaultZoom, $siteToggleTinyMCE, $siteSettingsTinyMCE)
 {
     $statement = $this->conn->prepare("INSERT INTO siteSettings (siteTitle, siteTitle_no, siteTitle_de, siteTitle_es, siteTitle_fr, siteShortTitle, siteShortTitle_no, siteShortTitle_de, siteShortTitle_es, siteShortTitle_fr, siteDescription, siteDescription_no, siteDescription_de, siteDescription_es, siteDescription_fr, siteWelcomeTextToggle, siteWelcomeTextLat, siteWelcomeTextLon, siteMaintenanceText_no, siteMaintenanceText_de, siteMaintenanceText_es, siteMaintenanceText_fr, siteWelcomeTextTitle, siteWelcomeTextTitle_no, siteWelcomeTextTitle_de, siteWelcomeTextTitle_es, siteWelcomeTextTitle_fr, siteWelcomeText, siteWelcomeText_no, siteWelcomeText_de, siteWelcomeText_es, siteWelcomeText_fr, siteRatufaScript, siteAllowSponsors, siteAllowCoffee, siteCoffeeLink, siteCopyrightText, siteCopyrightText_no, siteCopyrightText_de, siteCopyrightText_es, siteCopyrightText_fr, siteCopyrightName, siteContactEmail, siteDefaultLat, siteDefaultLon, siteDefaultZoom, siteToggleTinyMCE, siteSettingsTinyMCE) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
     echo $this->conn->error;
     $statement->bind_param('ssssssssssssssssssssssssssssssssssssssssssssssss', $siteTitle, $siteTitle_no, $siteTitle_de, $siteTitle_es, $siteTitle_fr, $siteShortTitle, $siteShortTitle_no, $siteShortTitle_de, $siteShortTitle_es, $siteShortTitle_fr, $siteDescription, $siteDescription_no, $siteDescription_de, $siteDescription_es, $siteDescription_fr, $siteWelcomeTextToggle, $siteWelcomeTextLat, $siteWelcomeTextLon, $siteWelcomeTextTitle, $siteWelcomeTextTitle_no, $siteWelcomeTextTitle_de, $siteWelcomeTextTitle_es, $siteWelcomeTextTitle_fr, $siteWelcomeText, $siteWelcomeText_no, $siteWelcomeText_de, $siteWelcomeText_es, $siteWelcomeText_fr, $siteRatufaScript, $siteAllowSponsors, $siteAllowCoffee, $siteCoffeeLink, $siteCopyrightText, $siteCopyrightText_no, $siteCopyrightText_de, $siteCopyrightText_es, $siteCopyrightText_fr, $siteCopyrightName, $siteContactEmail, $siteDefaultLat, $siteDefaultLon, $siteDefaultZoom, $siteToggleTinyMCE, $siteSettingsTinyMCE);
     $statement->execute();
     $statement->close();
     //$this->conn->close();
 }

    public function storeMaintenanceSettings($siteMaintenance, $siteMaintenanceText, $siteMaintenanceText_no, $siteMaintenanceText_de, $siteMaintenanceText_es, $siteMaintenanceText_fr)
    {
        $statement = $this->conn->prepare("INSERT INTO siteSettings (siteMaintenance, siteMaintenanceText, siteMaintenanceText_no, siteMaintenanceText_de, siteMaintenanceText_es, siteMaintenanceText_fr) VALUES(?, ?, ?, ?, ?, ?)");
        echo $this->conn->error;
        $statement->bind_param('ssssss', $siteMaintenance, $siteMaintenanceText, $siteMaintenanceText_no, $siteMaintenanceText_de, $siteMaintenanceText_es, $siteMaintenanceText_fr);
        $statement->execute();
        $statement->close();
        //$this->conn->close();
    }


}

$conn = new connectToDB();
