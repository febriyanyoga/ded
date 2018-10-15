<!doctype html>
<html>
    <head>
        <title>SISTEM INFORMASI BASIS DATA TUNGGAL PEMPROV ACEH</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        
    </head>
    <body><br>
        <h2 style="margin-top:0px">Summary Report</h2>
        <div class="text-right">
        <a href="<?php echo site_url('dede') ?>" class="btn btn-primary ">Kembali</a> </div>
        <table class="table">
	    <tr><td>Nama Peraturan</td><td><?php echo $nama_peraturan; ?></td></tr>
	    <tr><td>Jumlah Unit</td><td><?php echo $unit; ?></td></tr>
	    <tr><td>Jumlah Tupoksi</td><td><?php echo $tupoksi; ?></td></tr>
        <tr><td>Jumlah Database</td><td><?php echo $jml_database; ?></td></tr>
	    <tr><td></td>
        </tr>
	</table>

    <div style="height:auto;">
    <iframe src="<?php echo site_url('uploads/'.$file_pdf.'') ?>"  width="100%" height="500px"></iframe>
    </div>

        </body>
</html>