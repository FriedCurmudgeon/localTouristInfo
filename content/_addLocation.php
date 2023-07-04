<?php 
// If session variable is not set it will redirect to login page 
  if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
      echo "<script type='text/javascript'>window.location.href = '../indexPub.php'</script>";
    }; 
?>
<h2>Add a new location</h2>
<div class="newArticleForm">
  <br>
  <form method='POST' action='?p=_storeNewLocation' enctype="multipart/form-data">

    <div class='form-group'><label for='name_en'>Name (EN)</label><input type='text' name='name_en' id='name_en' class='form-control'></div>
    <div class='form-group'><label for='name_no'>Name (NO)</label><input type='text' name='name_no' id='name_no' class='form-control'></div>
    <div class='form-group'><label for='name_de'>Name (DE)</label><input type='text' name='name_de' id='name_de' class='form-control'></div>
    <div class='form-group'><label for='name_es'>Name (ES)</label><input type='text' name='name_es' id='name_es' class='form-control'></div>
    <div class='form-group'><label for='name_fr'>Name (FR)</label><input type='text' name='name_fr' id='name_fr' class='form-control'></div><br>
    <div class='form-group'><label for='street'>Street</label><input type='text' name='street' id='street' class='form-control'></div>
    <div class='form-group'><label for='zip'>ZIP code</label><input type='text' pattern='[0-9]*' name='zip' id='zip' class='form-control' value='4070'></div>
    <div class='form-group'><label for='city'>City</label><input type='text' name='city' id='city' class='form-control' value='Randaberg'></div><br>
    <div class='form-group'><label for='description_en'>Description (EN)</label><textarea rows="4" id="description_en" name="description_en" class='form-control'></textarea></div>
    <div class='form-group'><label for='description_no'>Description (NO)</label><textarea rows="4" id="description_no" name="description_no" class='form-control'></textarea></div>
    <div class='form-group'><label for='description_de'>Description (DE)</label><textarea rows="4" id="description_de" name="description_de" class='form-control'></textarea></div>
    <div class='form-group'><label for='description_es'>Description (ES)</label><textarea rows="4" id="description_es" name="description_es" class='form-control'></textarea></div>
    <div class='form-group'><label for='description_fr'>Description (SP)</label><textarea rows="4" id="description_fr" name="description_fr" class='form-control'></textarea></div>
    <div class='form-group'><label for='img''>Image</label><input type='file' name='img' id='img' class='form-control-file'>
     <script>
      // Get a reference to our file input
      const fileInput = document.querySelector('input[type="file"]');

      // Create a new File object
      const myFile = new File(['Dummy image'], '../img/dummy-image-square.jpg', {
        type: 'text/plain',
        lastModified: new Date(),
      });

      // Now let's create a DataTransfer to get a FileList
      const dataTransfer = new DataTransfer();
      dataTransfer.items.add(myFile);
      fileInput.files = dataTransfer.files;
    </script>
    </div>
    <div class='form-group'><label for='url'>Web page</label><input type='url' name='url' id='url' class='form-control'></div>
    <div class='form-group'><label for='lat'>Latitude</label><input type='text' name='lat' id='lat' class='form-control'></div>
    <div class='form-group'><label for='lon'>Longtitude</label><input type='text' name='lon' id='lon' class='form-control'></div>
    <div class='form-group'><label for='icon'>Map Icon</label>
      <select id='icon' name='icon' class='form-control'>
        <option value="bakeryMarkerIcon">Bakery marker</option>
        <option value="beachMarkerIcon">Beach marker</option>
        <option value="busMarkerIcon">Bus marker</option>
        <option value="bikeMarkerIcon">Bike marker</option>
        <option value="cafeMarkerIcon">Café marker</option>
        <option value="crossMarkerIcon">Cross marker</option>
        <option value="farmMarkerIcon">Farm marker</option>
        <option value="farmshopMarkerIcon">Farm shop marker</option>
        <option value="ferryMarkerIcon">Ferry marker</option>
        <option value="golfMarkerIcon">Golf marker</option>
        <option value="hikingMarkerIcon">Hiking marker</option>
        <option value="homeMarkerIcon">Home marker</option>
        <option value="landmarkMarkerIcon">Landmark marker</option>
        <option value="landmarkOldMarkerIcon">Old landmark marker</option>
        <option value="pizzaMarkerIcon">Pizza marker</option>
        <option value="pubMarkerIcon">Pub marker</option>
        <option value="utensilsMarkerIcon">Restaurant marker</option>
        <option value="shopMarkerIcon">Shop marker</option>
        <option value="walkingMarkerIcon">Walking marker</option>
        <option value="wineMarkerIcon">Wine marker</option>
      </select>
    </div>
    <div class='form-group'><label for='category'>Category</label>
      <select id='category' name='category' class='form-control'>
        <option value="Beach">Beach</option>
        <option value="grocerystore">Grocery store</option>
        <option value="restaurant">Restaurant</option>
        <option value="farm">Farm</option>
        <option value="transportation">Public transport</option>
        <option value="activity">Activities</option>
        <option value="hiking">Hiking</option>
      </select>
    </div>
    <br>
    <button type="submit" name="submit_form" class="btn btn-primary">Save address</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
  </form>
</div> <!--end .panel -->
<br><br>

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