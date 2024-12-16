<!DOCTYPE html>
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
                        <div class="card">
                            <form action="<?= base_url('admin/carousel/simpan') ?>" method="post" enctype="multipart/form-data">
                                <h5 class="card-header">File input</h5>
                                <div class="card-body">
                                    <div class="col mb-6">
                                        <label for="nameWithTitle" class="form-label">Judul</label>
                                        <input type="text" id="nameWithTitle" class="form-control" placeholder="judul" name="judul" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="formFile" class="form-label">Pilih foto dengan ukuran (1:3)</label>
                                        <input class="form-control" type="file" name="foto">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" fdprocessedid="7zqvqu">Simpan</button>
                                </div>
                            </form>
                        </div>




                        <?php foreach ($carousel as $aa) { ?>
                            <div class="col-md-12 mb-3 mt-3">
                                <div class="card h-100">
                                    <img class="card-img-top" src="<?= base_url('upload/carousel/' . $aa['foto']) ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $aa['judul'] ?></h5>
                                        <a class="btn btn-sm btn-danger"
                                            onClick="return confirm('Apakah anda yakin untuk menghapus ini?')"
                                            href="<?= base_url('admin/carousel/hapus/' . $aa['foto']) ?>">
                                            <span class="tf-icons bx bx-trash"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
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