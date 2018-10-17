<div class="card-title">
    <h2 class="text-center"> Master Data DED</h2>
</div><br>
<!-- File export -->
<div class="row">
    <div class="col-12">
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <h4 class="card-title">Data DED untuk <b><?php echo $skpa->nama_peraturan;?></b></h4>
                <br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahskpa"><i class="fas fa-plus-circle"></i> Tambah Data DED</button>
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
                        <?php 
                        ?>
                        <table id="file_export" class="table table-striped table-bordered display" style="width: 136%;">
                            <thead>
                                <tr>
                                    <th class="text-center">Bidang</th>
                                    <th class="text-center">Biro</th>
                                    <th class="text-center">Bagian</th>
                                    <th class="text-center">Sub Bag</th>
                                    <th class="text-center">Entitas Database</th>
                                    <th class="text-center">Parameter</th>
                                    <th class="text-center">Tipe</th>
                                    <th class="text-center">Panjang</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($all_ded as $ded){
                                 $i++;
                                 ?>
                                 <tr style="text-align: center;">
                                    <td class="text-center">
                                        <?php echo $ded->bidang;?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo $ded->biro;?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo $ded->bagian;?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo $ded->subag;?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo $ded->basisdata;?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo $ded->parameter;?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo $ded->tipe;?>
                                    </td>
                                    <td class="text-center">
                                        <?php if($ded->panjang == 0){
                                            echo "";
                                        }else{
                                            echo $ded->panjang;
                                        }
                                        ;?>
                                    </td>
                                    <td>
                                        <a style="color: white;" class="btn btn-success" data-toggle="modal" data-target="#edit-<?php echo $ded->id_detail?>" title="edit"><i class="fa fa-edit"></i></a>

                                        <a href="<?php echo base_url('Ded/hapus_ded/').$ded->id_detail?>"  onClick="return confirm('Anda yakin akan menghapus <?php echo $ded->bidang?>?')" style="color: white;" class="btn btn-danger"><i class="ti-trash"></i></a>
                                    </td>
                                </tr>


                                <div class="modal" id="edit-<?php echo $ded->id_detail?>">
                                    <div class="modal-dialog" role="document">
                                        <form action="<?php echo site_url('Ded/post_update_ded')?>" method="post">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="exampleModalLabel1">Ubah DED</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Bidang:</label>
                                                        <input type="text" class="form-control" id="recipient-name1" name="bidang" value="<?php echo $ded->bidang?>">
                                                        <input type="hidden" class="form-control" id="recipient-name1" name="id_ded" value="<?php echo $id_ded?>" required>
                                                        <input type="hidden" class="form-control" id="recipient-name1" name="id_detail" value="<?php echo $ded->id_detail?>" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Biro:</label>
                                                        <input type="text" class="form-control" id="recipient-name1" name="biro" value="<?php echo $ded->biro;?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Bagian:</label>
                                                        <input type="text" class="form-control" id="recipient-name1" name="bagian" value="<?php echo $ded->bagian;?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Sub Bag:</label>
                                                        <input type="text" class="form-control" id="recipient-name1" name="subag" value="<?php echo $ded->subag;?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Entitas Database:</label>
                                                        <input type="text" class="form-control" id="recipient-name1" name="basisdata" value="<?php echo $ded->basisdata;?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Parameter:</label>
                                                        <input type="text" class="form-control" id="recipient-name1" name="parameter" value="<?php echo $ded->parameter;?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Tipe:</label>
                                                        <select class="form-control" name="tipe" id="tipe">
                                                            <?php
                                                            if($ded->tipe == "Text"){
                                                                $t="selected";
                                                            }elseif ($ded->tipe == "Date") {
                                                                $d="selected";
                                                            }elseif ($ded->tipe == "String") {
                                                                $s="selected";
                                                            }elseif ($ded->tipe == "Numeric") {
                                                                $n="selected";
                                                            }else{
                                                                $k="selected";
                                                            }
                                                            ?>
                                                            <option <?php echo $k;?> value="">Pilih Tipe Data</option>
                                                            <option <?php echo $t;?> value="Text">Text</option>
                                                            <option <?php echo $d;?> value="Date">Date</option>
                                                            <option <?php echo $s;?> value="String">String</option>
                                                            <option <?php echo $n;?> value="Numeric">Numeric</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Panjang:</label>
                                                        <input type="number" class="form-control" id="recipient-name1" name="panjang" value="<?php echo $ded->panjang;?>">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="button" class="btn btn-danger" data-dismiss="modal" value="Batal">
                                                    <input class="btn btn-default" type="submit" name="submit" value="Simpan">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

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
        <form action="<?php echo site_url('Ded/post_ded')?>" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel1">Tambah DED</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Bidang:</label>
                        <input type="text" class="form-control" id="recipient-name1" name="bidang">
                        <input type="hidden" class="form-control" id="recipient-name1" name="id_ded" value="<?php echo $id_ded?>" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Biro:</label>
                        <input type="text" class="form-control" id="recipient-name1" name="biro">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Bagian:</label>
                        <input type="text" class="form-control" id="recipient-name1" name="bagian">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Sub Bag:</label>
                        <input type="text" class="form-control" id="recipient-name1" name="subag">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Entitas Database:</label>
                        <input type="text" class="form-control" id="recipient-name1" name="basisdata">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Parameter:</label>
                        <input type="text" class="form-control" id="recipient-name1" name="parameter">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Tipe:</label>
                        <select class="form-control" name="tipe" id="tipe">
                            <option value="Text">Text</option>
                            <option value="Date">Date</option>
                            <option value="String">String</option>
                            <option value="Numeric">Numeric</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Panjang:</label>
                        <input type="number" class="form-control" id="recipient-name1" name="panjang">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-danger" data-dismiss="modal" value="Batal">
                    <input class="btn btn-default" type="submit" name="submit" value="Simpan">
                </div>
            </div>
        </form>
    </div>
</div>



<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>