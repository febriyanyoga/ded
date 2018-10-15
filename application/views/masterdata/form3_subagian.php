<div class="animatedParent animateOnce">
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div>
                        <h1 class="card-header white text-center">Form Tambah Sub Bag / Seksi</h1>
                    </div>
                    <div class="card-body b-b">
                        <div class="card todo-widget">
                            <div class="card-header white">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Master Data</a>
									</li>
									<li class="breadcrumb-item">
                                        <a href="#">Bidang</a>
									</li>
									<li class="breadcrumb-item">
                                        <a href="#">Biro</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">Bagian</a>
                                    </li>
                                    <li class="breadcrumb-item active">Sub Bag</li>
                                </ol>
                            </div>
                            <div>
								<h6 class="card-header white">SKPA = Nama Peraturan</h6>
								<h6 class="card-header white">Bidang = Nama Bidang</h6>
                                <h6 class="card-header white">Biro = Nama Biro</h6>
                                <h6 class="card-header white">Bagian = Nama Bag</h6>
                            </div>
                            <form class="card-footer white" action="
								<?php echo base_url('Masterdata/inputbagian')?>" method="post">
                                <div class="input-group col-md-12">
                                    <div>
                                        <h6 class="card-header white"> Tambahkan Sub Bag</h6>
                                    </div>
                                    <input type="hidden" class="form-control form-control-lg" name="id" id="id">
                                    <input name="bidang" id="bidang" type="text" class="form-control" placeholder="Nama Sub Bag">
                                    <div class="input-group-btn"></div>
                                </div>
                            </form>
                            <table class="table table-bordered table-hover data-tables" data-options='{ "paging": false; "searching":false}'>
                                <thead>
                                    <tr>
                                        <th width="30px">No</th>
                                        <th class="text-center">Sub Bag / Seksi</th>
                                        <th class="text-center">Detail</th>
                                        <th width="100px" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Nama Sub Bag</td>
                                        <td class="text-center">
                                            <a href="
														<?php echo site_url('masterdata/form4_database'); ?>"> 
														<i class="btn btn-success btn-sm">Database</i>
                                                    </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="
														<?php echo site_url('masterdata/form2_bagian'); ?>" class="btn-fab btn-fab-sm btn-success r-5" data-toggle="modal" data-target="#myModal">
														<i class="icon-edit" aria-hidden="true"></i>
													</a>
                                            <a href="
														<?php echo site_url('masterdata/form2_bagian'); ?>" class="btn-fab btn-fab-sm btn-success r-5">
														<i class="icon-remove" aria-hidden="true"></i>
													</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit Data Sub Bag</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="form-group focused">
                    <input class="form-control" type="text" placeholder="Nama Sub Bag">
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-success " data-dismiss="modal">Simpan</button>
            </div>

        </div>
    </div>
</div>