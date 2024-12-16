<style>
	/* General Styling */
	body {
		font-family: 'Poppins', sans-serif;
		margin: 0;
		padding: 0;
		background-color: #f8f8f8;
		color: #333;
	}

	/* Container Styling */
	.cart-container {
		max-width: 1300px;
		margin: 50px auto;
		display: flex;
		gap: 30px;
		padding: 30px;
		background-color: #ffffff;
		border-radius: 20px;
		border: 1px solid #e0e0e0;
		box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
	}

	/* CART CONTENT */
	.cart-content {
		flex: 3;
		display: flex;
		flex-direction: column;
		gap: 20px;
	}

	/* CART ITEM */
	.cart-item {
		display: flex;
		justify-content: space-between;
		align-items: center;
		padding: 20px;
		background-color: #ffffff;
		border-radius: 10px;
		box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
		border: 1px solid #f0f0f0;
		transition: transform 0.4s ease, box-shadow 0.3s ease;
	}

	.cart-item:hover {
		transform: translateY(-5px);
		box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
	}

	.cart-item-left {
		display: flex;
		align-items: center;
		gap: 20px;
	}

	.product-image {
		width: 120px;
		height: 120px;
		border-radius: 12px;
		object-fit: cover;
		border: 3px solid #f0f0f0;
		box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
	}

	.product-info {
		display: flex;
		flex-direction: column;
		gap: 8px;
	}

	.product-brand {
		font-size: 18px;
		font-weight: bold;
		color: #333;
	}

	.product-name {
		font-size: 16px;
		color: #555;
		line-height: 1.5;
	}

	.product-stock {
		font-size: 13px;
		color: #ff5722;
		font-weight: bold;
	}

	.cart-item-right {
		display: flex;
		flex-direction: column;
		align-items: flex-end;
		gap: 15px;
	}

	.product-price {
		font-size: 22px;
		font-weight: bold;
		color: #333;
	}

	/* ACTION BUTTONS */
	.item-actions {
		display: flex;
		align-items: center;
		gap: 15px;
	}

	.btn-action {
		background: #ffffff;
		border: none;
		border-radius: 50%;
		width: 40px;
		height: 40px;
		font-size: 18px;
		display: flex;
		align-items: center;
		justify-content: center;
		color: #888;
		cursor: pointer;
		box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
		transition: background 0.3s ease, transform 0.3s ease;
	}

	.btn-action:hover {
		background: #f5f5f5;
		transform: scale(1.1);
		color: #ff5722;
	}

	/* QUANTITY CONTROL */
	.quantity-control {
		display: flex;
		align-items: center;
		gap: 8px;
	}

	.btn-qty {
		padding: 10px 16px;
		border: none;
		border-radius: 8px;
		background-color: #ff5722;
		font-size: 16px;
		font-weight: bold;
		color: #ffffff;
		cursor: pointer;
		transition: background 0.3s ease, transform 0.3s ease;
	}

	.btn-qty:hover {
		background-color: #e64a19;
		transform: scale(1.1);
	}

	.qty-input {
		width: 60px;
		text-align: center;
		border: none;
		background-color: #f9f9f9;
		border-radius: 8px;
		font-size: 16px;
		font-weight: bold;
		color: #333;
		padding: 8px;
		box-shadow: inset 0 2px 6px rgba(0, 0, 0, 0.1);
	}

	/* CART SUMMARY */
	.cart-summary {
		flex: 1;
		padding: 25px;
		background-color: #ffffff;
		border-radius: 10px;
		box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
		display: flex;
		flex-direction: column;
		gap: 20px;
	}

	.cart-summary h2 {
		font-size: 24px;
		font-weight: 700;
		color: #333;
	}

	.summary-total {
		display: flex;
		justify-content: space-between;
		align-items: center;
		font-size: 22px;
		font-weight: bold;
		color: #333;
	}

	.promo-section {
		display: flex;
		align-items: center;
		gap: 12px;
		background: #fafafa;
		padding: 12px;
		border-radius: 8px;
		box-shadow: inset 0 2px 6px rgba(0, 0, 0, 0.1);
	}

	.promo-icon {
		font-size: 18px;
		color: #ff5722;
	}

	.promo-link {
		font-size: 16px;
		color: #ff5722;
		font-weight: bold;
		text-decoration: none;
		transition: color 0.3s ease;
	}

	.promo-link:hover {
		color: #e64a19;
		text-decoration: underline;
	}

	/* CHECKOUT BUTTON */
	.btn-checkout {
		padding: 15px;
		background-color: #ff5722;
		color: white;
		border: none;
		border-radius: 10px;
		font-size: 18px;
		font-weight: bold;
		cursor: pointer;
		text-align: center;
		box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
		transition: background-color 0.3s ease, transform 0.3s ease;
	}

	.btn-checkout:hover {
		background-color: #e64a19;
		transform: scale(1.05);
	}
</style>

<div class="cart-container">
	<div class="cart-content">
		<h2>Keranjang Belanja</h2>


		<!-- Cart Item -->
		<?php 
			$no=0;
			foreach($this->cart->contents() as $items){
			
			?>
		<div class="cart-item">
			<div class="cart-item-left">

				<img src="<?=base_url('upload/konten/' . $items['foto'])?>" alt="Product Image" width="150">
				<div class="product-info">
					<h2 class="product-brand" style="width: 500px; margin-left:1rem;"><?=$items['name']?></h2>
				</div>
			</div>
			<div class="cart-item-right">
				<span class="product-price">Rp<?=number_format($items['price'],0,',','.')?></span>
				<div class="item-actions">
					<!-- <button class="btn-action">🤍</button>
					<a href="<?=base_url('welcome/hps/' . $items['id'])?>">

						<button class="btn-action">🗑️</button>
					</a> -->
					<div class="quantity-control">
						<button class="btn-qty">-</button>
						<input type="number" value="1" min="1" class="qty-input">
						<button class="btn-qty">+</button>
					</div>
				</div>
			</div>
		</div>
		<?php }?>
		<!-- Ringkasan Belanja -->
		<div>
		
			<a href="<?=base_url('welcome')?>" style="padding:1rem;">
				
				<button class="btn-checkout">Lanjutkan Belanja</button>
			</a>
			<a href="<?=base_url('welcome/hapus_cart')?>">
				
				<button class="btn-checkout">Hapus Keranjang</button>
			</a>
		</div>
	</div>
	<div class="cart-summary">
		<h2>Ringkasan Belanja</h2>
		<div class="summary-total">
			<span>Total</span>
			<strong id="total-price">					Rp<?= number_format($this->cart->total(),0,',','.') ?>
			</strong>
		</div>
		<!-- <div class="promo-section">
			<span class="promo-icon">🎟️</span>
			<a href="#" class="promo-link">Makin hemat pakai promo</a>
		</div> -->
		<a href="<?= base_url('welcome/transaksi/')?>">
			<div>

				<button class="btn-checkout">Beli (<?=$this->cart->total_items()?>)</button>
			</div>
		</a>
	</div>
</div>




<div>

</div>


<script>
	let pricePerItem = 800000; // Harga per item
let quantityInput = document.getElementById('quantity-input');
let totalPriceDisplay = document.getElementById('total-price');

// Fungsi untuk menambah jumlah
function increaseQuantity() {
    let quantity = parseInt(quantityInput.value);
    quantityInput.value = quantity + 1;
    updateTotal();
}

// Fungsi untuk mengurangi jumlah
function decreaseQuantity() {
    let quantity = parseInt(quantityInput.value);
    if (quantity > 1) {
        quantityInput.value = quantity - 1;
        updateTotal();
    }
}

// Fungsi untuk menghitung total harga
function updateTotal() {
    let quantity = parseInt(quantityInput.value);
    let totalPrice = quantity * pricePerItem;
    totalPriceDisplay.textContent = "Rp " + totalPrice.toLocaleString();
}

</script>