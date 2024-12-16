<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="<?= site_url('assets/sneat') ?>/assets/"
    data-template="vertical-menu-template-free">

<head>
    <?php require_once('css.php') ?>
</head>

<body>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <?php require_once('woi.php') ?>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <?php require_once('nav.php') ?>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <?= $this->session->flashdata('alert') ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="mb-4">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter" fdprocessedid="iw7x2p">
                                    Tambah Konten
                                </button>
                            </div>
                            <div class="modal fade" id="modalCenter" tabindex="-1" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document" style="background:#222A42;">
                                    <form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype="multipart/form-data">

                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalCenterTitle">Tambah Konten</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" fdprocessedid="ax0u6d"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col mb-6">
                                                        <label for="nameWithTitle" class="form-label">Judul</label>
                                                        <input type="text" id="nameWithTitle" class="form-control" placeholder="Masukkan Nama" name="judul" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-6">
                                                        <label for="nameWithTitle" class="form-label">Kategori</label>
                                                        <select name="id_kategori" class="form-control">
                                                            <?php foreach ($kategori as $aa) { ?>
                                                                <option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-6">
                                                        <label for="nameWithTitle" class="form-label">Keterangan</label>
                                                        <textarea name="keterangan" class="form-control"></textarea>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col mb-6">
                                                        <label for="nameWithTitle" class="form-label">Foto</label>
                                                        <input type="file" id="nameWithTitle" class="form-control" placeholder="Masukkan Foto" name="foto" required
                                                            accept="image/png, image/gif, image/jpeg">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-6">
                                                        <label for="nameWithTitle" class="form-label">Foto 2</label>
                                                        <input type="file" id="nameWithTitle" class="form-control" placeholder="Masukkan Foto 2" name="foto_2" required
                                                            accept="image/png, image/gif, image/jpeg">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-6">
                                                        <label for="nameWithTitle" class="form-label">Foto 3</label>
                                                        <input type="file" id="nameWithTitle" class="form-control" placeholder="Masukkan Foto 3" name="foto_3" 
                                                            accept="image/png, image/gif, image/jpeg">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col mb-6">
                                                        <label for="nameWithTitle" class="form-label">Foto 4</label>
                                                        <input type="file" id="nameWithTitle" class="form-control" placeholder="Masukkan Foto 4" name="foto_4" 
                                                            accept="image/png, image/gif, image/jpeg">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col mb-6">
                                                        <label for="nameWithTitle" class="form-label">Harga</label>
                                                        <input type="number" id="nameWithTitle" class="form-control" placeholder="Masukkan Harga" name="harga" required>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col mb-6">
                                                        <label for="nameWithTitle" class="form-label">Diskon</label>
                                                        <input type="number" id="nameWithTitle" class="form-control" placeholder="Masukkan Diskon" name="diskon" >
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" fdprocessedid="3t093q">Close</button>
                                                <button type="submit" class="btn btn-primary" fdprocessedid="7zqvqu">Simoan</button>
                                            </div>
                                    </form>
                                            
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <h5 class="card-header">Kategori Konten</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Kategori Konten</th>
                                        <th>Tanggal</th>
                                        <th>Kreator</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <?php $no = 1;
                                    foreach ($konten as $aa) { ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $aa['judul'] ?></td>
                                            <td><?= $aa['nama_kategori'] ?></td>
                                            <td><?= $aa['tanggal'] ?></td>
                                            <td><?= $aa['nama'] ?></td>
                                            <td>
                                                <a href="<?= base_url('upload/konten/' . $aa['foto']) ?>" target="_blank">
                                                    <span class="tf-icons bx bx-search"></span>Lihat foto
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-danger"
                                                    onClick="return confirm('Apakah anda yakin untuk menghapus ini?')"
                                                    href="<?= base_url('admin/konten/hapus/' . $aa['foto']) ?>">
                                                    <span class="tf-icons bx bx-trash"></span>
                                                </a>

                                                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#konten<?= $no; ?>" fdprocessedid="iw7x2p">
                                                    <span class="tf-icons bx bx-edit"></span>
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="konten<?= $no; ?>" tabindex="-1" style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <form action="<?= base_url('admin/konten/update') ?>" method="post"
                                                            enctype="multipart/form-data">
                                                            <input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">

                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="modalCenterTitle"><?= $aa['judul'] ?></h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" fdprocessedid="ax0u6d"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col mb-6">
                                                                            <label for="nameWithTitle" class="form-label">Judul</label>
                                                                            <input type="text" id="nameWithTitle" class="form-control" placeholder="Masukkan Nama" name="judul" value="<?= $aa['judul'] ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col mb-6">
                                                                            <label for="nameWithTitle" class="form-label">Kategori</label>
                                                                            <select name="id_kategori" class="form-control">
                                                                                <?php foreach ($kategori as $uu) { ?>
                                                                                    <option
                                                                                        <?php if ($uu['id_kategori'] == $aa['id_kategori']) {
                                                                                            echo "selected";
                                                                                        } ?>
                                                                                        value="<?= $uu['id_kategori'] ?>">
                                                                                        <?= $uu['nama_kategori'] ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col mb-6">
                                                                            <label for="nameWithTitle" class="form-label">Keterangan</label>
                                                                            <textarea name="keterangan" class="form-control"><?= $aa['keterangan'] ?></textarea>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col mb-6">
                                                                            <label for="nameWithTitle" class="form-label">Foto 1</label>
                                                                            <input type="file" class="form-control" placeholder="Masukkan Nama" value="<?= $aa['foto'] ?>" name="foto"
                                                                                accept="image/png, image/gif, image/jpeg">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col mb-6">
                                                                            <label for="nameWithTitle" class="form-label">Foto 2</label>
                                                                            <input type="file" class="form-control" placeholder="Masukkan Foto" value="<?= $aa['foto_2'] ?>" name="foto_2"
                                                                                accept="image/png, image/gif, image/jpeg">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col mb-6">
                                                                            <label for="nameWithTitle" class="form-label">Foto 3</label>
                                                                            <input type="file" class="form-control" placeholder="Masukkan Foto" value="<?= $aa['foto_3'] ?>" name="foto_3"
                                                                                accept="image/png, image/gif, image/jpeg">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col mb-6">
                                                                            <label for="nameWithTitle" class="form-label">Foto 4</label>
                                                                            <input type="file" class="form-control" placeholder="Masukkan Foto" value="<?= $aa['foto_4'] ?>" name="foto_4"
                                                                                accept="image/png, image/gif, image/jpeg">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col mb-6">
                                                                            <label for="nameWithTitle" class="form-label">Harga</label>
                                                                            <input type="number" id="nameWithTitle" class="form-control" placeholder="Masukkan Foto" value="<?= $aa['harga'] ?>" name="harga" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col mb-6">
                                                                            <label for="nameWithTitle" class="form-label">Diskon</label>
                                                                            <input type="number" id="nameWithTitle" class="form-control" placeholder="Masukkan Foto" value="<?= $aa['diskon'] ?>" name="diskon">
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" name="id_konten" value="<?=$aa['id_konten']?>">

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" fdprocessedid="3t093q">Close</button>
                                                                    <button type="submit" class="btn btn-primary" fdprocessedid="7zqvqu">Simoan</button>
                                                                </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                    <?php $no++;
                                    } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- / Content -->

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            , made with ❤️ by
                            <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">Bayu</a>
                        </div>

                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= site_url('assets/sneat') ?>/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= site_url('assets/sneat') ?>/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= site_url('assets/sneat') ?>/assets/vendor/js/bootstrap.js"></script>
    <script src="<?= site_url('assets/sneat') ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?= site_url('assets/sneat') ?>/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?= site_url('assets/sneat') ?>/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="<?= site_url('assets/sneat') ?>/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?= site_url('assets/sneat') ?>/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>