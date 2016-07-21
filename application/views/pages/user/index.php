<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <a href="<?php echo site_url('user/add');?>" class="btn btn-success">Tambah User</a>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>                                
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Grup</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                            <?php 
                            if(count($users)> 0): 
                                foreach($users as $user):
                            ?>
                                <tr>                                 
                                  <td><?php echo $user->username;?></td>
                                  <td><?php echo $user->first_name." ".$user->last_name;?></td>
                                  <td><?php echo $user->email;?></td>
                                  <td>
                                    <?php 
                                        $groups = get_user_group($user->id);
                                        if($groups) {
                                            foreach($groups as $group) {
                                                echo '<span class="label label-primary">'.$group->name.'</span> ';
                                            }
                                        }
                                    ?>
                                  </td>
                                  <td width="170">
                                    <!-- <a href="" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Ubah</a> -->
                                    <a href="<?php echo site_url('user/delete/'.$user->id);?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
                                  </td>
                                </tr>
                            <?php endforeach;
                            else: 
                            ?>
                                <tr>
                                    <td colspan="5">Tidak ada data</td>
                                </tr>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div