<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Ubah Password</h4>
                    </div>
                    <div class="content">
                        <?php echo form_open('change-password');?>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Password Lama</label>
                                        <input type="password" class="form-control" placeholder="Password Lama" name="old">
                                        <span class="text-danger"><?php echo form_error('old'); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Password Baru</label>
                                        <input type="password" class="form-control" placeholder="Password Baru" name="new">
                                        <span class="text-danger"><?php echo form_error('new'); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Konfirmasi Password Baru</label>
                                        <input type="password" class="form-control" placeholder="Konfirmasi Password Baru" name="new_confirm">
                                        <span class="text-danger"><?php echo form_error('new_confirm'); ?></span>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info btn-fill pull-right">Ubah Password</button>
                            <div class="clearfix"></div>
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>