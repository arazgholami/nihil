<?php
if ( post_password_required() )
	return;
?>
       <!-- Comments -->                   
        <?php if ( have_comments() ) : ?>
            <?php wp_list_comments('type=comment&callback=mytheme_comment');?>
            <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
            <nav class="navigation" role="navigation">
                <div class="nav-previous"><?php previous_comments_link('صفحه بعدی'); ?></div>
                <div class="nav-next"><?php next_comments_link('صفحه قبلی'); ?></div>
            </nav>
            <?php endif; ?>
        <?php
            if ( ! comments_open() && get_comments_number() ) : ?>
            <div id="comments">
               <div class="container">
                <?php echo "The is no comment."; ?>
               </div>
            </div>
            <?php endif; ?>
        <?php endif; ?>
        <?php if (!have_comments()) : ?>
            <div id="comments">
              <div class="container">
                <p id="no-comment">دیدگاهی وجود ندارد.</p>
              </div>
            </div>
        <?php endif; ?>

        <div id="leave-comment">
            <div class="container">
                <?php
                   $args = array(
                          'id_form'           => '',
                          'id_submit'         => 'submit',
                          'title_reply'       => '',
                          'title_reply_to'    => __( '' ),
                          'cancel_reply_link' => __( '' ),                       
                          //'title_reply'       => 'Leave a Reply',
                          //'title_reply_to'    => __( 'Reply to %s' ),
                          //'cancel_reply_link' => __( 'Cansel Reply' ),
                          'label_submit'      => __( 'ارسال' ),

                          'comment_field' =>  '
                          <div class="col-md-5 pull-right">
                            <textarea name="comment" id="" class="form-control" placeholder="دیدگاه"></textarea>
                          </div>
                          <div class="col-md-4">
                            <p>لطفا تنها دیدگاه‌تان در مورد نوشته‌ی فوق رو بنویسید. برای تماس با من از صفحه ارتباط استفاده کنید.<br>
                            از ایمیل‌تان به‌جز نمایش آواتار شما از طریق gravatar استفاده‌ی دیگری نخواهد شد.
                            </p>
                           </div>
                          ',

                          'must_log_in' => '<p class="must-log-in">' .
                            sprintf(
                              __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
                              wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
                            ) . '</p>',

                          'logged_in_as' => '<p class="logged-in-as">' .
                            sprintf(
                            __( '<a href="%3$s" title="Log out of this account">Logout?</a>' ),
                              admin_url( 'profile.php' ),
                              $user_identity,
                              wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
                            ) . '</p>',

                          'comment_notes_before' => '',
                          'comment_notes_after' => '',

                          'fields' => apply_filters( 'comment_form_default_fields', array(

                            'author' =>
                            '<div class="col-md-3 pull-right">
                            <input name="author" type="text" class="form-control" id="name" name="name" value="' . esc_attr( $commenter['comment_author'] ) .'" size="30"' . $aria_req . ' placeholder="نام">',

                            'email' =>
                            '<input type="email" name="email" class="form-control" id="email" name="email" value="' . esc_attr(  $commenter['comment_author_email'] ) .'" size="30"' . $aria_req . ' placeholder="ایمیل">',

                            'url' =>
                            '<input type="text" class="form-control" id="url" name="url" value="' . esc_attr( $commenter['comment_author_url'] ) .'" size="30" placeholder="صفحه شخصی">
                            
                            <p class="form-submit" id="form-submit">
                                <input name="submit" type="submit" class="pull-left" id="submit" value="ارسال">
                                <input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID">
                                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
						    </p>

                            </div>'
                            )
                          ),
                        );

                 ob_start();
                 comment_form($args);
                 $form = ob_get_clean(); 
                 $form = str_replace('class="comment-form"','class="comment-form row"', $form);
                 echo str_replace('','', $form);
                ?>
            </div>
        </div>
