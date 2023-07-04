<?php 
// If session variable is not set it will redirect to login page 
  if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
      echo "<script type='text/javascript'>window.location.href = '../indexPub.php'</script>";
    }; 
?>

<?php
 $id = intval($_GET['id']);
 $conn->deleteLocation($id);
?>

<div class='card'>
  <div class="card-body">
    <h2 class='card-title'>Location deleted!</h2>
    <p class='card-text'>
      <i class="fa-solid fa-check" style="color: #10cb14;"></i>
      The location is deleted form the database!
    </p><br>
  <?php btnBackToLocationsSettings(); ?>
  </div>
</div>
