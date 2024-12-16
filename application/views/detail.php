<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $judul ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        html,
        body {
            font-family: 'Roboto', sans-serif;
        }

        img {
            width: 100%;
            display: block;
        }

        .main-wrapper {
            min-height: 100vh;
            background-color: #f1f1f1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            max-width: 1200px;
            padding: 0 1rem;
            margin: 0 auto;
        }

        .product-div {
            margin: 1rem 0;
            padding: 2rem 0;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            background-color: #fff;
            border-radius: 3px;
            column-gap: 10px;
        }

        .product-div-left {
            padding: 20px;
        }

        .product-div-right {
            padding: 20px;
        }

        .img-container img {
            width: 400px;
            margin: 0 auto;
        }

        .hover-container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            margin-top: 32px;
        }

        .hover-container div {
            border: 2px solid white;
            padding: 1rem;
            border-radius: 3px;
            margin: 0 4px 8px 4px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .active {
            border-color: gray !important;
        }



        .hover-container div img {
            width: 50px;
            cursor: pointer;
        }

        .product-div-right span {
            display: block;
        }

        .product-name {
            font-size: 26px;
            margin-bottom: 22px;
            font-weight: 700;
            letter-spacing: 1px;
            opacity: 0.9;
        }

        .product-price {
            font-weight: 700;
            font-size: 24px;
            opacity: 0.9;
            font-weight: 500;
        }

        .product-rating {
            display: flex;
            align-items: center;
            margin-top: 12px;
        }

        .product-rating span {
            margin-right: 6px;
        }

        .product-description {
            font-weight: 18px;
            line-height: 1.6;
            font-weight: 300;
            opacity: 0.9;
            margin-top: 22px;
        }

        .btn-groups {
            margin-top: 22px;
        }

        .btn-groups button {
            display: inline-block;
            font-size: 16px;
            font-family: inherit;
            text-transform: uppercase;
            padding: 15px 16px;
            color: #fff;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-groups button .fas {
            margin-right: 8px;
        }

        .add-cart-btn {
            background-color: #FF9F00;
            border: 2px solid #FF9F00;
            margin-right: 8px;
        }

        .add-cart-btn:hover {
            background-color: #fff;
            color: #FF9F00;
        }

        .buy-now-btn {
            background-color: #000;
            border: 2px solid #000;
        }

        .buy-now-btn:hover {
            background-color: #fff;
            color: #000;
        }

        .quantity-container {
            display: flex;
            align-items: center;
            margin: 10px 0;
        }

        .quantity-container label {
            font-size: 1em;
            font-weight: bold;
            margin-right: 10px;
            color: #333;
        }

        .quantity-container input[type="number"] {
            width: 60px;
            padding: 5px;
            font-size: 1em;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            transition: border 0.3s ease;
        }

        .quantity-container input[type="number"]:focus {
            border-color: gray;
        }

        .quantity-container {
            margin-bottom: 15px;
        }


        @media screen and (max-width: 992px) {
            .product-div {
                grid-template-columns: 100%;
            }

            .product-div-right {
                text-align: center;
            }

            .product-rating {
                justify-content: center;
            }

            .product-description {
                max-width: 400px;
                margin-right: auto;
                margin-left: auto;
            }
        }

        @media screen and (max-width: 400px) {
            .btn-groups button {
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body>

    <div class="main-wrapper">
        <div class="container">
            <div class="product-div">
                <div class="product-div-left">
                    <div class="img-container">
                        <img src="<?= base_url('upload/konten/' . $konten->foto) ?>" alt="watch" style="width:600px;">
                    </div>
                    <div class="hover-container">
                        <div><img src="<?= base_url('upload/konten/' . $konten->foto) ?>"></div>
                        <div><img src="<?= base_url('upload/konten/' . $konten->foto_2) ?>"></div>
                        <?php if (!empty($konten->foto_3) && file_exists('upload/konten/' . $konten->foto_3)) { ?>
                            <div><img src="<?= base_url('upload/konten/' . $konten->foto_3) ?>"></div>
                        <?php } ?>

                        <?php if (!empty($konten->foto_4) && file_exists('upload/konten/' . $konten->foto_4)) { ?>
                            <div><img src="<?= base_url('upload/konten/' . $konten->foto_4) ?>" alt="Foto Konten"></div>
                        <?php } ?>


                    </div>
                </div>
                <div class="product-div-right">
                    <span class="product-name"><?= $konten->judul ?></span>
                    <span class="product-price">Rp <?= number_format($konten->harga, 0, ',', '.') ?></span>
                    <div class="product-rating">
                        <span><i style="color:#FF9F00;" class="fas fa-star"></i></span>
                        <span><i style="color:#FF9F00;" class="fas fa-star"></i></span>
                        <span><i style="color:#FF9F00;" class="fas fa-star"></i></span>
                        <span><i style="color:#FF9F00;" class="fas fa-star"></i></span>
                        <span><i style="color:#FF9F00;" class="fas fa-star-half-alt"></i></span>
                        <span>(350 ratings)</span>
                    </div>
                    <p class="product-description"><?= htmlspecialchars($konten->keterangan) ?></p>
                    <div class="quantity-container">
                        <label for="quantity">Quantity: </label>
                        <input type="number" id="quantity" value="1" min="1">
                    </div>


                    <div class="btn-groups">
                        <button type="button" class="add-cart-btn"><i class="fas fa-shopping-cart"></i>add to cart</button>
                        <a href="<?= base_url('welcome/transaksi_langsung/' . $konten->slug) ?>">

                            <button type="button" class="buy-now-btn"><i class="fas fa-wallet"></i>buy now</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const price = <?= $konten->harga ?>;
        const quantityInput = document.getElementById('quantity');
        const priceDisplay = document.getElementById('price');

        quantityInput.addEventListener('input', function() {
            const quantity = parseInt(quantityInput.value);
            const totalPrice = price * quantity;
            priceDisplay.textContent = `Rp ${totalPrice.toLocaleString()}`;
        });
    </script>


    <script>
        const allHoverImages = document.querySelectorAll('.hover-container div img');
        const imgContainer = document.querySelector('.img-container');

        window.addEventListener('DOMContentLoaded', () => {
            allHoverImages[0].parentElement.classList.add('active');
        });

        allHoverImages.forEach((image) => {
            image.addEventListener('mouseover', () => {
                imgContainer.querySelector('img').src = image.src;
                resetActiveImg();
                image.parentElement.classList.add('active');
            });
        });

        function resetActiveImg() {
            allHoverImages.forEach((img) => {
                img.parentElement.classList.remove('active');
            });
        }
    </script>
</body>

</html>