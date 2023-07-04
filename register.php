<?php
// Start the session
session_start();
if (!isset($_SESSION['randomString']))
{
  header("Location: ./registerCheckCode.php");
  die();
}

// Include config file
require_once './config/config.php';

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";

        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();

                if($stmt->num_rows == 1){
                    $username_err = "This username already exists.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops, something went wrong. Please try again later.";
            }
        }

        // Close statement
        $stmt->close();
    }

    // Validate password
    if(empty(trim($_POST['password']))){
        $password_err = "Enter a password.";
    } elseif(strlen(trim($_POST['password'])) < 6){
        $password_err = "The password must conainnt at least 6 charachters.";
    } else{
        $password = trim($_POST['password']);
    }

    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = 'Confirm the password.';
    } else{
        $confirm_password = trim($_POST['confirm_password']);
        if($password != $confirm_password){
            $confirm_password_err = 'The passwords does not match.';
        }
    }

    // Validate firstname
    if(empty(trim($_POST['firstname']))){
        $firstname_err = "Enter your first name.";
    } else{
        $firstname = trim($_POST['firstname']);
    }

    // Validate firstname
    if(empty(trim($_POST['surname']))){
        $surname_err = "Enter your last name.";
    } else{
        $surname = trim($_POST['surname']);
    }

    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($firstname_err) && empty($surname_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password, firstname, surname) VALUES (?, ?, ?, ?)";

        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssss", $param_username, $param_password, $param_firstname, $param_surname);

            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_firstname = $firstname;
            $param_surname = $surname;


            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                unset($_SESSION['randomString']);
                header("location: login.php");
            } else{
                echo "Oops, something went wrong. Please try again later.";
            }
        }

        // Close statement
        $stmt->close();
    }

    // Close connection
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css" title="Default" />
</head>
<body>
    <div class='main' id='main_content'>
        <h2>Register user account</h2>
        <p>Use this form to register a user account. We do not store sensitive data.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
           <div class="form-group <?php echo (!empty($firstname_err)) ? 'has-error' : ''; ?>">
              <label>First name</label>
              <input type="text" name="firstname" class="form-control" value="<?php echo $firstname; ?>">
              <span class="help-block"><?php echo $firstname_err; ?></span>
          </div>
          <div class="form-group <?php echo (!empty($surname_err)) ? 'has-error' : ''; ?>">
              <label>Last name</label>
              <input type="text" name="surname" class="form-control" value="<?php echo $surname; ?>">
              <span class="help-block"><?php echo $surname_err; ?></span>
          </div>

            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Sign in here</a>.</p>
        </form>
    </div>
</body>
</html>
