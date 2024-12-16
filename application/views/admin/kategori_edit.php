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



                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="col-xxl">
                            <div class="container-fluid pt-4 px-4">
                                <?php foreach ($kategori as $aa) { ?>
                                    <div class="rounded h-100 p-4" style="background:white;">
                                        <h6 class="mb-4">Form Edit Kategori</h6>
                                        <form action="<?= base_url('admin/kategori/update') ?>" method="post">
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">nama_kategori</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputEmail3" name="nama_kategori" value="<?= $aa['nama_kategori'] ?>">
                                                </div>
                                            </div>
                                            <input type="hidden" name="id_kategori" value="<?= $aa['id_kategori'] ?>">


                                            <button type="simpan" class="btn btn-primary">Update</button>
                                        </form>
                                    </div>
                                <?php } ?>
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