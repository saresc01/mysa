<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>
            
            


        
        <?php echo do_shortcode('[contact-form-7 id="15344e9" title="Contact form 1"]'); ?>






        

        <?php endwhile ?>
    <?php endif ?>
<?php get_footer() ?>

