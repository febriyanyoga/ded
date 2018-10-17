<div class="card-title">
    <h2 class="text-center"> Dashboard Admin</h2>
</div><br>
<div class="card-group">
    <!-- Card -->
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="m-r-10">
                    <span class="btn btn-circle btn-lg bg-danger">
                                        <i class="ti-clipboard text-white"></i>
                                    </span>
                </div>
                <div>
                    Total SKPA
                </div>
                <div class="ml-auto">
                    <h2 class="m-b-0 font-light">23</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="m-r-10">
                    <span class="btn btn-circle btn-lg btn-info">
                                        <i class="ti-wallet text-white"></i>
                                    </span>
                </div>
                <div>
                    Total Unit
                </div>
                <div class="ml-auto">
                    <h2 class="m-b-0 font-light">113</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Card -->
    <!-- Card -->
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="m-r-10">
                    <span class="btn btn-circle btn-lg bg-success">
                                        <i class="ti-shopping-cart text-white"></i>
                                    </span>
                </div>
                <div>
                    Total Tupoksi

                </div>
                <div class="ml-auto">
                    <h2 class="m-b-0 font-light">43</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Card -->
    <!-- Card -->
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="m-r-10">
                    <span class="btn btn-circle btn-lg bg-warning">
                                        <i class="mdi mdi-currency-usd text-white"></i>
                                    </span>
                </div>
                <div>
                    Total Database

                </div>
                <div class="ml-auto">
                    <h2 class="m-b-0 font-light">63</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Card -->
    <!-- Column -->


</div>

<!-- File export -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data DED</h4>
                <h6 class="card-subtitle">Data DED dari masing-masing SKPA</h6>
                <div class="table-responsive">
                    <table id="file_export" class="table table-striped table-bordered display">
                        <thead>
                            <tr>
                                <th width="30px">No</th>
                                <th class="text-center">SKPA</th>
                                <th class="text-center">Jumlah Unit</th>
                                <th class="text-center">Jumlah Tupoksi</th>
                                <th class="text-center">Jumlah Database</th>
                                <th class="text-center">Dokumen Pendukung</th>
                                <th class="text-center" width="100px">DED</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                     $i = 0;
                     foreach($ded as $d){
                     $i++;
                  ?>
                                <tr>
                                    <td>
                                        <?php echo $i;?>
                                    </td>
                                    <td>
                                        <?php echo $d->nama_peraturan;?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo $d->unit;?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo $d->tupoksi;?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo $d->jml_database;?>
                                    </td>
                                    <td class="text-center">
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#dokumen">Detail</button>
                                    </td>
                                    <td class="text-center"><a href="<?php echo site_url('beranda/read/').$d->id; ?>" class="btn waves-effect waves-light btn-primary">Detail</button><i class="icon-eye" aria-hidden="true"></i></a></td>
                                </tr>
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

                                <div class="modal fade bs-example-modal-lg" tabindex="-1" id="dokumen" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Dokumen Pendukung</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                            <table class="tablesaw table-striped table-hover table-bordered table" data-tablesaw-mode="columntoggle">
                                    <thead>
                                        <tr>
                                            <th>Nama Dokumen</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tes</td>
                                            <td>Download</td>
                                        </tr>
                                    
                                    </tbody>
                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal -->