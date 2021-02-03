<div class="container-fluid">
    <form method="post" action="add">
        <div class="container">
            <div class="card shadow">
                <div class="card-header">
                    <h4><b>Detil Tagihan</b></h4>
                </div>
                <div class="card-body">

                    <!-- //billing detail -->

                    <div class="container form-group">
                        <div class="col-lg">
                            <div class="row-lg form-group">
                                <label><b>Nama</b></label>
                                <input type="text" value="<?php echo $pengguna->nama_pengguna ?>" class="form-control" />
                            </div>
                            <div class="row-lg form-group">
                                <label><b>Alamat</b></label>
                                <input type="text" value="<?php echo $pengguna->alamat ?>" class="form-control" />
                            </div>
                            <div class="row-lg form-group">
                                <label><b>Kota</b></label>
                                <input type="text" value="<?php echo $pengguna->kota ?>" class="form-control" />
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label><b>Email</b></label>
                                    <input type="text" value="<?php echo $pengguna->email ?>" class="form-control" />
                                </div>
                                <div class="col-lg-6">
                                    <label><b>No Telepon</b></label>
                                    <input type="text" value="<?php echo $pengguna->telp ?>" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //product detail -->

            <div class="card shadow">
                <div class="card-header">
                    <h4><b>Produk Pesanan</b></h4>
                </div>
                <div class="card-body">
                    <div class="container">
                        <?php foreach ($keranjang as $cart) : ?>
                            <div class="row">
                                <?php foreach ($produk as $list) :
                                    if ($cart->id_produk == $list->id_produk) :
                                ?>
                                        <div class="col-lg-2" style="vertical-align: middle">
                                            <img src="<?= base_url("assets/customer/img/product/Are-Coffee-Bag-Valves-Important-oxidation-bmc.jpg") ?>" class="img-thumbnail">
                                        </div>
                                        <div class="col-lg-3 justify-content-center align-self-center">
                                            <p><b><?php echo $list->nama_produk; ?></b></p>
                                        </div>
                                <?php
                                    endif;
                                endforeach;
                                ?>
                                <div class="col-lg-3 justify-content-center align-self-center">
                                    <p><?= $cart->qty ?></p>
                                </div>
                                <div class="col-lg justify-content-right align-self-center">
                                    <p>Rp. <?= $cart->total_harga ?></p>
                                </div>
                                <div>
                                    <input name="id_produk" value="<?php echo $list->id_produk ?>" type="hidden" />
                                    <input name="jumlah_produk" value="<?php echo $cart->qty ?>" type="hidden" />
                                    <input name="subtotal_harga" value="<?php echo $cart->total_harga ?>" type="hidden" />
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- //ongkir -->
                        <hr>
                        <div class="row">
                            <div class="col-lg-8">
                                <p>Ongkos Kirim</p>
                            </div>
                            <div class="col-lg text-align-right">
                                <p>Rp. <?php echo $ongkir ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-8">
                                <h5><b>Total Belanjaan</b></h5>
                            </div>
                            <div class="col-lg text-align-right">
                                <h5><b>Rp. <?php echo $total ?></b></h5>
                                <input name="total_harga" value="<?php echo $total ?>" type="hidden" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <a href="<?php echo site_url('TransaksiBeli/add') ?>">
                            <button class="btn btn-user" style="background-color: rgba(221, 161, 94, 0.9); color:white" formmethod="post" formaction="add">Konfirmasi
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>