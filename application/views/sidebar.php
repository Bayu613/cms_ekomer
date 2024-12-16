<style>
  .sidebar-submenu-category-list {
    max-height: 0;
    overflow: hidden;
    opacity: 0;
    transform: scaleY(0);
    transform-origin: top;
    transition: all 0.5s ease-in-out;
  }

  .sidebar-submenu-category-list.active {
    max-height: 500px;
    opacity: 1;
    transform: scaleY(1);
  }

  .hidden {
    display: none;
  }

  .icon-container ion-icon {
    transition: transform 0.3s ease-in-out;
  }

  .add-icon.hidden {
    transform: rotate(45deg);
  }

  .remove-icon.hidden {
    transform: rotate(-45deg);
  }

  .sidebar-accordion-menu {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
  }


  .menu-title-flex {
    display: flex;
    align-items: center;
  }

  .menu-title {
    transition: color 0.3s ease;
  }
</style>


<div class="sidebar  has-scrollbar" data-mobile-menu>

  <div class="sidebar-category">

    <div class="sidebar-top">
      <h2 class="sidebar-title">Category</h2>

      <button class="sidebar-close-btn" data-mobile-menu-close-btn>
        <ion-icon name="close-outline"></ion-icon>
      </button>
    </div>

    <ul class="sidebar-menu-category-list">

      <li class="sidebar-menu-category">

        <button class="sidebar-accordion-menu" data-accordion-btn>
          <div class="menu-title-flex">
            <img src="<?= base_url('assets/mio/') ?>assets/images/icons/dress.svg" alt="clothes" width="20" height="20" class="menu-title-img">
            <p class="menu-title">Clothes</p>
          </div>

          <div class="icon-container">
            <ion-icon name="add-outline" class="add-icon"></ion-icon>
            <ion-icon name="remove-outline" class="remove-icon hidden"></ion-icon>
          </div>

        </button>

        <ul class="sidebar-submenu-category-list" data-accordion>
          <?php
          $maxItems = 5;
          $limitedKategori = array_slice($kategori, 5, $maxItems);

          foreach ($limitedKategori as $kate) { ?>
            <li class="sidebar-submenu-category">
              <a href="<?= base_url('welcome/kategori/' . $kate['id_kategori']) ?>" class="sidebar-submenu-title">
                <p class="product-name">
                  <?= $kate['nama_kategori'] ?>
                </p>
                <?php
                $stockArray = [12, 23, 43, 54, 32, 56, 86, 63, 10, 6, 44, 29, 38, 65, 34, 76];
                shuffle($stockArray);
                $randomStock = $stockArray[0];
                ?>
                <data value="<?= $randomStock ?>" class="stock" title="Available Stock"><?= $randomStock ?></data>
              </a>
            </li>
          <?php } ?>
        </ul>
      </li>
      <li class="sidebar-menu-category">

        <button class="sidebar-accordion-menu" data-accordion-btn>
          <div class="menu-title-flex">
            <img src="<?= base_url('assets/mio/') ?>assets/images/icons/electric-guitar.svg" alt="clothes" width="20" height="20" class="menu-title-img">
            <p class="menu-title">Music</p>
          </div>

          <div class="icon-container">
            <ion-icon name="add-outline" class="add-icon"></ion-icon>
            <ion-icon name="remove-outline" class="remove-icon hidden"></ion-icon>
          </div>

        </button>

        <ul class="sidebar-submenu-category-list" data-accordion>
          <?php
          $maxItems = 5;
          $limitedKategori = array_slice($kategori, 10, $maxItems);

          foreach ($limitedKategori as $kate) { ?>
            <li class="sidebar-submenu-category">
              <a href="<?= base_url('welcome/kategori/' . $kate['id_kategori']) ?>" class="sidebar-submenu-title">
                <p class="product-name">
                  <?= $kate['nama_kategori'] ?>
                </p>
                <?php
                $stockArray = [12, 23, 43, 54, 32, 56, 86, 63, 10, 6, 44, 29, 38, 65, 34, 76];
                shuffle($stockArray);
                $randomStock = $stockArray[0];
                ?>
                <data value="<?= $randomStock ?>" class="stock" title="Available Stock"><?= $randomStock ?></data>
              </a>
            </li>
          <?php } ?>
        </ul>
      </li>
      <li class="sidebar-menu-category">

        <button class="sidebar-accordion-menu" data-accordion-btn>
          <div class="menu-title-flex">
            <img src="<?= base_url('assets/mio/') ?>assets/images/icons/perfume.svg" alt="clothes" width="20" height="20" class="menu-title-img">
            <p class="menu-title">Parfume</p>
          </div>

          <div class="icon-container">
            <ion-icon name="add-outline" class="add-icon"></ion-icon>
            <ion-icon name="remove-outline" class="remove-icon hidden"></ion-icon>
          </div>

        </button>

        <ul class="sidebar-submenu-category-list" data-accordion>
          <?php
          $maxItems = 5;
          $limitedKategori = array_slice($kategori, 0, $maxItems);

          foreach ($limitedKategori as $kate) { ?>
            <li class="sidebar-submenu-category">
              <a href="<?= base_url('welcome/kategori/' . $kate['id_kategori']) ?>" class="sidebar-submenu-title">
                <p class="product-name">
                  <?= $kate['nama_kategori'] ?>
                </p>
                <?php
                $stockArray = [12, 23, 43, 54, 32, 56, 86, 63, 10, 6, 44, 29, 38, 65, 34, 76];
                shuffle($stockArray);
                $randomStock = $stockArray[0];
                ?>
                <data value="<?= $randomStock ?>" class="stock" title="Available Stock"><?= $randomStock ?></data>
              </a>
            </li>
          <?php } ?>
        </ul>
      </li>
      <li class="sidebar-menu-category">

        <button class="sidebar-accordion-menu" data-accordion-btn>
          <div class="menu-title-flex">
            <img src="<?= base_url('assets/mio/') ?>assets/images/icons/cosmetics.svg" alt="clothes" width="20" height="20" class="menu-title-img">
            <p class="menu-title">Cosmetics</p>
          </div>

          <div class="icon-container">
            <ion-icon name="add-outline" class="add-icon"></ion-icon>
            <ion-icon name="remove-outline" class="remove-icon hidden"></ion-icon>
          </div>

        </button>

        <ul class="sidebar-submenu-category-list" data-accordion>
          <?php
          $maxItems = 5;
          $limitedKategori = array_slice($kategori, 0, $maxItems);

          foreach ($limitedKategori as $kate) { ?>
            <li class="sidebar-submenu-category">
              <a href="<?= base_url('welcome/kategori/' . $kate['id_kategori']) ?>" class="sidebar-submenu-title">
                <p class="product-name">
                  <?= $kate['nama_kategori'] ?>
                </p>
                <?php
                $stockArray = [12, 23, 43, 54, 32, 56, 86, 63, 10, 6, 44, 29, 38, 65, 34, 76];
                shuffle($stockArray);
                $randomStock = $stockArray[0];
                ?>
                <data value="<?= $randomStock ?>" class="stock" title="Available Stock"><?= $randomStock ?></data>
              </a>
            </li>
          <?php } ?>
        </ul>
      </li>
      <li class="sidebar-menu-category">

        <button class="sidebar-accordion-menu" data-accordion-btn>
          <div class="menu-title-flex">
            <img src="<?= base_url('assets/mio/') ?>assets/images/icons/laptop.svg" alt="clothes" width="20" height="20" class="menu-title-img">
            <p class="menu-title">Electronics</p>
          </div>

          <div class="icon-container">
            <ion-icon name="add-outline" class="add-icon"></ion-icon>
            <ion-icon name="remove-outline" class="remove-icon hidden"></ion-icon>
          </div>

        </button>

        <ul class="sidebar-submenu-category-list" data-accordion>
          <?php
          $maxItems = 5;
          $limitedKategori = array_slice($kategori, 0, $maxItems);

          foreach ($limitedKategori as $kate) { ?>
            <li class="sidebar-submenu-category">
              <a href="<?= base_url('welcome/kategori/' . $kate['id_kategori']) ?>" class="sidebar-submenu-title">
                <p class="product-name">
                  <?= $kate['nama_kategori'] ?>
                </p>
                <?php
                $stockArray = [12, 23, 43, 54, 32, 56, 86, 63, 10, 6, 44, 29, 38, 65, 34, 76];
                shuffle($stockArray);
                $randomStock = $stockArray[0];
                ?>
                <data value="<?= $randomStock ?>" class="stock" title="Available Stock"><?= $randomStock ?></data>
              </a>
            </li>
          <?php } ?>
        </ul>
      </li>
    </ul>
  </div>



  <div class="product-showcase">

    <h3 class="showcase-heading">best sellers</h3>

    <div class="showcase-wrapper">

      <div class="showcase-container">

        <div class="showcase">

          <a href="#" class="showcase-img-box">
            <img src="<?= base_url('assets/mio/') ?>assets/images/products/1.jpg" alt="baby fabric shoes" width="75" height="75"
              class="showcase-img">
          </a>

          <div class="showcase-content">

            <a href="#">
              <h4 class="showcase-title">baby fabric shoes</h4>
            </a>

            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
            </div>

            <div class="price-box">
              <del>$5.00</del>
              <p class="price">$4.00</p>
            </div>

          </div>

        </div>

        <div class="showcase">

          <a href="#" class="showcase-img-box">
            <img src="<?= base_url('assets/mio/') ?>assets/images/products/2.jpg" alt="men's hoodies t-shirt" class="showcase-img"
              width="75" height="75">
          </a>

          <div class="showcase-content">

            <a href="#">
              <h4 class="showcase-title">men's hoodies t-shirt</h4>
            </a>
            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star-half-outline"></ion-icon>
            </div>

            <div class="price-box">
              <del>$17.00</del>
              <p class="price">$7.00</p>
            </div>

          </div>

        </div>

        <div class="showcase">

          <a href="#" class="showcase-img-box">
            <img src="<?= base_url('assets/mio/') ?>assets/images/products/3.jpg" alt="girls t-shirt" class="showcase-img" width="75"
              height="75">
          </a>

          <div class="showcase-content">

            <a href="#">
              <h4 class="showcase-title">girls t-shirt</h4>
            </a>
            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star-half-outline"></ion-icon>
            </div>

            <div class="price-box">
              <del>$5.00</del>
              <p class="price">$3.00</p>
            </div>

          </div>

        </div>

        <div class="showcase">

          <a href="#" class="showcase-img-box">
            <img src="<?= base_url('assets/mio/') ?>assets/images/products/4.jpg" alt="woolen hat for men" class="showcase-img" width="75"
              height="75">
          </a>

          <div class="showcase-content">

            <a href="#">
              <h4 class="showcase-title">woolen hat for men</h4>
            </a>
            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
            </div>

            <div class="price-box">
              <del>$15.00</del>
              <p class="price">$12.00</p>
            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>


<script>
  const accordionButtons = document.querySelectorAll('[data-accordion-btn]');

  accordionButtons.forEach(button => {
    button.addEventListener('click', () => {
      const submenu = button.nextElementSibling;
      const addIcon = button.querySelector('.add-icon');
      const removeIcon = button.querySelector('.remove-icon');

      submenu.classList.toggle('active');

      addIcon.classList.toggle('hidden');
      removeIcon.classList.toggle('hidden');
    });
  });
</script>

<!--
    - ionicon link
  -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>