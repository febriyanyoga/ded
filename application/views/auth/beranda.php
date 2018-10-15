<div class="card my-3 no-b">
    <div class="card-body">
        <div class="card-title"><h2 class="text-center"> <?php echo getinfoRS('nama_sistem')?> </h2></div><br>
        <div style="padding-bottom: 10px;"'>
        <br>
            <table class="table table-bordered table-hover data-tables"
                data-options='{ "paging": false; "searching":false}'>
                <thead>
                <tr>     
                <th width="30px">No</th>
                <th class="text-center">Peraturan</th>                                   
                <th class="text-center">Jumlah Unit</th>
                <th class="text-center">Jumlah Tupoksi</th>
                <th class="text-center">Jumlah Database</th>
                <th class="text-center" width="100px">Action</th>
                </tr>
                </thead>
                <tbody>
                 <?php
                     $i = 0;
                     foreach($ded as $d){
                     $i++;
                  ?>
                     <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $d->nama_peraturan;?></td>
                <td class="text-center"><?php echo $d->unit;?></td>
                <td class="text-center"><?php echo $d->tupoksi;?></td>
                <td class="text-center"><?php echo $d->jml_database;?></td>
                <td class="text-center"><a href="<?php echo site_url('beranda/read/').$d->id; ?>" class="btn-fab btn-fab-sm btn-success r-5"><i class="icon-eye" aria-hidden="true"></i></a></td>
                </tr>
                 <?php
                                       }
                                   ?> 
                            </tbody>
                        </table>
                    </div>
                </div>
                 <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
      