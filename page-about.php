<?php get_header(); ?>
<body>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

        <?php
            // Fetch all fields
            $headline = get_field("headline");
            $about_image = get_field("about_image");
            $company_description = get_field("company_description");
            $company_goal = get_field("company_goal");
            $differentiation_heading = get_field("differentiation_heading");
            $differentiation_text = get_field("differentiation_text");
            $persona_description = get_field("persona_description");
            $mission_headline = get_field("mission_headline");
            $goal_headline = get_field("goal_headline");
            $socials_cta = get_field("socials_cta");
        ?>

        <!-- About Section -->
        <div class="container" id="about">
            <div class="row align-items-md-center mt-4 pt-5">
                <div class="col-md-12">
                    <div class="lc-block text-center">
                        <span class="small mt-2 d-block"></span>
                        <h2 class="display-2 mb-0"><?php echo $headline; ?></h2>
                    </div><!-- /lc-block -->
                </div><!-- /col -->
            </div><!-- /row -->

            <!-- Details Section -->
            <section class="pt-5 padding-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <img src="<?php echo $about_image["url"]; ?>" alt="" class="img-fluid w-100">
                                </div>
                            </div>

                            <div class="row justify-content-center mt-5">
                                <div class="col-lg-4">
                                    <h5 class="text-uppercase letter-spacing mb-4"><?php echo $mission_headline; ?></h5>
                                    <p><?php echo $company_description; ?></p>
                                </div>
                                <div class="col-lg-4">
                                    <h5 class="text-uppercase letter-spacing mb-4"><?php echo $goal_headline; ?></h5>
                                    <p><?php echo $company_goal; ?></p>
                                </div>

                                <div class="col-lg-4">
                                    <h5 class="text-uppercase letter-spacing mb-4"><?php echo $socials_cta; ?></h5>
                                    <?php
                                        // Custom loop for socials
                                        $socials = new WP_Query(array(
                                            'post_type' => 'social',
                                            'posts_per_page' => -1,
                                        ));
                                    ?>

                                    <div class="follow-socials">
                                            <?php if($socials->have_posts()): ?>
                                                <?php while($socials->have_posts()): $socials->the_post(); ?>
                                                    <?php
                                                        $icon = get_field("icon"); 
                                                        $link = get_field("link");
                                                    ?>
                                                        <a href="<?php echo $link; ?>" target="_blank">
                                                            <img src="<?php echo $icon['url']; ?>" alt="social-icon" class="social-icon" /> <!-- Icon image -->
                                                        </a>
                                                <?php endwhile; ?>
                                                <?php wp_reset_postdata(); ?>
                                            <?php endif; ?>


                                        </div>

                                </div><!-- /col-lg-4 -->
                            </div><!-- /row -->

                            <!-- Differentiation Section -->
                            <div>
                                <h3 class="mb-3 mt-5"><?php echo $differentiation_heading; ?></h3>
                                <p class="mb-4"><?php echo $differentiation_text; ?></p>
                            </div>

                            <!-- Cards Custom Loop -->
                            <div class="row m-4">
                                <?php
                                $about_cards = new WP_Query(array(
                                    'post_type' => 'about-card',
                                    'posts_per_page' => -1,
                                ));
                                ?>
                                <?php if($about_cards->have_posts()): ?>
                                    <?php while($about_cards->have_posts()): $about_cards->the_post(); ?>
                                        <?php
                                        $card_headline = get_field("card_headline");
                                        $card_image = get_field("card_image");
                                        ?>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="about-widget mb-4 mb-lg-0">
                                                <img src="<?php echo $card_image["url"]; ?>" alt="" class="img-fluid">
                                                <h4 class="mt-3"><?php echo $card_headline; ?></h4>
                                            </div>
                                        </div><!-- /col-lg-3 -->
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                            </div><!-- /row -->

                            <p class="mb-4"><?php echo $persona_description; ?></p>
                        </div><!-- /col-lg-12 -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </section><!-- /section -->
        </div><!-- /container -->

        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>
</body>
