<?php 
// If session variable is not set it will redirect to login page 
  if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
      echo "<script type='text/javascript'>window.location.href = '../indexPub.php'</script>";
    }; 
?>

<?php
require_once("./config/db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
  $name = test_input($_POST['name_en']);
  $name_no = test_input($_POST['name_no']);
  $name_de = test_input($_POST['name_de']);
  $name_es = test_input($_POST['name_es']);
  $name_fr = test_input($_POST['name_fr']);
  $street = test_input($_POST['street']);
  $zip = test_input($_POST['zip']);
  $city = test_input($_POST['city']);
  $description = test_input($_POST['description_en']);
  $description_no = test_input($_POST['description_no']);
  $description_de = test_input($_POST['description_de']);
  $description_es = test_input($_POST['description_es']);
  $description_fr = test_input($_POST['description_fr']);
  $url = test_input($_POST['url']);
  $lat = test_input($_POST['lat']);
  $lon = test_input($_POST['lon']);
  $icon = test_input($_POST['icon']);
  $category = test_input($_POST['category']);
  $img = $_FILES["img"]["name"];
  $tempname = $_FILES["img"]["tmp_name"];
  $folder = "./content/images/" . $img;

$conn->storeNewLocation($name, $name_no, $name_de, $name_es, $name_fr, $street, $zip, $city, $description, $description_no, $description_de, $description_es, $description_fr, $img, $url, $lat, $lon, $icon, $category);

  // Now let's move the uploaded image into the folder: image
  if (move_uploaded_file($tempname, $folder)) {
    echo "<h3>  Image uploaded successfully!</h3>";
  } else {
    echo "<h3>  Failed to upload image!</h3>";
  }
?>

<div class='card'>
  <div class="card-body">
    <h2 class='card-title'>Location is saved</h2>
    <p class='card-text'>
      <i class="fa-solid fa-check" style="color: #10cb14;"></i>
      "<?php echo $name; ?>" is added to the locations-list.
    </p><br>
    <?php btnBackToAddLocation(); ?>
  </div>
</div>

<?php } ?>