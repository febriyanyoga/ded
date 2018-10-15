
    <div class="animatedParent animateOnce">
        <div class="container-fluid my-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body b-b">
                            <h4 style="color: #2196f3!important;">INPUT DATA USER</h4> <br>
                            <form class="form-material" action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
                                <!-- Input -->
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group form-float form-group-lg">
                                                <div class="form-line"><br>
                                                    <input type="text" class="form-control" name="full_name" id="full_name"  value="<?php echo $full_name; ?>" />
                                                    <label class="form-label">Nama Lengkap <?php echo form_error('full_name') ?></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group form-float form-group-lg">
                                                <div class="form-line"><br>
                                                    <input type="email" class="form-control" name="email" id="email" value="<?php echo $email; ?>" />
                                                    <label class="form-label">Email <?php echo form_error('email') ?></label>
                                                </div>
                                            </div>
                                        </div>


                                        <?php
                                            if($this->uri->segment(2)=='create'){
                                        ?>


                                        <div class="col-sm-12">
                                            <div class="form-group form-float form-group-lg">
                                                <div class="form-line"><br>
                                                    <input type="password" class="form-control" name="password" id="password" value="<?php echo $password; ?>" />
                                                    <label class="form-label">Password <?php echo form_error('password') ?></label>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        <?php
                                            }
                                        ?>

                                        <div class="col-sm-12">
                                            <div class="form-group form-float form-group-lg">
                                                <div class="form-line"><br>
                                                    <label> Level User <?php echo form_error('id_user_level') ?> </label>
                                                    <?php echo cmb_dinamis('id_user_level', 'tbl_user_level', 'nama_level', 'id_user_level', $id_user_level) ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group form-float form-group-lg">
                                                <div class="form-line"><br>
                                                    <label> Status Aktif <?php echo form_error('is_aktif') ?> </label>
                                                    <?php echo form_dropdown('is_aktif', array('y' => 'AKTIF', 'n' => 'TIDAK AKTIF'), $is_aktif, array('class' => 'form-control')); ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group form-float form-group-lg">
                                                    <label class="form-label">Foto Profile <?php echo form_error('images') ?></label>
                                                    <input type="file" name="images" class="form-control" />
                                            </div>
                                        </div>



                                        <div class="col-sm-12">
                                            <div class="form-group form-float form-group-lg">
                                                    <label class="form-label"></label>
                                                    <input type="hidden" name="id_users" value="<?php echo $id_users; ?>"  />
                                            </div>
                                        </div>

                                    </div>
                                </div> 
                            <button type="submit" class="btn btn-danger btn-lg"><i class="icon-save"></i> <?php echo $button ?></button> 
                            <a href="<?php echo site_url('user') ?>" class="btn btn-primary btn-lg"><i class="icon-sign-out"></i> Kembali</a>
                                <!-- #END# Input -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>