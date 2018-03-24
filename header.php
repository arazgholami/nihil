                                                                <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
	<!-- Title -->
	<title>
          <?php
            global $page, $paged;
            wp_title( '|', true, 'right' );
            bloginfo( 'name' );
            echo " | یادداشت‌های علیرضا غلامی";
            $site_description = get_bloginfo( 'description', 'display' );
            if ( $site_description && ( is_home() || is_front_page() ) )
                echo "";
            if ( $paged >= 2 || $page >= 2 )
                echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
          ?>
     </title>
        <!-- Metatags -->
        <meta charset="<?php bloginfo('charset');?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="author" content="Alireza Gholami (@Heshzad)">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="keywords" content="<?php $posttags = get_the_tags(); if ($posttags) {foreach($posttags as $tag) {echo ",".$tag->name;}}?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index,follow">
        <!-- Favicon -->
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico?ver=4" type="image/x-icon">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico?ver=4" type="image/x-icon">
        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.pageslide.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?ver=3">
        <!-- Scripts -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script('comment-reply'); ?>
    </head>
    <body>
    
    <div id="sidebar">
        <div id="search" >
           <form role="search" action="<?php bloginfo('home'); ?>">
            <input type="text" class="form-control" placeholder="جستجو" name="s">
          </form>
        </div>  
       <div id="pages">
         <ol>
          <h4>صفحات</h4>
             <li><a href="<?php bloginfo('home'); ?>">نخست</a></li>
             <?php 
                wp_list_pages(array(
                'link_after'   => '',
                'link_before'  => '',
                'post_type'    => 'page',
                'post_status'  => 'publish',
                'show_date'    => '',
                'sort_column'  => 'menu_order, post_title',
                'sort_order'   => '',
                'title_li'     => __('')
                ));
             ?>
         </ol>
       </div>
       <div id="categories" >
           <ol>
              <h4>دسته‌بندی</h4>
              <?php wp_list_categories('orderby=id&title_li=&use_desc_for_title=1'); ?>
           </ol>
       </div>
     </div>
       
         
        <div id="fbss"><img src="<?php echo get_template_directory_uri(); ?>/img/safe_image.jpg" alt="Screenshot"></div>
        <header>
          <div class="container">
              <a href="<?php bloginfo('home'); ?>"><h1>هشزاد</h1></a>
              <p><?php bloginfo('description'); ?></p>
          </div>
        </header>
        <nav>
            <div id="pages-wrapper">
                <div class="container">
                                       <a class="pull-left" href="#sidebar" id="sidebarnav" onclick="setWidth();"><button class="btn"><i class="fa fa-bars"></i></button></a>

                    <a id="avatar" href="http://alirezagholami.com"><img style="margin-left: -30px;" class="pull-left" src="<?php echo get_template_directory_uri(); ?>/img/avatar.png" alt="Avatar"></a>
                    <ol class="pull-right">
                         <li><a href="<?php bloginfo('home'); ?>">نخست</a></li>
                         <?php 
                            wp_list_pages(array(
                            'link_after'   => '',
                            'link_before'  => '',
                            'post_type'    => 'page',
                            'post_status'  => 'publish',
                            'show_date'    => '',
                            'sort_column'  => 'menu_order, post_title',
                            'sort_order'   => '',
                            'title_li'     => __('')
                            ));
                         ?>
                    </ol>
                </div>
            </div>
            <div id="categories-wrapper">
                <div class="container">
                    <ol>
                        <?php wp_list_categories('orderby=id&title_li=&use_desc_for_title=1'); ?>
                    </ol>
                    <div id="socials" class="pull-left">
                        <a href="https://facebook.com/heshzad"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/heshzad"><i class="fa fa-twitter"></i></a>
                        <a href="https://google.com/+heshzad"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
        </nav>
                            
                            