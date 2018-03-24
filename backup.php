<?php get_header(); ?>
        <div id="article">
          <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <article class="container">
                <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
                <?php the_content(''); ?>
                <div class="more pull-right">
                    <a href="<?php the_permalink() ?>">ادامه مطلب</a>
                </div>
                <div class="meta pull-left">
                    <?php the_author(); ?><br>
                    <span><?php the_time('j') ?></span> <?php the_time('F') ?> <span><?php the_time('Y') ?></span>
                </div>
            </article>
            <?php endwhile; ?>
          <?php else : ?>
          <?php endif; ?>
           <div id="comments">
                <div class="container">
                   <div class="col-sm-1 pull-right">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/avatar.png" alt="Avatar">
                   </div>
                  <div class="col-sm-11">
                      <h4><a href="#">علیرضا</a> می‌نویسد:</h4>
                      <p>
                         از آنجایی که طراحان عموما نویسنده متن نیستند و وظیفه رعایت حق تکثیر متون را ندارند و در همان حال کار آنها به نوعی وابسته به متن می‌باشد آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به پایان برند.
                      </p>
                  </div>
               </div>
               <div class="container">
                   <div class="col-sm-1 pull-right">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/avatar.png" alt="Avatar">
                  </div>
                  <div class="col-sm-11">
                      <h4><a href="#">علیرضا</a> می‌نویسد:</h4>
                      <p>
                         از آنجایی که طراحان عموما نویسنده متن نیستند و وظیفه رعایت حق تکثیر متون را ندارند و در همان حال کار آنها به نوعی وابسته به متن می‌باشد آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به پایان برند.
                      </p>
                  </div>
               </div>
            </div>
            <div id="leave-comment">
                <form action="/" class="container">
                   <div class="col-md-3 pull-right">
                       <input type="text" class="form-control" id="name" name="name"  placeholder="نام" required>
                       <input type="email" class="form-control" id="email" name="email" placeholder="ایمیل" required>
                       <input type="text" class="form-control" id="url" name="url" placeholder="صفحه شخصی">
                       <input type="submit" class="pull-left" value="ارسال">
                   </div>
                   <div class="col-md-5 pull-right">
                       <textarea class="form-control" id="message" placeholder="دیدگاه" required></textarea>
                   </div>
                   <div class="col-md-4">
                    <p>لطفا تنها دیدگاه‌تان در مورد نوشته‌ی فوق رو بنویسید. برای تماس با من از صفحه ارتباط استفاده کنید.</p>
                   </div>
                </form>
            </div>
        </div>
<?php get_footer(); ?>