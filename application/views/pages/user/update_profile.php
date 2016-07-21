<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Ubah Profile</h4>
                    </div>
                    <div class="content">
                        <?php echo form_open('change-profile');?>
                            <div class="row">                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" placeholder="Username" value="<?php echo user_login('username');?>" disabled="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" placeholder="Email" value="<?php echo user_login('email');?>" disabled="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Depan</label>
                                        <input type="text" class="form-control" placeholder="Nama Depan" value="<?php echo user_login('first_name');?>" name="firstname">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Belakang</label>
                                        <input type="text" class="form-control" placeholder="Nama Belakang" value="<?php echo user_login('last_name');?>" name="lastname">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>No.Telp/HP</label>
                                        <input type="text" class="form-control" placeholder="No.Telp/HP" value="<?php echo user_login('phone');?>" name="phone">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info btn-fill pull-right">Ubah Profile</button>
                            <div class="clearfix"></div>
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>