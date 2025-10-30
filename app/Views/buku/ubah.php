<?= $this->extend('layout/header') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row">
        <h3 class="mb-0">Form Ubah Buku</h3>
    </div>
    <form action="/buku/simpan" method="post" class="mt-4" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="id_buku" value="<?= $buku['id_buku']; ?>">
        <input type="hidden" name="sampulLama" value="<?= $buku['sampul']; ?>">

        <div class="form-group row">
            <label for="Judul" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
                <input type="text" id="judul" class="form-control <?= ($validation->hasError('Judul')) ? 'is-invalid' : ''; ?>" name="judul" autofocus value="<?= old('judul'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('Judul'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="Pengarang" class="col-sm-2 col-form-label">Pengarang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('pengarang')) ? 'is-invalid' : ""; ?>" id="pengarang" name="pengarang" value="<?= old('pengarang'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('pengarang'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPenerbit" class="col-sm-2 col-form-label">Penerbit</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('penerbit')) ? 'is-invalid' : ""; ?>" name="penerbit" value="<?= old('penerbit'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('penerbit'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputTahun" class="col-sm-2 col-form-label">Tahun Terbit</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('thn_terbit')) ? 'is-invalid' : ""; ?>" name="thn_terbit" value="<?= old('thn_terbit'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('thn_terbit'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputSampul" class="col-sm-2 col-form-label">Sampul</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control <?= ($validation->hasError('sampulg')) ? 'is-invalid' : ""; ?>" value="<?= old('sampul'); ?>">
                </div>
                <div class="invalid-feedback">
                    <?= $validation->getError('sampul'); ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
            </div>
    </form>
</div>
</div>
</div>
<style>
    body {
        background: #f4f6fb;
    }

    .container {
        margin-top: 40px;
        max-width: 700px;
    }

    .card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 16px rgba(44, 62, 80, 0.10);
        padding: 32px 28px;
        margin-bottom: 32px;
    }

    h3 {
        font-weight: 700;
        color: #007bff;
        margin-bottom: 24px;
        letter-spacing: 1px;
    }

    .form-label,
    .col-form-label {
        font-weight: 500;
        color: #007bff;
        margin-bottom: 8px;
    }

    .form-control {
        border-radius: 6px;
        border: 1px solid #90caf9;
        padding: 10px 14px;
        font-size: 16px;
        background: #f8fafc;
        transition: border-color 0.2s;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.10);
    }

    .custom-file-input {
        border-radius: 6px;
        border: 1px solid #90caf9;
        padding: 8px;
        background: #f8fafc;
    }

    .custom-file-label {
        margin-top: 6px;
        color: #555;
        font-size: 15px;
    }

    .btn-primary {
        background: #007bff;
        border: none;
        border-radius: 6px;
        font-weight: 600;
        padding: 8px 28px;
        color: #fff;
        margin-right: 10px;
        transition: background 0.2s;
    }

    .btn-primary:hover {
        background: #0056b3;
    }

    .btn-secondary {
        border-radius: 6px;
        font-weight: 600;
        padding: 8px 28px;
        background: #e9ecef;
        color: #007bff;
        border: none;
        transition: background 0.2s, color 0.2s;
    }

    .btn-secondary:hover {
        background: #bbdefb;
        color: #0056b3;
    }

    .form-group.row {
        margin-bottom: 20px;
    }

    .invalid-feedback {
        font-size: 14px;
        color: #dc3545;
    }
</style>
<script>
    function previewImg() {
        const sampul = document.querySelector('#sampul');
        const imgPreview = document.querySelector('.img-preview');
        
        const fileSampul = new FileReader();
        fileSampul.readAsDataURL(sampul.files[0]);
        
        fileSampul.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>
<?= $this->endSection() ?>