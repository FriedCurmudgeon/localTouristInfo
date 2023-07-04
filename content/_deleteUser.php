<?php
// If session variable is not set it will redirect to login page 
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    echo "<script type='text/javascript'>window.location.href = '../indexPub.php'</script>";
}
;
?>

<?php
$id = intval($_GET['id']);
$conn->deleteUser($id);
?>


<div class='card'>
    <div class="card-body">
        <h2 class='card-title'>User account deleted!</h2>
        <p class='card-text'>
            <i class="fa-solid fa-check" style="color: #10cb14;"></i>
            The user account is deleted form the database!
        </p><br>
        <?php btnBackToAdminlUserSettings(); ?>
    </div>
</div>