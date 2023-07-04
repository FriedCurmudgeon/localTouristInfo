<?php 
// If session variable is not set it will redirect to login page 
  if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
      echo "<script type='text/javascript'>window.location.href = '../indexPub.php'</script>";
    }; 
?>

<input id="collapsible-usersettings" class="toggle" type="checkbox" <?php if ($isAdmin === 'N') echo ' checked'; ?>>
<label for="collapsible-usersettings" class="lbl-toggle masterArticleHeading">User settings</label>
<div class="collapsible-content">
<div class='content-inner userSettingsForm'>
<br><br>
<form method='POST' action='?p=_updateUserSettings' enctype="multipart/form-data">
<input type='hidden' name='id' id='id' class='inputClass readonly' value='<?php echo $usrId ?>' readonly>
<div class='form1'><label for='username' class='labelClass'>Username</label><input type='text' name='username' id='username' class='inputClass readonly' value='<?php echo $username ?>' readonly></div>
<div class='form1'><label for='firstname' class='labelClass'>First name</label><input type='text' name='firstname' id='firstname' class='inputClass' value='<?php echo $firstname ?>'></div>
<div class='form1'><label for='surname' class='labelClass'>Last name</label><input type='text' name='surname' id='surname' class='inputClass' value='<?php echo $surname ?>'></div>
<br>
<br>
<?php
if ($isAdmin === 'Y') { echo '<kbd>You are administrator</kbd>';
}



?>

</div>
<kbd>Account created <?php echo $createdAt ?></kbd>

<br><br>
<button type="submit" name="submit_form" class="btn btn-primary">Save changes</button>&nbsp;&nbsp;
<a href='?p=_changePassword' class='btn btn-warning' type='button' title='Change password'>Change password</a>
</form>
<br><br>
</div>
