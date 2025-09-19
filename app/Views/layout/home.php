<?= $this->section('content');?>
    <div class="container">
        <div class="col">
        <h1> Selamat datang di toko buku</h1>
        <h2> Toko ini menyediakan dan menjual macam-macam buku</h2>
        <h3>Koleksi toko ini</h3>
        <p>1. Buku Pemograman</p>
        <p>2. Buku Ajar Bahasa PHP</p>
        <p>3. Buku Ajar Pemograman fraemwork ci</p>
        </div>
    </div>
<?= $this->endsection();?>
<body>
<?= $this->rendersection('content');?>
</body>