<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>
            
            


        
        <?php echo do_shortcode('[contact-form-7 id="15344e9" title="Contact form 1"]'); ?>

        <?php
            $index_image = get_field("index_image");
            
            ?>
        
<!-- hero --> 
  
    
<!-- Hero section -->
<section class="d-flex min-vh-100" lc-helper="background" >
    <img src="<?php echo $index_image["url"]; ?>" alt="" class="img-fluid w-100"> 

  <div class="align-self-center text-center text-light col-md-8 offset-md-2">
      <div class="lc-block mb-4">
          <div editable="rich">
              <h1 class="display-1 fw-bolder">Pure Natural Wax Candles for a Greener Tomorrow</h1>
          </div>
      </div>

      <div class="lc-block">
          <div editable="rich">
              <p class="lead">Hand-poured candles made from sustainable beeswax, soy wax, and coconut wax. Clean burning, eco-friendly, and infused with love.</p>
              <p class="lead">Our eco-conscious candles help you light up your home while caring for the planet. Made with natural, renewable materials for a healthier living environment.</p>
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
        <h2 class="fw-bold display-2">Trending this Season: Natural Candles You’ll Love</h2>
      </div>
      <div class="lc-block text-center">
        <p class="lead">Discover our most popular eco-friendly candles of the season. Each is crafted with sustainable wax blends and infused with natural fragrances to create a calming atmosphere.</p>
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
            <div class="col-md-4">
              <a href="shop.html" class="card"> <!-- Wrap the card with anchor tag -->
                <div class="card-body">
                  <img src="assests/mysa_candle.jpg" class="card-img-top" alt="Card 1">
                  <h5 class="card-title m-2">Red Apple and Cinnamon (Beeswax)</h5>
                  <p class="card-text m-2">Embrace the warmth of the season with this soothing blend of red apple and cinnamon. Hand-poured from pure beeswax, this candle offers a clean burn and a cozy aroma, perfect for autumn nights.</p>
                  <a href="shop.html" class="btn btn-primary btn-block">Buy Now</a> <!-- Full-width button -->
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="shop.html" class="card"> <!-- Wrap the card with anchor tag -->
                <div class="card-body">
                  <img src="assests/mysa_candle.jpg" class="card-img-top" alt="Card 2">
                  <h5 class="card-title m-2">Fresh Lemon (Soy Wax)</h5>
                  <p class="card-text m-2">Bright and invigorating, the Fresh Lemon soy wax candle is ideal for bringing a burst of freshness to your home. Made with natural soy wax for a long-lasting and clean burn.</p>
                  <a href="shop.html" class="btn btn-primary btn-block">Buy Now</a> <!-- Full-width button -->
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="shop.html" class="card"> <!-- Wrap the card with anchor tag -->
                <div class="card-body">
                  <img src="assests/mysa_candle.jpg" class="card-img-top" alt="Card 3">
                  <h5 class="card-title m-2">Ginger Lily (Soy Wax)</h5>
                  <p class="card-text m-2">Add a touch of elegance to your space with the Ginger Lily candle, crafted from eco-friendly soy wax. This floral blend creates a calming atmosphere, ideal for moments of relaxation.</p>
                  <a href="shop.html" class="btn btn-primary btn-block">Buy Now</a> <!-- Full-width button -->
                </div>
              </a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-slide">
          <div class="row">
            <div class="col-md-4">
              <a href="shop.html" class="card"> <!-- Wrap the card with anchor tag -->
                <div class="card-body">
                  <img src="assests/mysa_candle.jpg" class="card-img-top" alt="Card 4">
                  <h5 class="card-title m-2">Lime and Mandarin (Coconut Wax)</h5>
                  <p class="card-text m-2">Awaken your senses with the zesty combination of lime and mandarin. Hand-poured in luxurious coconut wax, this candle fills your home with a refreshing and energizing scent.</p>
                  <br>
                  <a href="shop.html" class="btn btn-primary btn-block">Buy Now</a> <!-- Full-width button -->
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="shop.html" class="card"> <!-- Wrap the card with anchor tag -->
                <div class="card-body">
                  <img src="assests/mysa_candle.jpg" class="card-img-top" alt="Card 5">
                  <h5 class="card-title m-2">Cinnamon (Beeswax)</h5>
                  <p class="card-text m-2">Warm up your space with the comforting, spicy scent of cinnamon. This beeswax candle offers a rich aroma and a clean, toxin-free burn, perfect for creating a cozy atmosphere.</p>
                  <br>
                  <a href="shop.html" class="btn btn-primary btn-block">Buy Now</a> <!-- Full-width button -->
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="shop.html" class="card"> <!-- Wrap the card with anchor tag -->
                <div class="card-body">
                  <img src="assests/mysa_candle.jpg" class="card-img-top" alt="Card 6">
                  <h5 class="card-title m-2">Card Title 6</h5>
                  <p class="card-text m-2">Description for the sixth card.</p>
                  <br>
                  <a href="shop.html" class="btn btn-primary btn-block">Buy</a> <!-- Full-width button -->
                </div>
              </a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-slide">
          <div class="row">
            <div class="col-md-4">
              <a href="shop.html" class="card"> <!-- Wrap the card with anchor tag -->
                <div class="card-body">
                  <img src="assests/mysa_candle.jpg" class="card-img-top" alt="Card 7">
                  <h5 class="card-title m-2">Card Title 7</h5>
                  <p class="card-text m-2">Description for the seventh card.</p>
                  <br>
                  <a href="shop.html" class="btn btn-primary btn-block">Buy</a> <!-- Full-width button -->
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="shop.html" class="card"> <!-- Wrap the card with anchor tag -->
                <div class="card-body">
                  <img src="assests/mysa_candle.jpg" class="card-img-top" alt="Card 8">
                  <h5 class="card-title m-2">Card Title 8</h5>
                  <p class="card-text m-2">Description for the eighth card.</p>
                  <br>
                  <a href="shop.html" class="btn btn-primary btn-block">Buy</a> <!-- Full-width button -->
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="shop.html" class="card"> <!-- Wrap the card with anchor tag -->
                <div class="card-body">
                  <img src="assests/mysa_candle.jpg" class="card-img-top" alt="Card 9">
                  <h5 class="card-title m-2">Card Title 9</h5>
                  <p class="card-text m-2">Description for the ninth card.</p>
                  <br>
                  <a href="about.html" class="btn btn-primary btn-block">Buy</a> <!-- Full-width button -->
                </div>
              </a>
            </div>
          </div>
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
    <h2 class="fw-bolder display-3">Looking for a great surprise each month?</h2>
  </div>
</div>
<div class="lc-block col-md-8">
  <div editable="rich">
    <p class="lead">Looking for a great surprise each month?
      In our monthly candle box, you’ll get two natural candles: one with a special scent for the month, and the other a surprise fragrance to brighten your space!
    </p>
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
          <h4>BLOG POST</h4>

					<h2>Why Natural Wax Candles are the Future of Sustainable Living.</h2>


				</div>
			</div><!-- /lc-block -->
			<div class="lc-block text-secondary pb-4">
				<div editable="rich">
					<p><em>In a world where sustainability is more than just a trend, it's a lifestyle choice, the products we choose to bring into our homes matter more than ever. Candles, often seen as a simple indulgence, can have a significant impact on both our health and the environment. That's why at Mysa, we've made it our mission to offer a better alternative. Discover why natural wax candles are not just a luxury but a necessity for anyone committed to living sustainably.&nbsp;</em></p>
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
  <h7 class="eco-carousel-item">ECO SCHMEKO CANDLES</h7>
  <h7 class="eco-carousel-item">ECO SCHMEKO CANDLES</h7>
  <h7 class="eco-carousel-item">ECO SCHMEKO CANDLES</h7>
  <h7 class="eco-carousel-item">ECO SCHMEKO CANDLES</h7>
</div>





<!--testimonial-->

    
<!-- lazily load the Swiper CSS file -->
<link rel="preload" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

<!-- lazily load the Swiper JS file -->
<script defer="defer" src="https://unpkg.com/swiper@8/swiper-bundle.min.js" onload="initializeSwiperRANDOMID();"></script>

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

<div class="container py-4">
	<div class="lc-block text-center">
		<div editable="rich">
			<h2 class="mb-3 display-6 fw-bold">Lovely Customers</h2>
		</div>
	</div>
	<div class="lc-block text-center mb-5">
		<div editable="rich">
			<p class="mb-3 lead">Customers are Awesome. Check what our clients are saying about us.</p>
		</div>
	</div>
	<div class="row align-items-center py-2">
		<div class="position-relative">
			<img src="https://cdn.livecanvas.com/media/svg/fffuel/svg-shape-11.svg" width="256" height="256" srcset="" sizes="" alt="Made by fffuel.com" class="d-none d-xl-block position-absolute top-0 start-0 translate-middle mt wp-image-2412" loading="lazy">
			<!-- Slider main container -->
			<div class="swiper mySwiper-RANDOMID position-relative">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper mb-5">
					<!-- Slides -->
					<div class="swiper-slide lc-block">
						<div class="card p-3">
							<div class="card-body">
								<div class="lc-block mb-4">
									<div editable="rich">
										<p><em class="rfs-8 text-muted"> "These candles are fantastic! I love the clean burn and the subtle, natural scents. It's the perfect way to create a relaxing atmosphere in my home."&nbsp;</em></p>
									</div>
								</div>
								<div class="lc-block d-inline-flex">
									<div class="lc-block me-3" style="min-width:72px">
										<img class="img-fluid rounded-circle " src="https://i.pravatar.cc/96?img=5" width="72" height="72">
									</div>
									<div class="lc-block">
										<div editable="rich">
											<p class="h5">Leah H. Middaugh:</p>
											<p class="text-muted">Patient educator&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide lc-block">
						<div class="card p-3">
							<div class="card-body">
								<div class="lc-block mb-4">
									<div editable="rich">
										<p><em class="rfs-8 text-muted"> As someone who cares about sustainability, Mysa Candles are my go-to. I feel great knowing they're made from eco-friendly materials, and they smell amazing too!&nbsp;</em></p>
									</div>
								</div>
								<div class="lc-block d-inline-flex">
									<div class="lc-block me-3" style="min-width:48px">
										<img class="img-fluid rounded-circle " src="https://i.pravatar.cc/96?img=7" width="64" height="64">
									</div>
									<div class="lc-block">
										<div editable="rich">
											<p class="h5">James M. Collinsworth</p>
											<p class="text-muted">Street Artist</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide lc-block">
						<div class="card p-3">
							<div class="card-body">
								<div class="lc-block mb-4">
									<div editable="rich">
										<p><em class="rfs-8 text-muted"> The quality of these candles is top-notch! They last long, and I love that they don’t release harmful chemicals into the air.&nbsp;</em></p>
									</div>
								</div>
								<div class="lc-block d-inline-flex">
									<div class="lc-block me-3" style="min-width:72px">
										<img class="img-fluid rounded-circle " src="https://i.pravatar.cc/96?img=26" width="72" height="72">
									</div>
									<div class="lc-block">
										<div editable="rich">
											<p class="h5">Amber E. Smith</p>
											<p class="text-muted">Patient educator&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide lc-block">
						<div class="card p-3">
							<div class="card-body">
								<div class="lc-block mb-4">
									<div editable="rich">
										<p><em class="rfs-8 text-muted"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et metus id ligula malesuada placerat sit amet quis enim. Aliquam erat volutpat. In pellentesque scelerisque auctor.&nbsp;</em></p>
									</div>
								</div>
								<div class="lc-block d-inline-flex">
									<div class="lc-block me-3" style="min-width:72px">
										<img class="img-fluid rounded-circle " src="https://i.pravatar.cc/96?img=3" width="72" height="72">
									</div>
									<div class="lc-block">
										<div editable="rich">
											<p class="h5">Matthew N. Graham</p>
											<p class="text-muted">Street Artist</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide lc-block">
						<div class="card p-3">
							<div class="card-body">
								<div class="lc-block mb-4">
									<div editable="rich">
										<p><em class="rfs-8 text-muted"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et metus id ligula malesuada placerat sit amet quis enim. Aliquam erat volutpat. In pellentesque scelerisque auctor.</em></p>
									</div>
								</div>
								<div class="lc-block d-inline-flex">
									<div class="lc-block me-3" style="min-width:72px">
										<img class="img-fluid rounded-circle " src="https://i.pravatar.cc/96?img=23" width="72" height="72">
									</div>
									<div class="lc-block">
										<div editable="rich">
											<p class="h5">Leslie R. Oleary</p>
											<p class="text-muted">Fashion designer</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide lc-block">
						<div class="card p-3">
							<div class="card-body">
								<div class="lc-block mb-4">
									<div editable="rich">
										<p><em class="rfs-8 text-muted"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et metus id ligula malesuada placerat sit amet quis enim. Aliquam erat volutpat. In pellentesque scelerisque auctor.&nbsp;</em></p>
									</div>
								</div>
								<div class="lc-block d-inline-flex">
									<div class="lc-block me-3" style="min-width:72px">
										<img class="img-fluid rounded-circle " src="https://i.pravatar.cc/96?img=6" width="72" height="72">
									</div>
									<div class="lc-block">
										<div editable="rich">
											<p class="h5">James C. Call</p>
											<p class="text-muted">Street Artist</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- If we need pagination -->
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</div>
</div>
 
 



	


<!--instagram-->
<section>
  <h2 class="instagram-heading">Check Us on Instagram!</h2> <!-- Centered Heading -->

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

