
    <div class="animatedParent animateOnce">
        <div class="container-fluid my-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body b-b">
                            <h4 style="color: #2196f3!important;">Tambah Data DED</h4> <br>
                            <form class="form-material" action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
                                <!-- Input -->
                                <div class="body">
                                    <div class="row clearfix">
                                        <!-- <div class="col-sm-12">
                                            <div class="form-group form-float form-group-lg">
                                                <div class="form-line"><br>
                                                    <input type="text" name="nik" value="<?php echo $id; ?>" class="form-control"/>
                                                    <label class="form-label">No</label>
                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="col-sm-12">
                                            <div class="form-group form-float form-group-lg">
                                                <div class="form-line"><br>
                                                    <input type="text" class="form-control" name="nama_peraturan" id="nama_peraturan"  value="<?php echo $nama_peraturan; ?>" requeired="" />
                                                    <label class="form-label">Nama Peraturan <?php echo form_error('nama_peraturan') ?></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group form-float form-group-lg">
                                                <div class="form-line"><br>
                                                    <input type="text" class="form-control" name="unit" id="unit"  value="<?php echo $unit; ?>" onkeypress="return hanyaAngka(event)" />
                                                    <label class="form-label">Jumlah Unit <?php echo form_error('unit') ?></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group form-float form-group-lg">
                                                <div class="form-line"><br>
                                                    <input type="text" class="form-control" name="tupoksi" id="tupoksi"  value="<?php echo $tupoksi; ?>" onkeypress="return hanyaAngka(event)" />
                                                    <label class="form-label">Jumlah Tupoksi <?php echo form_error('tupoksi') ?></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group form-float form-group-lg">
                                                <div class="form-line"><br>
                                                    <input type="text" class="form-control" name="jml_database" id="jml_database"  value="<?php echo $jml_database; ?>" onkeypress="return hanyaAngka(event)" />
                                                    <label class="form-label">Jumlah Database <?php echo form_error('jml_database') ?></label>
                                                </div>
                                            </div>
                                        </div>

                                        

                                        <div class="col-sm-12">
                                            <div class="form-group form-float form-group-lg">
                                                    <label class="form-label">File Pdf <?php echo form_error('file_pdf') ?></label>
                                                <div class="form-line"><br> 
                                                        <input type="file" class="form-control" name="file_pdf" id="file_pdf"  value="<?php echo $file_pdf; ?>" requeired="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group form-float form-group-lg">
                                                    <label class="form-label"></label>
                                                    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                                            </div>
                                        </div>

                                    </div>
                                </div> 
                            <button type="submit" class="btn btn-danger btn-lg"><i class="icon-save"></i> <?php echo $button ?></button> 
                            <a href="<?php echo site_url('dede') ?>" class="btn btn-primary btn-lg"><i class="icon-sign-out"></i> Kembali</a>
                                <!-- #END# Input -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script>document.foo.submit();</script>

<script>
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
        return true;
    }
</script>
 