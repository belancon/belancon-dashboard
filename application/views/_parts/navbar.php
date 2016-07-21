<nav class="navbar navbar-default navbar-fixed">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <?php
                    if(isset($texts['header'])) {
                        echo $texts['header'];
                    }
                ?>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left">                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-globe"></i>
                        <b class="caret"></b>
                        <span class="notification">2</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Notification 1</a></li>
                        <li><a href="#">Notification 2</a></li>                      
                    </ul>
                </li>                
                </ul>
                <ul class="nav navbar-nav navbar-right">                
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="pe-7s-user"></i> <?php echo user_login('username');?>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('change-profile');?>">Ubah Profil</a></li>
                            <li><a href="<?php echo site_url('change-password');?>">Ubah Password</a></li>       
                            <li class="divider"></li>
                            <li><a href="<?php echo site_url('user/logout');?>">Keluar</a></li>
                        </ul>
                    </li>                    
                </ul>
        </div>
    </div>
</nav>