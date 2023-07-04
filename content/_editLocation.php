<?php 
// If session variable is not set it will redirect to login page 
  if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
      echo "<script type='text/javascript'>window.location.href = '../indexPub.php'</script>";
    }; 
?>

<?php
 require_once("./config/db.php");
 $arr = $conn->getLocationsRow();
 $get_id = isset($_GET['id']) ?  $_GET['id'] : '';
 $val_id = intval($get_id);
 $locationId = $val_id > 0 ? $val_id : '';

for($i=0; $i < count($arr); $i++) {
  if ($isAdmin === 'Y') {
      $id = $locationId;
      $name = $arr[$i]['name'];
      $name_no = $arr[$i]['name_no'];
      $name_de = $arr[$i]['name_de'];
      $name_es = $arr[$i]['name_es'];
      $name_fr = $arr[$i]['name_fr'];
      $street = $arr[$i]['street'];
      $zip = $arr[$i]['zip'];
      $city = $arr[$i]['city'];
      $url = $arr[$i]['url'];
      $description = $arr[$i]['description'];
      $description_no = $arr[$i]['description_no'];
      $description_de = $arr[$i]['description_de'];
      $description_es = $arr[$i]['description_es'];
      $description_fr = $arr[$i]['description_fr'];
      $lat = $arr[$i]['lat'];
      $lon = $arr[$i]['lon'];
      $img = $arr[$i]['img'];
      $icon = $arr[$i]['icon'];
      $category = $arr[$i]['category'];

?>

<form method='POST' action='?p=_editLocationUpdate' enctype="multipart/form-data">
<h2>Edit location "<?php echo $name; ?>"</h2><br>
<input type='hidden' name='id' id='id' class='form-control' value='<?php echo $id ?>'>
<div class='form-group'>
  <label for='name_en'>Name (EN)</label>
  <input type='text' name='name_en' id='name_en' class='form-control' value='<?php echo $name ?>'>
</div>
<div class='form-group'>
  <label for='name_no'>Name (NO)</label>
  <input type='text' name='name_no' id='name_no' class='form-control' value='<?php echo $name_no ?>'>
</div>
<div class='form-group'>
  <label for='name_de'>Name (DE)</label>
  <input type='text' name='name_de' id='name_de' class='form-control' value='<?php echo $name_de ?>'>
</div>
<div class='form-group'>
  <label for='name_es'>Name (ES)</label>
  <input type='text' name='name_es' id='name_es' class='form-control' value='<?php echo $name_es ?>'>
</div>
<div class='form-group'>
  <label for='name_fr'>Name (FR)</label>
  <input type='text' name='name_fr' id='name_fr' class='form-control' value='<?php echo $name_fr ?>'>
</div><br>

<div class='form-group'>
  <label for='street'>Address</label>
  <input type='text' name='street' id='street' class='form-control' value='<?php echo $street ?>'>
</div>
<div class='form-group'>
  <label for='zip'>Zip</label>
  <input type='text' pattern='[0-9]*' name='zip' id='zip' class='form-control' value='<?php if ($zip == '') { echo '4070';} else { echo $zip; } ?>'>
</div>
<div class='form-group'>
  <label for='city'>City</label>
  <input type='text' name='city' id='city' class='form-control' value='<?php if ($city == '') { echo 'Randaberg';} else { echo $city; } ?>'>
</div><br>

<div class='form-group'>
  <label for='description_en'>Description (EN)</label>
  <textarea rows='4' name='description_en' id='description_en' class='form-control'><?php echo $description ?></textarea>
</div>
<div class='form-group'>
  <label for='description_no'>Description (NO)</label>
  <textarea rows='4' name='description_no' id='description_no' class='form-control'><?php echo $description_no ?></textarea>
</div>
<div class='form-group'>
  <label for='description_de'>Description (DE)</label>
  <textarea rows='4' name='description_de' id='description_de' class='form-control'><?php echo $description_de ?></textarea>
</div>
<div class='form-group'>
  <label for='description_es'>Description (ES)</label>
  <textarea rows='4' name='description_es' id='description_es' class='form-control'><?php echo $description_es ?></textarea>
</div>
<div class='form-group'>
  <label for='description_fr'>Description (FR)</label>
  <textarea rows='4' name='description_fr' id='description_fr' class='form-control'><?php echo $description_fr ?></textarea>
</div><br>

<div class='form-group'>
  <label for='url'>Web page</label>
  <input type='url' name='url' id='url' class='form-control' value='<?php echo $url ?>'>
</div>
<div class='form-group'>
  <label for='lat'>Latitude</label>
  <input type='text' name='lat' id='lat' class='form-control' value='<?php echo $lat ?>'>
</div>
<div class='form-group'>
  <label for='lon'>Longitude</label>
  <input type='text' name='lon' id='lon' class='form-control' value='<?php echo $lon ?>'>
</div>
<div class='form-group'>
  <label for='img'>Image</label>
  <?php if ($img =='') { $setImg = '../img/dummy-image-square.jpg';} else { $setImg = $img; } ?>
  <input type='file' name='img' id='img' class='form-control-file'>
  <script>
        var setImg = <?php echo json_encode($setImg); ?>;
        // Get a reference to our file input
        const fileInput = document.querySelector('input[type="file"]');
    
        // Create a new File object
        const myFile = new File(['Dummy image'], setImg, {
            type: 'text/plain',
            lastModified: new Date(),
        });
    
        // Now let's create a DataTransfer to get a FileList
        const dataTransfer = new DataTransfer();
        dataTransfer.items.add(myFile);
        fileInput.files = dataTransfer.files;
    </script>
</div>
<div class='form-group'>
  <label for='icon'>Map Icon</label>
      <select id='icon' name='icon' class='form-control'>
        <option value="none" <?php if ($icon === '' || 'none') echo 'selected="selected"'; ?> >None</option>
        <option value="bakeryMarkerIcon" <?php if ($icon === 'bakeryMarkerIcon') echo 'selected="selected"'; ?> >Bakery marker</option>
        <option value="beachMarkerIcon" <?php if ($icon === 'beachMarkerIcon') echo 'selected="selected"'; ?> >Beach marker</option>
        <option value="busMarkerIcon" <?php if ($icon === 'busMarkerIcon') echo 'selected="selected"'; ?> >Bus marker</option>
        <option value="bikeMarkerIcon" <?php if ($icon === 'bikeMarkerIcon') echo 'selected="selected"'; ?> >Bike marker</option>
        <option value="cafeMarkerIcon" <?php if ($icon === 'cafeMarkerIcon') echo 'selected="selected"'; ?> >Café marker</option>
        <option value="crossMarkerIcon" <?php if ($icon === 'crossMarkerIcon') echo 'selected="selected"'; ?> >Cross marker</option>
        <option value="farmMarkerIcon" <?php if ($icon === 'farmMarkerIcon') echo 'selected="selected"'; ?> >Farm marker</option>
        <option value="farmshopMarkerIcon" <?php if ($icon === 'farmshopMarkerIcon') echo 'selected="selected"'; ?> >Farm shop marker</option>
        <option value="ferryMarkerIcon" <?php if ($icon === 'ferryMarkerIcon') echo 'selected="selected"'; ?> >Ferry marker</option>
        <option value="golfMarkerIcon" <?php if ($icon === 'golfMarkerIcon') echo 'selected="selected"'; ?> >Golf marker</option>
        <option value="hikingMarkerIcon" <?php if ($icon === 'hikingMarkerIcon') echo 'selected="selected"'; ?> >Hiking marker</option>
        <option value="homeMarkerIcon" <?php if ($icon === 'homeMarkerIcon') echo 'selected="selected"'; ?> >Home marker</option>
        <option value="landmarkMarkerIcon" <?php if ($icon === 'landmarkMarkerIcon') echo 'selected="selected"'; ?> >Landmark marker</option>
        <option value="landmarkOldMarkerIcon" <?php if ($icon === 'landmarkOldMarkerIcon') echo 'selected="selected"'; ?> >Old landmark marker</option>
        <option value="pizzaMarkerIcon" <?php if ($icon === 'pizzaMarkerIcon') echo 'selected="selected"'; ?> >Pizza marker</option>
        <option value="pubMarkerIcon" <?php if ($icon === 'pubMarkerIcon') echo 'selected="selected"'; ?> >Pub marker</option>
        <option value="utensilsMarkerIcon" <?php if ($icon === 'utensilsMarkerIcon') echo 'selected="selected"'; ?> >Restaurant marker</option>
        <option value="shopMarkerIcon" <?php if ($icon === 'shopMarkerIcon') echo 'selected="selected"'; ?> >Shop marker</option>
        <option value="walkingMarkerIcon" <?php if ($icon === 'walkingMarkerIcon') echo 'selected="selected"'; ?> >Walking marker</option>
        <option value="wineMarkerIcon" <?php if ($icon === 'wineMarkerIcon') echo 'selected="selected"'; ?> >Wine marker</option>
  </select>
</div>
<div class='form-group'><label for='category'>Category</label>
  <select id='category' name='category'  class='form-control'>
      <option value="none" <?php if ($category === '' || 'none') echo 'selected="selected"'; ?> >None</option>
      <option value="beach" <?php if ($category === 'beach') echo 'selected="selected"'; ?> >Beach</option>
      <option value="grocerystore"<?php if ($category === 'grocerystore') echo 'selected="selected"'; ?> >Grocery store</option>
      <option value="restaurant"<?php if ($category === 'restaurant') echo 'selected="selected"'; ?> >Restaurant</option>
      <option value="farm"<?php if ($category === 'farm') echo 'selected="selected"'; ?> >Farm</option>
      <option value="transportation"<?php if ($category === 'transportation') echo 'selected="selected"'; ?> >Public transport</option>
      <option value="activity"<?php if ($category === 'activity') echo 'selected="selected"'; ?> >Activities</option>
      <option value="hiking"<?php if ($category === 'hiking') echo 'selected="selected"'; ?> >Hiking</option>
     </select>
</div>
<br>
<button type="submit" name="submit_form" class="btn btn-primary">Update</button>&nbsp;&nbsp;<?php btnBackToLocationsSettings(); ?>
</form><br><br><br>



      <script>

        tinymce.init({
              selector: '#description_en',
              toolbar: 'undo redo bold italic alignleft aligncenter alignright code',
              plugins: 'code',
              height: 200,
              statusbar: false,
              menubar: false,
              content_style: "body { font-size: 10pt;}",
              newline_behavior: 'linebreak',
              elementpath: false,
              });
         tinymce.init({
              selector: '#description_no',
              toolbar: 'undo redo bold italic alignleft aligncenter alignright code',
              plugins: 'code',
              height: 200,
              statusbar: false,
              menubar: false,
              content_style: "body { font-size: 10pt;}",
              forced_root_block : "",
              });
         tinymce.init({
              selector: '#description_de',
              toolbar: 'undo redo bold italic alignleft aligncenter alignright code',
              plugins: 'code',
              height: 200,
              statusbar: false,
              menubar: false,
              content_style: "body { font-size: 10pt;}",
              forced_root_block : "",
              });
          tinymce.init({
              selector: '#description_es',
              toolbar: 'undo redo bold italic alignleft aligncenter alignright  code',
              plugins: 'code',
              height: 200,
              statusbar: false,
              menubar: false,
              content_style: "body { font-size: 10pt;}",
              forced_root_block : "",
              });
          tinymce.init({
              selector: '#description_fr',
              toolbar: 'undo redo bold italic alignleft aligncenter alignright code',
              plugins: 'code',
              height: 200,
              statusbar: false,
              menubar: false,
              content_style: "body { font-size: 10pt;}",
              forced_root_block : "",
              });

      </script>


<?php  }
else if ($arr[$i]['username'] !== $_SESSION['username']) {
  include './content/404.php';

}
}

if (count($arr) == 0) { // execute if $arr is empty
    include './content/404.php';
}
 ?>
