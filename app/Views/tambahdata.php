<?= $this->extend('header') ?>
<?= $this->section('content') ?>
<div class="container">
    <form action="<?= base_url('tambahdata/tambah') ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jurusan</label>
            <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                <option selected>Pilih Jurusan</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                <option value="Akuntansi">Akuntansi</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
            <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                <option selected>Pilih</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="startDate">Tanggal Lahir</label>
            <input id="tanggal_lahir" name="tanggal_lahir" class="form-control" type="date">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Alamat Lengkap</label>
            <textarea class="form-control" id="alamat_lengkap" name="alamat_lengkap" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?= $this->endSection() ?>

<script>
    fetch('https://api.sevenmediatech.com/provinsi')
        .then(response => response.json())
        .then(provinces => console.log(provinces));
</script>