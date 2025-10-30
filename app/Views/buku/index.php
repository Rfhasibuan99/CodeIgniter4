<?= $this->extend('layout/header') ?> <!-- Meng-extend layout header (CodeIgniter 4 Template Layout) -->
<?= $this->section('content') ?> <!-- Membuka section content -->
<div class="container">
    <div class="row">
        <div class="col">
            <!-- Judul Halaman -->
            <h1>Daftar Buku</h1>
            <form action="<?= site_url('/buku') ?>" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan Pencarian Buku" name="cari" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="submit">Cari</button>
                </div>
            </form>
            <?php if (session()->getFlashdata('pesan')): ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <!-- Tombol tambah buku -->
            <a href="/buku/tambah" class="btn btn-primary">Tambah Buku</a>

            <!-- Tabel daftar buku -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th> <!-- Nomor urut buku -->
                        <th scope="col">Sampul</th> <!-- Gambar sampul -->
                        <th scope="col">Judul</th> <!-- Judul buku -->
                        <th scope="col">Aksi</th> <!-- Tombol aksi -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1 + (2 * ($current - 1)); // Inisialisasi nomor urut
                    foreach ($buku as $b): // Looping data buku
                    ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th> <!-- Nomor urut -->
                            <td><img src="/img/<?= $b['sampul'] ?>" alt="Sampul Buku" width="75"></td> <!-- Sampul buku -->
                            <td><?= esc($b['Judul']) ?></td> <!-- Judul buku -->
                            <td>
                                <!-- Tombol menuju halaman detail buku -->
                                <a href="/buku/<?= $b['id_buku'] ?>" class="btn-detail">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $pager->links('buku', 'page_buku') ?> <!-- Menampilkan link pagination dengan template page_buku -->
<?= $this->endSection(); ?> <!-- Menutup section content -->