<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SETRUK</title>
  <style>
    body {
    font-family: 'Courier New', monospace;
    margin: 20px;
    padding: 0;
    color: #333;
    background-color: #f8f8f8;
}

.receipt {
    max-width: 350px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border: 1px dashed #000;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.receipt-header,
.receipt-footer {
    text-align: center;
    margin-bottom: 20px;
}

.receipt-header h1 {
    font-size: 28px;  /* Larger store name font size */
    margin: 0;
}

.receipt-header p {
    font-size: 16px;  /* Larger address and phone number font size */
    margin: 5px 0;
}

.receipt-body {
    border-top: 1px dashed #000;
    border-bottom: 1px dashed #000;
    padding: 10px 0;
    margin-bottom: 20px;
}

.receipt-body table {
    width: 100%;
    border-collapse: collapse;
}

.receipt-body table th,
.receipt-body table td {
    font-size: 16px;  /* Larger text for product info */
    text-align: left;
    padding: 8px 0;
}

.receipt-body table th {
    width: 45%;
    font-weight: normal;
}

.receipt-body table td {
    width: 55%;
}

.receipt-total {
    text-align: right;
    margin-top: 15px;
    font-size: 18px;  /* Larger font size for total */
    font-weight: bold;
}

.receipt-footer p {
    font-size: 14px;  /* Larger footer text */
    margin: 5px 0;
    line-height: 1.5;
}

@media print {
    body {
        margin: 0;
        padding: 0;
        background-color: #fff;
    }

    .receipt {
        border: none;
        box-shadow: none;
        padding: 0;
    }

    .receipt-header h1 {
        font-size: 30px;  /* Larger font for printed version */
    }

    .receipt-body table th,
    .receipt-body table td {
        font-size: 18px;  /* Larger font for printed product details */
    }

    .receipt-total {
        font-size: 22px;  /* Larger font for printed total */
    }

    .receipt-footer p {
        font-size: 16px;  /* Larger footer text for printed version */
    }
}

  </style>

</head>

<body>
    <div class="receipt">
        <div class="receipt-header">
            <img src="<?= base_url('assets/mio/') ?>assets/images/logo/lofo4.svg" alt="Anon's logo" width="140" height="60">
            <p>Karanganyar, Jawa Tengah</p>
            <p>Telp: +62 858-0064-3035</p>
        </div>

        <div class="receipt-body">
            <table>
                <tr>
                    <th>Kode Produk</th>
                    <td>:<?= $transaksi->barcode ?></td>
                </tr>
                <tr>
                    <th>Metode Pembayaran</th>
                    <td>:<?= $transaksi->via ?></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:<?= $transaksi->alamat ?></td>
                </tr>
                <tr>
                    <th>Kontak</th>
                    <td>:<?= $transaksi->no ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>:<?= $transaksi->email ?></td>
                </tr>
                <tr>
                    <th>Barang Belanja</th>
                    <td>:<?= $transaksi->belanja ?></td>
                </tr>
            </table>
            <div class="receipt-total">
                <strong>Total: Rp<?= number_format($transaksi->total, 0, ',', '.') ?></strong>
            </div>
        </div>

        <div class="receipt-footer">
            <p>Terima kasih telah berbelanja!</p>
            <p>Barang yang sudah dibeli tidak dapat dikembalikan.</p>
        </div>
    </div>

    <script>
        window.print();
    </script>
</body>

</html>