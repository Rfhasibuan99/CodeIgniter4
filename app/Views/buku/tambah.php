<?= $this->extend('layout/header'); ?>
<?= $this->section('content'); ?>
<style>
    body {
        background: #f8f9fa;
    }
    .container {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        padding: 32px 24px;
        margin-top: 32px;
    }
    h3 {
        color: #007bff;
        font-weight: 600;
    }
    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
    }
    .btn-primary {
        background: linear-gradient(90deg,#007bff 60%,#0056b3 100%);
        border: none;
        font-weight: 500;
        padding: 8px 32px;
    }
    .btn-primary:hover {
        background: linear-gradient(90deg,#0056b3 60%,#007bff 100%);
    }
    label {
        font-weight: 500;
    }
</style>
<div class="container">
    <div class="col">
        <h3 class="mt-2">Form Tambah Buku</h3>
        <form action="/buku/simpan" method="post" class="mt-4" enctype="multipart/form-data">
            <?= csrf_field(); ?>

            <div class="form-group row">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" id="judul" 
                           class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" 
                           name="judul" autofocus value="<?= old('judul'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('judul'); ?>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
                <div class="col-sm-10">
                    <input type="text" id="pengarang" 
                           class="form-control <?= ($validation->hasError('pengarang')) ? 'is-invalid':"";?>" 
                           name="pengarang" value="<?= old('pengarang'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('pengarang'); ?>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                <div class="col-sm-10">
                    <input type="text" id="penerbit" 
                           class="form-control <?= ($validation->hasError('penerbit')) ? 'is-invalid':"";?>" 
                           name="penerbit" value="<?= old('penerbit'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('penerbit'); ?>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="thn_terbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
                <div class="col-sm-10">
                    <input type="text" id="thn_terbit"
                           class="form-control <?= ($validation->hasError('thn_terbit')) ? 'is-invalid':"";?>" 
                           name="thn_terbit" value="<?= old('thn_terbit'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('thn_terbit'); ?>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                <div class="col-sm-10">
                    <input type="file" id="sampul" name="sampul" 
                           class="form-control <?= ($validation->hasError('sampul')) ? 'is-invalid':"";?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('sampul'); ?>
                    </div>
                </div>
            </div>

            <div class="form-group row mt-3">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div> 
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>
