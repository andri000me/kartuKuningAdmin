<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-right">
                <a href="javascript:void(0)" class="btn btn-primary" onclick="return showModal('add', 0)">
                    <i class="material-icons">add</i> &nbsp;
                    <span>Tambah Pengumuman</span>
                </a>
            </div>
            <div class="col-md-12 pt-4">

                <table class="table table-striped table-bordered dataTable">
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
                        <?php
                        $no = 01;
                        foreach ($lowongan as $key => $value) {
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $value->judul ?></td>
                                <td><img class="w-25 img img-thumbnail" src="<?php echo base_url('uploads/news/' . $value->fitur_photo) ?>"></td>
                                <td><?php echo $this->etc->stringCut($value->isi, 250) ?></td>
                                <td><?php echo $value->nama_kategori ?></td>
                                <td>
                                    <a href="javascript:void(0)" class="btn btn-warning" onclick="return showModal('edit', '<?php echo $value->id_news ?> ')">
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
<script type="text/javascript">
    var who = "";
    var quill = '';
    $(document).ready(function () {
        // quill
        var toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'], // toggled buttons
            ['blockquote', 'code-block'],
            ['link', 'image'],
            [{'header': 1}, {'header': 2}], // custom button values
            [{'list': 'ordered'}, {'list': 'bullet'}],
            [{'script': 'sub'}, {'script': 'super'}], // superscript/subscript
            [{'indent': '-1'}, {'indent': '+1'}], // outdent/indent
            [{'direction': 'rtl'}], // text direction

            [{'header': [1, 2, 3, 4, 5, 6, false]}],

            [{'color': []}, {'background': []}], // dropdown with defaults from theme
            [{'font': []}],
            [{'align': []}],

            ['clean']                                         // remove formatting button
        ];
        quill = new Quill('#quill-editor', {
            modules: {
                toolbar: toolbarOptions
            },
            theme: 'snow'
        });
    });
    function showModal(what, id) {
        if (what == 'add') {
            who = 'add';
            $("[name='judul']").val("");
            $("[name='kategori']").val("");
            quill.root.innerHTML = "";
            window.history.pushState("add", "Tambah Data", "?mode=add");
            $("#modalDialog").modal('show');
        } else {
            who = 'edit';
            window.history.pushState("edit", "Edit Data", "?mode=edit&data=" + id);
            $.ajax({
                url: "<?php echo site_url('berita/get_/') ?>" + id,
                type: 'GET',
                dataType: 'json',
                success: function (data, textStatus, jqXHR) {
                    $("[name='judul']").val(data.judul);
                    $("[name='kategori']").val(data.id_kategori);
                    quill.root.innerHTML = data.isi;

                    $("#modalDialog").modal('show');
                },
                error: function (jqXHR, textStatus, errorThrown) {

                }
            });
        }
    }
    function hapus(id) {
        var i = confirm("Hapus data ini ?");
        var url = "<?php echo site_url('berita/hapus_berita/') ?>" + id;
        if (i) {
            $.ajax({
                url: url,
                type: 'GET',
            })
                    .done(function () {
                        console.log("success");
                    })
                    .fail(function () {
                        console.log("error");
                    })
                    .always(function () {
                        console.log("complete");
                    });


        }
    }
    ;
</script>
