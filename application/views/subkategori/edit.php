<div id="layoutSidenav_content">
    <main>
        <header>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">User</li>
                    <li class="breadcrumb-item">Subkategori</li>
                    <li class="breadcrumb-item text-blue" aria-current="page">Ubah Data</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->
        </header>
        <!-- Main page content-->
        <div class="container mt-4">
            <div class="card mb-4">
                <div class="card-header">
                    Form Subkategori
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $subkategori->id_subkategori ?>" />
                        <div class="form-group">
                            <label class="control-label">Deskripsi<span style="color: red">*</span></label>
                            <input type="text" class="form-control <?= form_error('deskripsi_subkategori') ? 'is-invalid' : '' ?>" name="deskripsi_subkategori" placeholder="Deskripsi" value="<?= $subkategori->deskripsi_subkategori; ?>"></input>
                            <?= form_error('deskripsi_subkategori', '<small class="text-red">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Kategori<span style="color: red">*</span></label>
                            <br />
                            <select class="form-control" name="id_kategori">
                                <option disabled selected>--Pilih Kategori--</option>
                                <?php
                                foreach ($kategori as $row) {
                                ?>
                                    <option value="<?= $row->id_kategori ?>" <?= ($row->id_kategori == $subkategori->id_kategori ? 'selected' : '') ?>>
                                        <?= $row->deskripsi_kategori ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <?= form_error('id_kategori', '<small class="text-red">', '</small>'); ?>
                        </div>
                        <input class="btn btn-primary" type="submit" name="btn" value="Ubah" />
                        <a class="btn btn-outline-primary" href="<?= base_url('subkategori'); ?>">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </main>