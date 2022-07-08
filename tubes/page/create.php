<?php

$process = isset($_GET['process']) ? ($_GET['process']) : false;

?>

<?php if ($process == 'failed') : ?>
    <div class="alert alert-danger" role="alert">
        Semua formulir harus diisi
    </div>
<?php endif; ?>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <h1 style="text-align: center; color: #185ADB;">Form Tambah Pegawai</h1>
                </div>
                <form method="POST" action="<?= 'http://tubes.com/process/process_add.php' ?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>

                    <div class="mb-3">
                        <label for="noid" class="form-label">Nomor ID</label>
                        <input type="number" class="form-control" id="noid" name="noid">
                    </div>

                    <div class="mb-3">
                        <label for="NIM" class="form-label">NIM</label>
                        <input type="number" class="form-control" id="NIM" name="NIM">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>

                    <div class="mb-3">
                        <label for="Jurusan" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" id="Jurusan" name="Jurusan">
                    </div>

                    <div class="mb-3">
                        <label for="Status" class="form-label">Status</label>
                        <input type="text" class="form-control" id="Status" name="Status">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>