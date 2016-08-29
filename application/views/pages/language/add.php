<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    
                    <!-- Heading Title -->
                    <div class="header">
                        <h4 class="title">Data Master</h4>
                    </div>
                    <!-- Eof Heading Title -->

                    <!-- Notification -->
                    <div class="header">
                        <div class="alert alert-danger" style="display:none">
                            
                        </div>
                    </div>

                    <!-- Form -->
                    <?php echo form_open('language/do_add', array('class'=>'form-horizontal', 'id'=> 'form')); ?>
                    <div class="content">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" placeholder="Name"/>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="value" class="col-sm-2 control-label">Value <span class="text-danger">*</span></label>
                            <div class="col-sm-10">                                
                                <textarea class="form-control" name="value" rows="4"></textarea>
                            </div>
                        </div>   
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Language <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <select class="form-control" name="language">                               
                                <?php
                                foreach($languages as $language):
                                ?>
                                <option value="<?php echo $language['value'];?>"><?php echo $language['text'];?></option>
                                <?php
                                endforeach;
                                ?>
                                </select>
                            </div>
                        </div>                    
                    </div>  
                    <div class="content">
                            <button type="submit" class="btn btn-info btn-fill pull-right">Submit</button>                           
                            <a href="<?php echo site_url('language');?>" class="btn btn-warning btn-fill pull-right">Back</a>
                            <div class="clearfix"></div>
                    </div>                  
                    <?php echo form_close(); ?>
                    <!-- Eof Form -->
                </div>
            </div>           
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#form').submit(function(e) {
        e.preventDefault();
        hideNotifError();   

        var formData = new FormData($(form)[0]);

        $.ajax({
            url: $(form).attr("action"),
            type: 'POST',
            dataType: 'json',
            data: formData,
            async: true,
            success: function(data) {
                if (data.status === true) {
                    location.reload();
                } else {
                    showNotifError(data.error);
                }
            },
            error: function() {

            },
            cache: false,
            contentType: false,
            processData: false
        });
    });

    var showNotifError = function(message) {
      $('.alert-danger').html('');      
      $(".alert-danger").html(message);
      $(".alert-danger").slideDown();
    }

    var hideNotifError = function() {
      $('.alert-danger').hide();
    }
</script>