<?php
// If session variable is not set it will redirect to login page 
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    echo "<script type='text/javascript'>window.location.href = '../indexPub.php'</script>";
}
;
?>


    <div class='content-inner userSettingsForm'>
        <br><br>
        <form method='POST' action='?p=_updateUserSettings' enctype="multipart/form-data">
            <input type='hidden' name='id' id='id' class='form-control readonly' value='<?php echo $usrId ?>' readonly>
            <div class='form-group'><label for='username'>Username</label><input type='text'
                    name='username' id='username' class='form-control readonly' value='<?php echo $username ?>' readonly>
            </div>
            <div class='form-group'><label for='firstname'>First name</label><input type='text'
                    name='firstname' id='firstname' class='form-control' value='<?php echo $firstname ?>'></div>
            <div class='form-group'><label for='surname'>Last name</label><input type='text'
                    name='surname' id='surname' class='form-control' value='<?php echo $surname ?>'></div>
            <br>
            <br>
            <?php
            if ($isAdmin === 'Y') {
                echo '<kbd>You are administrator</kbd>';
            }



            ?>

    </div>
    <kbd>Account created
        <?php echo $createdAt ?>
    </kbd>

    <br><br>
    <button type="submit" name="submit_form" class="btn btn-primary">Save changes</button>&nbsp;&nbsp;
    <a href='?p=_changePassword' class='btn btn-warning' type='button' title='Change password'>Change password</a>
    </form>
    <br><br>
