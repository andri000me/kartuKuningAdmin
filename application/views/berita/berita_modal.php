<div class="modal fade" id="modalDialog" tabindex="-1" role="dialog" aria-labelledby="modalDialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form-modal" action="#" method="get">
        <div class="modal-body">
          <div class="form-group">
            <label for="">Judul</label>
            <input class="form-control" type="text" name="judul" required>
          </div>
          <div class="form-group">
            <label for="">Isi Berita</label><br>
            <div id="quill-editor" required></div>
          </div>
          <div class="form-group">
            <label for="">Kategori</label>
            <select class="form-control" name="kategori" required>
              <option value="">--Silahkan Pilih--</option>
              <?php foreach ($kategori as $key => $value) {?>
                <option value="<?php echo $value->id_kategori ?>"><?php echo $value->nama_kategori ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="">Fitur Foto</label><br>
            <label class="btn btn-success">
              <input type="file" name="photos" accept="image/*" onchange="showFilename()" id="fitur-foto"/>
              Pilih gambar ...
            </label>
            <label class="file-name"></label>
          </div>
        </div>
        <div class="modal-footer">
          <a href="javascript:void(0)" class="btn btn-secondary" data-dismiss="modal">Close</a>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
var quill = '';
$(document).ready(function() {
  // quill
  var toolbarOptions = [
    ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
    ['blockquote', 'code-block'],
    ['link', 'image'],
    [{ 'header': 1 }, { 'header': 2 }],               // custom button values
    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
    [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
    [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
    [{ 'direction': 'rtl' }],                         // text direction

    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

    [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
    [{ 'font': [] }],
    [{ 'align': [] }],

    ['clean']                                         // remove formatting button
  ];
  quill = new Quill('#quill-editor', {
    modules: {
      toolbar: toolbarOptions
    },
    theme: 'snow'
  });
});
$("#form-modal").submit(function(event) {
  event.preventDefault();
  var judul = $("[name='judul']").val();
  var kategori = $("[name='kategori']").val();
  var isi = quill.container.firstChild.innerHTML;
  console.log(isi);
  $.ajax({
    url: "<?php echo site_url('berita/insert_berita/')?>",
    type: 'POST',
    data: {'judul': judul, 'kategori' : kategori, 'isi' : isi},
    processData: false,  // tell jQuery not to process the data
    contentType: false,  // tell jQuery not to set contentType
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

});

function showFilename() {
  var fileName = document.getElementById("fitur-foto");
  $(".file-name").html(fileName.files.item(0).name);
}
</script>
