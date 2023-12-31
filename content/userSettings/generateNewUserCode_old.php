<?php 
// If session variable is not set it will redirect to login page 
  if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
      echo "<script type='text/javascript'>window.location.href = '../indexPub.php'</script>";
    }; 
?>

<?php if($isAdmin === 'Y') { ?>
<input id="collapsible-admin" class="toggle" type="checkbox">
<label for="collapsible-admin" class="lbl-toggle masterArticleHeading">Create a new user</label>
<div class="collapsible-content">
<div class='content-inner userSettingsForm'>

<div class='newUserCodeGen'>
      <span class="settingDescription">
        To be able to create a user, you need to generate a <i>registration code</i>. This is kind of a one-time license code.
        This code can be sendt by email or SMS to the person that wants to create a user account.<br><br>
        The code can only be used once.</span>
        
    <?php

    $stringArr = $conn->getRandomStringRow();
    if ($stringArr == NULL) {
      echo '<br><br>';
    } else {
    echo '<br><br><strong>Unused registration codes</strong><br>';
    for( $i=0; $i < count($stringArr); $i++) {
      $strings = $stringArr[$i]['randomString'];

    print_r  ("<div id='regCode'><span class='code".$strings."'>".$strings."</span><button class='btn' id='copybtn' data-clipboard-target='.code".$strings."'>Copy</button></div>");
  }
    }

    ?>

    <br>
      <form method="post">
          <input type="hidden" name="length" value="12" />
          <button type="submit" class="btn btn-primary" style="width:100%;" name="generate">Generate new registration code</button>
      </form>

    <?php


    echo '</div><br><br>';
?>
</div></div>

<?php if (isset($_POST['generate'])) {
  $length = (int)$_POST['length'];
  if ($length < 6) $length = 6;
  $randomString = getRandomString($length);
  $conn->saveRandomStringToDatabase($randomString);
  echo "<input id='collapsible-newCode' class='toggle' type='checkbox' checked>
  <label for='collapsible-newCode' class='lbl-toggle masterArticleHeading'>Autogenerated code to use when creating a new user</label>
  <div class='collapsible-content'>
  <div class='content-inner' id='regCodeNew'>
  <div id='codeNew'>{$randomString}</div><button class='btn btn-secondary' id='copybtn2' data-clipboard-target='#codeNew'>Copy</button>
  </div>
  </div>";
}
echo '</div>';
} ?>
