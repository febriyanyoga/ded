<div class="card-title">
    <h2 class="text-center"> Master Data SKPA</h2>
</div><br>
<!-- File export -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data SKPA</h4>
                <br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahskpa"><i class="fas fa-plus-circle"></i> Tambah Data SKPA</button>
                <br>
                <p>
                    <?php
                    $data=$this->session->flashdata('sukses');
                    if($data!=""){ 
                        ?>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                            <h3 class="text-success"><i class="fa fa-check-circle"></i> Sukses!</h3> <?=$data;?>
                        </div>
                        <?php 
                    } 
                    ?>
                    <?php 
                    $data2=$this->session->flashdata('error');
                    if($data2!=""){ 
                        ?>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                            <h3 class="text-danger"><i class="fa fa-check-circle"></i> Gagal!</h3> <?=$data2;?>
                        </div>
                        <?php 
                    } 
                    ?>
                    <div class="table-responsive">
                        <table id="file_export" class="table table-striped table-bordered display">
                            <thead>
                                <tr>
                                    <th width="30px">No</th>
                                    <th class="text-center">SKPA</th>
                                    <th class="text-center">Dokumen Pendukung</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                foreach($ded as $d){
                                    $i++;
                                    ?>
                                    <tr>
                                        <td style="text-align: center;">
                                            <?php echo $i;?>
                                        </td>
                                        <td>
                                            <?php echo $d->nama_peraturan;?>
                                        </td>
                                        <td class="text-center">
                                            <a style="color: white;" class="btn btn-success" data-toggle="modal" data-target="#dokumen-<?php echo $d->id;?>">Detail</a>
                                        </td>
                                        <td style="text-align: center;">
                                            <a style="color: white;" class="btn btn-info" data-toggle="modal" data-target="#lihatskpa-<?php echo $d->id?>"><i class="fas fa-eye"></i> </a>
                                            <a style="color: white;" class="btn btn-success" data-toggle="modal" data-target="#editskpa-<?php echo $d->id?>" title="edit"><i class="fa fa-edit"></i></a>

                                            <a href="<?php echo base_url('Ded/hapus_skpa/').$d->id?>"  onClick="return confirm('Anda yakin akan menghapus <?php echo $d->nama_peraturan?>?')" style="color: white;" class="btn btn-danger"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>

                                    <!-- start lihat data skpa -->
                                    <div class="modal fade" id="lihatskpa-<?php echo $d->id?>" tabindex="-1" role="dialog" aria-labelledby="lihatskpa">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="exampleModalLabel1">Data <?php echo $d->nama_peraturan?></h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Nama SKPA:</label>
                                                            <input type="text" class="form-control"  value="<?php echo $d->nama_peraturan;?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Jumlah Unit:</label>
                                                            <input type="text" class="form-control"  value="<?php echo $d->unit;?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Jumlah Tupoksi:</label>
                                                            <input type="text" class="form-control"  value="<?php echo $d->tupoksi;?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Jumlah Database:</label>
                                                            <input type="text" class="form-control"  value="<?php echo $d->jml_database;?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Regulasi:</label>
                                                            <input type="text" class="form-control"  value="<?php echo $d->regulasi?>" readonly>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end lihat skpa -->

                                    <!-- start edit data skpa -->
                                    <div class="modal fade" id="editskpa-<?php echo $d->id?>" tabindex="-1" role="dialog" aria-labelledby="editskpa">
                                        <div class="modal-dialog" role="document">
                                            <form action="<?php echo base_url('Ded/post_update_skpa')?>" method="post">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="exampleModalLabel1">Data <?php echo $d->nama_peraturan?></h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Nama SKPA:</label>
                                                            <input type="text" class="form-control"  name="nama_peraturan" value="<?php echo $d->nama_peraturan;?>">
                                                            <input type="hidden" class="form-control"  name="id" value="<?php echo $d->id;?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Jumlah Unit:</label>
                                                            <input type="text" class="form-control"  name="unit" value="<?php echo $d->unit;?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Jumlah Tupoksi:</label>
                                                            <input type="text" class="form-control"  name="tupoksi" value="<?php echo $d->tupoksi;?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Jumlah Database:</label>
                                                            <input type="text" class="form-control"  name="jml_database" value="<?php echo $d->jml_database;?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Regulasi:</label>
                                                            <input type="text" class="form-control"  name="regulasi" value="<?php echo $d->regulasi?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="submit" class="btn btn-danger" data-dismiss="modal" value="Batal">
                                                        <input type="submit" class="btn btn-default" name="submit" value="Simpan">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- end edit skpa -->

                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="tambahskpa" tabindex="-1" role="dialog" aria-labelledby="tambahskpa">
        <div class="modal-dialog" role="document">
            <form action="<?php echo base_url('Ded/post_skpa')?>" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel1">Tambah SKPA</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Nama SKPA:</label>
                            <input type="text" class="form-control"  name="nama_peraturan" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Jumlah Unit:</label>
                            <input type="number" class="form-control"  name="unit">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Jumlah Tupoksi:</label>
                            <input type="number" class="form-control"  name="tupoksi">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Jumlah Database:</label>
                            <input type="number" class="form-control"  name="jml_database">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Regulasi:</label>
                            <input type="text" class="form-control"  name="regulasi" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-danger" data-dismiss="modal" name="batal" value="Batal">
                        <input type="submit" class="btn btn-default" name="submit" value="Simpan">
                    </div>
                </div>
            </form>
        </div>
    </div>

    

    <!--start looping modal dan datatable -->

    <?php
    foreach ($ded as $key) {
        ?>
        <div class="modal fade" id="dokumen-<?php echo $key->id?>" tabindex="-1" role="dialog" aria-labelledby="dokumen">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Dokumen Pendukung - <?php echo $key->nama_peraturan?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>

                    <div class="modal-body">
                        <?php echo form_open_multipart('Skpa/post_dokumen');?>
                        <form action="<?php echo base_url('Skpa/post_dokumen')?>" enctype="multipart/form-data" method="post">
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">Nama Dokumen:</label>
                                <input type="text" class="form-control"  name="nama_dokumen">
                                <input type="hidden" class="form-control"  name="id_ded" value="<?php echo $key->id?>">
                            </div>
                            <div class="form-group">
                                <label>Unggah Dokumen</label>
                                <input type="file" class="form-control" name="file_upload">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-default" value="Simpan">
                            </div>
                        </form>
                        <table id="zero_config-<?php echo $key->id?>" class="table table-striped table-bordered display">
                            <thead>
                                <tr>
                                    <th width="30px">No</th>
                                    <th class="text-center">Nama Dokumen</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $data = $Ded_m->get_dokumen_by_id_ded($key->id)->result();
                                // print_r($data);
                                $i=0;
                                foreach ($data as $key) {
                                    $i++;
                                    ?>
                                    <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $key->nama_dokumen;?></td>
                                        <td class="text-center">
                                            <a href="<?php echo base_url()."uploads/".$key->nama_file?>" target="_blank" style="color: white;" class="btn btn-info"><i class="fas fa-download"></i></a>
                                            <a href="<?php echo base_url('skpa/delete/').$key->id_dokumen?>" onClick="return confirm('Anda yakin akan menghapus <?php echo $key->nama_dokumen?>?')" style="color: white;" class="btn btn-danger"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    </div>
                </div>
            </div>
        </div>



        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#zero_config-<?php echo $key->id?>').DataTable();
            } 
            );
        </script>
        <?php
    }
    ?>
    <!-- end looping modal dan datatabel -->


</div>