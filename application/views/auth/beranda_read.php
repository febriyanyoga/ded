<div class="card-title">
    <h2 class="text-center"> Detail Data</h2>
</div><br>

<!-- File export -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data DED</h4>
                <h5 class="card-title">Regulasi = <?php echo $nama_regulasi;?></h5>
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($ded as $d) {
                                ?>
                                <tr>
                                    <td class="text-center">
                                        <?php echo $d->bidang;?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo $d->biro;?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo $d->bagian;?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo $d->subag;?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo $d->basisdata;?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo $d->parameter;?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo $d->tipe;?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo $d->panjang;?>
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

<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>