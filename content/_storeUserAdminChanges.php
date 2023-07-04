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
 $isAdmin = $_POST['isAdmin'];

 $conn->updateUserAdminInfo($id, $isAdmin)

?>

<div class='card'>
  <div class="card-body">
    <h2 class='card-title'>Admin status changed</h2>
    <p class='card-text'>
      <i class="fa-solid fa-check" style="color: #10cb14;"></i>
      Administrator-status is updated.
    </p><br>
    <?php btnBackToUserSettings(); ?>
  </div>
</div>

<?php } ?>

