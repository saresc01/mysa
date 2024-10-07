<?php get_header(); ?>
<body>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

        <?php
            // Fetch all fields
            $headline = get_field("headline");
            $subheadline = get_field("subheadline");
        
        ?>
    

   <!-- products -->

<!-- products -->

<div class="container py-5">
  <div class="row mb-4">
    <div class="lc-block text-center">
      <h2 class="fw-bold display-2"><?php echo $headline; ?></h2>
      <p class="lead"><?php echo $subheadline; ?></p>
    </div>
  </div>

  <!-- Sort Filter Buttons -->
  <div class="text-center mb-4">
    <button class="btn btn-primary filter-button" data-filter="all" style="border-radius: 0;">All</button>
    <button class="btn btn-secondary filter-button" data-filter="category-beeswax" style="border-radius: 0;">Beeswax</button>
    <button class="btn btn-secondary filter-button" data-filter="category-soy" style="border-radius: 0;">Soy</button>
    <button class="btn btn-secondary filter-button" data-filter="category-coconut" style="border-radius: 0;">Coconut</button>
  </div>

  <!-- Products -->
  <div class="row">
    <!-- Beeswax Products -->
    <div class="col-md-6 col-lg-4 g-4 product category-beeswax">
      <div class="card h-100 product-card" style="border-radius: 0;" onclick="window.location.href='product-detail-beeswax1.html'">
        <img class="img-fluid" src="/assests/redappleShop.png" alt="Product Beeswax1">
        <div class="card-body">
          <h5 class="card-title">Red apple and cinnamon</h5>
          <p class="card-text">Beeswax - 22,5 EUR</p>
        </div>
        <div class="position-absolute top-0 end-0 p-2">
          <button class="btn btn-light border" style="border-radius: 0;" onclick="event.stopPropagation(); window.location.href='wishlist-beeswax1.html'">
            <i class="fas fa-heart"></i>
          </button>
        </div>
        <div class="card-footer text-center">
          <button class="btn btn-primary w-100" style="border-radius: 0;" onclick="event.stopPropagation(); window.location.href='checkout-beeswax1.html'">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 g-4 product category-beeswax">
      <div class="card h-100 product-card" style="border-radius: 0;" onclick="window.location.href='product-detail.html'">
        <img class="img-fluid" src="/assests/CinnamonShop.png" alt="Product Beeswax2">
        <div class="card-body">
          <h5 class="card-title">Cinnamon</h5>
          <p class="card-text">Beeswax - 15 EUR</p>
        </div>
        <div class="position-absolute top-0 end-0 p-2">
          <button class="btn btn-light border" style="border-radius: 0;" onclick="event.stopPropagation(); window.location.href='product-detail.html'">
            <i class="fas fa-heart"></i>
          </button>
        </div>
        <div class="card-footer text-center">
          <button class="btn btn-primary w-100" style="border-radius: 0;" onclick="event.stopPropagation(); window.location.href='checkout-beeswax2.html'">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 g-4 product category-beeswax">
      <div class="card h-100 product-card" style="border-radius: 0;" onclick="window.location.href='product-detail-beeswax3.html'">
        <img class="img-fluid" src="/assests/OrangeShop.png" alt="Product Beeswax3">
        <div class="card-body">
          <h5 class="card-title">Orange</h5>
          <p class="card-text">Beeswax - 15 EUR</p>
        </div>
        <div class="position-absolute top-0 end-0 p-2">
          <button class="btn btn-light border" style="border-radius: 0;" onclick="event.stopPropagation(); window.location.href='wishlist-beeswax3.html'">
            <i class="fas fa-heart"></i>
          </button>
        </div>
        <div class="card-footer text-center">
          <button class="btn btn-primary w-100" style="border-radius: 0;" onclick="event.stopPropagation(); window.location.href='checkout-beeswax3.html'">Buy Now</button>
        </div>
      </div>
    </div>

    <!-- Soy Products -->
    <div class="col-md-6 col-lg-4 g-4 product category-soy">
      <div class="card h-100 product-card" style="border-radius: 0;" onclick="window.location.href='product-detail-soy1.html'">
        <img class="img-fluid" src="assests/LemonShop.png" alt="Product Soy1">
        <div class="card-body">
          <h5 class="card-title">Fresh lemon</h5>
          <p class="card-text">Soywax - 12 EUR</p>
        </div>
        <div class="position-absolute top-0 end-0 p-2">
          <button class="btn btn-light border" style="border-radius: 0;" onclick="event.stopPropagation(); window.location.href='wishlist-soy1.html'">
            <i class="fas fa-heart"></i>
          </button>
        </div>
        <div class="card-footer text-center">
          <button class="btn btn-primary w-100" style="border-radius: 0;" onclick="event.stopPropagation(); window.location.href='checkout-soy1.html'">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 g-4 product category-soy">
      <div class="card h-100 product-card" style="border-radius: 0;" onclick="window.location.href='product-detail-soy2.html'">
        <img class="img-fluid" src="/assests/LilyShop.png" alt="Product Soy2">
        <div class="card-body">
          <h5 class="card-title">Ginger Lily</h5>
          <p class="card-text">Soywax - 12,5 EUR</p>
        </div>
        <div class="position-absolute top-0 end-0 p-2">
          <button class="btn btn-light border" style="border-radius: 0;" onclick="event.stopPropagation(); window.location.href='wishlist-soy2.html'">
            <i class="fas fa-heart"></i>
          </button>
        </div>
        <div class="card-footer text-center">
          <button class="btn btn-primary w-100" style="border-radius: 0;" onclick="event.stopPropagation(); window.location.href='checkout-soy2.html'">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 g-4 product category-soy">
      <div class="card h-100 product-card" style="border-radius: 0;" onclick="window.location.href='product-detail-soy3.html'">
        <img class="img-fluid" src="/assests/RainforestShop.png" alt="Product Soy3">
        <div class="card-body">
          <h5 class="card-title">Rain Forest</h5>
          <p class="card-text">Soywax - 20 EUR</p>
        </div>
        <div class="position-absolute top-0 end-0 p-2">
          <button class="btn btn-light border" style="border-radius: 0;" onclick="event.stopPropagation(); window.location.href='wishlist-soy3.html'">
            <i class="fas fa-heart"></i>
          </button>
        </div>
        <div class="card-footer text-center">
          <button class="btn btn-primary w-100" style="border-radius: 0;" onclick="event.stopPropagation(); window.location.href='checkout-soy3.html'">Buy Now</button>
        </div>
      </div>
    </div>

    <!-- Coconut Products -->
    <div class="col-md-6 col-lg-4 g-4 product category-coconut">
      <div class="card h-100 product-card" style="border-radius: 0;" onclick="window.location.href='product-detail-coconut1.html'">
        <img class="img-fluid" src="/assests/RosemaryShop.png" alt="Product Coconut1">
        <div class="card-body">
          <h5 class="card-title">Rosemary</h5>
          <p class="card-text">Coconutwax - 18 EUR</p>
        </div>
        <div class="position-absolute top-0 end-0 p-2">
          <button class="btn btn-light border" style="border-radius: 0;" onclick="event.stopPropagation(); window.location.href='wishlist-coconut1.html'">
            <i class="fas fa-heart"></i>
          </button>
        </div>
        <div class="card-footer text-center">
          <button class="btn btn-primary w-100" style="border-radius: 0;" onclick="event.stopPropagation(); window.location.href='checkout-coconut1.html'">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 g-4 product category-coconut">
      <div class="card h-100 product-card" style="border-radius: 0;" onclick="window.location.href='product-detail-coconut2.html'">
        <img class="img-fluid" src="/assests/MandarineShop.png" alt="Product Coconut2">
        <div class="card-body">
          <h5 class="card-title">Lime and mandarine</h5>
          <p class="card-text">Coconutwax - 22 EUR</p>
        </div>
        <div class="position-absolute top-0 end-0 p-2">
          <button class="btn btn-light border" style="border-radius: 0;" onclick="event.stopPropagation(); window.location.href='wishlist-coconut2.html'">
            <i class="fas fa-heart"></i>
          </button>
        </div>
        <div class="card-footer text-center">
          <button class="btn btn-primary w-100" style="border-radius: 0;" onclick="event.stopPropagation(); window.location.href='checkout-coconut2.html'">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 g-4 product category-coconut">
      <div class="card h-100 product-card" style="border-radius: 0;" onclick="window.location.href='product-detail-coconut3.html'">
        <img class="img-fluid" src="/assests/CoconutShop.png" alt="Product Coconut3">
        <div class="card-body">
          <h5 class="card-title">Coconut</h5>
          <p class="card-text">Coconutwax - 12,5 EUR</p>
        </div>
        <div class="position-absolute top-0 end-0 p-2">
          <button class="btn btn-light border" style="border-radius: 0;" onclick="event.stopPropagation(); window.location.href='wishlist-coconut3.html'">
            <i class="fas fa-heart"></i>
          </button>
        </div>
        <div class="card-footer text-center">
          <button class="btn btn-primary w-100" style="border-radius: 0;" onclick="event.stopPropagation(); window.location.href='checkout-coconut3.html'">Buy Now</button>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Add FontAwesome for the heart icon -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<style>
  /* Make the card cursor change to pointer on hover and grow slightly */
  .product-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
  }

  .product-card:hover {
    transform: scale(1.05);
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
  }

  /* Prevent cursor change on the heart and Buy Now buttons */
  .product-card .btn {
    cursor: default;
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const filterButtons = document.querySelectorAll('.filter-button');
    const products = document.querySelectorAll('.product');

    filterButtons.forEach(button => {
      button.addEventListener('click', function () {
        const filterValue = this.getAttribute('data-filter');

        // Change active button style
        filterButtons.forEach(btn => btn.classList.remove('btn-primary'));
        this.classList.add('btn-primary');

        // Filter products
        products.forEach(product => {
          if (filterValue === 'all' || product.classList.contains(filterValue)) {
            product.style.display = 'block';
          } else {
            product.style.display = 'none';
          }
        });
      });
    });
  });
</script>


  <div>
    <div class="container">
      <div class="d-flex justify-content-between py-4 border-top">
        <!--- payment --->
        <div>
          <i class="fab fa-lg fa-cc-visa text-black"></i>
          <i class="fab fa-lg fa-cc-amex text-black"></i>
          <i class="fab fa-lg fa-cc-mastercard text-black"></i>
          <i class="fab fa-lg fa-cc-paypal text-black"></i>
        </div>
        <!--- payment --->

        <!--- language selector --->
        <div class="dropdown dropup">
          <a class="dropdown-toggle text-black" href="#" id="Dropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false"> <i class="flag-united-kingdom flag m-0 me-1"></i>English </a>

          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="Dropdown">
            <li>
              <a class="dropdown-item text-black" href="#"><i class="flag-united-kingdom flag"></i>English <i class="fa fa-check text-success ms-2"></i></a>
            </li>
            <li><hr class="dropdown-divider" /></li>
            <li>
              <a class="dropdown-item text-black" href="#"><i class="flag-poland flag"></i>Polski</a>
            </li>
            <li>
              <a class="dropdown-item text-black" href="#"><i class="flag-china flag"></i>中文</a>
            </li>
            <li>
              <a class="dropdown-item text-black" href="#"><i class="flag-japan flag"></i>日本語</a>
            </li>
            <li>
              <a class="dropdown-item text-black" href="#"><i class="flag-germany flag"></i>Deutsch</a>
            </li>
            <li>
              <a class="dropdown-item text-black" href="#"><i class="flag-france flag"></i>Français</a>
            </li>
            <li>
              <a class="dropdown-item text-black" href="#"><i class="flag-spain flag"></i>Español</a>
            </li>
            <li>
              <a class="dropdown-item text-black" href="#"><i class="flag-russia flag"></i>Русский</a>
            </li>
            <li>
              <a class="dropdown-item text-black" href="#"><i class="flag-portugal flag"></i>Português</a>
            </li>
          </ul>
        </div>
        <!--- language selector --->
      </div>
    </div>
  </div>


        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>
</body>
