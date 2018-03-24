<?php get_header(); ?>
        <div id="article">
          <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <article class="container">
                <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
                <?php echo get_the_post_thumbnail($post_id,'large'); ?>
                <?php the_content('<div class="more pull-right">ادامه مطلب</div>'); ?>
                <div class="more pull-right">
                    <?php comments_popup_link('‌دیدگاه‌ها', 'دیدگاه‌ها (1)', 'دیدگاه‌ها (%) '); ?>
                </div>
                <div class="meta pull-left">
                    <?php the_author(); ?><br>
                    <span><?php the_time('j') ?></span> <?php the_time('F') ?> <span><?php the_time('Y') ?></span>
                </div>
            </article>
            <?php endwhile; ?>
            <span id="navlinks">
             <?php posts_nav_link(' ', 'نوشته‌های جدیدتر', ' '); ?><br>
             <?php posts_nav_link(' ', ' ', 'نوشته‌های قدیمی‌تر'); ?>
            </span>
          <?php else : ?>
            <article class="container" id="nopost">
                  <h4>خطای 404 - پیدا نشد.</h4>
                  <p>احتمالا حذف شده‌ یا لینکی که با اون اومدید درست نیست.</p>
            </article>
           <?php endif; ?>
        </div>
<?php get_footer(); ?>