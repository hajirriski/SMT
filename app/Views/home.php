<?= $this->extend('header') ?>
<?= $this->section('content') ?>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">NIM</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Alamat Lengkap</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswas as $index => $mahasiswa) :?>
                <tr>
                    <td><?= $mahasiswa->nim ?></td>
                    <td><?= $mahasiswa->nama ?></td>
                    <td><?= $mahasiswa->jurusan ?></td>
                    <td><?= $mahasiswa->tempat_lahir ?></td>
                    <td><?= $mahasiswa->tanggal_lahir ?></td>
                    <td><?= $mahasiswa->alamat_lengkap ?></td>
                    <td><a href="<?= base_url('datamahasiswa/editdata/' . $mahasiswa->id . '') ?>">Edit</a> <a href="<?= base_url('datamahasiswa/hapus/' . $mahasiswa->id . '') ?>">Hapus</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <br><br>
    <h4>Data Mahasiswa Jurusan Teknik Informatika berumur lebih dari 21 tahun</h4>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">NIM</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Alamat Lengkap</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswas as $index => $mahasiswa) :
                $dateOfBirth = $mahasiswa->tanggal_lahir;
                $today = date("Y-m-d");
                $diff = date_diff(date_create($dateOfBirth), date_create($today));
                $umur = (int)$diff->format('%y');
                $jurusan = $mahasiswa->jurusan;
                if ($umur > 21 && $jurusan == "Teknik Informatika") {
            ?>
                    <tr>
                        <td><?= $mahasiswa->nim ?></td>
                        <td><?= $mahasiswa->nama ?></td>
                        <td><?= $mahasiswa->jurusan ?></td>
                        <td><?= $mahasiswa->tempat_lahir ?></td>
                        <td><?= $mahasiswa->tanggal_lahir ?></td>
                        <td><?= $mahasiswa->alamat_lengkap ?></td>
                        <td><a href="<?= base_url('datamahasiswa/editdata/' . $mahasiswa->id . '') ?>">Edit</a> <a href="<?= base_url('datamahasiswa/hapus/' . $mahasiswa->id . '') ?>">Hapus</a></td>
                    </tr>
            <?php }
            endforeach ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>