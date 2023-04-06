<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<header>
    <div class="container my-5">
        <div class="card h-100 p-3">
            <form>
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input class="form-control form-control-sm" type="text" placeholder="Country, ZIP, city...">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control form-control-sm">
                                <option>Pilih Kategori</option>
                                <option>Alat</option>
                                <option>Gedung</option>
                                <option>Laboratorium</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control form-control-sm" type="date" required="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-btn">
                            <button class="btn btn-outline-primary mt-auto btn-sm">Check availability</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</header>
<!-- Section-->
<section class="pb-5">
    <div class="container">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php foreach($row as $dtProduk):?>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Sale badge-->
                    <div class="badge bg-primary text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                        Sale
                    </div>
                    <!-- Product image-->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-2">
                        <div class="text-center">
                            <!-- Product name-->
                            <p class="mb-0"><?=$dtProduk->nama?></p>
                            <p class="fw-bolder mb-0"><?=$dtProduk->kota?></p>
                            <!-- Product price-->
                            <?="Rp " . number_format($dtProduk->harga_sewa, 2, ",", ".");?>                       
                        </div>
                    </div>
                    
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
<?= $this->section('pagecss') ?>
<?= $this->endSection() ?>
<?= $this->section('pagejs') ?>
<?= $this->endSection() ?>