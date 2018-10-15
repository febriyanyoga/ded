<div class="animatedParent animateOnce">
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div>
                        <h1 class="card-header white text-center">Form Tambah Bidang</h1>
                    </div>
                    <div class="card-body b-b">
                        <div class="card todo-widget">
                            <div class="card-header white">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Master Data</a>
                                    </li>
                                    <li class="breadcrumb-item active">Bidang</li>
                                </ol>
                            </div>
                            <div>
                                <h6 class="card-header white">SKPA = <?php echo $nama_peraturan;?></h6>
                            </div>
                            <form class="card-footer white" id="my_form" action="<?php echo base_url('Masterdata/inputBidang/').$id_peraturan?>" method="post">
                                <div class="input-group col-md-12">
                                    <div>
                                        <h6 class="card-header white"> Tambahkan Bidang</h6>
                                    </div>
                                    <input name="id_peraturan" id="id_peraturan" type="hidden" class="form-control form-control-lg" value="<?php echo $id_peraturan?>">
                                    <input name="bidang" id="bidang" type="text" class="form-control" placeholder="Nama Bidang">
                                    <div class="input-group-btn"></div>
                                    <input class="btn btn-info" type="submit" id="submit" name="submit" value="Simpan">
                                </div>
                            </form>
                            <table class="table table-bordered table-hover data-tables" data-options='{ "paging": false; "searching":false}'>
                                <thead>
                                    <tr>
                                        <th width="30px">No</th>
                                        <th class="text-center">Bidang</th>
                                        <th class="text-center">Detail</th>
                                        <th width="100px" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i=0;
                                    foreach ($bidang as $bid) {
                                        $i++;
                                        ?>
                                        <tr>
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $bid->nama_bidang;?></td>
                                            <td class="text-center">
                                                <?php
                                                if($nama_peraturan == "Sekretariat Daerah"){
                                                    ?>
                                                    <a href="<?php echo site_url('masterdata/form2_biro/').$bid->id_bidang;?>"> <i class="btn btn-success btn-sm">Biro</i></a>
                                                    <?php
                                                }else{
                                                    ?>
                                                    
                                                    <a href="<?php echo site_url('masterdata/form2_bagian'); ?>"><i class="btn btn-success btn-sm">Bagian</i>
                                                    </a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <td class="text-center">
                                                <a class="btn-fab btn-fab-sm btn-success r-5" data-toggle="modal" data-target="#myModal-<?php echo $bid->id_bidang?>" title="ubah"><i class="icon-edit" aria-hidden="true"></i></a>
                                                <a href="<?php echo site_url('Masterdata/post_delete/').$bid->id_bidang."/".$id_peraturan; ?>" class="btn-fab btn-fab-sm btn-danger r-5" onClick="return confirm('Anda yakin akan menghapus <?php echo $bid->nama_bidang?>?')"> <i class="icon-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>

                                        <div class="modal" id="myModal-<?php echo $bid->id_bidang?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Edit data bidang</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <form action="<?php echo site_url('Masterdata/post_update/').$id_peraturan?>" method="post">
                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <div class="form-group focused">
                                                                <input class="form-control" type="hidden" placeholder="ID Bidang" name="id_bidang" value="<?php echo $bid->id_bidang?>" required >
                                                                <input  class="form-control" type="text" name="nama_bidang" value="<?php echo $bid->nama_bidang?>" required>
                                                            </div>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                                            <input type="submit" name="submit" class="btn btn-success " value="Simpan">
                                                        </div>
                                                    </form>
                                                </div>
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
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $('#my_form').keydown(function() {
        var key = e.which;
        if (key == 13) {
// As ASCII code for ENTER key is "13"
            $('#my_form').submit(); // Submit form code
        }
    });
</script>