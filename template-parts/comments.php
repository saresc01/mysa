<div id="comments" clas="comments-area">

    <?php if (have_comments()) : ?>
        <h2 class="comments-title">Comments</h2>
        <?php wp_list_comments(); ?>
        <?php the_comments_navigation(); ?> 
        <?php paginate_comments_links(); ?>
        <?php endif; ?> 

        <?php if(comments_open()): ?>
            <?php comment_form(); ?>
        <?php else: ?> 
            <p class="no-comments">Comments are closed</p>
            <?php endif; ?>

        </div>
       