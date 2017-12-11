<!-- modal sign out -->
<div class="modal fade" id="modal-sign-out">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="logout.php">
                <div class="modal-header">
                    <h4 class="modal-title">Sign Out?</h4>
                </div>
                <div class="modal-body">
                    <p>Yakin Ingin Sign Out?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Ya</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- akhir modal sign out -->

<!-- modal input toko -->
<div class="modal fade" id="modal-input-toko">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="get" id="formTambahToko">
                <input type="hidden" name="controller" value="pemetaan">
                <input type="hidden" name="action" value="tambahToko">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Toko</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="Lat">Lintang</label>
                                <input type="text" name="Lat" class="form-control" placeholder="Lintang" id="Lat">
                                <label for="Lat" class="text-red" id="warnLat"></label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="Long">Bujur</label>
                                <input type="text" name="Long" class="form-control" placeholder="Bujur"
                                       id="Long">
                                <label for="Long" class="text-red" id="warnLong"></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="NamaToko">Nama Toko</label>
                        <input type="text" name="NamaToko" class="form-control" placeholder="Nama ..."
                               id="NamaToko">
                        <label for="NamaToko" class="text-red" id="warnNamaToko"></label>
                    </div>
                    <div class="form-group">
                        <label for="NamaPemilik">Pemilik Toko</label>
                        <input type="text" name="NamaPemilik" class="form-control" placeholder="Nama Pemilik ..."
                               id="NamaPemilik">
                        <label for="NamaPemilik" class="text-red" id="warnPemilik"></label>
                    </div>
                    <div class="form-group">
                        <label for="NoTelp">Nomor Telepon</label>
                        <input type="number" name="NoTelp" class="form-control" placeholder="08xxxx"
                               id="NoTelp">
                        <label for="NoTelp" class="text-red" id="warnNo"></label>
                    </div>
                    <div class="form-group">
                        <label for="Alamat">Alamat</label>
                        <input type="text" name="Alamat" class="form-control" placeholder="Jl ..." id="Alamat">
                        <label for="Alamat" class="text-red" id="warnAlamat"></label>
                    </div>
                    <div class="form-group">
                        <label for="IDKecamatan">Kecamatan</label>
                        <select name="IDKecamatan" id="IDKecamatan" class="form-control"
                                data-placeholder="Pilih Kecamatan...">
                            <?php
                            if (isset($kecamatan)) {
                                foreach ($kecamatan as $item) {
                                    $kec = $item['Kecamatan'];
                                    $id = $item['ID'];
                                    echo "<option value='$id'>$kec</option>";
                                }
                            } else {

                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Keterangan">Keterangan</label>
                        <textarea name="Keterangan" class="form-control" id="Keterangan" rows="5"></textarea>
                        <label for="Keterangan" class="text-red" id="warnKeterangan"></label>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary" onclick="cekInputToko()">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal update produk -->
<div class="modal fade" id="modal-update-produk">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="get" id="formUbahProduk">
                <input type="hidden" name="controller" value="penjualan">
                <input type="hidden" name="action" value="updateProduk">
                <input type="hidden" name="IDTokoUpdate" id="IDTokoUpdate">
                <input type="hidden" name="Tanggal" id="tanggalUbah">
                <div class="modal-header">
                    <h4 class="modal-title">Update Produk</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Tanggal</label>
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker1" name="Tanggal" disabled>
                        </div>
                        <div class="form-group">
                            <label for="_200mlU">200ml</label>
                            <input type="number" name="_200ml" class="form-control" id="_200mlU">
                            <label for="_200mlU" id="warn200U" class="text-red"></label>
                        </div>
                        <div class="form-group">
                            <label for="_600mlU">600ml</label>
                            <input type="number" name="_600ml" class="form-control" id="_600mlU">
                            <label for="_600mlU" id="warn600U" class="text-red"></label>
                        </div>
                        <div class="form-group">
                            <label for="_1500mlU">1500ml</label>
                            <input type="number" name="_1500ml" class="form-control" id="_1500mlU">
                            <label for="_1500mlU" id="warn1500U" class="text-red"></label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary" onclick="cekUbahProduk()">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal tambah produk -->
<div class="modal fade" id="modal-tambah-produk">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="get" id="formTambahProduk">
                <input type="hidden" name="controller" value="penjualan">
                <input type="hidden" name="action" value="tambahProduk">
                <input type="hidden" name="IDTokoTambah" id="IDTokoTambah">
                <input type="hidden" name="Tanggal" id="tanggalTambah">
                <input type="hidden">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Produk</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Tanggal</label>
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker2" disabled>
                        </div>
                        <div class="form-group">
                            <label for="_200ml">200ml</label>
                            <input type="number" name="_200ml" class="form-control" id="_200ml">
                            <label for="_200ml" id="warn200" class="text-red"></label>
                        </div>
                        <div class="form-group">
                            <label for="_600ml">600ml</label>
                            <input type="number" name="_600ml" class="form-control" id="_600ml">
                            <label for="_200ml" id="warn600" class="text-red"></label>
                        </div>
                        <div class="form-group">
                            <label for="_1500ml">1500ml</label>
                            <input type="number" name="_1500ml" class="form-control" id="_1500ml">
                            <label for="_200ml" id="warn1500" class="text-red"></label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary" onclick="cekTambahProduk()">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal detail toko -->
<div class="modal fade" id="modal-detail-toko">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Detail Toko</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="lat">Latitude</label>
                                <input type="text" name="lat" class="form-control" placeholder="Lat" id="lat">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="long">Longitude</label>
                                <input type="text" name="long" class="form-control" placeholder="Long"
                                       id="long">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama-toko">Nama Toko</label>
                        <input type="text" name="nama-toko" class="form-control" placeholder="Nama ..."
                               id="nama-toko">
                    </div>
                    <div class="form-group">
                        <label for="pemilik">Pemilik Toko</label>
                        <input type="text" name="pemilik" class="form-control" placeholder="Nama Pemilik ..."
                               id="pemilik">
                    </div>
                    <div class="form-group">
                        <label for="no-telp">Nomor Telepon</label>
                        <input type="text" name="no-telp" class="form-control" placeholder="08xxxx"
                               id="no-telp">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Jl ..." id="alamat">
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea name="keterangan" class="form-control" id="keterangan" rows="5"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">Hapus</button>
                        <button type="button" class="btn">Update Produk</button>
                        <button type="button" class="btn btn-primary">Tambah Produk</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-hapus-toko">
    <form method="get">
        <input type="hidden" name="controller" value="pemetaan">
        <input type="hidden" name="action" value="hapusToko">
        <input type="hidden" name="IDTokoHapus" id="IDTokoHapus">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="logout.php">
                    <div class="modal-header">
                        <h4 class="modal-title">Hapus?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Yakin Hapus Toko?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary" id="kirim-hapus">Ya</button>
                    </div>
                </form>
            </div>
        </div>
    </form>
</div>

<!-- modal ubah toko -->
<div class="modal fade" id="modal-ubah-toko">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="get" id="formUbahToko">
                <input type="hidden" name="controller" value="pemetaan">
                <input type="hidden" name="action" value="ubahToko">
                <input type="hidden" name="IDTokoUbah" id="IDTokoUbah">
                <div class="modal-header">
                    <h4 class="modal-title">Ubah Data Toko</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="LatUbah">Lintang</label>
                                <input type="text" name="LatUbah" class="form-control" placeholder="Lintang"
                                       id="LatUbah">
                                <label for="LatUbah" class="text-red" id="warnLatUbah"></label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="LongUbah">Bujur</label>
                                <input type="text" name="LongUbah" class="form-control" placeholder="Bujur"
                                       id="LongUbah" value="">
                                <label for="LongUbah" class="text-red" id="warnLongUbah"></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="NamaTokoUbah">Nama Toko</label>
                        <input type="text" name="NamaTokoUbah" class="form-control" placeholder="Nama ..."
                               id="NamaTokoUbah" value="">
                        <label for="NamaTokoUbah" class="text-red" id="warnNamaTokoUbah"></label>
                    </div>
                    <div class="form-group">
                        <label for="NamaPemilikUbah">Pemilik Toko</label>
                        <input type="text" name="NamaPemilikUbah" class="form-control" placeholder="Nama Pemilik ..."
                               id="NamaPemilikUbah" value="">
                        <label for="NamaPemilikUbah" class="text-red" id="warnPemilikUbah"></label>
                    </div>
                    <div class="form-group">
                        <label for="NoTelpUbah">Nomor Telepon</label>
                        <input type="number" name="NoTelpUbah" class="form-control" placeholder="08xxxx"
                               id="NoTelpUbah" value="">
                        <label for="NoTelpUbah" class="text-red" id="warnNoUbah"></label>
                    </div>
                    <div class="form-group">
                        <label for="AlamatUbah">Alamat</label>
                        <input type="text" name="AlamatUbah" class="form-control" placeholder="Jl ..." id="AlamatUbah"
                               value="">
                        <label for="AlamatUbah" class="text-red" id="warnAlamatUbah"></label>
                    </div>
                    <div class="form-group">
                        <label for="IDKecamatanUbah">Kecamatan</label>
                        <select name="IDKecamatanUbah" id="IDKecamatanUbah" class="form-control"
                                data-placeholder="Pilih Kecamatan...">
                            <?php
                            if (isset($kecamatan)) {
                                foreach ($kecamatan as $item) {
                                    $kec = $item['Kecamatan'];
                                    $id = $item['ID'];
                                    echo "<option value='$id'>$kec</option>";
                                }
                            } else {
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="KeteranganUbah">Keterangan</label>
                        <textarea name="KeteranganUbah" class="form-control" id="KeteranganUbah" rows="5"
                                  value=""></textarea>
                        <label for="KeteranganUbah" class="text-red" id="warnKeteranganUbah"></label>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary" onclick="cekUbahToko()">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();

    if(dd<10) {
        dd = '0'+dd
    }

    if(mm<10) {
        mm = '0'+mm
    }

    today = yyyy + '/' + mm + '/' + dd;
    document.getElementById('datepicker1').value = today;
    document.getElementById('datepicker2').value = today;
    document.getElementById('tanggalTambah').value = today;
    document.getElementById('tanggalUbah').value = today;
    $(function () {
        $('#datepicker1').datepicker({
            autoclose: true,
            format: 'yyyy/mm/dd'
        });
        $('#datepicker2').datepicker({
            autoclose: true,
            format: 'yyyy/mm/dd'
        });
    });
</script>
<script>
    function cekInputToko() {
        var lat = document.getElementById('Lat').value;
        var long = document.getElementById('Long').value;
        var namaToko = document.getElementById('NamaToko').value;
        var namaPemilik = document.getElementById('NamaPemilik').value;
        var noTelp = document.getElementById('NoTelp').value;
        var alamat = document.getElementById('Alamat').value;
        var keterangan = document.getElementById('Keterangan').value;

        var errLat = document.getElementById('warnLat').innerHTML = "";
        var errLong = document.getElementById('warnLong').innerHTML = "";
        var errNama = document.getElementById('warnNamaToko').innerHTML = "";
        var errPemilik = document.getElementById('warnPemilik').innerHTML = "";
        var errNoTelp = document.getElementById('warnNo').innerHTML = "";
        var errAlamat = document.getElementById('warnAlamat').innerHTML = "";
        var errKet = document.getElementById('warnKeterangan').innerHTML = "";

        var cekLat = false;
        var cekLong = false;
        var cekNamaToko = false;
        var cekNamaPemilik = false;
        var cekNoTelp = false;
        var cekAlamat = false;
        var cekKeterangan = false;

        if (lat !== null || lat !== "") cekLat = true;
        else errLat.innerHTML = "Lintang Harus Diisi";

        if (long !== null || long !== "") cekLong = true;
        else errLong.innerHTML = "Bujur Harus Diisi";

        if (namaToko !== null || namaToko !== "") cekNamaToko = true;
        else errNama.innerHTML = "Nama Toko Harus Diisi";

        if (namaPemilik !== null || namaPemilik !== "") cekNamaPemilik = true;
        else errPemilik.innerHTML = "Nama Pemilik Harus Diisi";

        if (noTelp !== null || noTelp !== "") cekNoTelp = true;
        else errNoTelp.innerHTML = "Nomor Telepon Harus Diisi";

        if (alamat !== null || alamat !== "") cekAlamat = true;
        else errAlamat.innerHTML = "Alamat Harus Diisi";

        if (keterangan !== null || keterangan !== "") cekKeterangan = true;
        else errKet.innerHTML = "Keterangan Harus Diisi";

        if (cekLat && cekLong && cekNamaToko && cekNamaPemilik && cekNoTelp && cekAlamat && cekKeterangan) {
            document.getElementById('formTambahToko').submit();
        }
    }
    function cekUbahToko() {
        var lat = document.getElementById('LatUbah').value;
        var long = document.getElementById('LongUbah').value;
        var namaToko = document.getElementById('NamaTokoUbah').value;
        var namaPemilik = document.getElementById('NamaPemilikUbah').value;
        var noTelp = document.getElementById('NoTelpUbah').value;
        var alamat = document.getElementById('AlamatUbah').value;
        var keterangan = document.getElementById('KeteranganUbah').value;

        var errLat = document.getElementById('warnLatUbah').innerHTML = "";
        var errLong = document.getElementById('warnLongUbah').innerHTML = "";
        var errNama = document.getElementById('warnNamaTokoUbah').innerHTML = "";
        var errPemilik = document.getElementById('warnPemilikUbah').innerHTML = "";
        var errNoTelp = document.getElementById('warnNoUbah').innerHTML = "";
        var errAlamat = document.getElementById('warnAlamatUbah').innerHTML = "";
        var errKet = document.getElementById('warnKeteranganUbah').innerHTML = "";

        var cekLat = false;
        var cekLong = false;
        var cekNamaToko = false;
        var cekNamaPemilik = false;
        var cekNoTelp = false;
        var cekAlamat = false;
        var cekKeterangan = false;

        if (lat !== null || lat !== "") cekLat = true;
        else errLat.innerHTML = "Lintang Harus Diisi";

        if (long !== null || long !== "") cekLong = true;
        else errLong.innerHTML = "Bujur Harus Diisi";

        if (namaToko !== null || namaToko !== "") cekNamaToko = true;
        else errNama.innerHTML = "Nama Toko Harus Diisi";

        if (namaPemilik !== null || namaPemilik !== "") cekNamaPemilik = true;
        else errPemilik.innerHTML = "Nama Pemilik Harus Diisi";

        if (noTelp !== null || noTelp !== "") cekNoTelp = true;
        else errNoTelp.innerHTML = "Nomor Telepon Harus Diisi";

        if (alamat !== null || alamat !== "") cekAlamat = true;
        else errAlamat.innerHTML = "Alamat Harus Diisi";

        if (keterangan !== null || keterangan !== "") cekKeterangan = true;
        else errKet.innerHTML = "Keterangan Harus Diisi";

        if (cekLat && cekLong && cekNamaToko && cekNamaPemilik && cekNoTelp && cekAlamat && cekKeterangan) {
            document.getElementById('formUbahToko').submit();
        }
    }
    function cekTambahProduk() {
        var d200 = document.getElementById('_200ml').value;
        var d600 = document.getElementById('_600ml').value;
        var d1500 = document.getElementById('_1500ml').value;
        var err200 = document.getElementById('warn200').innerHTML = "";
        var err600 = document.getElementById('warn600').innerHTML = "";
        var err1500 = document.getElementById('warn1500').innerHTML = "";

        var cek200 = false;
        var cek600 = false;
        var cek1500 = false;

        if (d200 !== "" || d200 !== null) cek200 = true;
        else err200.innerHTML = "Harus Diisi";

        if (d600 !== "" || d600 !== null) cek600 = true;
        else err600.innerHTML = "Harus Diisi";

        if (d1500 !== "" || d1500 !== null) cek1500 = true;
        else err1500.innerHTML = "Harus Diisi";

        if (cek200 && cek600 && cek1500) {
            document.getElementById('formTambahProduk').submit();
        }
    }
    function cekUbahProduk() {
        var d200 = document.getElementById('_200mlU').value;
        var d600 = document.getElementById('_600mlU').value;
        var d1500 = document.getElementById('_1500mlU').value;
        var err200 = document.getElementById('warn200U').innerHTML = "";
        var err600 = document.getElementById('warn600U').innerHTML = "";
        var err1500 = document.getElementById('warn1500U').innerHTML = "";

        var cek200 = false;
        var cek600 = false;
        var cek1500 = false;

        if (d200 !== "" || d200 !== null) cek200 = true;
        else err200.innerHTML = "Harus Diisi";

        if (d600 !== "" || d600 !== null) cek600 = true;
        else err600.innerHTML = "Harus Diisi";

        if (d1500 !== "" || d1500 !== null) cek1500 = true;
        else err1500.innerHTML = "Harus Diisi";

        if (cek200 && cek600 && cek1500) {
            document.getElementById('formUbahProduk').submit();
        }
    }
</script>
</section>
</div>