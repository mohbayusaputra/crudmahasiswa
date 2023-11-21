<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Data Calon Presiden
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Capres/update'); ?>" method="POST">
                        <input type="hidden" name="id" value="<?= $capres['id']; ?>">
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" value="<?= $capres['nama_lengkap']; ?>" class="form-control"
                                id="nama_lengkap">
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" value="<?= $capres['nik']; ?>" class="form-control" id="niK">
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="text" name="umur" value="<?= $capres['umur']; ?>" class="form-control"
                                id="umur">
                        </div>
                        <div class="form-group">
                            <label for="asal">Asal</label>
                            <input type="text" name="asal" value="<?= $capres['asal']; ?>"
                                class="form-control" id="asal" >
                        </div>
                        <div class="form-group">
                            <label for="riwayat_pekerjaan">Riwayat Pekerjaan</label>
                            <input type="text" name="riwayat_pekerjaan" value="<?= $capres['riwayat_pekerjaan']; ?>" class="form-control"
                                id="riwayat_pekerjaan" >
                        </div>
                        <div class="form-group">
                            <label for="partai_pendukung">Partai Pendukung</label>
                            <input type="text" name="partai_pendukung" value="<?= $capres['partai_pendukung']; ?>" class="form-control"
                                id="partai_pendukung" >
                        </div>
                        <a href="<?= base_url('Capres') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Calon Presiden</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>