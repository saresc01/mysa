<?php get_header(); ?>

<style>
    body {
        font-family: 'Helvetica Neue', Arial, sans-serif;
        background-color: #f4f4f4;
        color: #333;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 85%;
        margin: 0 auto;
        max-width: 1100px;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .site-main {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .blog-posts {
        width: 70%;
    }

    .blog-posts article {
        margin-bottom: 30px;
        padding: 20px;
        border-bottom: 1px solid #ddd;
    }

    .entry-title {
        font-size: 28px;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .entry-title a {
        text-decoration: none;
        color: #0073aa;
    }

    .entry-title a:hover {
        text-decoration: underline;
    }

    .entry-meta {
        font-size: 14px;
        color: #777;
        margin-bottom: 15px;
    }

    .entry-content {
        font-size: 16px;
        line-height: 1.7;
    }

    .pagination {
        text-align: center;
        margin-top: 30px;
    }

    .pagination a {
        text-decoration: none;
        color: #0073aa;
        padding: 8px 12px;
        border: 1px solid #ddd;
        margin: 0 2px;
        border-radius: 3px;
    }

    .pagination a:hover {
        background-color: #0073aa;
        color: #fff;
    }

    aside.sidebar {
        width: 25%;
    }

    aside.sidebar h2 {
        font-size: 20px;
        margin-bottom: 15px;
        border-bottom: 2px solid #0073aa;
        padding-bottom: 5px;
    }

    aside.sidebar ul {
        list-style-type: none;
        padding-left: 0;
    }

    aside.sidebar ul li {
        margin-bottom: 10px;
    }

    aside.sidebar ul li a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }

    aside.sidebar ul li a:hover {
        color: #0073aa;
    }

    footer {
        text-align: center;
        padding: 20px 0;
        margin-top: 40px;
        border-top: 1px solid #ddd;
        background-color: #0073aa;
        color: #fff;
    }
</style>

<div class="container">
    <main class="site-main">
        <section class="blog-posts">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </header>
                        <div class="entry-meta">
                            <span class="posted-on">Posted on <?php echo get_the_date(); ?></span>
                            <span class="byline"> by <?php the_author_posts_link(); ?></span>
                        </div>
                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

            <div class="pagination">
                <?php 
                $pagination_args = array(
                    'total'        => $wp_query->max_num_pages,
                    'current'      => max( 1, get_query_var('paged') ),
                    'format'       => '?paged=%#%',
                    'show_all'     => false,
                    'end_size'     => 2,
                    'mid_size'     => 1,
                    'prev_next'    => true,
                    'prev_text'    => __('« Previous'),
                    'next_text'    => __('Next »'),
                    'type'         => 'plain',
                );

                echo paginate_links( $pagination_args ); 
                ?>
            </div>
        </section>

        <aside class="sidebar">
            <?php get_sidebar(); ?>
        </aside>
    </main>
</div>

<?php get_footer(); ?>
