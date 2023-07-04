<?php 
// If session variable is not set it will redirect to login page 
  if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
      echo "<script type='text/javascript'>window.location.href = '../indexPub.php'</script>";
    }; 
?>

<?php if($isAdmin === 'Y') { ?>
<input id="collapsible-useradminsettings" class="toggle" type="checkbox">
<label for="collapsible-useradminsettings" class="lbl-toggle masterArticleHeading">User administration</label>
<div class="collapsible-content">
<div class='content-inner userAdminSettingsForm'>
<?php  $arr = $conn->getUserInfo(); //missions get loaded in missionsContent.php ?>

<div class='userAdminOverview'>
<br><div class="settingDescription">This is an overview over all registered users.<br>
Here you can assign/remove admininstrator access to users, reset passwords, and <i>delete</i> user accounts.</div><br><br>
<table>
  <tr>
    <th>Username</th>
    <th>Name</th>
    <th>Administrator</th>
    <th></th>
  </tr>

<?php for( $i=0; $i < count($arr); $i++) {
  if ($arr[$i]['isAdmin'] === 'Y') { $selectAdminYes = ' selected="selected"'; } else { $selectAdminYes = ''; }
  if ($arr[$i]['isAdmin'] !== 'Y') { $selectAdminNo = ' selected="selected"'; } else { $selectAdminNo = ''; }

  print_r ("<tr>
    <td>".$arr[$i]['username']."</td>
    <td>".$arr[$i]['firstname']." ".$arr[$i]['surname']."</td>
    <td><form class='userAdminForm' method='POST' action='?p=_storeUserAdminChanges' enctype='multipart/form-data'>
    <input type='hidden' id='id' name='id' value='".$arr[$i]['id']."'>
    <select class='' id='isAdmin' name='isAdmin'>
    <option value='N'".$selectAdminNo.">No</option>
    <option value='Y'".$selectAdminYes.">Yes</option>
    </select>
    </td>
    <td><button type='submit' name='submit_form' class='btn btn-primary' title='Save settings'><i class='fa-solid fa-floppy-disk' style='color:white; font-size:1.5em;'></i></button>&nbsp;&nbsp;
    <a href='?p=_changePasswordAdmin&user=".$arr[$i]['username']."&id=".$arr[$i]['id']."' class='btn btn-warning' role='button' title='Change password'><i class='fa fa-key' style='font-size:1.5em;'></i></a>&nbsp;&nbsp;
    <a href='?p=_deleteUser&id=".$arr[$i]['id']."' class='btn btn-danger userDelete' role='button' title='Delete the user'><i class='far fa-trash-alt' style='font-size:1.5em;'></i></a></td>
  </tr>"
);

}


 ?>
</table>
<br><br>
</div>
</div>
</div>
<?php } ?>
