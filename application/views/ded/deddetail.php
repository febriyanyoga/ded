<div class="card-title">
    <h2 class="text-center"> Master Data DED</h2>
</div><br>
<!-- File export -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data DED untuk <b>Nama SKPA</b></h4>
                <br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahskpa"><i class="fas fa-plus-circle"></i> Tambah Data SKPA</button>
                <br>
                <p>
                    <div class="table-responsive">
                        <table id="file_export" class="table table-striped table-bordered display">
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
                     $i = 0;
                     foreach($ded as $d){
                     $i++;
                  ?>
                                    <tr>
                                        <td class="text-center">
                                            tes
                                        </td>
                                        <td class="text-center">
                                            tes
                                        </td>
                                        <td class="text-center">
                                            tes
                                        </td>
                                        <td class="text-center">
                                            tes
                                        </td>
                                        <td class="text-center">
                                            tes
                                        </td>
                                        <td class="text-center">
                                            tes
                                        </td>
                                        <td class="text-center">
                                            tes
                                        </td>
                                        <td class="text-center">
                                            tes
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#lihatskpa"><i class="fas fa-eye"></i> </button>
                                            <button type="button" class="btn btn-success"><i class="far fa-edit"></i> </button>
                                            <button type="button" class="btn btn-danger"><i class="mdi mdi-close"></i> </button>
                                        </td>
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

<div class="modal fade" id="tambahskpa" tabindex="-1" role="dialog" aria-labelledby="tambahskpa">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Tambah DED</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Bidang:</label>
                        <input type="text" class="form-control" id="recipient-name1">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Biro:</label>
                        <input type="text" class="form-control" id="recipient-name1">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Bagian:</label>
                        <input type="text" class="form-control" id="recipient-name1">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Sub Bag:</label>
                        <input type="text" class="form-control" id="recipient-name1">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Entitas Database:</label>
                        <input type="text" class="form-control" id="recipient-name1">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Parameter:</label>
                        <input type="text" class="form-control" id="recipient-name1">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Tipe:</label>
                        <input type="text" class="form-control" id="recipient-name1">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Panjang:</label>
                        <input type="text" class="form-control" id="recipient-name1">
                    </div>
                    <!-- <div class="form-group">
                                                        <label for="message-text" class="control-label">Keterangan:</label>
                                                        <textarea class="form-control" id="message-text1"></textarea>
                                                    </div> -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger">Simpan</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="lihatskpa" tabindex="-1" role="dialog" aria-labelledby="lihatskpa">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Data SKPA</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Nama SKPA:</label>
                        <input type="text" class="form-control" id="recipient-name1">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Jumlah Unit:</label>
                        <input type="text" class="form-control" id="recipient-name1">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Jumlah Tupoksi:</label>
                        <input type="text" class="form-control" id="recipient-name1">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Jumlah Database:</label>
                        <input type="text" class="form-control" id="recipient-name1">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Regulasi:</label>
                        <input type="text" class="form-control" id="recipient-name1">
                    </div>
                    <!-- <div class="form-group">
                                                        <label for="message-text" class="control-label">Keterangan:</label>
                                                        <textarea class="form-control" id="message-text1"></textarea>
                                                    </div> -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
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
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Nama Dokumen:</label>
                        <input type="text" class="form-control" id="recipient-name1">
                    </div>
                    <div class="form-group">
                        <label>Default file upload</label>
                        <input type="file" class="form-control">
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
                <p>
                    <table id="file_export" class="table table-striped table-bordered display">
                        <thead>
                            <tr>
                                <th width="30px">No</th>
                                <th class="text-center">Nama Dokumen</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    tes
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-info"><i class="fas fa-download"></i> </button>
                                    <button type="button" class="btn btn-danger"><i class="mdi mdi-close"></i> </button>
                                </td>
                            </tr>

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