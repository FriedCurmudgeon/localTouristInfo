<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="UTF-8">
    <meta name='description' content='A tourists go-to guide to places in Randaberg - The Green Village.'>
    <title>Visit Randaberg - Register new account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css" title="Default" />
</head>
<body>
<div class='main' id='main_content'>
  <h1>Register user account</h1>
  <p>Enter the registration code that you have received from an administrator to proceed to the registration form.</p>
<form method="post">
<div class="form-group">
    <label>Registration code (12 charachters)</label> <input type="text" class="form-control" name="randomString" /><br/>
</div>
<div class="form-group">
    <input type="submit" class="btn btn-primary" name="verify" value="Verify" /> <input type="reset" class="btn btn-default" value="Reset" />
</div>
<p>Already have a user account? <a href="https://visitrandaberg.no/indexPub.php?p=login">Sign in here</a>.</p>

</form>

<?php

if (isset($_POST["randomString"]))
{
   if (empty ($randomString)) //if username field is empty echo below statement
    {
      /* Code */
    }
    require_once('./config/config.php');
    $query = "SELECT * FROM rndmString WHERE randomString = '".$_POST['randomString']."'" ;
    $result = mysqli_query($mysqli,$query);
    if (mysqli_num_rows($result) == 1)
     {
       $_SESSION["randomString"] = $_POST['randomString'];
       $del = "DELETE FROM rndmString WHERE randomString = '".$_POST['randomString']."'";
       mysqli_query($mysqli, $del);
       mysqli_close($mysqli);
       ?><script> location.replace("./register.php"); </script><?php
     }
      else
     {
       echo "<br><code>Wrong registration code. Please try again.</code>"; //Fail
     }

}
else
{
    echo "<br><code>Enter your registration code.</code>"; // empty $_POST["submit2"]
}


?>
