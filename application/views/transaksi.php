<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('transaksi/') ?>tailwindcss-colors.css">
    <link rel="stylesheet" href="<?= base_url('transaksi/') ?>style.css">
    <title>Payment Page</title>
    <style>
        /* Container styling */
        .a {
            margin-bottom: 20px;
            font-family: 'Roboto', sans-serif;
        }

        /* Label styling */
        .a label {
            display: block;
            font-size: 16px;
            font-weight: 500;
            color: #333;
            margin-bottom: 10px;
            letter-spacing: 0.5px;
        }

        /* Input file styling */
        .a input[type="file"] {
            display: block;
            width: 100%;
            padding: 12px 15px;
            font-size: 14px;
            color: #555;
            background-color: #f0f0f0;
            border: 1px solid #ddd;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        /* Hover effect */
        .a input[type="file"]:hover {
            background-color: #e6e6e6;
            border-color: #ccc;
        }

        /* Focus effect */
        .a input[type="file"]:focus {
            outline: none;
            border-color: #00aaff;
            background-color: #fff;
            box-shadow: 0 0 8px rgba(0, 170, 255, 0.5);
        }

        /* Custom button styling for input file */
        .a input[type="file"]::-webkit-file-upload-button {
            padding: 10px 20px;
            background-color: #6366f1;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        /* Hover effect untuk tombol */
        .a input[type="file"]::-webkit-file-upload-button:hover {
            background-color: #008ecc;
        }
    </style>
</head>


<body>

    <!-- start: Payment -->
    <section class="payment-section">
        <div class="container">
            <div class="payment-wrapper">
                <div class="payment-left">
                    <div class="payment-header">
                        <div class="payment-header-icon"><i class="ri-flashlight-fill"></i></div>
                        <div class="payment-header-title">Order Summary</div>
                        <p class="payment-header-description"><?= $this->session->userdata('email') ?></p>
                    </div>
                    <div class="payment-content">
                        <div class="payment-body">
                            <div class="payment-plan">
                                <div class="payment-plan-type">Bay</div>
                                <div class="payment-plan-info">
                                    <div class="payment-plan-info-name">BAYUPEDIA</div>
                                    <div class="payment-plan-info-price">Product List</div>
                                </div>
                            </div>
                            <div class="payment-summary">
                                <?php
                                $no = 0;
                                foreach ($this->cart->contents() as $items) {

                                ?>
                                    <div class="payment-summary-item">
                                        <div class="payment-summary-name">
                                            <?= implode(' ', array_slice(explode(' ', $items['name']), 0, 5)) ?>
                                        </div>
                                        <div class="payment-summary-price">Rp<?= number_format($items['price'], 0, ',', '.') ?></div>
                                    </div>
                                <?php } ?>
                                <div class="payment-summary-divider"></div>
                                <div class="payment-summary-item payment-summary-total">
                                    <div class="payment-summary-name">Total</div>
                                    <div class="payment-summary-price"> Rp<?= number_format($this->cart->total(), 0, ',', '.') ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="payment-right">
                    <?php
                    $counter = 0;  // Initialize counter
                    $max_items = 1; // Set maximum number of items to display

                    // Loop through the cart items
                    foreach ($this->cart->contents() as $items):
                        if ($counter >= $max_items) break; // Limit to 1 item
                    ?>
                        <form action="<?= base_url('transaksi/bayar/') ?>" method="post" class="payment-form" enctype="multipart/form-data">
                            <h1 class="payment-title">Pembayaran</h1>
                            <div class="payment-method">
                                <input type="radio" name="via" value="Visa" id="method-1" checked>
                                <label for="method-1" class="payment-method-item">
                                    <img src="<?= base_url('transaksi/') ?>images/visa.png" alt="">
                                </label>
                                <input type="radio" name="via" value="Gopay" id="method-2">
                                <label for="method-2" class="payment-method-item">
                                    <img src="<?= base_url('transaksi/') ?>images/1.png" alt="">
                                </label>

                                <input type="radio" name="via" value="Dana" id="method-3" checked>
                                <label for="method-3" class="payment-method-item">
                                    <img src="<?= base_url('transaksi/') ?>images/dana.png" alt="">
                                </label>
                                <input type="radio" name="via" value="Ovo" id="method-4" checked>
                                <label for="method-4" class="payment-method-item">
                                    <img src="<?= base_url('transaksi/') ?>images/ovo.png" alt="">
                                </label>
                                <input type="hidden" name="total" value="<?= $this->cart->total() ?>">

                            </div>
                            <div class="payment-form-group">
                                <input type="text" name="alamat" placeholder=" " class="payment-form-control" id="email">
                                <label for="email" class="payment-form-label payment-form-label-required">Alamat</label>
                            </div>
                            <div class="payment-form-group">
                                <input type="hidden" name="barcode" placeholder=" " value="<?= date('YmdHis') ?>" class="payment-form-control" id="email">
                            </div>
                            <div class="payment-form-group">
                                <input type="number" name="no" class="payment-form-control">
                                <label for="email" class="payment-form-label payment-form-label-required">Nomor</label>
                            </div>
                            <div class="a">
                                <label>Bukti Pembayaran</label>
                                <input type="file" name="foto" placeholder=" " class="a" id="email">
                            </div>
                            <input type="hidden" name="belanja" value="<?=$items['name']?>">
                            <input type="hidden" name="belanja" value="<?=$items['name']?>">
                            <input type="hidden" name="belanja" value="<?=$items['name']?>">

                            <input type="hidden" name="status" value="Tertunda">

                            <button type="submit" class="payment-form-submit-button"><i class="ri-wallet-line"></i> Pay</button>
                        </form>
                    <?php
                        $counter++; // Increment the counter
                    endforeach;
                    ?>

                </div>
            </div>
        </div>
    </section>
    <!-- end: Payment -->

</body>

</html>