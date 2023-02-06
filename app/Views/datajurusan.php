<?= $this->extend('header') ?>
<?= $this->section('content') ?>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Kode Jurusan</th>
                <th scope="col">Jurusan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jurusans as $index => $jurusan) : ?>
                <tr>
                    <td><?= $jurusan->kode_jurusan ?></td>
                    <td><?= $jurusan->jurusan ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>