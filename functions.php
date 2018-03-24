<?php

    //Active Footer widgets
	if (function_exists('register_sidebar'))
	 {
        register_sidebar(
            array(
                'id' => 'footer',
                'name' => __( 'Footer' ),
                'description' => __( 'ابزارک‌های پانوشت' ),
                'before_widget' => '',
                'after_widget' => '',
                'before_title' => '<a id="title" href="https://delicious.com/heshzad"><h3>',
                'after_title' => '</h3></a>'
            ));
    }


	//get MoreLink on search page result
	function new_excerpt_more($more) {
	global $post;
	return '... <a href="'. get_permalink($post->ID) . '">(ادامه مطلب)</a>';
	}
	add_filter('excerpt_more', 'new_excerpt_more');

	//Customize comment theme
	function mytheme_comment($comment, $args, $depth) {
			$GLOBALS['comment'] = $comment;
			extract($args, EXTR_SKIP);
	
			if ( 'div' == $args['style'] ) {
				$tag = 'div';
				$add_below = 'comment';
			} else {
				$tag = 'div';
				$add_below = 'div-comment';
			}
	?>
			<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comments">
			<?php if ( 'div' != $args['style'] ) : ?>
            <div class="container" id="comment-<?php comment_ID() ?>" >
                <?php endif; ?>
                <div class="col-sm-1 pull-right">
                   <?php if ($args['avatar_size'] != 0) echo get_avatar($comment) ?>
                </div>
                <div class="col-sm-11"> 
                    <h4><?php echo get_comment_author_link();?>:</h4>
                    <?php comment_text() ?> 
                     <?php if ($comment->comment_approved == '0') : ?>
                    <span class="content-comments-item-wait">
                        <em><?php _e('Your comment is awaiting moderation.') ?></em>
                    </span><?php endif; ?>                                  
                </div>
            </div>
                
                
			<?php if ( 'div' != $args['style'] ) : ?>
			</div>
			<?php endif; ?>
<?php
			}


function wptutsplus_theme_support() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'wptutsplus_theme_support' );

?>