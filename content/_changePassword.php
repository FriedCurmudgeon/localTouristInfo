<?php 
// If session variable is not set it will redirect to login page 
  if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
      echo "<script type='text/javascript'>window.location.href = '../indexPub.php'</script>";
    }; 
?>

<?php
require_once './config/config.php';
$password = $confirm_password = "";
$password_err = $confirm_password_err = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){

      // Validate password
    if(empty(trim($_POST['newPassword']))){
        $password_err = "Type a password.";
    } elseif(strlen(trim($_POST['newPassword'])) < 6){
        $password_err = "The password mmust contain at least 6 charchters.";
    } else{
        $password = trim($_POST['newPassword']);
    }

    // Validate confirm password
    if(empty(trim($_POST["repeatPassword"]))){
        $confirm_password_err = 'Confirm password.';
    } else{
        $confirm_password = trim($_POST['repeatPassword']);
        if($password != $confirm_password){
            $confirm_password_err = 'The passwords does not match.';
        }
    }

    $id = intval($_POST['id']);


    // Check input errors before inserting in database
    if(empty($password_err) && empty($confirm_password_err)){

        // Prepare an insert statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";

        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("si", $param_password, $id);

            // Set parameters
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash


            // Attempt to execute the prepared statement
            if($stmt->execute()){
              echo '<script>window.location.replace("?p=settings")</script>';
            } else{
                echo "Oops, something went wrong. Try agsain later.";
            }
        }

        // Close statement
        $stmt->close();
    }

    // Close connection
    $mysqli->close();
}
?>


<div class='masterHelpHeading'> Settings</div>
<div class="masterArticleHeading">Change password</div>
<div class='userSettingsForm'>
<br><br>
<form method='POST' action='#' enctype="multipart/form-data">

<input type='hidden' name='id' id='id' value='<?php echo $usrId ?>'>
<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
  <label for='newPassword' class='labelClass'>New password</label>
  <input type='password' name='newPassword' id='newPassword' value="<?php echo $password; ?>">
  <span class="help-block"><?php echo $password_err; ?></span>
</div>

<div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
  <label for='repeatPassword' class='labelClass'>Repeat password</label>
  <input type='password' name='repeatPassword' id='repeatPassword' value="<?php echo $confirm_password; ?>">
  <span class="help-block"><?php echo $confirm_password_err; ?></span>
</div>
<br><br>
<button type="submit" name="submit_form" class="btn btn-primary">Change password</button>&nbsp;&nbsp;<?php btnBackToPersonalUserSettings() ?>
</form>
<br><br>
</div>
