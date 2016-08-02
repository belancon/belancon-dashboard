<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <a href="<?php echo site_url('social-media/add');?>" class="btn btn-success">Tambah Social Media</a>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Name</th>            
                                <th>Icon</th>                                
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php foreach($socmeds as $socmed): ?>
                                <tr>
                                  <td><?php echo $socmed->name;?></td> 
                                  <td><?php echo $socmed->icon;?></td>
                                  <td>
                                    <a href="<?php echo site_url('social-media/update/'.$socmed->id);?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Ubah</a>
                                    <a href="<?php echo site_url('social_media/delete/'.$socmed->id);?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
                                  </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div