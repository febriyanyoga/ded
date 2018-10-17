<div class="card-title">
    <h2 class="text-center"> Kelola Data User</h2>
</div><br>
<!-- File export -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahpengguna"><i class="fas fa-plus-circle"></i> Tambah Pengguna</button>
                <br>
                <p>
                    <div class="table-responsive">
                        <table id="file_export" class="table table-striped table-bordered display">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Level</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
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
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#lihatskpa"><i class="fas fa-eye"></i> </button>
                                            <button type="button" class="btn btn-success"><i class="far fa-edit"></i> </button>
                                            <button type="button" class="btn btn-danger"><i class="mdi mdi-close"></i> </button>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tambahpengguna" tabindex="-1" role="dialog" aria-labelledby="tambahpengguna">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Tambah User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Nama:</label>
                        <input type="text" class="form-control" id="recipient-name1">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Email:</label>
                        <input type="text" class="form-control" id="recipient-name1">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Level:</label>
                        <input type="text" class="form-control" id="recipient-name1">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Status:</label>
                        <input type="text" class="form-control" id="recipient-name1">
                    </div>   
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger">Simpan</button>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>