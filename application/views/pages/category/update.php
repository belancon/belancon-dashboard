<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Data Master</h4>
                    </div>
                    <?php echo form_open('category/update/'.$category->id, array('class'=>'form-horizontal')); ?>
                    <input type="hidden" name="id" value="<?php echo $category->id;?>" />
                    <div class="content">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Nama <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $category->name;?>" />
                                <span class="text-danger"><?php echo form_error('name'); ?></span>
                            </div>
                        </div>                        
                    </div>  
                    <div class="content">
                            <button type="submit" class="btn btn-info btn-fill pull-right">Submit</button>                           
                            <button type="reset" class="btn btn-warning btn-fill pull-right">Reset</button>
                            <div class="clearfix"></div>
                    </div>                  
                    <?php echo form_close(); ?>
                </div>
            </div>           
        </div>
    </div>
</div>