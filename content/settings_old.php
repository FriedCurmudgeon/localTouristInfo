
<?php 
// If session variable is not set it will redirect to login page 
  if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
      echo "<script type='text/javascript'>window.location.href = '../indexPub.php'</script>";
    }; 
?>

<script>
  new ClipboardJS('.btn');
</script>

<div class='masterHelpHeading'> Settings</div>


  <div class="wrap-collabsible">
    <?php include ('./content/siteSettings/globalSettings.php'); ?>
    <?php include ('./content/siteSettings/locationsSettings.php'); ?>
    <?php include ('./content/userSettings/personalUserSettings.php'); ?>
    <?php include ('./content/userSettings/generateNewUserCode.php'); ?>
    <?php include ('./content/userSettings/allUsersSettings.php'); ?>

</div>

<br><br>


<script>
let myLabels = document.querySelectorAll('.lbl-toggle');

Array.from(myLabels).forEach(label => {
  label.addEventListener('keydown', e => {
    // 32 === spacebar
    // 13 === enter
    if (e.which === 32 || e.which === 13) {
      e.preventDefault();
      label.click();
    };
  });
});
</script>
