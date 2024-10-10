<?php
/* Template Name: Blog Page */
get_header(); 
?>
<body>
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            <!-- Fetch all fields -->
            <?php
                $headline = get_field("headline");
                $subheadline = get_field("subheadline");
                $featured_post_date = get_field("featured_post_date");
                $featured_blog_img = get_field("featured_blog_img");
                $featured_blog_heading = get_field("featured_blog_heading");
                $featured_blog_text = get_field("featured_blog_text");
            ?>

            <!-- Blog Header -->
            <header class="py-5 bg-light border-bottom mb-4">
                <div class="container">
                    <div class="text-center my-5">
                        <h1 class="fw-bolder"><?php echo $headline; ?></h1>
                        <p class="lead mb-0"><?php echo $subheadline; ?></p>
                    </div>
                </div>
            </header>

            <!-- Page content -->
            <div class="container">
                <div class="row">
                    <!-- Blog entries -->
                    <div class="col-lg-8">
                        <!-- Featured blog post -->
                        <div class="card mb-4">
                            <a href="#!">
                                <img class="card-img-top" src="<?php echo $featured_blog_img['url']; ?>" alt="Featured Blog Image" />
                            </a>
                            <div class="card-body">
                                <div class="small text-muted"><?php echo $featured_post_date; ?></div>
                                <h2 class="card-title"><?php echo $featured_blog_heading; ?></h2>
                                <p class="card-text"><?php echo $featured_blog_text; ?></p>
                                <a class="btn btn-primary" href="blog_single.html">Read more →</a>
                            </div>
                        </div>

                        <!-- Nested row for non-featured blog posts -->
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Blog post medium first row -->
                                <?php
                                // Custom loop for non-feature blog posts row 1
                                $non_featured_blogs = new WP_Query(array(
                                    'post_type' => 'non_featured_blog',
                                    'posts_per_page' => 2,
                                ));
                                ?>

                                <?php if ($non_featured_blogs->have_posts()): ?>
                                    <?php while ($non_featured_blogs->have_posts()): $non_featured_blogs->the_post(); ?>
                                        <?php
                                        $post_img = get_field("post_img"); 
                                        $post_heading = get_field("post_heading");
                                        $post_text = get_field("post_text");
                                        $date_posted = get_field("date_posted");
                                        ?>
                                        <div class="card mb-4">
                                            <a href="#!">
                                                <img class="card-img-top" src="<?php echo $post_img['url']; ?>" alt="Non-Featured Blog Image" />
                                            </a>
                                            <div class="card-body">
                                                <div class="small text-muted"><?php echo $date_posted; ?></div>
                                                <h2 class="card-title h4"><?php echo $post_heading; ?></h2>
                                                <p class="card-text"><?php echo $post_text; ?></p>
                                                <a class="btn btn-primary" href="#!">Read more →</a>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                            </div>

                            <div class="col-lg-6">
                                <!-- Blog post second row -->
                                <?php
                                // Custom loop for non-feature blog posts row 2
                                $non_featured_blogs = new WP_Query(array(
                                    'post_type' => 'non-featured-blog',
                                    'posts_per_page' => 2,
                                    'offset' => 2,
                                ));
                                ?>

                                <?php if ($non_featured_blogs->have_posts()): ?>
                                    <?php while ($non_featured_blogs->have_posts()): $non_featured_blogs->the_post(); ?>
                                        <div class="card mb-4">
                                            <a href="#!">
                                                <img class="card-img-top" src="<?php echo $post_img['url']; ?>" alt="Non-Featured Blog Image" />
                                            </a>
                                            <div class="card-body">
                                                <div class="small text-muted"><?php echo $date_posted; ?></div>
                                                <h2 class="card-title h4"><?php echo $post_heading; ?></h2>
                                                <p class="card-text"><?php echo $post_text; ?></p>
                                                <a class="btn btn-primary" href="#!">Read more →</a>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar / Banner -->
                    <div class="col-lg-4 col-12">
                        <div class="banner mb-4 d-flex flex-column bd-highlight">
                            <img class="card-img-top img-fluid" src="https://placehold.co/200x600" alt="Banner Image" />
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php get_footer(); ?>

