<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Data Master</h4>
                    </div>                   
                    <?php echo form_open('user/add', array('class'=> 'form-horizontal'));?>
                    <div class="content">
                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label">UserName <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo set_value('username');?>">
                                    <span class="text-danger"><?php echo form_error('username'); ?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo set_value('email');?>">
                                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstname" class="col-sm-2 control-label">Nama Depan <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="firstname" placeholder="Nama Depan" value="<?php echo set_value('firstname');?>">
                                    <span class="text-danger"><?php echo form_error('firstname'); ?></span>
                                </div>
                            </div>  
                            <div class="form-group">
                                <label for="lastname" class="col-sm-2 control-label">Nama Belakang</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="lastname" placeholder="Nama Depan" value="<?php echo set_value('lastname');?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="col-sm-2 control-label">No.Telp /HP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="phone" placeholder="No.Telp/HP" value="<?php echo set_value('phone');?>">
                                </div>
                            </div>                          
                            <div class="form-group">
                                <label for="group" class="col-sm-2 control-label">Grup <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="group">
                                      <?php foreach($groups as $group): ?>
                                      <option value="<?php echo $group->id;?>"><?php echo $group->name;?></option>
                                      <?php endforeach;?>
                                    </select>
                                    <span class="text-danger"><?php echo form_error('group'); ?></span>
                                </div>
                            </div>                     
                    </div>
                    <div class="content">
                        <p><strong>default password</strong> : <span class="text-info">belancon2016</span></p>
                    </div>
                    <div class="content">
                            <button type="submit" class="btn btn-info btn-fill pull-right">Tambah User</button>                           
                            <button type="reset" class="btn btn-warning btn-fill pull-right">Reset</button>
                            <div class="clearfix"></div>
                    </div>
                    <?php echo form_close();?>
                </div>
            </div>           
        </div>
    </div>
</div>