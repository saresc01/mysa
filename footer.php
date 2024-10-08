<?php $footers = new WP_Query(array(
                'post_type' => 'footer',
                'posts_per_page' => -1,
            ));
            ?>
            <?php if ($footers->have_posts()): ?>
                <?php while ($footers->have_posts()): $footers->the_post(); ?>
                    <?php 
                    $current_year = get_field('current_year'); 
                    $footer_logo = get_field("footer_logo");
                    $first_column_headline = get_field("first_column_headline");
                    $second_column_headline = get_field("second_column_headline");
                    $third_column_headline = get_field("third_column_headline");
                    $newsletter_cta = get_field("newsletter_cta");

                    ?>
<footer class="site-footer">
           
        </footer>
        <footer class="text-center text-lg-start text-muted bg-light mt-3">
  <!-- Section: Links  -->
  <section>
    <div class="container text-center text-md-start pt-4 pb-4">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-12 col-lg-3 col-sm-12 mb-2">
          <!-- Content -->
          <a href="<?php echo get_permalink(get_page_by_path("front-page")); ?>">
            <img src="<?php echo $footer_logo['url'];?>" alt="Mysa Logo" style="max-height: 60px; width: auto;">
          </a>
          <p class="mt-1 text-black">
          <p>&copy; <time datetime="2024"><?php echo $current_year; ?></time> All rights reserved by Mysa</p>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-6 col-sm-4 col-lg-2">
          <!-- Links -->
          <h6 class="text-uppercase text-black fw-bold mb-2">
            <?php echo $first_column_headline ?>
          </h6>
          <ul class="list-unstyled mb-4">
            <li><a class="text-black" href="#">About us</a></li>
            <li><a class="text-black" href="#">Find store</a></li>
            <li><a class="text-black" href="#">Categories</a></li>
            <li><a class="text-black" href="#">Blogs</a></li>
          </ul>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-6 col-sm-4 col-lg-2">
          <!-- Links -->
          <h6 class="text-uppercase text-black fw-bold mb-2">
          <?php echo $second_column_headline; ?>
          
          </h6>
          <ul class="list-unstyled mb-4">
            <li><a class="text-black" href="#">Help center</a></li>
            <li><a class="text-black" href="#">Money refund</a></li>
            <li><a class="text-black" href="#">Shipping info</a></li>
            <li><a class="text-black" href="#">Refunds</a></li>
          </ul>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-6 col-sm-4 col-lg-2">
          <!-- Links -->
          <h6 class="text-uppercase text-black fw-bold mb-2">
          <?php echo $third_column_headline ?>
          </h6>
          <ul class="list-unstyled mb-4">
            <li><a class="text-black" href="#">Help center</a></li>
            <li><a class="text-black" href="#">Documents</a></li>
            <li><a class="text-black" href="#">Account restore</a></li>
            <li><a class="text-black" href="#">My orders</a></li>
          </ul>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-12 col-sm-12 col-lg-3">
          <!-- Links -->
          <h6 class="text-uppercase text-black fw-bold mb-2">Newsletter</h6>
          <p class="text-black"><?php echo $newsletter_cta;?></p>
          <div class="input-group mb-3">
            <input type="email" class="form-control border" placeholder="Email" aria-label="Email" aria-describedby="button-addon2" />
            <button class="btn btn-dark border shadow-0" type="button" id="button-addon2" data-mdb-ripple-color="dark">
              Join
            </button>
          </div>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

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
</footer>
<?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        <?php wp_footer() ?>
        <script>
            AOS.init();
        </script>
    </body>
</html>