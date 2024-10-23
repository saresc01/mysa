<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name"); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-light fixed-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="<?php echo get_permalink(get_page_by_path('front-page')); ?>">
            <?php
            // Custom loop for the logo in the header
            $headers = new WP_Query(array(
                'post_type' => 'header',
                'posts_per_page' => 1, // Assuming only one header post
            ));
            ?>
            <?php if ($headers->have_posts()): ?>
                <?php while ($headers->have_posts()): $headers->the_post(); ?>
                    <?php $Logo = get_field('logo'); ?>
                    <?php if ($Logo): ?>
                        <img src="<?php echo esc_url($Logo['url']); ?>" alt="Mysa Logo" style="height: 40px;">
                    <?php endif; ?>
        </a> <!-- Closed the <a> tag properly here -->
        
        <!-- Mobile Navigation Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('front-page')); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('shop')); ?>">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('about')); ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('blog')); ?>">Blog</a>
                </li>
            </ul>
            
            <ul><?php pll_the_languages() ?></ul>

        </div>
        
                     

        <!-- Icons and Sign Up Button -->
        <div class="d-flex align-items-center">
            <?php
            // Fetch icons within the loop
            $shopping_cart_icon = get_field("shopping_cart_icon");
            $wishlist_icon = get_field("wishlist_icon");
            ?>
            <?php if ($shopping_cart_icon && $wishlist_icon): ?>
                <div class="d-flex align-items-center">
                    <a class="text-reset me-3" href="#">
                        <img src="<?php echo esc_url($shopping_cart_icon['url']); ?>" alt="shopping-cart-icon" class="cart-icon"/>
                    </a>
                    <a class="text-reset me-3" href="#">
                        <img src="<?php echo esc_url($wishlist_icon['url']); ?>" alt="wishlist-icon" class="heart-icon"/>
                    </a>
                </div>
            <?php endif; ?>
            
            <!-- Sign Up Button -->
            <div class="d-flex align-items-center">
                <button data-mdb-ripple-init type="button" class="btn btn-primary me-3" style="border-radius: 0;">
                    Sign up 
                </button>
            </div>
        </div>
        
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    </div>
</nav>

<?php wp_footer(); ?> <!-- WordPress footer hook -->
</body>
</html>
