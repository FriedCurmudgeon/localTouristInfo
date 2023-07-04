<?php 
// If session variable is not set it will redirect to login page 
  if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
      echo "<script type='text/javascript'>window.location.href = '../indexPub.php'</script>";
    }; 
?>

<?php
require_once("./config/db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
$id = intval($_POST['id']);
$username = test_input($_POST['username']);
$firstname = test_input($_POST['firstname']);
$surname = test_input($_POST['surname']);


$conn->updateUserInfo($id, $username, $firstname, $surname);
?>

<div class='card'>
  <div class="card-body">
    <h2 class='card-title'>The user settings has been changed</h2>
    <p class='card-text'>
      <i class="fa-solid fa-check" style="color: #10cb14;"></i>
      The user settings has been changed!</p>
    <br>
    <?php btnBack(); ?>
  </div>
</div>

<?php } ?>
