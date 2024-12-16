<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bayupedia</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="<?= base_url('assets/mio/assets/images/logo/rafif.ico') ?>" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="<?= base_url('assets/mio/assets/css/style-prefixx.css') ?>">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



  <style>
    html {
      scroll-behavior: smooth;
    }

    .pagination {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 0.5rem;
    }

    .pagination a {
      text-decoration: none;
      color: #1a1a1a;
      padding: 0.4rem 0.8rem;
      border-radius: 50px;
      font-weight: 600;
      font-size: 0.9rem;
      background: white;
      border: 1.5px solid #e0e0e0;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .pagination a::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(120deg,
          transparent,
          rgba(0, 0, 0, 0.1),
          transparent);
      transition: all 0.5s ease;
    }

    .pagination a:hover::before {
      left: 100%;
    }

    .pagination a:hover {
      transform: translateY(-2px) scale(1.05);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
      border-color: #a0a0a0;
    }

    .pagination a.active {
      background: linear-gradient(135deg, #000000 0%, #434343 100%);
      color: white;
      border-color: transparent;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
      animation: pulse 1.5s infinite;
    }

    .pagination a.active:hover {
      transform: translateY(-3px) scale(1.08);
      box-shadow: 0 7px 20px rgba(0, 0, 0, 0.2);
    }

    @keyframes pulse {
      0% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.05);
      }

      100% {
        transform: scale(1);
      }
    }
  </style>
</head>

<body>


  <div class="overlay" data-overlay></div>

  <!--
    - MODAL
  -->






  <!--
    - NOTIFICATION TOAST
  -->






  <!--
    - HEADER
  -->

  <header>


    <div class="header-top">

      <div class="container">

        <ul class="header-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

        <div class="header-alert-news">
          <p>
            <b>Free Shipping</b>
            This Week Order Over - $55
          </p>
        </div>

        <div class="header-alert-news">
          <p>
            Welcome, <?= $this->session->userdata('email') ?>
          </p>

        </div>

      </div>

    </div>

    <div class="header-main">

      <div class="container">

        <a href="#" class="header-logo">
          <img src="<?= base_url('assets/mio/') ?>assets/images/logo/lofo4.svg" alt="Anon's logo" width="140" height="60">
        </a>

        <div class="header-search-container">

          <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>

        </div>

        <div class="header-user-actions">

          <a href="<?= base_url('auth') ?>">
            <button class="action-btn">

              <ion-icon style="color:black;" name="person-outline"></ion-icon>
            </button>
          </a>

          <button class="action-btn">
            <a href="<?=base_url('welcome/pay/'  )?>">
              <i style="position: relative; top:5px; color:black;" class="bi bi-truck"></i>
            </a>
          </button>
          <button class="action-btn">
            <?php $keranjang = $this->cart->total_items() ?>
            <a href="<?= base_url('welcome/cart/' . $keranjang) ?>">
              <ion-icon name="bag-handle-outline" style="color:black;"></ion-icon>
            </a>
            <span class="count"><?= $keranjang ?></span>
          </button>
        </div>
      </div>
    </div>
    <?php require_once('header.php'); ?>
  </header>

  <!--
    - MAIN
  -->

  <main>

    <!--
      - BANNER
    -->

    <div class="banner">

      <div class="container">

        <div class="slider-container has-scrollbar">
          <?php
          shuffle($carousel);
           foreach ($carousel as $cc) { ?>

            <div class="slider-item">

              <img src="<?= base_url('upload/carousel/' . $cc['foto']) ?>" alt="women's latest fashion sale" class="banner-img">



            </div>
          <?php } ?>

          <script>
            const sliderContainer = document.querySelector('.slider-container');
            const sliderItems = document.querySelectorAll('.slider-item');
            const scrollInterval = 5000;
            let currentIndex = 0;

            function scrollToNextItem() {
              currentIndex = (currentIndex + 1) % sliderItems.length;
              sliderContainer.scrollTo({
                left: sliderItems[currentIndex].offsetLeft,
                behavior: 'smooth'
              });
            }
            setInterval(scrollToNextItem, scrollInterval);
          </script>

        </div>

      </div>

    </div>





    <!--
      - CATEGORY
    -->

    <div class="category">

      <div class="container">

        <div class="category-item-container has-scrollbar">

          <div class="category-item">

            <div class="category-img-box">
              <img src="<?= base_url('assets/mio/') ?>assets/images/icons/electric-guitar.svg" alt="dress & frock" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Guitar</h3>

                <p class="category-item-amount">(53)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="<?= base_url('assets/mio/') ?>assets/images/icons/laptop.svg" alt="winter wear" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Laptop</h3>

                <p class="category-item-amount">(58)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="<?= base_url('assets/mio/') ?>assets/images/icons/hp.svg" alt="glasses & lens" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">handphone</h3>

                <p class="category-item-amount">(68)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>



          <div class="category-item">

            <div class="category-img-box">
              <img src="<?= base_url('assets/mio/') ?>assets/images/icons/jacket.svg" alt="jacket" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Jacket</h3>

                <p class="category-item-amount">(16)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

        </div>

      </div>

    </div>





    <!--
      - PRODUCT
    -->

    <div class="product-container">

      <div class="container">


        <!--
          - SIDEBAR
        -->


        <?php require_once('sidebar.php') ?>



        <div class="product-box">

          <!--
            - PRODUCT MINIMAL
          -->

          <div class="product-minimal">

            <div class="product-showcase">

              <h2 class="title">Electronics</h2>

              <div class="showcase-wrapper has-scrollbar">

                <div class="showcase-container">
                  <?php
                  $counter = 0;
                  $maxItems = 8;
                  $filteredKonten = array_filter($konten, function ($item) {
                    return in_array($item['id_kategori'], [5, 6, 7, 8, 9, 20, 21, 22, 23, 24]);
                  });
                  $limitedKonten = array_slice($filteredKonten, 0, $maxItems);

                  foreach ($limitedKonten as $cc):
                    $counter++;
                    if ($counter > 4 && $counter % 4 === 1):
                  ?>
                </div>
                <div class="showcase-container">
                <?php endif; ?>

                <div class="showcase">
                  <a href="#" class="showcase-img-box">
                    <img src="<?= base_url('upload/konten/' . $cc['foto']) ?>" width="80" class="showcase-img">
                  </a>
                  <div class="showcase-content">
                    <a href="#">
                      <h5 class="showcase-title"><?= htmlspecialchars($cc['judul']) ?></h5>
                    </a>
                    <a href="#" class="showcase-category" style="font-size:14px;">
                      <?= htmlspecialchars($cc['nama_kategori']) ?>
                    </a>
                    <div class="price-box">
                      <p class="price">Rp<?= number_format($cc['harga'], 0, ',', '.') ?></p>
                    </div>
                  </div>
                </div>

              <?php endforeach; ?>
                </div>
              </div>
            </div>


            <div class="product-showcase">

              <h2 class="title">Music</h2>

              <div class="showcase-wrapper has-scrollbar">

                <div class="showcase-container">
                  <?php
                  $counter = 0;
                  $maxItems = 8;

                  $filteredKonten = array_filter($konten, function ($item) {
                    return in_array($item['id_kategori'], [15, 16, 17, 18, 19]);
                  });

                  $limitedKonten = array_slice($filteredKonten, 0, $maxItems);

                  foreach ($limitedKonten as $cc):
                    $counter++;

                    if ($counter > 4 && $counter % 4 === 1):
                  ?>
                </div>
                <div class="showcase-container">
                <?php endif; ?>

                <div class="showcase">
                  <a href="#" class="showcase-img-box">
                    <img src="<?= base_url('upload/konten/' . $cc['foto']) ?>" width="80" class="showcase-img">
                  </a>
                  <div class="showcase-content">
                    <a href="#">
                      <h4 class="showcase-title"><?= htmlspecialchars($cc['judul'], ENT_QUOTES, 'UTF-8') ?></h4>
                    </a>
                    <a href="#" class="showcase-category" style="font-size:14px;">
                      <?= htmlspecialchars($cc['nama_kategori'], ENT_QUOTES, 'UTF-8') ?>
                    </a>
                    <div class="price-box">
                      <p class="price">Rp<?= number_format($cc['harga'], 0, ',', '.') ?></p>
                    </div>
                  </div>
                </div>

              <?php endforeach; ?>
                </div>

              </div>

            </div>

            <div class="product-showcase">

              <h2 class="title">Fashion</h2>

              <div class="showcase-wrapper has-scrollbar">

                <div class="showcase-container">
                  <?php
                  $counter = 0;
                  $maxItems = 8;
                  $filteredKonten = array_filter($konten, function ($item) {
                    return in_array($item['id_kategori'], [10, 11, 12, 13, 14]);
                  });
                  $limitedKonten = array_slice($filteredKonten, 0, $maxItems);

                  foreach ($limitedKonten as $cc):
                    $counter++;
                    if ($counter > 4 && $counter % 4 === 1):
                  ?>
                </div>
                <div class="showcase-container">
                <?php endif; ?>

                <div class="showcase">
                  <a href="#" class="showcase-img-box">
                    <img src="<?= base_url('upload/konten/' . $cc['foto']) ?>" width="80" class="showcase-img">
                  </a>
                  <div class="showcase-content">
                    <a href="#">
                      <h4 class="showcase-title"><?= htmlspecialchars($cc['judul'], ENT_QUOTES, 'UTF-8') ?></h4>
                    </a>
                    <a href="#" class="showcase-category" style="font-size:14px;">
                      <?= htmlspecialchars($cc['nama_kategori'], ENT_QUOTES, 'UTF-8') ?>
                    </a>
                    <div class="price-box">
                      <p class="price">Rp<?= number_format($cc['harga'], 0, ',', '.') ?></p>
                    </div>
                  </div>
                </div>

              <?php endforeach; ?>
                </div>

              </div>

            </div>


          </div>



          <!--
            - PRODUCT FEATURED
          -->

          <div class="product-featured" id="diskon">

            <h2 class="title">Hot Offers</h2>

            <div class="showcase-wrapper has-scrollbar">
              <?php
              shuffle($konten);
              $counter = 0;
              foreach ($konten as $key) {
                if (isset($key['diskon']) && $key['diskon'] > 0) {
                  $counter++;

                  if ($counter > 2) {
                    break;
                  }
              ?>
                  <div class="showcase-container">
                    <div class="showcase">
                      <div class="showcase-banner">
                        <!-- Display the content image -->
                        <img src="<?= base_url('upload/konten/' . $key['foto']) ?>" class="showcase-img">
                      </div>
                      <div class="showcase-content">
                        <div class="showcase-rating">
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                        </div>
                        <a href="#">
                          <h3 class="showcase-title"><?= htmlspecialchars($key['judul']) ?></h3>
                        </a>
                        <p class="showcase-desc"><?= htmlspecialchars($key['keterangan']) ?></p>
                        <div class="price-box">
                          <?php
                          $discountedPrice = $key['harga'] - ($key['harga'] * $key['diskon'] / 100);
                          ?>
                          <p class="price">Rp<?= number_format($discountedPrice, 0, ',', '.') ?></p>
                          <p class="original-price" style="text-decoration: line-through; color: gray;">
                            Rp<?= number_format($key['harga'], 0, ',', '.') ?>
                          </p>
                        </div>
                        <button class="add-cart-btn">add to cart</button>
                        <div class="showcase-status">
                          <div class="wrapper">
                            <p>already sold: <b>20</b></p>
                            <p>available: <b>40</b></p>
                          </div>
                          <div class="showcase-status-bar"></div>
                        </div>
                        <div class="countdown-box">
                          <p class="countdown-desc">Hurry Up! Offer ends in:</p>
                          <div class="countdown">
                            <div class="countdown-content">
                              <p class="display-number">360</p>
                              <p class="display-text">Days</p>
                            </div>
                            <div class="countdown-content">
                              <p class="display-number">24</p>
                              <p class="display-text">Hours</p>
                            </div>
                            <div class="countdown-content">
                              <p class="display-number">59</p>
                              <p class="display-text">Min</p>
                            </div>
                            <div class="countdown-content">
                              <p class="display-number">00</p>
                              <p class="display-text">Sec</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php
                }
              }
              ?>
            </div>
          </div>




          <!--
            - PRODUCT GRID
          -->





          <div class="product-main" id="produk">


            <h2 class="title">Product</h2>

            <div class="product-grid">
              <?php

              $itemsPerPage = 16;
              $totalItems = count($konten);
              $totalPages = ceil($totalItems / $itemsPerPage);
              $currentPage = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
              $offset = ($currentPage - 1) * $itemsPerPage;


              $paginatedKonten = array_slice($konten, $offset, $itemsPerPage);
              shuffle($paginatedKonten);
              foreach ($paginatedKonten as $cc) { ?>
                <div class="showcase">

                  <div class="showcase-banner">
                    <a href="<?= base_url('welcome/detail/' . $cc['slug']) ?>">

                      <img src="<?= base_url('upload/konten/' . $cc['foto']) ?>" alt="Mens Winter Leathers Jackets" width="280" class="product-img default" data-role="default">
                      <img src="<?= base_url('upload/konten/' . $cc['foto_2']) ?>" alt="Mens Winter Leathers Jackets" width="280" class="product-img hover">
                    </a>
                    <?php if (!empty($cc['diskon'])) { ?>
                      <p class="showcase-badge"><?= $cc['diskon'] ?>%</p>
                    <?php } ?>

                    <div class="showcase-actions">

                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <a href="<?= base_url('welcome/detail/' . $cc['slug']) ?>">
                        <button class="btn-action">
                          <ion-icon name="eye-outline"></ion-icon>
                        </button>
                      </a>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>
                      <?php echo anchor('welcome/tambah_keranjang/' . $cc['id_konten'], '  <button class="btn-action bag-add">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>') ?>



                    </div>

                  </div>

                  <div class="showcase-content">



                    <a href="<?= base_url('welcome/detail/' . $cc['slug']) ?>">
                      <h3 class="showcase-category"><?= $cc['nama_kategori'] ?></h3>
                    </a>
                    <a href="<?= base_url('welcome/detail/' . $cc['slug']) ?>" class="showcase-title">
                      <?php
                      $words = explode(' ', $cc['judul']);
                      if (count($words) > 4) {
                        echo htmlspecialchars(implode(' ', array_slice($words, 0, 4)) . '...');
                      } else {
                        echo htmlspecialchars($cc['judul']);
                      }
                      ?>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">

                      <p style="font-size: 14px;" class="price">
                        Rp<?= number_format($cc['harga'] - $cc['diskon'] / 100 * $cc['harga'], 0, ',', '.') ?>
                      </p>
                      <?php if (!empty($cc['diskon'])) { ?>
                        <del style="font-size:13px"><?= number_format($cc['harga'], 0, ',', '.') ?></del>
                      <?php } ?>
                    </div>

                  </div>

                </div>
              <?php } ?>
            </div>


            <?php if ($totalPages > 1) { ?>
              <div class="pagination" style="margin-top: 3rem;">


                <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                  <a href="?page=<?= $i ?>#produk" class="<?= $i == $currentPage ? 'active' : '' ?>"><?= $i ?></a>
                <?php } ?>
              </div>
            <?php } ?>


          </div>
        </div>

      </div>

    </div>





    <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

    <div>

      <div class="container">

        <div class="testimonials-box">

          <!--
            - TESTIMONIALS
          -->

          <div class="testimonial">

            <h2 class="title">testimonial</h2>

            <div class="testimonial-card">

              <img src="<?= base_url('assets/mio/') ?>assets/images/testimonial-1.jpg" alt="alan doe" class="testimonial-banner" width="80" height="80">

              <p class="testimonial-name">Alan Doe</p>

              <p class="testimonial-title">CEO & Founder Invision</p>

              <img src="<?= base_url('assets/mio/') ?>assets/images/icons/quotes.svg" alt="quotation" class="quotation-img" width="26">

              <p class="testimonial-desc">
                Lorem ipsum dolor sit amet consectetur Lorem ipsum
                dolor dolor sit amet.
              </p>

            </div>

          </div>



          <!--
            - CTA
          -->

          <div class="cta-container">

            <img src="<?= base_url('assets/mio/') ?>assets/images/cta-banner.jpg" alt="summer collection" class="cta-banner">

            <a href="#" class="cta-content">

              <p class="discount">25% Discount</p>

              <h2 class="cta-title">Summer collection</h2>

              <p class="cta-text">Starting @ $10</p>

              <button class="cta-btn">Shop now</button>

            </a>

          </div>



          <!--
            - SERVICE
          -->

          <div class="service">

            <h2 class="title">Our Services</h2>

            <div class="service-container">

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="boat-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Worldwide Delivery</h3>
                  <p class="service-desc">For Order Over $100</p>

                </div>

              </a>

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Next Day delivery</h3>
                  <p class="service-desc">UK Orders Only</p>

                </div>

              </a>

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="call-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Best Online Support</h3>
                  <p class="service-desc">Hours: 8AM - 11PM</p>

                </div>

              </a>

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="arrow-undo-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Return Policy</h3>
                  <p class="service-desc">Easy & Free Return</p>

                </div>

              </a>

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="ticket-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">30% money back</h3>
                  <p class="service-desc">For Order Over $100</p>

                </div>

              </a>

            </div>

          </div>

        </div>

      </div>

    </div>





    <!--
      - BLOG
    -->

    <div class="blog">

      <div class="container">

        <div class="blog-container has-scrollbar">

          <div class="blog-card">

            <a href="#">
              <img src="<?= base_url('assets/mio/') ?>assets/images/blog-1.jpg" alt="Clothes Retail KPIs 2021 Guide for Clothes Executives" width="300" class="blog-banner">
            </a>

            <div class="blog-content">

              <a href="#" class="blog-category">Fashion</a>

              <a href="#">
                <h3 class="blog-title">Clothes Retail KPIs 2021 Guide for Clothes Executives.</h3>
              </a>

              <p class="blog-meta">
                By <cite>Mr Admin</cite> / <time datetime="2022-04-06">Apr 06, 2022</time>
              </p>

            </div>

          </div>

          <div class="blog-card">

            <a href="#">
              <img src="<?= base_url('assets/mio/') ?>assets/images/blog-2.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                class="blog-banner" width="300">
            </a>

            <div class="blog-content">

              <a href="#" class="blog-category">Clothes</a>

              <h3>
                <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
              </h3>

              <p class="blog-meta">
                By <cite>Mr Robin</cite> / <time datetime="2022-01-18">Jan 18, 2022</time>
              </p>

            </div>

          </div>

          <div class="blog-card">

            <a href="#">
              <img src="<?= base_url('assets/mio/') ?>assets/images/blog-3.jpg" alt="EBT vendors: Claim Your Share of SNAP Online Revenue."
                class="blog-banner" width="300">
            </a>

            <div class="blog-content">

              <a href="#" class="blog-category">Shoes</a>

              <h3>
                <a href="#" class="blog-title">EBT vendors: Claim Your Share of SNAP Online Revenue.</a>
              </h3>

              <p class="blog-meta">
                By <cite>Mr Selsa</cite> / <time datetime="2022-02-10">Feb 10, 2022</time>
              </p>

            </div>

          </div>

          <div class="blog-card">

            <a href="#">
              <img src="<?= base_url('assets/mio/') ?>assets/images/blog-4.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                class="blog-banner" width="300">
            </a>

            <div class="blog-content">

              <a href="#" class="blog-category">Electronics</a>

              <h3>
                <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
              </h3>

              <p class="blog-meta">
                By <cite>Mr Pawar</cite> / <time datetime="2022-03-15">Mar 15, 2022</time>
              </p>

            </div>

          </div>

        </div>

      </div>

    </div>

  </main>





  <!--
    - FOOTER
  -->

  <footer>

    <div class="footer-category">

      <div class="container">

        <h2 class="footer-category-title"><?= $konfig->judul_website ?></h2>

        <div class="footer-category-box">

          <h3 class="category-box-title">Fashion :</h3>
          <?php
          $maxItems = 5;
          $limitedKategori = array_slice($kategori, 5, $maxItems);

          foreach ($limitedKategori as $kate) { ?>

            <a href="<?= base_url('welcome/kategori/' . $kate['id_kategori'] . '/#produk') ?>" class="footer-category-link">
              <?= $kate['nama_kategori'] ?>
            </a>
          <?php } ?>


        </div>

        <div class="footer-category-box">
          <h3 class="category-box-title">Music & Hobby :</h3>

          <?php
          $maxItems = 5;
          $limitedKategori = array_slice($kategori, 10, $maxItems);

          foreach ($limitedKategori as $kate) { ?>

            <a href="<?= base_url('welcome/kategori/' . $kate['id_kategori'] . '/#produk') ?>" class="footer-category-link">
              <?= $kate['nama_kategori'] ?>
            </a>
          <?php } ?>
        </div>

        <div class="footer-category-box">
          <h3 class="category-box-title">Electronics</h3>

          <?php
          $maxItems = 5;
          $limitedKategori = array_slice($kategori, 0, $maxItems);

          foreach ($limitedKategori as $kate) { ?>

            <a href="<?= base_url('welcome/kategori/' . $kate['id_kategori'] . '/#produk') ?>" class="footer-category-link">
              <?= $kate['nama_kategori'] ?>
            </a>
          <?php } ?>
        </div>

        <div class="footer-category-box">
          <h3 class="category-box-title">cosmetics :</h3>

          <a href="#" class="footer-category-link">Shampoo</a>
          <a href="#" class="footer-category-link">Bodywash</a>
          <a href="#" class="footer-category-link">Facewash</a>
          <a href="#" class="footer-category-link">makeup kit</a>
          <a href="#" class="footer-category-link">liner</a>
          <a href="#" class="footer-category-link">lipstick</a>
          <a href="#" class="footer-category-link">prefume</a>
          <a href="#" class="footer-category-link">Body soap</a>
          <a href="#" class="footer-category-link">scrub</a>
          <a href="#" class="footer-category-link">hair gel</a>
          <a href="#" class="footer-category-link">hair colors</a>
          <a href="#" class="footer-category-link">hair dye</a>
          <a href="#" class="footer-category-link">sunscreen</a>
          <a href="#" class="footer-category-link">skin loson</a>
          <a href="#" class="footer-category-link">liner</a>
          <a href="#" class="footer-category-link">lipstick</a>
        </div>

      </div>

    </div>

    <div class="footer-nav">

      <div class="container">

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Popular Categories</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Fashion</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Electronic</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Cosmetic</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Health</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Watches</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Products</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Prices drop</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">New products</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Best sales</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Our Company</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Delivery</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Legal Notice</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Terms and conditions</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">About us</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Secure payment</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Services</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Prices drop</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">New products</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Best sales</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Contact</h2>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <address class="content">

              <?= $konfig->alamat ?>
            </address>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>

            <a href="tel:+607936-8058" class="footer-nav-link">+<?= $konfig->no_wa ?></a>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <a href="mailto:example@gmail.com" class="footer-nav-link"><?= $konfig->email ?></a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Follow Us</h2>
          </li>

          <li>
            <ul class="social-link">

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>

    </div>

    <div class="footer-bottom">

      <div class="container">

        <img src="<?= base_url('assets/mio/') ?>assets/images/payment.png" alt="payment method" class="payment-img">

        <p class="copyright">
          Copyright &copy; <a href="#">Anon</a> all rights reserved.
        </p>

      </div>

    </div>

  </footer>






  <!--
    - custom js link
  -->
  <script src="<?= base_url('assets/mio/assets/js/scriptt.js') ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script>
    $(document).on('click', '.bag-add', function() {
      var productId = $(this).data('id');

      $.ajax({
        url: '<?= base_url('welcome/tambah_keranjang/') ?>' + productId,
        type: 'GET',
        success: function(response) {
          // Setelah menambah produk ke keranjang, perbarui tampilan jumlah keranjang
          var newCartCount = parseInt($('.count').text()) + 1;
          $('.count').text(newCartCount);
        },
        error: function() {
          alert('Terjadi kesalahan, coba lagi nanti.');
        }
      });
    });
  </script>

</body>

</html>