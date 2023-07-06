<?php if ($isAdmin === 'Y') { ?>


            <div>
                <h3>Global Settings</h3>
                <span>These settings affect all users of <i>
                        <?php echo $siteShortTitle ?>
                    </i>!<br>
                    Be careful with the changes you perform here.</span>
            </div><br>

            

            <?php if ($settingsId === '0') { ?>
                <!-- First time setup -->
                <form method='POST' action='?p=_storeGlobalSettings' enctype="multipart/form-data">
                    <h4 class='settingsSubHeading'>Site title</h4>
                    <span class="settingDescription">This is the title that is shown to the search-engines, and in the browsers
                        title bar.</span>
                    <div class='form-group'><label for='siteTitle_en'>Site title (EN)</label><input type='text'
                            name='siteTitle_en' id='siteTitle_en' class='form-control'></div>
                    <div class='form-group'><label for='siteTitle_no'>Site title (NO)</label><input type='text'
                            name='siteTitle_no' id='siteTitle_no' class='form-control'></div>
                    <div class='form-group'><label for='siteTitle_de'>Site title (DE)</label><input type='text'
                            name='siteTitle_de' id='siteTitle_de' class='form-control'></div>
                    <div class='form-group'><label for='siteTitle_es'>Site title (ES)</label><input type='text'
                            name='siteTitle_es' id='siteTitle_es' class='form-control'></div>
                    <div class='form-group'><label for='siteTitle_fr'>Site title (FR)</label><input type='text'
                            name='siteTitle_fr' id='siteTitle_fr' class='form-control'></div>
                    <h4 class='settingsSubHeading'>Site title - short</h4>
                    <span class="settingDescription">This is the title that is shown on the top of the page.</span>
                    <div class='form-group'><label for='siteShortTitle_en'>Site heading title (EN)</label><input
                            type='text' name='siteShortTitle_en' id='siteShortTitle_en' class='form-control'></div>
                    <div class='form-group'><label for='siteShortTitle_no'>Site heading title (NO)</label><input
                            type='text' name='siteShortTitle_no' id='siteShortTitle_no' class='form-control'></div>
                    <div class='form-group'><label for='siteShortTitle_de'>Site heading title (DE)</label><input
                            type='text' name='siteShortTitle_de' id='siteShortTitle_de' class='form-control'></div>
                    <div class='form-group'><label for='siteShortTitle_es'>Site heading title (ES)</label><input
                            type='text' name='siteShortTitle_es' id='siteShortTitle_es' class='form-control'></div>
                    <div class='form-group'><label for='siteShortTitle_fr'>Site heading title (FR)</label><input
                            type='text' name='siteShortTitle_fr' id='siteShortTitle_fr' class='form-control'></div>
                    <h4 class='settingsSubHeading'>Site description</h4>
                    <span class="settingDescription">This is the description that is shown to the search-engines.</span>
                    <div class='form-group'><label for='siteDescription_en' class='labelClass'>Site description (EN)</label><textarea
                            name='siteDescription_en' id='siteDescription_en' rows='5' class='form-control'></textarea>
                    </div>
                    <div class='form-group'><label for='siteDescription_no' class='labelClass'>Site description (NO)</label><textarea
                            name='siteDescription_no' id='siteDescription_no' rows='5' class='form-control'></textarea>
                    </div>
                    <div class='form-group'><label for='siteDescription_de' class='labelClass'>Site description (DE)</label><textarea
                            name='siteDescription_de' id='siteDescription_de' rows='5' class='form-control'></textarea>
                    </div>
                    <div class='form-group'><label for='siteDescription_es' class='labelClass'>Site description (ES)</label><textarea
                            name='siteDescription_es' id='siteDescription_es' rows='5' class='form-control'></textarea>
                    </div>
                    <div class='form-group'><label for='siteDescription_fr' class='labelClass'>Site description (FR)</label><textarea
                            name='siteDescription_fr' id='siteDescription_fr' rows='5' class='form-control'></textarea>
                    </div>
                    <h4 class='settingsSubHeading'>Toggle welcome text</h4>
                    <span class="settingDescription">Toggle to show or hide welcome text.</span>
                    <div class='form-group'><label for='siteWelcomeTextToggle'>Toggle welcome text</label>
                        <select class='form-control' id='siteWelcomeTextToggle' name='siteWelcomeTextToggle'>
                            <option value='0'>OFF</option> <!-- Allow sponsors OFF -->
                            <option value='1'>ON</option> <!-- Allow sponsors ON -->
                        </select>
                    </div>
                    <h4 class='settingsSubHeading'>Welcome textbox - Title</h4>
                    <span class="settingDescription">This is the title of the textbox that appears when the page is
                        loaded.</span>
                    <div class='form-group'><label for='siteWelcomeTextTitle_en'>Welcome Title (EN)</label><input
                            type='text' name='siteWelcomeTextTitle_en' id='siteWelcomeTextTitle_en' class='form-control'></div>
                    <div class='form-group'><label for='siteWelcomeTextTitle_no'>Welcome Title (NO)</label><input
                            type='text' name='siteWelcomeTextTitle_no' id='siteWelcomeTextTitle_no' class='form-control'></div>
                    <div class='form-group'><label for='siteWelcomeTextTitle_de'>Welcome Title (DE)</label><input
                            type='text' name='siteWelcomeTextTitle_de' id='siteWelcomeTextTitle_de' class='form-control'></div>
                    <div class='form-group'><label for='siteWelcomeTextTitle_es'>Welcome Title (ES)</label><input
                            type='text' name='siteWelcomeTextTitle_es' id='siteWelcomeTextTitle_es' class='form-control'></div>
                    <div class='form-group'><label for='siteWelcomeTextTitle_fr'>Welcome Title (FR)</label><input
                            type='text' name='siteWelcomeTextTitle_fr' id='siteWelcomeTextTitle_fr' class='form-control'></div>
                    <h4 class='settingsSubHeading'>Welcome textbox - content</h4>
                    <span class="settingDescription">This is the content of the textbox that appears when the page is
                        loaded.</span>
                    <div class='form-group'><label for='siteWelcomeText_en'>Welcome text (EN)</label><textarea
                            id="siteWelcomeText_en" name="siteWelcomeText_en" rows="5"
                            class='form-control'>Enter a welcome text.</textarea></div>
                    <div class='form-group'><label for='siteWelcomeText_no''>Welcome text (NO)</label><textarea
                            id="siteWelcomeText_no" name="siteWelcomeText_no" rows="5"
                            class='form-control'>Enter a welcome text.</textarea></div>
                    <div class='form-group'><label for='siteWelcomeText_de'>Welcome text (DE)</label><textarea
                            id="siteWelcomeText_de" name="siteWelcomeText_de" rows="5"
                            class='form-control'>Enter a welcome text.</textarea></div>
                    <div class='form-group'><label for='siteWelcomeText_es'>Welcome text (ES)</label><textarea
                            id="siteWelcomeText_es" name="siteWelcomeText_es" rows="5"
                            class='form-control'>Enter a welcome text.</textarea></div>
                    <div class='form-group'><label for='siteWelcomeText_fr'>Welcome text (FR)</label><textarea
                            id="siteWelcomeText_fr" name="siteWelcomeText_fr" rows="5"
                            class='form-control'>Enter a welcome text.</textarea></div><br>

                    <h4 class='settingsSubHeading'>Ratufa script</h4>
                    <span class="settingDescription"><br>Create an account and prepare a form at <a href='https://ratufa.io' target='_blank' title='Go to ratufa.io'>ratufa.io</a>.<br>Paste the code for your Ratufa contact form. It should look something like like this: <br>
                    <code>&lt;script id="ratufa_loader" src="https://www.ratufa.io/c/ld.js?i=contact_form&f=ab123jf4&n=n1.ratufa.io"&gt;&lt;/script&gt;</code><br><br>
                    Add <strong>?i=contact_form</strong> to your code.<br><br></span>
                    <div class='form-group'><label for='siteRatufaScript'>Ratufa.io Script</label><textarea
                            id='siteRatufaScript' name='siteRatufaScript' rows='5'
                            class='form-control'></textarea></div>
                            <br>

                                <h4 class='settingsSubHeading'>Sponsors</h4>
                                <span class="settingDescription">Toggle to show or hide sponsor information and links.</span>
                                <div class='form-group'><label for='siteAllowSponsors'>Allow sponsors</label>
                                    <select class='form-control' id='siteAllowSponsors' name='siteAllowSponsors'>
                                        <option value='0'>OFF</option> <!-- Allow sponsors OFF -->
                                        <option value='1'>ON</option> <!-- Allow sponsors ON -->
                                    </select>
                                </div>
                                <h4 class='settingsSubHeading'>Buy me a coffee</h4>
                                <span class="settingDescription">Toggle to show or hide "Buy me a coffee" information and links.</span>
                                <div class='form-group'><label for='siteAllowCoffee'>Allow "Buy me a coffee"</label>
                                    <select class='form-control' id='siteAllowCoffee' name='siteAllowCoffee'>
                                        <option value='0'>OFF</option> <!-- Allow coffee link OFF -->
                                        <option value='1'>ON</option> <!-- Allow coffee link ON -->
                                    </select>
                                </div>
                                <h4 class='settingsSubHeading'>Buy me a coffee - handler</h4>
                                <span class="settingDescription">Enter your "Buy me a coffee" handle (the finel part of your "buy me a
                                    coffee" link). Get one at <a href="https://buymeacoffee.com" title="Buy me a coffee"
                                        target="_blank">buymeacoffee.com</a>.</span>
                                <div class='form-group'><label for='siteCoffeeLink'>Buymeacoffee handle</label><input
                                        type='text' name='siteCoffeeLink' id='siteCoffeeLink' class='form-control'></div><br>

                                <h4 class='settingsSubHeading'>Cookies text</h4>
                                <span class="settingDescription">The text that appears in when you click the "Cookies" link in the page
                                    footer.</span>
                                <div class='form-group'><label for='siteCopyrightText_en'>Cookies text (EN)</label><textarea
                                        name='siteCopyrightText_en' id='siteCopyrightText_en' rows='5'
                                        class='form-control'></textarea></div>
                                <div class='form-group'><label for='siteCopyrightText_no'>Cookies text (NO)</label><textarea
                                        name='siteCopyrightText_no' id='siteCopyrightText_no' rows='5'
                                        class='form-control'></textarea></div>
                                <div class='form-group'><label for='siteCopyrightText_de'>Cookies text (DE)</label><textarea
                                        name='siteCopyrightText_de' id='siteCopyrightText_de' rows='5'
                                        class='form-control'></textarea></div>
                                <div class='form-group'><label for='siteCopyrightText_es'>Cookies text (ES)</label><textarea
                                        name='siteCopyrightText_es' id='siteCopyrightText_es' rows='5'
                                        class='form-control'></textarea></div>
                                <div class='form-group'><label for='siteCopyrightText_fr'>Cookies text (FR)</label><textarea
                                        name='siteCopyrightText_fr' id='siteCopyrightText_fr' rows='5'
                                        class='form-control'></textarea></div>
                                <h4 class='settingsSubHeading'>Copyright name</h4>
                                <span class="settingDescription">Who has the copyrigfht of your content? Your name, site name, or
                                    organization name.</span>
                                <div class='form-group'><label for='siteCopyrightName'>Copyright name</label><input
                                        type='text' name='siteCopyrightName' id='siteCopyrightName' class='form-control'></div>
                                <h4 class='settingsSubHeading'>Contact infomration</h4>
                                <span class="settingDescription">An email address that can be used to contact you.</span>
                                <div class='form-group'><label for='siteContactEmail'>Contact email</label><input type='text'
                                        name='siteContactEmail' id='siteContactEmail' class='form-control'></div><br>

                    
                                <br>
                                <button type="submit" name="submit_form" class="btn btn-primary">Save changes</button>
                            </form>

            <?php } else { ?>
                <!-- Edit settings -->
                <form method='POST' action='?p=_updateGlobalSettings' enctype="multipart/form-data">
                    <input type='hidden' name='id' id='id' class='inputClass readonly' value='<?php echo $settingsId ?>'
                        readonly>
                    <h4 class='settingsSubHeading'>Site title</h4>
                    <span class="settingDescription">This is the title that is shown to the search-engines, and in the browsers
                        title bar.</span>
                    <div class='form-group'><label for='siteTitle_en'>Site title (EN)</label><input type='text'
                            name='siteTitle_en' id='siteTitle_en' class='form-control' value='<?php echo $siteTitle ?>'></div>
                    <div class='form-group'><label for='siteTitle_no'>Site title (NO)</label><input type='text'
                            name='siteTitle_no' id='siteTitle_no' class='form-control' value='<?php echo $siteTitle_no ?>'></div>
                    <div class='form-group'><label for='siteTitle_de'>Site title (DE)</label><input type='text'
                            name='siteTitle_de' id='siteTitle_de' class='form-control' value='<?php echo $siteTitle_de ?>'></div>
                    <div class='form-group'><label for='siteTitle_es'>Site title (ES)</label><input type='text'
                            name='siteTitle_es' id='siteTitle_es' class='form-control' value='<?php echo $siteTitle_es ?>'></div>
                    <div class='form-group'><label for='siteTitle_fr'>Site title (FR)</label><input type='text'
                            name='siteTitle_fr' id='siteTitle_fr' class='form-control' value='<?php echo $siteTitle_fr ?>'></div>
                    <h4 class='settingsSubHeading'>Site title - short</h4>
                    <span class="settingDescription">This is the title that is shown on the top of the page.</span>
                    <div class='form-group'><label for='siteShortTitle_en'>Site heading title (EN)</label><input
                            type='text' name='siteShortTitle_en' id='siteShortTitle_en' class='form-control'
                            value='<?php echo $siteShortTitle ?>'></div>
                    <div class='form-group'><label for='siteShortTitle_no'>Site heading title (NO)</label><input
                            type='text' name='siteShortTitle_no' id='siteShortTitle_no' class='form-control'
                            value='<?php echo $siteShortTitle_no ?>'></div>
                    <div class='form-group'><label for='siteShortTitle_de'>Site heading title (DE)</label><input
                            type='text' name='siteShortTitle_de' id='siteShortTitle_de' class='form-control'
                            value='<?php echo $siteShortTitle_de ?>'></div>
                    <div class='form-group'><label for='siteShortTitle_es'>Site heading title (ES)</label><input
                            type='text' name='siteShortTitle_es' id='siteShortTitle_es' class='form-control'
                            value='<?php echo $siteShortTitle_es ?>'></div>
                    <div class='form-group'><label for='siteShortTitle_fr'>Site heading title (FR)</label><input
                            type='text' name='siteShortTitle_fr' id='siteShortTitle_fr' class='form-control'
                            value='<?php echo $siteShortTitle_fr ?>'></div>
                    <h4 class='settingsSubHeading'>Site description</h4>
                    <span class="settingDescription">This is the description that is shown to the search-engines.</span>
                    <div class='form-group'><label for='siteDescription_en'>Site description (EN)</label><textarea
                            name='siteDescription_en' id='siteDescription_en' rows='5'
                            class='form-control'><?php echo $siteDescription ?></textarea></div>
                    <div class='form-group'><label for='siteDescription_no'>Site description (NO)</label><textarea
                            name='siteDescription_no' id='siteDescription_no' rows='5'
                            class='form-control'><?php echo $siteDescription_no ?></textarea></div>
                    <div class='form-group'><label for='siteDescription_de'>Site description (DE)</label><textarea
                            name='siteDescription_de' id='siteDescription_de' rows='5'
                            class='form-control'><?php echo $siteDescription_de ?></textarea></div>
                    <div class='form-group'><label for='siteDescription_es'>Site description (ES)</label><textarea
                            name='siteDescription_es' id='siteDescription_es' rows='5'
                            class='form-control'><?php echo $siteDescription_es ?></textarea></div>
                    <div class='form-group'><label for='siteDescription_fr'>Site description (FR)</label><textarea
                            name='siteDescription_fr' id='siteDescription_fr' rows='5'
                            class='form-control'><?php echo $siteDescription_fr ?></textarea></div>
                    <h4 class='settingsSubHeading'>Toggle welcome text</h4>
                    <span class="settingDescription">Toggle to show or hide welcome text.</span>
                    <div class='form-group'><label for='siteWelcomeTextToggle'>Toggle welcome text</label>
                        <select class='form-control' id='siteWelcomeTextToggle' name='siteWelcomeTextToggle'>
                            <option value='0' <?php if ($siteWelcomeTextToggle == '0')
                                echo " selected='selected'"; ?>>OFF
                            </option> <!-- Welcome text OFF -->
                            <option value='1' <?php if ($siteWelcomeTextToggle == '1')
                                echo " selected='selected'"; ?>>ON</option>
                            <!-- Welcome text On -->
                        </select>
                    </div>
                    <h4 class='settingsSubHeading'>Welcome textbox - Title</h4>
                    <span class="settingDescription">This is the title of the textbox that appears when the page is
                        loaded.</span>
                    <div class='form-group'><label for='siteWelcomeTextTitle_en'>Welcome Title (EN)</label><input
                            type='text' name='siteWelcomeTextTitle_en' id='siteWelcomeTextTitle_en' class='form-control'
                            value='<?php echo $siteWelcomeTextTitle ?>'></div>
                    <div class='form-group'><label for='siteWelcomeTextTitle_no'>Welcome Title (NO)</label><input
                            type='text' name='siteWelcomeTextTitle_no' id='siteWelcomeTextTitle_no' class='form-control'
                            value='<?php echo $siteWelcomeTextTitle_no ?>'></div>
                    <div class='form-group'><label for='siteWelcomeTextTitle_de'>Welcome Title (DE)</label><input
                            type='text' name='siteWelcomeTextTitle_de' id='siteWelcomeTextTitle_de' class='form-control'
                            value='<?php echo $siteWelcomeTextTitle_de ?>'></div>
                    <div class='form-group'><label for='siteWelcomeTextTitle_es'>Welcome Title (ES)</label><input
                            type='text' name='siteWelcomeTextTitle_es' id='siteWelcomeTextTitle_es' class='form-control'
                            value='<?php echo $siteWelcomeTextTitle_es ?>'></div>
                    <div class='form-group'><label for='siteWelcomeTextTitle_fr'>Welcome Title (FR)</label><input
                            type='text' name='siteWelcomeTextTitle_fr' id='siteWelcomeTextTitle_fr' class='form-control'
                            value='<?php echo $siteWelcomeTextTitle_fr ?>'></div>
                    <h4 class='settingsSubHeading'>Welcome textbox - content</h4>
                    <span class="settingDescription">This is the content of the textbox that appears when the page is
                        loaded.</span>
                    <div class='form-group'><label for='siteWelcomeText_en'>Welcome text (EN)</label><textarea
                            id="siteWelcomeText_en" name="siteWelcomeText_en" rows="5"
                            class='form-control'><?php echo $siteWelcomeText ?></textarea></div>
                    <div class='form-group'><label for='siteWelcomeText_no'>Welcome text (NO)</label><textarea
                            id="siteWelcomeText_no" name="siteWelcomeText_no" rows="5"
                            class='form-control'><?php echo $siteWelcomeText_no ?></textarea></div>
                    <div class='form-group'><label for='siteWelcomeText_de'>Welcome text (DE)</label><textarea
                            id="siteWelcomeText_de" name="siteWelcomeText_de" rows="5"
                            class='form-control'><?php echo $siteWelcomeText_de ?></textarea></div>
                    <div class='form-group'><label for='siteWelcomeText_es'>Welcome text (ES)</label><textarea
                            id="siteWelcomeText_es" name="siteWelcomeText_es" rows="5"
                            class='form-control'><?php echo $siteWelcomeText_es ?></textarea></div>
                    <div class='form-group'><label for='siteWelcomeText_fr'>Welcome text (FR)</label><textarea
                            id="siteWelcomeText_fr" name="siteWelcomeText_fr" rows="5"
                            class='form-control'><?php echo $siteWelcomeText_fr ?></textarea></div><br>
                    
                    <h4 class='settingsSubHeading'>Ratufa script</h4>
                    <span class="settingDescription"><br>Create an account and prepare a form at <a href='https://ratufa.io' target='_blank' title='Go to ratufa.io'>ratufa.io</a>.<br>Paste the code for your Ratufa contact form. It should look something like like this: <br>
                    <code>&lt;script id="ratufa_loader" src="https://www.ratufa.io/c/ld.js?i=contact_form&f=ab123jf4&n=n1.ratufa.io"&gt;&lt;/script&gt;</code><br><br>
                    Add <strong>?i=contact_form</strong> to your code.<br><br></span>
                    <div class='form-group'><label for='siteRatufaScript'>Ratufa.io Script</label><textarea
                            id='siteRatufaScript' name='siteRatufaScript' rows='5'
                            class='form-control'><?php echo $siteRatufaScript ?></textarea></div><br>

                    <h4 class='settingsSubHeading'>Sponsors</h4>
                    <span class="settingDescription">Toggle to show or hide sponsor information and links.</span>
                    <div class='form-group'><label for='siteAllowSponsors'>Allow sponsors</label>
                        <select class='form-control' id='siteAllowSponsors' name='siteAllowSponsors'>
                            <option value='0' <?php if ($siteAllowSponsors == '0')
                                echo " selected='selected'"; ?>>OFF</option>
                            <!-- Vedlikeholdsmodus AV -->
                            <option value='1' <?php if ($siteAllowSponsors == '1')
                                echo " selected='selected'"; ?>>ON</option>
                            <!-- Vedlikeholdsmodus PÅ -->
                        </select>
                    </div>
                    <h4 class='settingsSubHeading'>Buy me a coffee</h4>
                    <span class="settingDescription">Toggle to show or hide "Buy me a coffee" information and links.</span>
                    <div class='form-group'><label for='siteAllowCoffee'>Allow "Buy me a coffee"</label>
                        <select class='form-control' id='siteAllowCoffee' name='siteAllowCoffee'>
                            <option value='0' <?php if ($siteAllowCoffee == '0')
                                echo " selected='selected'"; ?>>OFF</option>
                            <!-- Vedlikeholdsmodus AV -->
                            <option value='1' <?php if ($siteAllowCoffee == '1')
                                echo " selected='selected'"; ?>>ON</option>
                            <!-- Vedlikeholdsmodus PÅ -->
                        </select>
                    </div>
                    <h4 class='settingsSubHeading'>Buy me a coffee - handler</h4>
                    <span class="settingDescription">Enter your "Buy me a coffee" handle (the finel part of your "buy me a
                        coffee" link). Get one at <a href="https://buymeacoffee.com" title="Buy me a coffee"
                            target="_blank">buymeacoffee.com</a>.</span>
                    <div class='form-group'><label for='siteCoffeeLink'>Buymeacoffee link</label><input
                            type='text' name='siteCoffeeLink' id='siteCoffeeLink' class='form-control'
                            value='<?php echo $siteCoffeeLink ?>'></div><br>

                    <h4 class='settingsSubHeading'>Cookies text</h4>
                    <span class="settingDescription">The text that appears in when you click the "Cookies" link in the page
                        footer.</span>
                    <div class='form-group'><label for='siteCopyrightText_en'>Cookies text (EN)</label><textarea
                            name='siteCopyrightText_en' id='siteCopyrightText_en' rows='5'
                            class='form-control'><?php echo $siteCopyrightText ?></textarea></div>
                    <div class='form-group'><label for='siteCopyrightText_no'>Cookies text (NO)</label><textarea
                            name='siteCopyrightText_no' id='siteCopyrightText_no' rows='5'
                            class='form-control'><?php echo $siteCopyrightText_no ?></textarea></div>
                    <div class='form-group'><label for='siteCopyrightText_de'>Cookies text (DE)</label><textarea
                            name='siteCopyrightText_de' id='siteCopyrightText_de' rows='5'
                            class='form-control'><?php echo $siteCopyrightText_de ?></textarea></div>
                    <div class='form-group'><label for='siteCopyrightText_es'>Cookies text (ES)</label><textarea
                            name='siteCopyrightText_es' id='siteCopyrightText_es' rows='5'
                            class='form-control'><?php echo $siteCopyrightText_es ?></textarea></div>
                    <div class='form-group'><label for='siteCopyrightText_fr'>Cookies text (FR)</label><textarea
                            name='siteCopyrightText_fr' id='siteCopyrightText_fr' rows='5'
                            class='form-control'><?php echo $siteCopyrightText_fr ?></textarea></div>
                    <h4 class='settingsSubHeading'>Copyright name</h4>
                    <span class="settingDescription">Who has the copyrigfht of your content? Your name, site name, or
                        organization name.</span>
                    <div class='form-group'><label for='siteCopyrightName' class='labelClass'>Copyright name</label><input
                            type='text' name='siteCopyrightName' id='siteCopyrightName' class='form-control'
                            value='<?php echo $siteCopyrightName ?>'></div>
                    <h4 class='settingsSubHeading'>Contact infomration</h4>
                    <span class="settingDescription">An email address that can be used to contact you.</span>
                    <div class='form-group'><label for='siteContactEmail' class='form-control'>Contact email</label><input type='text'
                            name='siteContactEmail' id='siteContactEmail' class='form-control'
                            value='<?php echo $siteContactEmail ?>'></div><br>

                    <button type="submit" name="submit_form" class="btn btn-primary">Save changes</button>
                </form><br><br>
                

                      <script>
                          tinymce.init({
                                selector: '#siteWelcomeText_en',
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
                                selector: '#siteWelcomeText_no',
                                toolbar: 'undo redo bold italic alignleft aligncenter alignright code',
                                plugins: 'code',
                                height: 200,
                                statusbar: false,
                                menubar: false,
                                content_style: "body { font-size: 10pt;}",
                                forced_root_block : "",
                                });
                        tinymce.init({
                                selector: '#siteWelcomeText_de',
                                toolbar: 'undo redo bold italic alignleft aligncenter alignright code',
                                plugins: 'code',
                                height: 200,
                                statusbar: false,
                                menubar: false,
                                content_style: "body { font-size: 10pt;}",
                                forced_root_block : "",
                                });
                        tinymce.init({
                                selector: '#siteWelcomeText_es',
                                toolbar: 'undo redo bold italic alignleft aligncenter alignright  code',
                                plugins: 'code',
                                height: 200,
                                statusbar: false,
                                menubar: false,
                                content_style: "body { font-size: 10pt;}",
                                forced_root_block : "",
                                });
                        tinymce.init({
                                selector: '#siteWelcomeText_fr',
                                toolbar: 'undo redo bold italic alignleft aligncenter alignright code',
                                plugins: 'code',
                                height: 200,
                                statusbar: false,
                                menubar: false,
                                content_style: "body { font-size: 10pt;}",
                                forced_root_block : "",
                                });
                        tinymce.init({
                                selector: '#siteCopyrightText_en',
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
                                selector: '#siteCopyrightText_no',
                                toolbar: 'undo redo bold italic alignleft aligncenter alignright code',
                                plugins: 'code',
                                height: 200,
                                statusbar: false,
                                menubar: false,
                                content_style: "body { font-size: 10pt;}",
                                forced_root_block : "",
                                });
                        tinymce.init({
                                selector: '#siteCopyrightText_de',
                                toolbar: 'undo redo bold italic alignleft aligncenter alignright code',
                                plugins: 'code',
                                height: 200,
                                statusbar: false,
                                menubar: false,
                                content_style: "body { font-size: 10pt;}",
                                forced_root_block : "",
                                });
                        tinymce.init({
                                selector: '#siteCopyrightText_es',
                                toolbar: 'undo redo bold italic alignleft aligncenter alignright  code',
                                plugins: 'code',
                                height: 200,
                                statusbar: false,
                                menubar: false,
                                content_style: "body { font-size: 10pt;}",
                                forced_root_block : "",
                                });
                        tinymce.init({
                                selector: '#siteCopyrightText_fr',
                                toolbar: 'undo redo bold italic alignleft aligncenter alignright code',
                                plugins: 'code',
                                height: 200,
                                statusbar: false,
                                menubar: false,
                                content_style: "body { font-size: 10pt;}",
                                forced_root_block : "",
                                });
                     </script>


                    <?php } ?><br>

        
<?php }; ?>
