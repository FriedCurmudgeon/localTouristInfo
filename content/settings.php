<?php
// If session variable is not set it will redirect to login page 
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    echo "<script type='text/javascript'>window.location.href = '../indexPub.php'</script>";
}
;
?>

<script>
    new ClipboardJS('.btn');
</script>


<div class="container">
    <h2>Settings</h2>
</div>
    <div id="exTab4" class="container">	
        <ul  class="nav nav-pills">
			<li class="active"><a  href="#settingsGlobal" data-toggle="tab"><i class="fa-solid fa-globe"></i> Global settings</a></li>
            <li><a href="#settingsMaintenance" data-toggle="tab"><i class="fa-solid fa-circle-exclamation"></i> Maintenance settings</a></li>
			<li><a href="#settingsLocations" data-toggle="tab"><i class="fa-solid fa-location-dot"></i> Locations settings</a></li>
			<li><a href="#settingsPersonal" data-toggle="tab"><i class="fa-solid fa-person"></i> Personal user settings</a></li>
            <li><a href="#settingsUserCodes" data-toggle="tab"><i class="fa-solid fa-person-circle-plus"></i> Generate user codes</a></li>
  		    <li><a href="#settingsAllUsers" data-toggle="tab"><i class="fa-solid fa-person-circle-exclamation"></i> All users settings</a></li>
            
		</ul>

		<div class="tab-content clearfix">
			<div class="tab-pane active" id="settingsGlobal">
                <p><?php include('./content/siteSettings/globalSettings.php'); ?></p>
			</div>

            <div class="tab-pane" id="settingsMaintenance">
                <p><?php include('./content/siteSettings/maintenanceSettings.php'); ?>
                </p>
            </div>

            <div class="tab-pane" id="settingsLocations">
                <p><?php include('./content/siteSettings/locationsSettings.php'); ?></p>
            </div>

            <div class="tab-pane" id="settingsPersonal">
                <p><?php include('./content/userSettings/personalUserSettings.php'); ?></p>
			</div>

            <div class="tab-pane" id="settingsUserCodes">
                <p><?php include('./content/userSettings/generateNewUserCode.php'); ?></p>
            </div>

            <div class="tab-pane" id="settingsAllUsers">
                <p><?php include('./content/userSettings/allUsersSettings.php'); ?></p>
            </div>

        </div>
    </div>


<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    
    
