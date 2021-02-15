<?= $this->extend('mitra/mitraLayout/template_create') ?>

<?= $this->section('content') ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Tambah Kosan</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Informasi Data Utama Kosan</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a class="dropdown-item" href="#">Settings 1</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form class="form-horizontal form-label-left" action="/mitra/save_create" method="post" enctype="multipart/form-data" autocomplete="off">
                            <?= csrf_field() ?>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Kosan <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="first-name" name="nama_kosan" class="form-control has-feedback-left <?= ($validation->hasError('nama_kosan') ? 'is-invalid' : '') ?>" value="<?= old('nama_kosan') ?>" autofocus required>
                                    <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama_kosan') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Provinsi Kosan <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control" data-live-search="true" data-width="100%" name="provinsi_kosan" id="provinsi" title="Pilih Provinsi">
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Kota/Kabupaten Kosan <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control" data-live-search="true" data-width="100%" name="kota_kosan" id="kota">
                                        <option>Pilih Kota</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Kecamatan Kosan <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control" data-live-search="true" data-width="100%" name="kecamatan_kosan" id="kecamatan">
                                        <option>Pilih Kecamatan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Kelurahan Kosan <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control" data-live-search="true" data-width="100%" name="kelurahan_kosan" id="kelurahan">
                                        <option>Pilih Kelurahan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Alamat Kosan <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="first-name" name="alamat_kosan" class="form-control has-feedback-left <?= ($validation->hasError('alamat_kosan') ? 'is-invalid' : '') ?>" placeholder="Jalan xxx Gang xxx RT/RW xx/xx" value="<?= old('alamat_kosan') ?>" required>
                                    <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('alamat_kosan') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kosan</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="jenis_kosan" value="Laki-laki"> Laki-laki
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="jenis_kosan" value="Perempuan"> Perempuan
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="jenis_kosan" value="Campur" checked> Campur
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Tersedia Kamar Kosan <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="col-md-3">
                                        <input type="number" min="1" name="tersedia_kosan" class=" form-control<?= ($validation->hasError('tersedia_kosan') ? 'is-invalid' : '') ?>" id="validationCustom01" value="<?= old('tersedia_kosan') ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tersedia_kosan') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Ukuran Panjang x Lebar Kosan <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="col-md-3">
                                        <input type="number" min="1" name="panjang_kosan" class="form-control <?= ($validation->hasError('panjang_kosan') ? 'is-invalid' : '') ?>" id="validationCustom01" value="<?= old('panjang_kosan') ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('panjang_kosan') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" min="1" name="lebar_kosan" class="form-control <?= ($validation->hasError('lebar_kosan') ? 'is-invalid' : '') ?>" id="validationCustom02" value="<?= old('lebar_kosan') ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('lebar_kosan') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Menyediakan Booking Kosan
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    Booking Langsung <input type="radio" name="booking_kosan" value="Booking Langsung" />
                                    Tidak <input type="radio" name="booking_kosan" value="Tidak" checked />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Deskripsi Kosan <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <textarea id="message" class="form-control <?= ($validation->hasError('deskripsi_kosan') ? 'is-invalid' : '') ?>" name="deskripsi_kosan" placeholder="Berikan deskripsi seperti detail alamat atau informasi lainnya" required><?= old('keterangan_kosan') ?></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('deskripsi_kosan') ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Keterangan Kosan <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <textarea id="message" class="form-control <?= ($validation->hasError('keterangan_kosan') ? 'is-invalid' : '') ?>" name="keterangan_kosan" placeholder="Berikan Keterangan bila butuh keterangan lainnya" required><?= old('keterangan_kosan') ?></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('keterangan_kosan') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Harga Kosan Perbulan<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="selectpicker" data-live-search="true" data-width="100%" name="minimal_pembayaran" title="Pilih Minimal Pembayaran">
                                        <?php
                                        for ($i = 0; $i < 12; $i++) {
                                            echo '<option>' . ($i + 1) . ' Bulan</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align fk" for="first-name">Fasilitas Kosan<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control selectpicker" data-live-search="true" data-width="100%" multiple data-selected-text-format="count > 3" name="fasilitas_kosan[]" title="Pilih Fasilitas Kosan">
                                        <option value="Kasur">Kasur</option>
                                        <option>Lemari Baju</option>
                                        <option>TV</option>
                                        <option>AC</option>
                                        <option>WIFI</option>
                                        <option>Bisa Pasutri</option>
                                        <option>2 Orang/Kamar</option>
                                        <option>Bantal</option>
                                        <option>Jendela</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Fasilitas Mandi<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="selectpicker" data-live-search="true" data-width="100%" name="fasilitas_mandi[]" title="Pilih Fasilitas Mandi" multiple data-selected-text-format="count > 3">
                                        <option>K. Mandi Dalam</option>
                                        <option>Kloset Duduk</option>
                                        <option>Shower</option>
                                        <option>Ember</option>
                                        <option>Air Panas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Fasilitas Bersama<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="selectpicker" data-live-search="true" data-width="100%" name="fasilitas_bersama[]" title="Pilih Fasilitas Bersama" multiple data-selected-text-format="count > 3">
                                        <option>R. Tamu</option>
                                        <option>Dapur</option>
                                        <option>R. Jemur</option>
                                        <option>Laundry</option>
                                        <option>Kulkas</option>
                                        <option>Dispenser</option>
                                        <option>CCTV</option>
                                        <option>Satpam</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Fasilitas Parkir<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="selectpicker" data-live-search="true" data-width="100%" name="fasilitas_parkir[]" title="Pilih Fasilitas Parkir" multiple data-selected-text-format="count > 3">
                                        <option>Parkir Motor</option>
                                        <option>Parkir Sepeda</option>
                                        <option>Parkir Mobil</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Area Lingkungan<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="selectpicker" data-live-search="true" data-width="100%" name="area_lingkungan[]" title="Pilih Fasilitas Area Lingkungan" multiple data-selected-text-format="count > 3">
                                        <option>Rumah makan</option>
                                        <option>Mini market</option>
                                        <option>ATM / Bank</option>
                                        <option>Apotek / Klinik</option>
                                        <option>Halte Bus / Pos Ojek</option>
                                        <option>Kampus / Sekolah</option>
                                        <option>Pusat belanja / Mall</option>
                                        <option>Parkir Sepeda</option>
                                        <option>Masjid</option>
                                        <option>Gereja</option>
                                    </select>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Informasi Data Harga Kosan</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a class="dropdown-item" href="#">Settings 1</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Harga Kosan Perhari
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" min="0" data-decimals="2" name="harga_perhari" class="form-control <?= ($validation->hasError('harga_perhari') ? 'is-invalid' : '') ?>" value="<?= old('harga_perhari') ?>" placeholder="Ketik 0 Jika tidak ada harga perhari">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('harga_perhari') ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Harga Kosan Perminggu
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" min="0" data-decimals="2" name="harga_perminggu" class="form-control <?= ($validation->hasError('harga_perminggu') ? 'is-invalid' : '') ?>" value="<?= old('harga_perminggu') ?>" placeholder="Ketik 0 Jika tidak ada harga perminggu">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('harga_perminggu') ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Harga Kosan Perbulan<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" min="0" data-decimals="2" name="harga_perbulan" class="form-control <?= ($validation->hasError('harga_perbulan') ? 'is-invalid' : '') ?>" value="<?= old('harga_perbulan') ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('harga_perbulan') ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Harga Kosan Pertahun
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" min="0" data-decimals="2" name="harga_pertahun" class="form-control <?= ($validation->hasError('harga_pertahun') ? 'is-invalid' : '') ?>" value="<?= old('harga_pertahun') ?>" placeholder="Ketik 0 Jika tidak ada harga pertahun">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('harga_pertahun') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Informasi Data Photo Kosan</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a class="dropdown-item" href="#">Settings 1</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Photo Kosan 1 <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input <?= ($validation->hasError('photo_1') ? 'is-invalid' : '') ?>" name="photo_1" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('photo_1') ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Photo Kosan 2 <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input <?= ($validation->hasError('photo_2') ? 'is-invalid' : '') ?>" name="photo_2" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('photo_2') ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Photo Kosan 3 <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input <?= ($validation->hasError('photo_3') ? 'is-invalid' : '') ?>" name="photo_3" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('photo_3') ?>
                                </div>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <button class="btn btn-primary" type="reset">Reset</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<script>
    const provinsi = document.querySelector('select[name=provinsi_kosan]');
    const kota = document.querySelector('select[name=kota_kosan]');
    const kecamatan = document.querySelector('select[name=kecamatan_kosan]');
    const kelurahan = document.querySelector('select[name=kelurahan_kosan]');
    fetch('https://dev.farizdotid.com/api/daerahindonesia/provinsi')
        .then(response => response.json())
        .then(dataProvinsi => {
            let data = '<option>Pilih</option>';
            dataProvinsi.provinsi.forEach((val, i) => {
                data += `<option id="${val.id}" value="${val.nama}"> ${val.nama} </option>`;
                provinsi.innerHTML = data;
            })
        })
    // $('option:selected', this).attr('id')
    provinsi.addEventListener('change', function() {
        let id_provinsi = this.options[this.selectedIndex].getAttribute('id');
        let kotaKabupaten = document.querySelector('#kota');
        fetch('https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=' + id_provinsi)
            .then(response => response.json())
            .then(dataKota => {
                let dataKot = '';
                dataKota.kota_kabupaten.forEach((val, i) => {
                    dataKot += `<option id="${val.id}" value="${val.nama}"> ${val.nama} </option>`;
                    kota.innerHTML = dataKot;
                })
            })
    })
    kota.addEventListener('change', function() {
        let id_kota = this.options[this.selectedIndex].getAttribute('id');
        let kecamatanSelect = document.querySelector('#kecamatan');
        fetch('https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=' + id_kota)
            .then(response => response.json())
            .then(dataKecamatan => {
                let dataKec = '';
                dataKecamatan.kecamatan.forEach((val, i) => {
                    dataKec += `<option id="${val.id}" value="${val.nama}"> ${val.nama} </option>`;
                    kecamatanSelect.innerHTML = dataKec;
                })
            })
    })

    kecamatan.addEventListener('change', function() {
        let id_kecamatan = this.options[this.selectedIndex].getAttribute('id');
        let kelurahanSelect = document.querySelector('#kelurahan');
        fetch('https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan=' + id_kecamatan)
            .then(response => response.json())
            .then(dataKelurahan => {
                let dataKel = '';
                dataKelurahan.kelurahan.forEach((val, i) => {
                    dataKel += `<option id="${val.id}" value="${val.nama}"> ${val.nama} </option>`;
                    kelurahanSelect.innerHTML = dataKel;
                })
            })
    })
</script>
<?= $this->endSection(); ?>