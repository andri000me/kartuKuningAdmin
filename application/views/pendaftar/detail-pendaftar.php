<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
        <script src="<?php echo base_url() ?>/assets/js/core/jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h3 class="text-center py-2">Detail Informasi <br> <small><?php echo $detail->nama_lengkap?></small></h3>
            <div class="row">
                <div class="col-md-4 text-center">
                    <img class="img-fluid w-75" src="<?php echo base_url('uploads/pendaftaran/'. $detail->foto)?> "/>
                </div>
                <div class="col-md-8 p-3">
                    <table class="table-sm table-bordered">
                        <tr class="align-center">
                            <td>User ID </td>
                            <td colspan="2"><input type="text" class="form-control" name="user-id" min="6" required value="<?php echo $detail->userid ?>"/></td>
                        </tr>
                        <tr class="align-center">
                            <td>NIK </td>
                            <td colspan="2"><input type="text" class="form-control" name="nik" min="16" max="16" required value="<?php echo $detail->nik ?>"/></td>
                        </tr>
                        <tr class="align-center">
                            <td>Email </td>
                            <td colspan="2"><input type="email" class="form-control" name="email-user" min="6" required value="<?php echo $detail->email ?>"/></td>
                        </tr> 
                        <tr class="align-center">
                            <td>Nama Lengkap </td>
                            <td colspan="2"><input type="text" class="form-control" name="nama-user"  value="<?php echo $detail->nama_lengkap ?>"/></td>
                        </tr>
                        <tr class="align-center">
                            <td>Tempat Lahir </td>
                            <td colspan="2"><input type="text" class="form-control" name="tempat-lahir"  value="<?php echo $detail->tempat_lahir ?>"/></td>
                        </tr> 
                        <tr class="align-center">
                            <td>Tanggal Lahir </td>
                            <td colspan="2"><input type="text" class="form-control  date-picker" name="tanggal-lahir"  value="<?php echo $detail->tanggal_lahir ?>"/></td>
                        </tr>
                        <tr class="align-center">
                            <td>Jenis Kelamin </td>
                            <td colspan="2">
                                <input type="text" class="form-control  date-picker text-capitalize" name="jk"  value="<?php echo $detail->jk ?>"/>
                            </td>
                        </tr>
                        <tr class="align-center">
                            <td>Agama </td>
                            <td colspan="2">
                                <input type="text" class="form-control text-capitalize date-picker" name="agama"  value="<?php echo $detail->agama ?>"/>
                            </td>
                        </tr>
                        <tr class="align-center">
                            <td>Kondisi Fisik / Disabilitas </td>
                            <td colspan="2">
                                <input type="text" class="form-control text-capitalize date-picker" name="disabilitas"  value="<?php echo $detail->fisik ?>"/>
                            </td>
                        </tr>
                        <tr class="align-center">
                            <td>Status Perkawinan </td>
                            <td colspan="2">
                                <input type="text" class="form-control text-capitalize date-picker" name="kawin"  value="<?php echo $detail->status_kawin ?>"/>
                            </td>
                        </tr>
                        <tr class="align-center">
                            <td>Tinggi / Berat Badan </td>
                            <td><span class="form-inline"><input type="text" class="form-control" name="tinggi-user"  value="<?php echo $detail->tinggi ?> cm"/>&nbsp;</span></td> 
                            <td><span class="form-inline"><input type="text" class="form-control" name="berat-user"  value="<?php echo $detail->berat_badan ?> kg"/>&nbsp;</span></td>
                        </tr>
                        <tr class="align-center">
                            <td>Nomor Telepon </td>
                            <td colspan="2"><input type="tel" class="form-control" name="telepon-user"  value="<?php echo $detail->telepon ?>"/></td>
                        </tr>
                        <tr class="align-center">
                            <td>Provinsi </td>
                            <td colspan="2">
                                <input type="text" class="form-control  date-picker" name="prov"  value="<?php echo $detail->provinsi ?>"/>
                            </td>
                        </tr>
                        <tr class="align-center">
                            <td>Kabupaten / Kota </td>
                            <td colspan="2">
                                <input type="text" class="form-control text-capitalize date-picker" name="kabupaten"  value="<?php echo $detail->kabupaten ?>"/>
                            </td>
                        </tr>
                        <tr class="align-center">
                            <td>Kecamatan </td>
                            <td colspan="2">
                                <input type="text" class="form-control  date-picker" name="kec"  value="<?php echo $detail->kecamatan ?>"/>
                            </td>
                        </tr> 
                        <tr class="align-center">
                            <td>Alamat </td>
                            <td colspan="2">
                                <textarea style="border: none;resize: none;" class="form-control" rows="5" name="alamat-user" readonly=""><?php echo $detail->alamat ?></textarea>
                            </td>
                        </tr> 
                        <tr class="align-center">
                            <td>Kode Pos </td>
                            <td colspan="2">
                                <input type="number" class="form-control" name="kode-pos" value="<?php echo $detail->kode_pos ?>"/> 
                            </td>
                        </tr> 
                        <tr class="align-center">
                            <td>Tingkat Pendidikan </td>
                            <td colspan="2">
                                <input type="text" class="form-control" name="pendidikan" value="<?php echo $detail->pendidikan ?>"/> 
                            </td>
                        </tr>
                        <tr class="align-center">
                            <td>Jenis Jurusan </td>
                            <td colspan="2">
                                <input type="number" class="form-control" name="jurusan" value="<?php echo $detail->jurusan ?>"/> 
                            </td>
                        </tr>
                        <tr class="align-center">
                            <td>Nama Instansi </td>
                            <td colspan="2"><input type="text" class="form-control" name="instansi-user" value="<?php echo $detail->instansi ?>"/></td>
                        </tr> 
                        <tr class="align-center">
                            <td>Tahun Lulus </td>
                            <td colspan="2"><input type="text" class="form-control" name="tahun-lulus-user" value="<?php echo $detail->tahun_lulus ?>"/></td>
                        </tr>
                        <tr class="align-center">
                            <td>Nilai Ijazah / IPK <small>(pisahkan dengan titik)</small> </td>
                            <td colspan="2"><input class="form-control" name="ipk-user" type="text" min="8"  value="<?php echo $detail->nilai_ijazah ?>"/></td>
                        </tr>
                        <tr class="align-center">
                            <td>Penempatan </td>
                            <td colspan="2">
                                <input type="text" class="form-control text-capitalize" name="penempatan" value="<?php echo $detail->penempatan ?>"/>
                            </td>
                        </tr>
                        <tr class="align-center">
                            <td>Provinsi </td>
                            <td colspan="2">
                                <input type="text" class="form-control" name="prov-minat" value="<?php echo $detail->userid ?>"/>
                            </td>
                        </tr>
                        <tr class="align-center">
                            <td>Kabupaten / Kota </td>
                            <td colspan="2">
                                <input type="text" class="form-control" name="kota-kab" value="<?php echo $detail->userid ?>"/>
                            </td>
                        </tr>
                        <tr class="align-center">
                            <td>Jenis Jabatan yang Diminati </td>
                            <td colspan="2"><input type="text" class="form-control text-capitalize" name="minat-user" value="<?php echo $detail->jenis_jabatan ?>"/></td>
                        </tr> 
                        <tr class="align-center">
                            <td>Sistem Pembayaran </td>
                            <td colspan="2"><input type="text" class="form-control text-capitalize" name="bayaran-user" value="<?php echo $detail->pembayaran ?>"/></td>
                        </tr>
                        <tr class="align-center">
                            <td>Harapan Gaji Minimum </td>
                            <td colspan="2">
                                <input type="text" class="form-control text-capitalize" name="gaji" value="<?php echo $detail->harapan_gaji ?>"/>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $('input').addClass('form-control-plaintext');
                $('input').attr('readonly', true);
                $('.form-control').css('background-color', '#FFF');
                $('textarea').attr('readonly', true);
                $('textarea').attr('readonly', true);
            });
        </script>
    </body>
</html>
