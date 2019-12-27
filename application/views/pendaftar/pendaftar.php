<?php
$jk = array();
$jk['L'] = "Laki-Laki";
$jk['P'] = "Perempuan";
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 pt-4">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered dataTable">
                        <thead>
                            <tr>
                                <th class="font-weight-bold">No</th>
                                <th class="font-weight-bold">Nama</th>
                                <th class="font-weight-bold">Jenis Kelamin</th>   
                                <th class="font-weight-bold">Foto</th>   
                                <th class="font-weight-bold">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($pendaftar as $key => $value) {
                                ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $value->nama_lengkap ?></td>
                                    <td><?php echo $jk[$value->jk] ?></td>
                                    <td><img class="img-fluid w-25" src="<?php echo base_url('uploads/pendaftaran/' . $value->foto) ?>" /></td>
                                    <td>
    <!--                                    <a href="javascript:void(0)" onclick="return showModal('edit', '<?php echo $value->id ?>')" class="btn btn-warning">
                                            <i class="material-icons">edit</i> &nbsp;
                                            Edit
                                        </a>-->
                                        <a href="javascript:void(0)" onclick="return window.open('<?php echo site_url('pendaftar/detail_pendaftar/'. $value->nik)?>', '', 'width=500,height=900');" class="btn btn-success">
                                            <i class="material-icons">visibility</i> &nbsp;
                                            Lihat Semua Data
                                        </a>
                                        <a href="javascript:void(0)" onclick="return hapus('<?php echo $value->nik ?>')" class="btn btn-danger">
                                            <i class="material-icons">remove</i> &nbsp;
                                            Hapus
                                        </a>
                                    </td>
                                </tr>
                          ''<?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>