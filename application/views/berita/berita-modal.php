<div class="modal fade" id="modalDialog" tabindex="-1" role="dialog" aria-labelledby="modalDialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">M</h5>
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
                            <?php foreach ($kategori as $key => $value) { ?>
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

    $("#form-modal").submit(function (event) {
        event.preventDefault();
        var data = new FormData();
        var judul = $("[name='judul']").val();
        var kategori = $("[name='kategori']").val();
        var photos = document.getElementById("fitur-foto");
        var isi = quill.container.firstChild.innerHTML;
        var urla = document.URL;
        var urls = urla.substr(urla.lastIndexOf('?') + 1, urla.length);
        var values = urls.split('=');

        var id = values[2];

        var url = "";

        if (who == 'add') {
            url = "<?php echo site_url('berita/insert_berita?mode=add') ?>";
            data.append("judul", judul);
            data.append("kategori", kategori);
            data.append("isi", isi);
            data.append("photos", photos.files.item(0));

        } else {
            url = "<?php echo site_url('berita/insert_berita?mode=edit&data=') ?>" + id;

            data.append("judul", judul);
            data.append("kategori", kategori);
            data.append("isi", isi);
            data.append("photos", photos.files.item(0));
        }

        console.log(url);
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            datatype: 'json',
            processData: false, // tell jQuery not to process the data
            contentType: false, // tell jQuery not to set contentType
        })
                .done(function (data, s, j) {
                    alert(s);
                    window.location.reload();
                })
                .fail(function (e, t, j) {
                    console.log(JSON.stringify(e));
                })
                .always(function () {
                    console.log("complete");
                });

    });

    function showFilename() {
        var fileName = document.getElementById("fitur-foto");
        $(".file-name").html(fileName.files.item(0).name);
    }
</script>
