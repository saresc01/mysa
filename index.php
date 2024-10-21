<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>
            
            


        
        <?php echo do_shortcode('[contact-form-7 id="15344e9" title="Contact form 1"]'); ?>

        <?php
            $index_image = get_field("index_image");
            $hero_h1 = get_field("hero_h1");
            $p1_hero = get_field("p1_hero");
            $p2_hero = get_field("p2_hero");
            $trends_headline = get_field("trends_headline");
            $trends_subheadline = get_field("trends_subheadline");
            $mystery_box_image = get_field("mystery_box_image");
            $mystery_box_headline = get_field("mystery_box_headline");
            $mystery_box_description = get_field("mystery_box_description");  
            $blog_post_headline = get_field("blog_post_headline");
            $blog_post_image = get_field("blog_post_image");
            $blog_post_excerpt  = get_field("blog_post_excerpt");
            $block_post_section = get_field("block_post_section");
            $carousel_tag_line = get_field("carousel_tag_line");
            $testimonials_heading = get_field("testimonials_heading");
            $testimonials_subheading = get_field("testimonials_subheading");
            $instagram_cta = get_field("instagram_cta");

            ?>
        
<!-- hero --> 
  
    
<!-- Hero section -->
<section class="d-flex min-vh-100" lc-helper="background" style="background-image: url(<?php echo $index_image["url"];  ?>)">
  <div class="align-self-center text-center text-light col-md-8 offset-md-2">
      <div class="lc-block mb-4">
          <div editable="rich">
              <h1 class="display-1 fw-bolder"><?php echo $hero_h1; ?></h1>
          </div>
      </div>

      <div class="lc-block">
          <div editable="rich">
              <p class="lead"><?php echo $p1_hero; ?></p>
              <p class="lead"><?php echo $p2_hero; ?></p>
          </div>
          <br>
          <button data-mdb-ripple-init type="button" class="btn btn-primary me-3">Shop Now</button>
      </div>

      <!-- Move this SVG block to the bottom -->
      <div class="lc-block mt-5">
        <svg onclick="if (!document.querySelector('body').classList.contains('livecanvas-is-editing') ) this.closest('section').nextElementSibling.scrollIntoView({ behavior: 'smooth'  });" width="4em" height="4em" viewBox="0 0 16 16" class="text-light" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
              <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
              <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"></path>
          </svg>
      </div>
  </div>
</section>

 



<!-- TRENDY THIS SEASON -->
<section>
  <div class="container py-5">
    <div class="row mb-4">
      <div class="lc-block text-center">
        <h2 class="fw-bold display-2"><?php echo $trends_headline; ?></h2>
      </div>
      <div class="lc-block text-center">
        <p class="lead"><?php echo $trends_subheadline; ?></p>
      </div>
    </div>

    <!-- Custom Carousel -->
    <div class="custom-carousel">
      <!-- Left Control -->
      <a class="carousel-control-prev" id="prevBtn">&#10094;</a>
      
      <!-- Slides Wrapper -->
      <div class="slides">
        <!-- Slide 1 -->
        <div class="carousel-slide">
          <div class="row">
            <!-- custom loop for products -->
            <?php
                                
                                        $trending_products = new WP_Query(array(
                                            'post_type' => 'trending-product',
                                            'posts_per_page' => -1,
                                        ));
                                    ?>
                                    
                                    <?php if($trending_products->have_posts()): ?>
                                                <?php while($trending_products->have_posts()): $trending_products->the_post(); ?>
                                                    <?php
                                                        $product_title = get_field("product_title");
                                                        $product_image = get_field("product_image");
                                                        $product_excerpt = get_field("product_excerpt");
                                                    ?>
            <div class="col-md-4">
              <a href="shop.html" class="card"> <!-- Wrap the card with anchor tag -->
                <div class="card-body">
                  <img src="<?php echo $product_image["url"]; ?>" class="card-img-top" alt="Card 1">
                  <h5 class="card-title m-2"><?php echo $product_title; ?></h5>
                  <p class="card-text m-2"><?php echo $product_excerpt; ?></p>
                  <a href="shop.html" class="btn btn-primary btn-block">Buy Now</a> <!-- Full-width button -->
                </div>
              </a>
            </div>
        
            <?php endwhile; ?>
                                                <?php wp_reset_postdata(); ?>
                                            <?php endif; ?>

          </div>
        </div>

      <!-- Right Control -->
      <a class="carousel-control-next" id="nextBtn">&#10095;</a>
    </div>
  </div>
</section>



<script>
  const slides = document.querySelector('.slides');
  const slideCount = document.querySelectorAll('.carousel-slide').length;
  let currentIndex = 0;

  document.getElementById('prevBtn').addEventListener('click', () => {
    currentIndex = (currentIndex > 0) ? currentIndex - 1 : slideCount - 1;
    updateCarousel();
  });

  document.getElementById('nextBtn').addEventListener('click', () => {
    currentIndex = (currentIndex < slideCount - 1) ? currentIndex + 1 : 0;
    updateCarousel();
  });

  function updateCarousel() {
    slides.style.transform = `translateX(${-currentIndex * 100}%)`;
  }
</script>



 <!--promotion part-->
  
<div lc-helper="background" class="promotion container-fluid py-5 mb-4 d-flex justify-content-start " style="  background-image: url('https://images.unsplash.com/photo-1519681393784-d120267933ba?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1124&amp;q=100');
background-position: center;
background-size:cover;
background-repeat:no-repeat">
<div class="p-5 mb-4 lc-block col-xxl-7 col-lg-8 col-12" style=" backdrop-filter: blur(6px) saturate(102%);
-webkit-backdrop-filter: blur(6px) saturate(102%);
background-color: rgba(255, 255, 255, 0.45);
border-radius: 12px;
border: 1px solid rgba(209, 213, 219, 0.3);">
<div class="lc-block">
  <div editable="rich">
    <h2 class="fw-bolder display-3"><?php echo $mystery_box_headline; ?></h2>
  </div>
</div>
<div class="lc-block col-md-8">
  <div editable="rich">
    <p class="lead"><?php echo $mystery_box_description; ?></p>
  </div>
</div>
<div class="lc-block">
  <a class="btn btn-dark" href="#" role="button">I want my box!</a>
</div>
</div>
</div>






 <!--one more blog post-->
 
  
 <div class="container-fluid p-0">
	<div class="row g-0">
		<div lc-helper="background" class="col-md-6 order-md-1 ps-4 d-flex py-5" style="background-size: cover; background-position: center; background-image: url('https://images.unsplash.com/photo-1497035111255-8bc8464dc267?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;h=768&amp;fit=crop&amp;ixid=eyJhcHBfaWQiOjM3ODR9');">
			<div class="lc-block align-self-center text-light ms-4">
				<div editable="rich">
					<h2 class="fw-bold display-1">Natural&nbsp;<br>Wax&nbsp;<br>Candles</h2>
				</div>
			</div>
		</div>
		<div class="col-md-6 order-md-2 py-5" style="padding:5vh 5vw">
			<div class="lc-block mb-5">
				<div editable="rich">
          <h4><?php echo $bblock_post_section; ?></h4>

					<h2><?php echo $block_post_headline; ?></h2>


				</div>
			</div><!-- /lc-block -->
			<div class="lc-block text-secondary pb-4">
				<div editable="rich">
					<p><em><?php echo $blog_post_excerpt; ?>&nbsp;</em></p>
				</div>
			</div>
      <div class="lc-block">
        <a class="btn btn-dark" href="#" role="button">Read more</a>
      </div> 
		</div>
	</div>
</div>


 <br>
 <br>
 
  


  
  <!--carousel-->
  <div class="eco-carousel  ">
    <h4 class="eco-carousel-item"><?php echo $carousel_tag_line;?></h4>
  </div>





<!--testimonial-->

  
<!-- lc-needs-hard-refresh -->
<script>
	function initializeSwiperRANDOMID(){
	 	// Launch SwiperJS  
		const swiper = new Swiper(".mySwiper-RANDOMID", {
				slidesPerView: 1,
				grabCursor: true,
				spaceBetween: 30,
				pagination: {
					el: ".swiper-pagination",
					clickable: true,
				},
				breakpoints: {
				640: {
					slidesPerView: 1,
					spaceBetween: 20,
				},
				768: {
					slidesPerView: 2,
					spaceBetween: 30,
				},
				1024: {
					slidesPerView: 3,
					spaceBetween: 30,
				},
			},
		});
	}
 </script>

  <!-- lazily load the Swiper CSS file -->
  <link rel="preload" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

  <!-- lazily load the Swiper JS file -->
  <script defer="defer" src="https://unpkg.com/swiper@8/swiper-bundle.min.js" onload="initializeSwiperRANDOMID();"></script>

<div class="container py-4">
	<div class="lc-block text-center">
		<div editable="rich">
			<h2 class="mb-3 display-6 fw-bold"><?php echo $testimonials_heading; ?></h2>
		</div>
	</div>
	<div class="lc-block text-center mb-5">
		<div editable="rich">
			<p class="mb-3 lead"><?php echo $testimonials_subheading; ?></p>
		</div>
	</div>
	<div class="row align-items-center py-2">
		<div class="position-relative">

			<!-- Slider main container -->
			<div class="swiper mySwiper-RANDOMID position-relative">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper mb-5">
					<!-- Slides -->                    
            <!-- Custom loop for testimonials -->
            <?php
                // Custom loop for socials
                $testimonials = new WP_Query(array(
                    'post_type' => 'testimonial',
                    'posts_per_page' => -1,
                ));
            ?>
				
            <?php if($testimonials->have_posts()): ?>
              <?php while($testimonials->have_posts()): $testimonials->the_post(); ?>
							  <div class="swiper-slide lc-block">
                  <?php
                      $statement = get_field("statement");
                      $customer_image = get_field("customer_image");
                      $customer_name = get_field("customer_name");
                      $customer_job = get_field("customer_job");
                  ?>
                  <div class="card p-3">
                       
                    <div class="card-body">
                    <div class="lc-block mb-4">
                      <div editable="rich">
                        <p><em class="rfs-8 text-muted"><?php echo $statement; ?> &nbsp;</em></p>
                      </div>
                    </div>
                    <div class="lc-block d-inline-flex">
                      <div class="lc-block me-3" style="min-width:72px">
                        <img class="img-fluid rounded-circle " src="<?php echo $customer_image['url']; ?>" width="72" height="72">
                      </div>
                      <div class="lc-block">
                        <div editable="rich">
                          <p class="h5"><?php echo $customer_name; ?></p>
                          <p class="text-muted"><?php echo $customer_job; ?>&nbsp;</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
				</div>
				<!-- If we need pagination -->
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</div>
</div>
 
 



	


<!--instagram-->
<section>
  <h2 class="instagram-heading"><?php echo $instagram_cta; ?></h2> <!-- Centered Heading -->

  <div class="container-fluid px-0">
    <div class="row g-0">
      <div class="col-lg-3 col-md-6">
        <div class="lc-block">
          <a href="https://www.instagram.com/p/your_post_link_1" target="_blank">
            <img class="img-fluid" loading="lazy" alt="Photo by Ishan @seefromthesky" src="https://images.unsplash.com/photo-1507295386538-ddd5e86cd597?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NjN8fG9jZWFufGVufDB8MHx8fDE2MzgzNzUyMzQ&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=768" srcset="https://images.unsplash.com/photo-1507295386538-ddd5e86cd597?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NjN8fG9jZWFufGVufDB8MHx8fDE2MzgzNzUyMzQ&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=768 1080w, https://images.unsplash.com/photo-1507295386538-ddd5e86cd597??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NjN8fG9jZWFufGVufDB8MHx8fDE2MzgzNzUyMzQ&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=700 700w, https://images.unsplash.com/photo-1507295386538-ddd5e86cd597??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NjN8fG9jZWFufGVufDB8MHx8fDE2MzgzNzUyMzQ&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=300 300w, https://images.unsplash.com/photo-1507295386538-ddd5e86cd597??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NjN8fG9jZWFufGVufDB8MHx8fDE2MzgzNzUyMzQ&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=768 768w, https://images.unsplash.com/photo-1507295386538-ddd5e86cd597??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NjN8fG9jZWFufGVufDB8MHx8fDE2MzgzNzUyMzQ&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1024 1024w" sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="768">
          </a>
        </div><!-- /lc-block -->
      </div><!-- /col -->
      <div class="col-lg-3 col-md-6">
        <div class="lc-block">
          <a href="https://www.instagram.com/p/your_post_link_2" target="_blank">
            <img class="img-fluid" loading="lazy" alt="Photo by Mathyas Kurmann" src="https://images.unsplash.com/photo-1466094899371-97b327dff551?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MTF8fG9jZWFufGVufDB8MHx8fDE2MzgzNzUyMDA&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=768" srcset="https://images.unsplash.com/photo-1466094899371-97b327dff551?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MTF8fG9jZWFufGVufDB8MHx8fDE2MzgzNzUyMDA&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=768 1080w, https://images.unsplash.com/photo-1466094899371-97b327dff551??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MTF8fG9jZWFufGVufDB8MHx8fDE2MzgzNzUyMDA&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=700 700w, https://images.unsplash.com/photo-1466094899371-97b327dff551??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MTF8fG9jZWFufGVufDB8MHx8fDE2MzgzNzUyMDA&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=300 300w, https://images.unsplash.com/photo-1466094899371-97b327dff551??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MTF8fG9jZWFufGVufDB8MHx8fDE2MzgzNzUyMDA&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=768 768w, https://images.unsplash.com/photo-1466094899371-97b327dff551??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MTF8fG9jZWFufGVufDB8MHx8fDE2MzgzNzUyMDA&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1024 1024w" sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="768">
          </a>
        </div><!-- /lc-block -->
      </div><!-- /col -->
      <div class="col-lg-3 col-md-6">
        <div class="lc-block">
          <a href="https://www.instagram.com/p/your_post_link_3" target="_blank">
            <img class="img-fluid" loading="lazy" alt="Photo by Reinis Birznieks" src="https://images.unsplash.com/photo-1524946274118-e7680e33ccc5?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8Mjd8fG9jZWFufGVufDB8MHx8fDE2MzgzNzUyMDc&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=768" srcset="https://images.unsplash.com/photo-1524946274118-e7680e33ccc5?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8Mjd8fG9jZWFufGVufDB8MHx8fDE2MzgzNzUyMDc&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=768 1080w, https://images.unsplash.com/photo-1524946274118-e7680e33ccc5??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8Mjd8fG9jZWFufGVufDB8MHx8fDE2MzgzNzUyMDc&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=700 700w, https://images.unsplash.com/photo-1524946274118-e7680e33ccc5??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8Mjd8fG9jZWFufGVufDB8MHx8fDE2MzgzNzUyMDc&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=300 300w, https://images.unsplash.com/photo-1524946274118-e7680e33ccc5??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8Mjd8fG9jZWFufGVufDB8MHx8fDE2MzgzNzUyMDc&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=768 768w, https://images.unsplash.com/photo-1524946274118-e7680e33ccc5??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8Mjd8fG9jZWFufGVufDB8MHx8fDE2MzgzNzUyMDc&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1024 1024w" sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="768">
          </a>
        </div><!-- /lc-block -->
      </div><!-- /col -->
      <div class="col-lg-3 col-md-6">
        <div class="lc-block">
          <a href="https://www.instagram.com/p/your_post_link_4" target="_blank">
            <img class="img-fluid" loading="lazy" alt="Photo by Ishan @seefromthesky" src="https://images.unsplash.com/photo-1507295386538-ddd5e86cd597?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NjN8fG9jZWFufGVufDB8MHx8fDE2MzgzNzUyMzQ&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=768" srcset="https://images.unsplash.com/photo-1507295386538-ddd5e86cd597?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NjN8fG9jZWFufGVufDB8MHx8fDE2MzgzNzUyMzQ&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=768 1080w, https://images.unsplash.com/photo-1507295386538-ddd5e86cd597??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NjN8fG9jZWFufGVufDB8MHx8fDE2MzgzNzUyMzQ&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=700 700w, https://images.unsplash.com/photo-1507295386538-ddd5e86cd597??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NjN8fG9jZWFufGVufDB8MHx8fDE2MzgzNzUyMzQ&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=300 300w, https://images.unsplash.com/photo-1507295386538-ddd5e86cd597??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NjN8fG9jZWFufGVufDB8MHx8fDE2MzgzNzUyMzQ&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=768 768w, https://images.unsplash.com/photo-1507295386538-ddd5e86cd597??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NjN8fG9jZWFufGVufDB8MHx8fDE2MzgzNzUyMzQ&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1024 1024w" sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="768">
           </a>
        </div><!-- /lc-block -->
      </div><!-- /col -->
    </div><!-- /row -->
  </div><!-- /container-fluid -->
</section>

        

        <?php endwhile ?>
    <?php endif ?>
<?php get_footer() ?>

