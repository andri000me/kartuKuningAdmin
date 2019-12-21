<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 text-right">
        <a href="javascript:void(0)" class="btn btn-primary" onclick="return showModal('add')">
          <i class="material-icons">add</i> &nbsp;
          <span>Tambah Berita</span>
        </a>
      </div>
      <div class="col-md-12 pt-4">
        <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th class="font-weight-bold">No</th>
              <th class="font-weight-bold">Judul</th>
              <th class="font-weight-bold">Fitur foto</th>
              <th class="font-weight-bold">Isi</th>
              <th class="font-weight-bold">Kategori</th>
              <th class="font-weight-bold">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=01; foreach ($lowongan as $key => $value) {?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $value->judul ?></td>
                <td>foto</td>
                <td><?php echo $value->isi ?></td>
                <td><?php echo $value->nama_kategori ?></td>
                <td>
                  <a href="javascript:void(0)" class="btn btn-warning" onclick="return showModal('edit')">
                    <i class="material-icons">edit</i> &nbsp;
                    Edit
                  </a>
                  <a href="" class="btn btn-danger" onclick="return hapus('<?php echo $value->id_news ?>')">
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
</div>
<script type="text/javascript">
  var who = "";
  function showModal(what){
    if(what == 'add'){
      who = 'add';
      $("#modalDialog").modal('show');
    }else{
      who = 'edit';
    }
  }
  function hapus(id){
    var i = confirm("Hapus data ini ?");
    var url = "<?php echo site_url('berita/hapus_berita/') ?>" + id;
    if(i){
        $.ajax({
          url: url,
          type: 'GET',
        })
        .done(function() {
          console.log("success");
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
        });


    }
  };
</script>
