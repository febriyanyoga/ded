<div class="card-title">
    <h2 class="text-center"> Master Data DED</h2>
</div><br>

                <!-- scroll-vertical -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="scroll_ver" class="table table-striped table-bordered display" style="width:100%">
                                    <thead>
                                <tr>
                                    <th width="30px">No</th>
                                    <th class="text-center">SKPA</th>
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
                                            <?php echo $i;?>
                                        </td>
                                        <td>
                                            <?php echo $d->nama_peraturan;?>
                                        </td>
                                        <td class="text-center">
                                        <a href="<?php echo site_url('monitoring/skpanote/').$d->id; ?>"   
                                           class="btn btn-success"><i class="far fa-edit"></i></a>
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