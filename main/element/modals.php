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
            <form method="get">
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
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="Long">Bujur</label>
                                <input type="text" name="Long" class="form-control" placeholder="Bujur"
                                       id="Long">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="NamaToko">Nama Toko</label>
                        <input type="text" name="NamaToko" class="form-control" placeholder="Nama ..."
                               id="NamaToko">
                    </div>
                    <div class="form-group">
                        <label for="NamaPemilik">Pemilik Toko</label>
                        <input type="text" name="NamaPemilik" class="form-control" placeholder="Nama Pemilik ..."
                               id="NamaPemilik">
                    </div>
                    <div class="form-group">
                        <label for="NoTelp">Nomor Telepon</label>
                        <input type="text" name="NoTelp" class="form-control" placeholder="08xxxx"
                               id="NoTelp">
                    </div>
                    <div class="form-group">
                        <label for="Alamat">Alamat</label>
                        <input type="text" name="Alamat" class="form-control" placeholder="Jl ..." id="Alamat">
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
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
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
            <form method="get">
                <input type="hidden" name="controller" value="penjualan">
                <input type="hidden" name="action" value="updateProduk">
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
                            <input type="text" class="form-control pull-right" id="datepicker" name="Tanggal">
                        </div>
                        <div class="form-group">
                            <label for="_200ml">200ml</label>
                            <input type="text" name="_200ml" class="form-control" id="_200ml">
                        </div>
                        <div class="form-group">
                            <label for="_600ml">600ml</label>
                            <input type="text" name="_600ml" class="form-control" id="_600ml">
                        </div>
                        <div class="form-group">
                            <label for="_1500ml">1500ml</label>
                            <input type="text" name="_1500ml" class="form-control" id="_1500ml">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
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
            <form method="get">
                <input type="hidden" name="controller" value="penjualan">
                <input type="hidden" name="action" value="tambahProduk">
                <input type="hidden" name="IDToko" id="IDToko">
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
                            <input type="text" class="form-control pull-right" id="datepicker" name="Tanggal">
                        </div>
                        <div class="form-group">
                            <label for="_200ml">200ml</label>
                            <input type="text" name="_200ml" class="form-control" id="_200ml">
                        </div>
                        <div class="form-group">
                            <label for="_600ml">600ml</label>
                            <input type="text" name="_600ml" class="form-control" id="_600ml">
                        </div>
                        <div class="form-group">
                            <label for="_1500ml">1500ml</label>
                            <input type="text" name="_1500ml" class="form-control" id="_1500ml">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
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
        <input type="hidden" name="IDTokoHapus">
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
            <form method="get">
                <input type="hidden" name="controller" value="pemetaan">
                <input type="hidden" name="action" value="ubahToko">
                <input type="hidden" name="IDTokoUbah" value="">
                <div class="modal-header">
                    <h4 class="modal-title">Ubah Data Toko</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="LatUbah">Lintang</label>
                                <input type="text" name="LatUbah" class="form-control" placeholder="Lintang" id="LatUbah" value="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="LongUbah">Bujur</label>
                                <input type="text" name="LongUbah" class="form-control" placeholder="Bujur"
                                       id="LongUbah" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="NamaTokoUbah">Nama Toko</label>
                        <input type="text" name="NamaTokoUbah" class="form-control" placeholder="Nama ..."
                               id="NamaTokoUbah" value="">
                    </div>
                    <div class="form-group">
                        <label for="NamaPemilikUbah">Pemilik Toko</label>
                        <input type="text" name="NamaPemilikUbah" class="form-control" placeholder="Nama Pemilik ..."
                               id="NamaPemilikUbah" value="">
                    </div>
                    <div class="form-group">
                        <label for="NoTelpUbah">Nomor Telepon</label>
                        <input type="text" name="NoTelpUbah" class="form-control" placeholder="08xxxx"
                               id="NoTelpUbah" value="">
                    </div>
                    <div class="form-group">
                        <label for="AlamatUbah">Alamat</label>
                        <input type="text" name="AlamatUbah" class="form-control" placeholder="Jl ..." id="AlamatUbah" value="">
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
                        <textarea name="KeteranganUbah" class="form-control" id="KeteranganUbah" rows="5" value=""></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</section>
</div>