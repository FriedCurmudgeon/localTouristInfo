<?php if ($isAdmin === 'Y') { ?>

    <input id="collapsible-globalsettings" class="toggle" type="checkbox">
        <label for="collapsible-globalsettings" class="lbl-toggle masterArticleHeading"><i class="fa fa-exclamation-triangle"></i> Sitewide settings</label>
        <div class="collapsible-content">
            <div class='contentWrapper content-inner globalsettingsForm'>

                <div>
                    <h3>Global Settings</h3>
                    <span>These settings affect all users of <i><?php echo $siteShortTitle ?></i>!<br>
                    Be careful with the changes you perform here.</span>
                </div><br>

                <?php if ($settingsId === '0') { ?>
                    <!-- First time setup -->
                    <form method='POST' action='?p=_storeGlobalSettings' enctype="multipart/form-data">
                        <h4>Site title</h4>
                        <span class="settingDescription">This is the title that is shown to the search-engines, and in the browsers title bar.</span>
                        <div class='form1'><label for='siteTitle_en' class='labelClass'>Site title (EN)</label><input type='text' name='siteTitle_en' id='siteTitle_en' class='inputClass'></div>
                        <div class='form1'><label for='siteTitle_no' class='labelClass'>Site title (NO)</label><input type='text' name='siteTitle_no' id='siteTitle_no' class='inputClass'></div>
                        <div class='form1'><label for='siteTitle_de' class='labelClass'>Site title (DE)</label><input type='text' name='siteTitle_de' id='siteTitle_de' class='inputClass'></div>
                        <div class='form1'><label for='siteTitle_es' class='labelClass'>Site title (ES)</label><input type='text' name='siteTitle_es' id='siteTitle_es' class='inputClass'></div>
                        <div class='form1'><label for='siteTitle_fr' class='labelClass'>Site title (FR)</label><input type='text' name='siteTitle_fr' id='siteTitle_fr' class='inputClass'></div>
                        <h4>Site title - short</h4>
                        <span class="settingDescription">This is the title that is shown on the top of the page.</span>
                        <div class='form1'><label for='siteShortTitle_en' class='labelClass'>Site heading title (EN)</label><input type='text' name='siteShortTitle_en' id='siteShortTitle_en' class='inputClass'></div>
                        <div class='form1'><label for='siteShortTitle_no' class='labelClass'>Site heading title (NO)</label><input type='text' name='siteShortTitle_no' id='siteShortTitle_no' class='inputClass'></div>
                        <div class='form1'><label for='siteShortTitle_de' class='labelClass'>Site heading title (DE)</label><input type='text' name='siteShortTitle_de' id='siteShortTitle_de' class='inputClass'></div>
                        <div class='form1'><label for='siteShortTitle_es' class='labelClass'>Site heading title (ES)</label><input type='text' name='siteShortTitle_es' id='siteShortTitle_es' class='inputClass'></div>
                        <div class='form1'><label for='siteShortTitle_fr' class='labelClass'>Site heading title (FR)</label><input type='text' name='siteShortTitle_fr' id='siteShortTitle_fr' class='inputClass'></div>
                        <h4>Site description</h4>
                        <span class="settingDescription">This is the description that is shown to the search-engines.</span>
                        <div class='form1'><label for='siteDescription_en' class='labelClass'>Site description (EN)</label><textarea name='siteDescription_en' id='siteDescription_en' rows='5' cols='33' class='inputClass2'></textarea></div>
                        <div class='form1'><label for='siteDescription_no' class='labelClass'>Site description (NO)</label><textarea name='siteDescription_no' id='siteDescription_no' rows='5' cols='33' class='inputClass2'></textarea></div>
                        <div class='form1'><label for='siteDescription_de' class='labelClass'>Site description (DE)</label><textarea name='siteDescription_de' id='siteDescription_de' rows='5' cols='33' class='inputClass2'></textarea></div>
                        <div class='form1'><label for='siteDescription_es' class='labelClass'>Site description (ES)</label><textarea name='siteDescription_es' id='siteDescription_es' rows='5' cols='33' class='inputClass2'></textarea></div>
                        <div class='form1'><label for='siteDescription_fr' class='labelClass'>Site description (FR)</label><textarea name='siteDescription_fr' id='siteDescription_fr' rows='5' cols='33' class='inputClass2'></textarea></div>
                        <h4>Toggle welcome text</h4>
                        <span class="settingDescription">Toggle to show or hide welcome text.</span>
                        <div class='form1'><label for='siteWelcomeTextToggle' class='labelClass'>Toggle welcome text</label>
                            <select class='form_control inputClass' id='siteWelcomeTextToggle' name='siteWelcomeTextToggle'>
                                <option value='0'>OFF</option> <!-- Allow sponsors OFF -->
                                <option value='1'>ON</option> <!-- Allow sponsors ON -->
                            </select>
                        </div>
                        <h4>Welcome textbox - Title</h4>
                        <span class="settingDescription">This is the title of the textbox that appears when the page is loaded.</span>
                        <div class='form1'><label for='siteWelcomeTextTitle_en' class='labelClass'>Welcome Title (EN)</label><input type='text' name='siteWelcomeTextTitle_en' id='siteWelcomeTextTitle_en' class='inputClass'></div>
                        <div class='form1'><label for='siteWelcomeTextTitle_no' class='labelClass'>Welcome Title (NO)</label><input type='text' name='siteWelcomeTextTitle_no' id='siteWelcomeTextTitle_no' class='inputClass'></div>
                        <div class='form1'><label for='siteWelcomeTextTitle_de' class='labelClass'>Welcome Title (DE)</label><input type='text' name='siteWelcomeTextTitle_de' id='siteWelcomeTextTitle_de' class='inputClass'></div>
                        <div class='form1'><label for='siteWelcomeTextTitle_es' class='labelClass'>Welcome Title (ES)</label><input type='text' name='siteWelcomeTextTitle_es' id='siteWelcomeTextTitle_es' class='inputClass'></div>
                        <div class='form1'><label for='siteWelcomeTextTitle_fr' class='labelClass'>Welcome Title (FR)</label><input type='text' name='siteWelcomeTextTitle_fr' id='siteWelcomeTextTitle_fr' class='inputClass'></div>
                        <h4>Welcome textbox - content</h4>
                        <span class="settingDescription">This is the content of the textbox that appears when the page is loaded.</span>
                        <div class='form1'><label for='siteWelcomeText_en' class='labelClass'>Welcome text (EN)</label><textarea id="siteWelcomeText_en" name="siteWelcomeText_en" rows="5" cols="33" class='inputClass2'>Enter a welcome text.</textarea></div>
                        <div class='form1'><label for='siteWelcomeText_no' class='labelClass'>Welcome text (NO)</label><textarea id="siteWelcomeText_no" name="siteWelcomeText_no" rows="5" cols="33" class='inputClass2'>Enter a welcome text.</textarea></div>
                        <div class='form1'><label for='siteWelcomeText_de' class='labelClass'>Welcome text (DE)</label><textarea id="siteWelcomeText_de" name="siteWelcomeText_de" rows="5" cols="33" class='inputClass2'>Enter a welcome text.</textarea></div>
                        <div class='form1'><label for='siteWelcomeText_es' class='labelClass'>Welcome text (ES)</label><textarea id="siteWelcomeText_es" name="siteWelcomeText_es" rows="5" cols="33" class='inputClass2'>Enter a welcome text.</textarea></div>
                        <div class='form1'><label for='siteWelcomeText_fr' class='labelClass'>Welcome text (FR)</label><textarea id="siteWelcomeText_fr" name="siteWelcomeText_fr" rows="5" cols="33" class='inputClass2'>Enter a welcome text.</textarea></div><br>

                        <h4>Sponsors</h4>
                        <span class="settingDescription">Toggle to show or hide sponsor information and links.</span>
                        <div class='form1'><label for='siteAllowSponsors' class='labelClass'>Allow sponsors</label>
                            <select class='form_control inputClass' id='siteAllowSponsors' name='siteAllowSponsors'>
                                <option value='0'>OFF</option> <!-- Allow sponsors OFF -->
                                <option value='1'>ON</option> <!-- Allow sponsors ON -->
                            </select>
                        </div>
                        <h4>Buy me a coffee</h4>
                        <span class="settingDescription">Toggle to show or hide "Buy me a coffee" information and links.</span>
                        <div class='form1'><label for='siteAllowCoffee' class='labelClass'>Allow "Buy me a coffee"</label>
                            <select class='form_control inputClass' id='siteAllowCoffee' name='siteAllowCoffee'>
                                <option value='0'>OFF</option> <!-- Allow coffee link OFF -->
                                <option value='1'>ON</option> <!-- Allow coffee link ON -->
                            </select></div>
                        <h4>Buy me a coffee - handler</h4>
                        <span class="settingDescription">Enter your "Buy me a coffee" handle (the finel part of your "buy me a coffee" link). Get one at <a href="https://buymeacoffee.com" title="Buy me a coffee" target="_blank">buymeacoffee.com</a>.</span>
                        <div class='form1'><label for='siteCoffeeLink' class='labelClass'>Buymeacoffee handle</label><input type='text' name='siteCoffeeLink' id='siteCoffeeLink' class='inputClass'></div><br>

                        <h4>Cookies text</h4>
                        <span class="settingDescription">The text that appears in when you click the "Cookies" link in the page footer.</span>
                        <div class='form1'><label for='siteCopyrightText_en' class='labelClass'>Cookies text (EN)</label><textarea name='siteCopyrightText_en' id='siteCopyrightText_en' rows='5' cols='33' class='inputClass2'></textarea></div>
                        <div class='form1'><label for='siteCopyrightText_no' class='labelClass'>Cookies text (NO)</label><textarea name='siteCopyrightText_no' id='siteCopyrightText_no' rows='5' cols='33' class='inputClass2'></textarea></div>
                        <div class='form1'><label for='siteCopyrightText_de' class='labelClass'>Cookies text (DE)</label><textarea name='siteCopyrightText_de' id='siteCopyrightText_de' rows='5' cols='33' class='inputClass2'></textarea></div>
                        <div class='form1'><label for='siteCopyrightText_es' class='labelClass'>Cookies text (ES)</label><textarea name='siteCopyrightText_es' id='siteCopyrightText_es' rows='5' cols='33' class='inputClass2'></textarea></div>
                        <div class='form1'><label for='siteCopyrightText_fr' class='labelClass'>Cookies text (FR)</label><textarea name='siteCopyrightText_fr' id='siteCopyrightText_fr' rows='5' cols='33' class='inputClass2'></textarea></div>
                        <h4>Copyright name</h4>
                        <span class="settingDescription">Who has the copyrigfht of your content? Your name, site name, or organization name.</span>
                        <div class='form1'><label for='siteCopyrightName' class='labelClass'>Copyright name</label><input type='text' name='siteCopyrightName' id='siteCopyrightName' class='inputClass'></div>
                        <h4>Contact infomration</h4>
                        <span class="settingDescription">An email address that can be used to contact you.</span>
                        <div class='form1'><label for='siteContactEmail' class='labelClass'>Contact email</label><input type='text' name='siteContactEmail' id='siteContactEmail' class='inputClass'></div><br>

                        <h4>Site Maintenance</h4>
                        <span class="settingDescription">Toggle site meintenance.</span>
                        <div class='form1'><label for='siteMaintenance' class='labelClass'>Site Maintenance</label>
                            <select class='form_control inputClass' id='siteMaintenance' name='siteMaintenance'>
                                <option value='0'>OFF</option> <!-- Vedlikeholdsmodus AV -->
                                <option value='1'>ON</option> <!-- Vedlikeholdsmodus PÅ -->
                            </select>
                        </div>
                        <h4>Site Maintenance notification</h4>
                        <span class="settingDescription">The notification will appear on the top of the page when site maintenance is enabled.</span>
                        <div class='form1'><label for='siteMaintenanceText_en' class='labelClass'>Maintenance text (EN)</label><textarea name='siteMaintenanceText_en' id='siteMaintenanceText_en' rows='5' cols='33' class='inputClass2'></textarea></div>
                        <div class='form1'><label for='siteMaintenanceText_no' class='labelClass'>Maintenance text (NO)</label><textarea name='siteMaintenanceText_no' id='siteMaintenanceText_no' rows='5' cols='33' class='inputClass2'></textarea></div>
                        <div class='form1'><label for='siteMaintenanceText_de' class='labelClass'>Maintenance text (DE)</label><textarea name='siteMaintenanceText_de' id='siteMaintenanceText_de' rows='5' cols='33' class='inputClass2'></textarea></div>
                        <div class='form1'><label for='siteMaintenanceText_es' class='labelClass'>Maintenance text (ES)</label><textarea name='siteMaintenanceText_es' id='siteMaintenanceText_es' rows='5' cols='33' class='inputClass2'></textarea></div>
                        <div class='form1'><label for='siteMaintenanceText_fr' class='labelClass'>Maintenance text (FR)</label><textarea name='siteMaintenanceText_fr' id='siteMaintenanceText_fr' rows='5' cols='33' class='inputClass2'></textarea></div><br>
                        <br>
                        <button type="submit" name="submit_form" class="btn btn-primary">Save changes</button>
                    </form>

                <?php } else { ?>
                    <!-- Edit settings -->
                    <form method='POST' action='?p=_updateGlobalSettings' enctype="multipart/form-data">
                        <input type='hidden' name='id' id='id' class='inputClass readonly' value='<?php echo $settingsId ?>' readonly>
                        <h4>Site title</h4>
                        <span class="settingDescription">This is the title that is shown to the search-engines, and in the browsers title bar.</span>
                        <div class='form1'><label for='siteTitle_en' class='labelClass'>Site title (EN)</label><input type='text' name='siteTitle_en' id='siteTitle_en' class='inputClass' value='<?php echo $siteTitle ?>'></div>
                        <div class='form1'><label for='siteTitle_no' class='labelClass'>Site title (NO)</label><input type='text' name='siteTitle_no' id='siteTitle_no' class='inputClass' value='<?php echo $siteTitle_no ?>'></div>
                        <div class='form1'><label for='siteTitle_de' class='labelClass'>Site title (DE)</label><input type='text' name='siteTitle_de' id='siteTitle_de' class='inputClass' value='<?php echo $siteTitle_de ?>'></div>
                        <div class='form1'><label for='siteTitle_es' class='labelClass'>Site title (ES)</label><input type='text' name='siteTitle_es' id='siteTitle_es' class='inputClass' value='<?php echo $siteTitle_es ?>'></div>
                        <div class='form1'><label for='siteTitle_fr' class='labelClass'>Site title (FR)</label><input type='text' name='siteTitle_fr' id='siteTitle_fr' class='inputClass' value='<?php echo $siteTitle_fr ?>'></div>
                        <h4>Site title - short</h4>
                        <span class="settingDescription">This is the title that is shown on the top of the page.</span>
                        <div class='form1'><label for='siteShortTitle_en' class='labelClass'>Site heading title (EN)</label><input type='text' name='siteShortTitle_en' id='siteShortTitle_en' class='inputClass' value='<?php echo $siteShortTitle ?>'></div>
                        <div class='form1'><label for='siteShortTitle_no' class='labelClass'>Site heading title (NO)</label><input type='text' name='siteShortTitle_no' id='siteShortTitle_no' class='inputClass' value='<?php echo $siteShortTitle_no ?>'></div>
                        <div class='form1'><label for='siteShortTitle_de' class='labelClass'>Site heading title (DE)</label><input type='text' name='siteShortTitle_de' id='siteShortTitle_de' class='inputClass' value='<?php echo $siteShortTitle_de ?>'></div>
                        <div class='form1'><label for='siteShortTitle_es' class='labelClass'>Site heading title (ES)</label><input type='text' name='siteShortTitle_es' id='siteShortTitle_es' class='inputClass' value='<?php echo $siteShortTitle_es ?>'></div>
                        <div class='form1'><label for='siteShortTitle_fr' class='labelClass'>Site heading title (FR)</label><input type='text' name='siteShortTitle_fr' id='siteShortTitle_fr' class='inputClass' value='<?php echo $siteShortTitle_fr ?>'></div>
                        <h4>Site description</h4>
                        <span class="settingDescription">This is the description that is shown to the search-engines.</span>
                        <div class='form1'><label for='siteDescription_en' class='labelClass'>Site description (EN)</label><textarea name='siteDescription_en' id='siteDescription_en' rows='5' cols='33' class='inputClass2'><?php echo $siteDescription ?></textarea></div>
                        <div class='form1'><label for='siteDescription_no' class='labelClass'>Site description (NO)</label><textarea name='siteDescription_no' id='siteDescription_no' rows='5' cols='33' class='inputClass2'><?php echo $siteDescription_no ?></textarea></div>
                        <div class='form1'><label for='siteDescription_de' class='labelClass'>Site description (DE)</label><textarea name='siteDescription_de' id='siteDescription_de' rows='5' cols='33' class='inputClass2'><?php echo $siteDescription_de ?></textarea></div>
                        <div class='form1'><label for='siteDescription_es' class='labelClass'>Site description (ES)</label><textarea name='siteDescription_es' id='siteDescription_es' rows='5' cols='33' class='inputClass2'><?php echo $siteDescription_es ?></textarea></div>
                        <div class='form1'><label for='siteDescription_fr' class='labelClass'>Site description (FR)</label><textarea name='siteDescription_fr' id='siteDescription_fr' rows='5' cols='33' class='inputClass2'><?php echo $siteDescription_fr ?></textarea></div>
                        <h4>Toggle welcome text</h4>
                        <span class="settingDescription">Toggle to show or hide welcome text.</span>
                        <div class='form1'><label for='siteWelcomeTextToggle' class='labelClass'>Toggle welcome text</label>
                            <select class='form_control inputClass' id='siteWelcomeTextToggle' name='siteWelcomeTextToggle'>
                                <option value='0' <?php if ($siteWelcomeTextToggle == '0') echo " selected='selected'"; ?>>OFF</option> <!-- Welcome text OFF -->
                                <option value='1' <?php if ($siteWelcomeTextToggle == '1') echo " selected='selected'"; ?>>ON</option> <!-- Welcome text On -->
                            </select>
                        </div>
                        <h4>Welcome textbox - Title</h4>
                        <span class="settingDescription">This is the title of the textbox that appears when the page is loaded.</span>
                        <div class='form1'><label for='siteWelcomeTextTitle_en' class='labelClass'>Welcome Title (EN)</label><input type='text' name='siteWelcomeTextTitle_en' id='siteWelcomeTextTitle_en' class='inputClass' value='<?php echo $siteWelcomeTextTitle ?>'></div>
                        <div class='form1'><label for='siteWelcomeTextTitle_no' class='labelClass'>Welcome Title (NO)</label><input type='text' name='siteWelcomeTextTitle_no' id='siteWelcomeTextTitle_no' class='inputClass' value='<?php echo $siteWelcomeTextTitle_no ?>'></div>
                        <div class='form1'><label for='siteWelcomeTextTitle_de' class='labelClass'>Welcome Title (DE)</label><input type='text' name='siteWelcomeTextTitle_de' id='siteWelcomeTextTitle_de' class='inputClass' value='<?php echo $siteWelcomeTextTitle_de ?>'></div>
                        <div class='form1'><label for='siteWelcomeTextTitle_es' class='labelClass'>Welcome Title (ES)</label><input type='text' name='siteWelcomeTextTitle_es' id='siteWelcomeTextTitle_es' class='inputClass' value='<?php echo $siteWelcomeTextTitle_es ?>'></div>
                        <div class='form1'><label for='siteWelcomeTextTitle_fr' class='labelClass'>Welcome Title (FR)</label><input type='text' name='siteWelcomeTextTitle_fr' id='siteWelcomeTextTitle_fr' class='inputClass' value='<?php echo $siteWelcomeTextTitle_fr ?>'></div>
                        <h4>Welcome textbox - content</h4>
                        <span class="settingDescription">This is the content of the textbox that appears when the page is loaded.</span>
                        <div class='form1'><label for='siteWelcomeText_en' class='labelClass'>Welcome text (EN)</label><textarea id="siteWelcomeText_en" name="siteWelcomeText_en" rows="5" cols="33" class='inputClass2'><?php echo $siteWelcomeText ?></textarea></div>
                        <div class='form1'><label for='siteWelcomeText_no' class='labelClass'>Welcome text (NO)</label><textarea id="siteWelcomeText_no" name="siteWelcomeText_no" rows="5" cols="33" class='inputClass2'><?php echo $siteWelcomeText_no ?></textarea></div>
                        <div class='form1'><label for='siteWelcomeText_de' class='labelClass'>Welcome text (DE)</label><textarea id="siteWelcomeText_de" name="siteWelcomeText_de" rows="5" cols="33" class='inputClass2'><?php echo $siteWelcomeText_de ?></textarea></div>
                        <div class='form1'><label for='siteWelcomeText_es' class='labelClass'>Welcome text (ES)</label><textarea id="siteWelcomeText_es" name="siteWelcomeText_es" rows="5" cols="33" class='inputClass2'><?php echo $siteWelcomeText_es ?></textarea></div>
                        <div class='form1'><label for='siteWelcomeText_fr' class='labelClass'>Welcome text (FR)</label><textarea id="siteWelcomeText_fr" name="siteWelcomeText_fr" rows="5" cols="33" class='inputClass2'><?php echo $siteWelcomeText_fr ?></textarea></div><br>

                        <h4>Sponsors</h4>
                        <span class="settingDescription">Toggle to show or hide sponsor information and links.</span>
                        <div class='form1'><label for='siteAllowSponsors' class='labelClass'>Allow sponsors</label>
                            <select class='form_control inputClass' id='siteAllowSponsors' name='siteAllowSponsors'>
                                <option value='0' <?php if ($siteAllowSponsors == '0') echo " selected='selected'"; ?>>OFF</option> <!-- Vedlikeholdsmodus AV -->
                                <option value='1' <?php if ($siteAllowSponsors == '1') echo " selected='selected'"; ?>>ON</option> <!-- Vedlikeholdsmodus PÅ -->
                            </select>
                        </div>
                        <h4>Buy me a coffee</h4>
                        <span class="settingDescription">Toggle to show or hide "Buy me a coffee" information and links.</span>
                        <div class='form1'><label for='siteAllowCoffee' class='labelClass'>Allow "Buy me a coffee"</label>
                            <select class='form_control inputClass' id='siteAllowCoffee' name='siteAllowCoffee'>
                                <option value='0' <?php if ($siteAllowCoffee == '0') echo " selected='selected'"; ?>>OFF</option> <!-- Vedlikeholdsmodus AV -->
                                <option value='1' <?php if ($siteAllowCoffee == '1') echo " selected='selected'"; ?>>ON</option> <!-- Vedlikeholdsmodus PÅ -->
                            </select></div>
                        <h4>Buy me a coffee - handler</h4>
                        <span class="settingDescription">Enter your "Buy me a coffee" handle (the finel part of your "buy me a coffee" link). Get one at <a href="https://buymeacoffee.com" title="Buy me a coffee" target="_blank">buymeacoffee.com</a>.</span>
                        <div class='form1'><label for='siteCoffeeLink' class='labelClass'>Buymeacoffee link</label><input type='text' name='siteCoffeeLink' id='siteCoffeeLink' class='inputClass' value='<?php echo $siteCoffeeLink ?>'></div><br>

                        <h4>Cookies text</h4>
                        <span class="settingDescription">The text that appears in when you click the "Cookies" link in the page footer.</span>
                        <div class='form1'><label for='siteCopyrightText_en' class='labelClass'>Cookies text (EN)</label><textarea name='siteCopyrightText_en' id='siteCopyrightText_en' rows='5' cols='33' class='inputClass2'><?php echo $siteCopyrightText ?></textarea></div>
                        <div class='form1'><label for='siteCopyrightText_no' class='labelClass'>Cookies text (NO)</label><textarea name='siteCopyrightText_no' id='siteCopyrightText_no' rows='5' cols='33' class='inputClass2'><?php echo $siteCopyrightText_no ?></textarea></div>
                        <div class='form1'><label for='siteCopyrightText_de' class='labelClass'>Cookies text (DE)</label><textarea name='siteCopyrightText_de' id='siteCopyrightText_de' rows='5' cols='33' class='inputClass2'><?php echo $siteCopyrightText_de ?></textarea></div>
                        <div class='form1'><label for='siteCopyrightText_es' class='labelClass'>Cookies text (ES)</label><textarea name='siteCopyrightText_es' id='siteCopyrightText_es' rows='5' cols='33' class='inputClass2'><?php echo $siteCopyrightText_es ?></textarea></div>
                        <div class='form1'><label for='siteCopyrightText_fr' class='labelClass'>Cookies text (FR)</label><textarea name='siteCopyrightText_fr' id='siteCopyrightText_fr' rows='5' cols='33' class='inputClass2'><?php echo $siteCopyrightText_fr ?></textarea></div>
                        <h4>Copyright name</h4>
                        <span class="settingDescription">Who has the copyrigfht of your content? Your name, site name, or organization name.</span>
                        <div class='form1'><label for='siteCopyrightName' class='labelClass'>Copyright name</label><input type='text' name='siteCopyrightName' id='siteCopyrightName' class='inputClass' value='<?php echo $siteCopyrightName ?>'></div>
                        <h4>Contact infomration</h4>
                        <span class="settingDescription">An email address that can be used to contact you.</span>
                        <div class='form1'><label for='siteContactEmail' class='labelClass'>Contact email</label><input type='text' name='siteContactEmail' id='siteContactEmail' class='inputClass' value='<?php echo $siteContactEmail ?>'></div><br>
           
                        <button type="submit" name="submit_form" class="btn btn-primary">Save changes</button>
                    </form>

                    <div>
                        <h3>Maintenance notification</h3>
                        <span>Her kan du slå på vedlikeholdsvarsel og legge inn en beskrivende tekst i varselet.<br>
                            Dette vil vises i toppen av nettsiden til du slår det av igjen.<br>
                            Denne funksjonen kan også brukes til å legge ut annen informasjon.</span>
                    </div><br>
                    <form method='POST' action='?p=_updateMaintenanceSettings' enctype="multipart/form-data">
                        <input type='hidden' name='id' id='id' class='inputClass readonly' value='<?php echo $settingsId ?>' readonly>

                        <h4>Site Maintenance</h4>
                        <span class="settingDescription">Toggle site meintenance.</span>
                        <div class='form1'><label for='siteMaintenance' class='labelClass'>Site Mainenance</label>
                            <select class='form_control inputClass' id='siteMaintenance' name='siteMaintenance'>
                                <option value='0' <?php if ($siteMaintenance == '0') echo " selected='selected'"; ?>>OFF</option> <!-- Vedlikeholdsmodus AV -->
                                <option value='1' <?php if ($siteMaintenance == '1') echo " selected='selected'"; ?>>ON</option> <!-- Vedlikeholdsmodus PÅ -->
                            </select>
                        </div>
                        <h4>Site Maintenance notification</h4>
                        <span class="settingDescription">The notification will appear on the top of the page when site maintenance is enabled.</span>
                        <div class='form1'><label for='siteMaintenanceText_en' class='labelClass'>Maintenance text (EN)</label><textarea name='siteMaintenanceText_en' id='siteMaintenanceText_en' rows='5' cols='33' class='inputClass2'><?php echo $siteMaintenanceText ?></textarea></div>
                        <div class='form1'><label for='siteMaintenanceText_no' class='labelClass'>Maintenance text (NO)</label><textarea name='siteMaintenanceText_no' id='siteMaintenanceText_no' rows='5' cols='33' class='inputClass2'><?php echo $siteMaintenanceText_no ?></textarea></div>
                        <div class='form1'><label for='siteMaintenanceText_de' class='labelClass'>Maintenance text (DE)</label><textarea name='siteMaintenanceText_de' id='siteMaintenanceText_de' rows='5' cols='33' class='inputClass2'><?php echo $siteMaintenanceText_de ?></textarea></div>
                        <div class='form1'><label for='siteMaintenanceText_es' class='labelClass'>Maintenance text (ES)</label><textarea name='siteMaintenanceText_es' id='siteMaintenanceText_es' rows='5' cols='33' class='inputClass2'><?php echo $siteMaintenanceText_es ?></textarea></div>
                        <div class='form1'><label for='siteMaintenanceText_fr' class='labelClass'>Maintenance text (FR)</label><textarea name='siteMaintenanceText_fr' id='siteMaintenanceText_fr' rows='5' cols='33' class='inputClass2'><?php echo $siteMaintenanceText_fr ?></textarea></div><br>
                    
                        <button type="submit" name="submit_form" <?php if ($siteMaintenance == '0') { echo " class='btn btn-warning'>Activate maintenance notification</button> <code>Remember to toggle maintenance to ON before activating!</code>";
                                                                                                    } elseif ($siteMaintenance == '1') { echo " class='btn btn-danger'>Deactivate maintenance notification</button> <code>Remember to toggle maintenance to OFF before deactivating!</code>";
                                                                                                    }; ?>
                    </form>

                <?php } ?><br>

            </div>
        </div>
<?php } ?>