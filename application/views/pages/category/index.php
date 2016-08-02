<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <a href="<?php echo site_url('category/add');?>" class="btn btn-success">Tambah Kategori</a>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Name</th>            
                                <th>Url</th>                                
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php foreach($categories as $category): ?>
                                <tr>
                                  <td><?php echo $category->name;?></td> 
                                  <td><?php echo $category->url;?></td>
                                  <td>
                                    <a href="<?php echo site_url('category/update/'.$category->id);?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Ubah</a>
                                    <a href="<?php echo site_url('category/delete/'.$category->id);?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
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