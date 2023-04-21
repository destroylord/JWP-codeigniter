<?= $this->extend('appLayout');?>
<?= $this->section('content');?>
    <div class="container">
        <div class="row">
            <div class="col-lg">
                <h4 class="display-4">Biodata </h4>
                <p><strong>Nama:</strong> <?= ucfirst(user()->username);?></p>
                <p><strong>Tempat, Tanggal Lahir:</strong> Lamongan, 3 Januari 2001</p>
                <p><strong>Pendidikan Saat ini:</strong> Diploma 4</p>
                <h2>Keahlian:</h2>
                <ul>
                    <li>Pemrograman Website(Laravel, Codeigniter)</li>
                    <li>Pengembangan aplikasi Android(Flutter)</li>
                    <li>Manajemen basis data(Datawarehouse)</li>
                </ul>
                <p><strong>Hobi:</strong> Membaca buku tentang teknologi, bermain game</p>
            </div>
        </div>
    </div>
<?= $this->endSection();?>