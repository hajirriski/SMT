<?= $this->extend('header') ?>
<?= $this->section('content') ?>
<div class="container">
    <form action="<?= base_url('datamahasiswa/edit') ?>" method="post" enctype="multipart/form-data">
        <?php foreach ($mahasiswas as $index => $mahasiswa) : ?>
            <input type="hidden" name="id" id="id" value="<?= $mahasiswa->id ?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" aria-describedby="emailHelp" value="<?= $mahasiswa->nim ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" value="<?= $mahasiswa->nama ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                    <option selected><?= $mahasiswa->jurusan ?></option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                    <option value="Akuntansi">Akuntansi</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" aria-describedby="emailHelp" value="<?= $mahasiswa->tempat_lahir ?>">
            </div>
            <div class="mb-3">
                <label for="startDate">Tanggal Lahir</label>
                <input id="tanggal_lahir" name="tanggal_lahir" id="startDate" class="form-control" type="date" value="<?= $mahasiswa->tanggal_lahir ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Alamat Lengkap</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" id="alamat_lengkap" name="alamat_lengkap"><?= $mahasiswa->alamat_lengkap ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        <?php endforeach ?>
    </form>
</div>
<?= $this->endSection() ?>