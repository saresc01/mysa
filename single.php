<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>
            
            
        <?php
        $title = get_the_title();
        $date = get_the_date();
        $author = get_the_author();
        $excerpt = get_the_excerpt();
        $content = get_the_content();
        $categories = get_the_category();
        $tags = get_tags();
        ?>
        


        <span>Categories: </span>
        <?php if($categories): ?>
            <?php foreach ($categries as $category): ?>
                <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?>"></a>
            <?php endforeach; ?>
        <?php endif;  ?>

        <span>get_tags: </span>
        <?php if($tags): ?>
            <?php foreach ($tags as $tag): ?>
                <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?>"></a>
            <?php endforeach; ?>
        <?php endif;  ?>

       
        <?php if (comments_open() || get_comments_number()): ?>
            <?php comments_template(); ?>
            <?php endif; ?>
        
        <?php echo do_shortcode('[contact-form-7 id="15344e9" title="Contact form 1"]'); ?>


        <?php endwhile ?>
    <?php endif ?>
<?php get_footer() ?>