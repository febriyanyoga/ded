<div class="card my-3 no-b">
    <div class="card-body">
        <div class="card-title">
            <h2 class="text-center">Detail Data</h2>
        </div><br>
        <div class="text-right">
            <a href="<?php echo site_url('beranda') ?>" class="btn btn-primary ">Kembali</a> </div> <br>
        <table class="table">
            <tr>
                <td width="150px">Nama Peraturan</td>
                <td>
                    <?php echo $nama_peraturan; ?>
                </td>
            </tr>
            <tr>
                <td>Jumlah Unit</td>
                <td>
                    <?php echo $unit; ?>
                </td>
            </tr>
            <tr>
                <td>Jumlah Tupoksi</td>
                <td>
                    <?php echo $tupoksi; ?>
                </td>
            </tr>
            <tr>
                <td>Jumlah Database</td>
                <td>
                    <?php echo $jml_database; ?>
                </td>
            </tr>
            <tr>
                <td></td>
            </tr>
        </table>
        <table class="table table-bordered table-hover data-tables" data-options='{ "paging": false; "searching":false}'>
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
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>