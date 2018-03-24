<?php get_header(); ?>
        <div id="article">
          <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <article class="container">
                <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
                <?php echo get_the_post_thumbnail($post_id,'large'); ?>
                <?php the_content('<div class="more pull-right">ادامه مطلب</div>'); ?>
                <div class="meta pull-left">
                    <?php the_author(); ?><br>
                    <span><?php the_time('j') ?></span> <?php the_time('F') ?> <span><?php the_time('Y') ?></span>
                </div>
            </article>
            <?php comments_template(); ?>
            <?php endwhile; ?>
          <?php else : ?>
          <?php endif; ?>
        </div>
<?php get_footer(); ?>