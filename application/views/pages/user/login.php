<div class="container-fluid">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="card card-user">
        <div class="image">
          <h4 class="text-center" style="color:#66ae53">BELANCON TEAM</h4>
          <hr>
        </div>
        <div class="content">          
          <?php if(isset($error_message)): ?>
            <p class="text-danger"><?php echo $error_message;?></p>
          <?php endif; ?>

          <?php echo form_open("login");?>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" value="<?php echo set_value('identity');?>" name="identity" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
              <label class="checkbox">
                <input type="checkbox" value="" data-toggle="checkbox" id="remember" value="1" name="remember"> remember me
              </label>
            </div>
            <button type="submit" class="btn btn-success">Login</button>
          <?php echo form_close();?>
        </div>
        <hr>
        <div class="text-center">
          <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
          <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
          <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>
        </div>
      </div>
    </div>
  </div>
</div>