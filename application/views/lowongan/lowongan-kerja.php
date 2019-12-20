<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 text-right">
        <a href="" class="btn btn-primary">
          <i class="material-icons">add</i> &nbsp;
          <span>Tambah Lowongan</span>
        </a>
      </div>
      <div class="col-md-12 pt-4">
        <table class="table table-striped table-bordered">
          <thead>
            <tr >
              <th class="font-weight-bold">No</th>
              <th class="font-weight-bold">Judul</th>
              <th class="font-weight-bold">Posisi</th>
              <th class="font-weight-bold">Foto</th>
              <th class="font-weight-bold">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; foreach ($lowongan as $key => $value) {?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $value->judul ?></td>
                <td><?php echo $value->posisi ?></td>
                <td><?php echo $value->posisi ?></td>
                <td>
                  <a href="" class="btn btn-warning">
                    <i class="material-icons">edit</i> &nbsp;
                    Edit
                  </a>
                  <a href="" class="btn btn-danger">
                    <i class="material-icons">remove</i> &nbsp;
                    Hapus
                  </a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
