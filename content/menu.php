<!-- Navigation bar -->
<header class="menuHeader">
    <?php include "./content/welcome.php"; ?>



    <!-- Mobile menu -->
    <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <ul class="mobile-menu">
            <!-- li class="menuItem" id="brand"><a href="index.php?p=home">&nbsp;< ?=_mnu_home ?>&nbsp;</a></li -->
	        <li class="menuItem" <?php if($isAdmin != 'Y') echo 'style="display:none"'; ?>><a href="?p=_addLocation">&nbsp;<?= _mnu_newLocation ?>&nbsp;<span class="menuIcon pull-left hidden-xs showopacity glyphicon glyphicon-plus"></span></a></li>
            <!-- li class="menuItem"><a href="#" onclick="toggleAddressList(); return false;" id="locationListLink">&nbsp;< ?= _mnu_addressList ?>&nbsp;<span class="menuIcon pull-left hidden-xs showopacity glyphicon glyphicon-map-marker"></span></a></li -->
            <li><a href="https://www.airbnb.com/h/randaberg" target="_blank">&nbsp;<?= _mnu_bookAirbnb ?>&nbsp;<span class="menuIcon pull-left hidden-xs showopacity glyphicon glyphicon-briefcase"></span></a></li>
            <?php 
                if(isset($_SESSION['username']))
                    echo '<li ><a href="../housemanual/House-manual-web.pdf" download target="_blank">'._mnu_houseManual.'&nbsp;<span class="menuIcon pull-left hidden-xs showopacity glyphicon glyphicon-book"></span></a></li>';
                else
                    echo '';  
            ?>
            <li class="menuItem" <?php if($isAdmin != 'Y') echo 'style="display:none"'; ?>><a href="adm.php?p=settings">&nbsp;<?= _mnu_settings ?>&nbsp;<span class="menuIcon pull-left hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>    
            <li style="<?php echo $hideSponsorLink ?>"><a href="?p=sponsors">&nbsp;<?= _mnu_sponsors ?>&nbsp;<span class="menuIcon pull-left hidden-xs showopacity glyphicon glyphicon-star-empty"></span></a></li>
            <li><a href="/blog/">&nbsp;<?= _mnu_travelBlog ?>&nbsp;<span class="menuIcon pull-left hidden-xs showopacity glyphicon glyphicon-plane"></span></a></li>
            <?php 
                if(isset($_SESSION['username']))
                    echo '<li class="menuItem" id="logout"><a href="logout.php">&nbsp;'._mnu_signOut.'&nbsp;<span class="menuIcon pull-left hidden-xs showopacity glyphicon glyphicon-log-out"></span></a></li>';
                else
                    echo '<!-- li class="menuItem" id="login"><a href="login.php">&nbsp;'._mnu_signIn.'&nbsp;<span class="menuIcon pull-left hidden-xs showopacity glyphicon glyphicon-log-in"></span></a></li -->
                          <!-- li class="menuItem" id="signup"><a href="register.php">&nbsp;'._mnu_register.'&nbsp;<span class="menuIcon pull-left hidden-xs showopacity glyphicon glyphicon-plus"></span></a></li -->';
            ?>
        </ul>
    </div>


    <!-- Full menu -->
    <nav class="nav">
        <ul class="menu">
            <!-- li id="brand"><a href="index.php?p=home">< ?= _mnu_home ?></a></li -->
			<li <?php if($isAdmin != 'Y') echo 'style="display:none"'; ?>><a href="?p=_addLocation"><?= _mnu_newLocation ?>&nbsp;<span class="menuIcon pull-left hidden-xs showopacity glyphicon glyphicon-plus"></span></a></li>
            <!-- li><a href="#" onclick="toggleAddressList(); return false;" id="locationListLink">< ?= _mnu_addressList ?>&nbsp;<span class="menuIcon pull-left hidden-xs showopacity glyphicon glyphicon-map-marker"></span></a></li -->
            <li><a href="https://www.airbnb.com/h/randaberg" target="_blank"><?= _mnu_bookAirbnb ?>&nbsp;<span class="menuIcon pull-left hidden-xs showopacity glyphicon glyphicon-briefcase"></span></a></li>  
            <?php 
    
                if(isset($_SESSION['username']))
                    echo '<li ><a href="../housemanual/House-manual-web.pdf" target="_blank">'._mnu_houseManual.'&nbsp;<span class="menuIcon pull-left hidden-xs showopacity glyphicon glyphicon-book"></span></a></li>';
                else
                    echo '';
    
            ?>
            <li <?php if($isAdmin != 'Y') echo 'style="display:none"'; ?>><a href="adm.php?p=settings"><?= _mnu_settings ?>&nbsp;<span class="menuIcon pull-left hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
            <li style="<?php echo $hideSponsorLink ?>"><a href="?p=sponsors"><?= _mnu_sponsors ?>&nbsp;<span class="pull-left hidden-xs showopacity glyphicon glyphicon-star-empty"></span></a></li>
            <li><a href="/blog/"><?= _mnu_travelBlog ?>&nbsp;<span class="menuIcon pull-left hidden-xs showopacity glyphicon glyphicon-plane"></span></a></li>
            <?php
                if(isset($_SESSION['username']))
                    echo '<li id="logout"><a href="logout.php">'._mnu_signOut.'&nbsp;<span class="menuIcon pull-left hidden-xs showopacity glyphicon glyphicon-log-out"></span></a></li>';
                else
                    echo '<!-- li id="login"><a href="login.php">'._mnu_signIn.'&nbsp;<span class="menuIcon pull-left hidden-xs showopacity glyphicon glyphicon-log-in"></span></a></li -->
                          <!-- li id="signup"><a href="register.php">'._mnu_register.'&nbsp;<span class="menuIcon pull-left hidden-xs showopacity glyphicon glyphicon-plus"></span></a></li -->';    
            ?>
        </ul>
    </nav>

</header>

<script src="./js/menu.js"></script>
