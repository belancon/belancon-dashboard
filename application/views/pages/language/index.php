<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <a href="<?php echo site_url('language/add');?>" class="btn btn-success">Add Setting Language</a>
                    </div>

                    <div class="header pull-right">
                        <div class="input-group input-group-sm" style="width: 300px;">
                         <!--  <form id="form-search"> -->
                          <input type="text" name="search" id="search" class="form-control pull-right" placeholder="Search">
                          <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                          </div>
                          <!-- </form> -->
                        </div>
                    </div>  

                    <div class="content table-responsive table-full-width">
                        <!-- RESULT SEARCH TEXT -->
                        <?php if(isset($search)): ?>
                        <div class="header">
                            <p style="font-size:18px">Pencarian dengan kata kunci <span class="text-info">"<?php echo $search; ?>"</span></p>
                        </div>
                        <?php endif; ?>
                        <!-- EOF RESULT SEARCH TEXT -->

                        <!-- LIST TABLE-->
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Name</th>
                                <th>Value</th>   
                                <th>Language</th>                             
                                <th>Action</th>
                            </thead>
                            <?php
                            $no = 1;
                            if($models):
                            foreach($models as $row): ?>
                            <tbody>
                                <tr>
                                  <td><?php echo $row->name;?></td>
                                  <td><?php echo $row->value;?></td>
                                  <td><?php echo $row->lang;?></td>
                                  <td width="170">
                                    <a href="<?php echo site_url('language/update/'.$row->id);?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Update</a>
                                    <a href="<?php echo site_url('language/delete/'.$row->id);?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure delete this data?')"><i class="fa fa-trash"></i> Delete</a>
                                  </td>
                                </tr>
                            </tbody>
                            <?php
                            endforeach;
                            endif;
                            ?>
                        </table>
                        <!-- EOF LIST TABLE -->
                    </div>
                    <div class="header">
                        
                        <?php echo $pagination; ?>
                                            </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#search').keypress(function(e) {
            //e.preventDefault();

            if(e.which === 13) {
                var search = $('#search').val().trim();
                if(search == '') {
                    window.location = BASE_URL + "language";
                } else {
                    search = search.replace("'", "");
                    search = search.replace('"', '');
                    window.location = BASE_URL + "language/search/" + search;
                }
            }
        });     
    });
</script>
