<?php if ($isAdmin === 'Y') { ?>
    <div>
        <h3>Maintenance notification</h3>
        <span>You can activate maintenance notification and create a message that will be shown in the notification.<br>
            This will appear on the top of the page until you deactivate it again.<br>
            This function can also be used to display other information.
        </span>
    </div><br>
    
    <?php if ($settingsId === '0') { ?>
        <!-- First time setup -->
        <form method='POST' action='?p=_storeMaintenanceSettings' enctype="multipart/form-data">
            <h4>Site Maintenance</h4>
            <span class="settingDescription">Toggle site meintenance.</span>
            <div class='form-group'><label for='siteMaintenance'>Site Maintenance</label>
                <select class='form-control' id='siteMaintenance' name='siteMaintenance'>
                    <option value='0'>OFF</option> <!-- Maintennce mode OFF -->
                    <option value='1'>ON</option> <!-- Maintennce mode ON -->
                </select>
            </div>
            <h4>Site Maintenance notification</h4>
            <span class="settingDescription">The notification will appear on the top of the page when site maintenance is enabled.</span>
            <div class='form-group'><label for='siteMaintenanceText_en'>Maintenance text (EN)</label><textarea name='siteMaintenanceText_en' id='siteMaintenanceText_en' rows='5' class='form-control'></textarea></div>
            <div class='form-group'><label for='siteMaintenanceText_no'>Maintenance text (NO)</label><textarea name='siteMaintenanceText_no' id='siteMaintenanceText_no' rows='5' cclass='form-control'></textarea></div>
            <div class='form-group'><label for='siteMaintenanceText_de'>Maintenance text (DE)</label><textarea name='siteMaintenanceText_de' id='siteMaintenanceText_de' rows='5' class='form-control'></textarea></div>
            <div class='form-group'><label for='siteMaintenanceText_es'>Maintenance text (ES)</label><textarea name='siteMaintenanceText_es' id='siteMaintenanceText_es' rows='5' class='form-control'></textarea></div>
            <div class='form-group'><label for='siteMaintenanceText_fr'>Maintenance text (FR)</label><textarea name='siteMaintenanceText_fr' id='siteMaintenanceText_fr' rows='5' class='form-control'></textarea></div><br>
            <br>
            <button type="submit" name="submit_form" class="btn btn-primary">Save changes</button>
        </form>

    <?php } else { ?>
        <form method='POST' action='?p=_updateMaintenanceSettings' enctype="multipart/form-data">
            <input type='hidden' name='id' id='id' class='inputClass readonly' value='<?php echo $settingsId ?>' readonly>

            <h4>Site Maintenance</h4>
            <span class="settingDescription">Toggle site meintenance.</span>
            <div class='form-group'><label for='siteMaintenance' class='labelClass'>Site Mainenance</label>
                <select class='form-control' id='siteMaintenance' name='siteMaintenance'>
                    <option value='0' <?php if ($siteMaintenance == '0') echo " selected='selected'"; ?>>OFF</option> <!-- Maintennc mode OFF -->
                    <option value='1' <?php if ($siteMaintenance == '1') echo " selected='selected'"; ?>>ON</option> <!-- Maintennce mode ON -->
                </select>
            </div>

            <h4>Site Maintenance notification</h4>
            <span class="settingDescription">The notification will appear on the top of the page when site maintenance is enabled.</span>
            <div class='form-group'><label for='siteMaintenanceText_en'>Maintenance text (EN)</label><textarea name='siteMaintenanceText_en' id='siteMaintenanceText_en' rows='5' class='form-control'><?php echo $siteMaintenanceText ?></textarea></div>
            <div class='form-group'><label for='siteMaintenanceText_no'>Maintenance text (NO)</label><textarea name='siteMaintenanceText_no' id='siteMaintenanceText_no' rows='5' class='form-control'><?php echo $siteMaintenanceText_no ?></textarea></div>
            <div class='form-group'><label for='siteMaintenanceText_de'>Maintenance text (DE)</label><textarea name='siteMaintenanceText_de' id='siteMaintenanceText_de' rows='5' class='form-control'><?php echo $siteMaintenanceText_de ?></textarea></div>
            <div class='form-group'><label for='siteMaintenanceText_es'>Maintenance text (ES)</label><textarea name='siteMaintenanceText_es' id='siteMaintenanceText_es' rows='5' class='form-control'><?php echo $siteMaintenanceText_es ?></textarea></div>
            <div class='form-group'><label for='siteMaintenanceText_fr'>Maintenance text (FR)</label><textarea name='siteMaintenanceText_fr' id='siteMaintenanceText_fr' rows='5' class='form-control'><?php echo $siteMaintenanceText_fr ?></textarea></div><br>

            <button type="submit" name="submit_form" <?php if ($siteMaintenance == '0') {
                                                            echo " class='btn btn-warning'>Activate maintenance notification</button> <code>Remember to toggle maintenance to ON before activating!</code>";
                                                              } elseif ($siteMaintenance == '1') {
                                                            echo " class='btn btn-danger'>Deactivate maintenance notification</button> <code>Remember to toggle maintenance to OFF before deactivating!</code>";
                                                            }; ?>

        </form><br><br>
        <!-- script>
            var maintTxtEn = new SimpleMDE({ element: document.getElementById("siteMaintenanceText_en") });
            var maintTxtNo = new SimpleMDE({ element: document.getElementById("siteMaintenanceText_no") });
            var maintTxtDe = new SimpleMDE({ element: document.getElementById("siteMaintenanceText_de") });
            var maintTxtEs = new SimpleMDE({ element: document.getElementById("siteMaintenanceText_es") });
            var maintTxtFr = new SimpleMDE({ element: document.getElementById("siteMaintenanceText_fr") });
        </script -->

      <script>
    tinymce.init({
      selector: '#siteMaintenanceText_en',
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
      selector: '#siteMaintenanceText_no',
      toolbar: 'undo redo bold italic alignleft aligncenter alignright code',
      plugins: 'code',
      height: 200,
      statusbar: false,
      menubar: false,
      content_style: "body { font-size: 10pt;}",
      forced_root_block : "",
    });
    tinymce.init({
      selector: '#siteMaintenanceText_de',
      toolbar: 'undo redo bold italic alignleft aligncenter alignright code',
      plugins: 'code',
      height: 200,
      statusbar: false,
      menubar: false,
      content_style: "body { font-size: 10pt;}",
      forced_root_block : "",
    });
    tinymce.init({
      selector: '#siteMaintenanceText_es',
      toolbar: 'undo redo bold italic alignleft aligncenter alignright  code',
      plugins: 'code',
      height: 200,
      statusbar: false,
      menubar: false,
      content_style: "body { font-size: 10pt;}",
      forced_root_block : "",
    });
    tinymce.init({
      selector: '#siteMaintenanceText_fr',
      toolbar: 'undo redo bold italic alignleft aligncenter alignright code',
      plugins: 'code',
      height: 200,
      statusbar: false,
      menubar: false,
      content_style: "body { font-size: 10pt;}",
      forced_root_block : "",
    });
  </script>
        
        
    <?php }; 
    }; ?>
