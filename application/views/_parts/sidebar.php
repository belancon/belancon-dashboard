<div class="sidebar" data-color="green" data-image="<?php echo base_url();?>assets/admin/themes/light-bootstrap/img/sidebar-2.jpg">
<!--
Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="http://www.belancon.com" class="simple-text">
                Belancon
            </a>
        </div>
        <ul class="nav">
            <li <?php echo menu_active('dashboard');?>>
                <a href="<?php echo site_url();?>">
                    <i class="pe-7s-graph"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <!-- <li <?php echo menu_active('icon');?>>
                <a href="<?php echo site_url('icon');?>">
                    <i class="pe-7s-like"></i>
                    <p>Icon</p>
                </a>
            </li> -->
            <li <?php echo menu_active('user');?>>
                <a href="<?php echo site_url('user');?>">
                    <i class="pe-7s-user"></i>
                    <p>User</p>
                </a>
            </li>            
        </ul>
    </div>
</div>