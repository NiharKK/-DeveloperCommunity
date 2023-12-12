<div class="scrollbar-sidebar">
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            <li class="app-sidebar__heading">Menu</li>
            <li class="mm-active">
                <a href="<?php echo site_url('admin/Demo')?>">
                    <i class="metismenu-icon pe-7s-rocket"></i>
                    <img class="profphto" src="<?php echo base_url('resources/shared/images/' . $_SESSION['propic']) ?>" alt="" style="width: 34px; height: 34px; overflow: hidden; border-radius: 50%; float: left; margin-right: 11px;">
                    <?php echo $_SESSION['aname']; ?>
                </a>
                <ul>
                    <li>
                        <a href="<?php echo site_url('admin/Profile'); ?>">
                            <i class="metismenu-icon"></i>Profile
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/Profile/loadEditProfile/'.$_SESSION['aid']);?>">
                            <i class="metismenu-icon">
                            </i>Edit Profile
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="<?php echo site_url('admin/User') ?>">
                    <i class="metismenu-icon pe-7s-browser"></i>User
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('admin/Category') ?>">
                    <i class="metismenu-icon pe-7s-plugin"></i>Categories
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('admin/Community') ?>">
                    <i class="metismenu-icon pe-7s-plugin"></i>Community
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('admin/MeetUp') ?>">
                    <i class="metismenu-icon pe-7s-plugin"></i>Meet Up
                </a>
            </li>
            <!-- <li>
                <a href="<?php echo site_url('admin/Article') ?>">
                    <i class="metismenu-icon pe-7s-plugin"></i>Article
                </a>
            </li> -->
            <li>
                <a href="<?php echo site_url('admin/State') ?>">
                    <i class="metismenu-icon pe-7s-plugin"></i>State
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('admin/City') ?>">
                    <i class="metismenu-icon pe-7s-plugin"></i>City
                </a>
            </li>
        </ul>
    </div>
</div>