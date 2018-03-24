        <div id="subscription">
            <div class="container">
                <div class="col-md-4 pull-right">
                    <div id="wrapper">
                       <p>
                          با وارد کردن اسم و ایمیل خودتون تو فرم زیر می‌تونید از آخرین نوشته‌های وبلاگ باخبر بشید. شاید بعضی موقع‌ها چیزهای دیگه‌ای رو هم براتون فرستادم. مطمئنا منظورم اسپم نیست <span>:)</span>
                       </p>
                       <div id="form-wrapper">
                         <div id="form">
                           <input type="text" id="sname" placeholder="نام شما" class="form-control"><br>
                           <input type="email" id="semail" placeholder="ایمیل شما" class="form-control"><br>
                           <button class="btn" onclick="submit();">ثبت</button>
                          </div>
                          <div id="loading"></div>
                          <div id="result"></div>
                       </div>
                    </div>
                </div>
                <div class="col-md-4 pull-right">
                    <div id="rss-wrapper">
                        <p>یه فنجان فید مهمون من باشید.</p>
                        <a href="http://heshzad.com/feed"><span id="rss"></span></a>
                    </div>
                </div>
                <div class="col-md-4 pull-right">
						<?php if ( ! dynamic_sidebar( 'Footer' ) ) : ?>       
						<?php endif; // end sidebar widget area ?>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div id="smile" class="pull-left"></div>
                <p id="copyright">
                    <a href="<?php bloginfo('home'); ?>">هشزاد</a> - <?php bloginfo('description'); ?><br>
                    کپی‌رایت &copy; <?php echo Date('Y'); ?> - نشر مطالب با ذکر نام نویسنده بلامانع است.
                </p>
            </div>
        </footer>
    <!-- Scripts -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.11.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.pageslide.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    </body>
</html>