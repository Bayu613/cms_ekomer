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

                        <form action="<?= base_url('admin/konfigurasi/update') ?>" method="post">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalCenterTitle">Konfigurasi</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col mb-6">
                                            <label for="nameWithTitle" class="form-label">Judul Website</label>
                                            <input type="text" id="nameWithTitle" class="form-control" placeholder="Masukkan Nama" name="judul_website" value="<?= $konfig->judul_website;?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-6">
                                            <label for="nameWithTitle" class="form-label">Profile</label>
                                            <input name="profil_website" class="form-control" value="<?= $konfig->profil_website;?>"></input>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col mb-6">
                                            <label for="nameWithTitle" class="form-label">Facebook</label>
                                            <input type="text" id="nameWithTitle" class="form-control"  name="facebook" value="<?= $konfig->facebook;?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-6">
                                            <label for="nameWithTitle" class="form-label">Instagram</label>
                                            <input type="text" id="nameWithTitle" class="form-control"  name="instagram" value="<?= $konfig->instagram;?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-6">
                                            <label for="nameWithTitle" class="form-label">Email</label>
                                            <input type="text" id="nameWithTitle" class="form-control"  name="email" value="<?= $konfig->email;?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-6">
                                            <label for="nameWithTitle" class="form-label">Alamat</label>
                                            <input type="text" id="nameWithTitle" class="form-control"  name="alamat" value="<?= $konfig->alamat;?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-6">
                                            <label for="nameWithTitle" class="form-label">Whatsapp</label>
                                            <input type="text" id="nameWithTitle" class="form-control"  name="no_wa" value="<?= $konfig->no_wa;?>">
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" fdprocessedid="7zqvqu">Simpan</button>
                                </div>
                        </form>
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