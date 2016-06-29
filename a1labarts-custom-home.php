<?php
/**
 * Template Name: A1labarts' Custom Home Page Template
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php
            echo do_shortcode("[metaslider id=36]");
            ?>

            <?php if ( have_posts() ) : ?>

                <?php if ( is_home() && ! is_front_page() ) : ?>


                <?php endif; ?>

                <?php
                // Start the loop.
                while ( have_posts() ) : the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'template-parts/content', get_post_format() );

                    // End the loop.
                endwhile;

                // Previous/next page navigation.
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'twentysixteen' ),
                    'next_text'          => __( 'Next page', 'twentysixteen' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
                ) );

            // If no content, include the "No posts found" template.
            else :
                get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>

            <div class="a1newsbox">
                <div class="innews">
                    <h1>Events</h1>
                    <?php echo do_shortcode("[ecs-list-events excerpt='true' cat='exhibition, workshop, performance, film' eventdetails='true' ecs-list-events thumb='true' thumbwidth='150' thumbheight='150' contentorder='thumbnail, date, title, excerpt, venue']"); ?>

                </div>
                <div class="innews">
                    <h1>News and Reviews</h1>
                    <?php
                    $postslist = get_posts('category=4&numberposts=3');
                    foreach ($postslist as $post) :
                        setup_postdata($post);
                        ?>
                        <div class="entry">
                            <?php the_post_thumbnail('thumbnail'); ?>
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <?php the_excerpt(); ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="programs" id="programs">
                <ul class="a1-columns" id="programs">
                    <h2 class="pr-top">Explore</h2>
                    <li>
                        <a class="button" href="http://www.a1labarts.com/category/archives/" target="_blank">
                            <div class="ind-programs">
                                <div  alt="f342" class="dashicons dashicons-calendar-alt icons"></div>
                                <h2>Past Events</h2>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.a1labarts.com/calendar/list/?tribe_paged=1&tribe_event_display=past">
                            <div class="ind-programs">
                                <div alt="f342" class="dashicons dashicons-media-archive icons"></div>
                                <h2>Archives</h2>
                            </div>
                        </a>
                    </li>
                </ul>
                
            </div>
            <div class="stayintouch">
                <h2>Stay in Touch.</h2>
                <p>Receive news about events and exhibitions at A1labarts.</p>

                <!-- Begin MailChimp Signup Form -->
                <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                <style type="text/css">
                    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                    /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                </style>
                <div id="mc_embed_signup">
                    <form action="//a1labarts.us11.list-manage.com/subscribe/post?u=bef0ae1d3d849c6a0162f5d66&amp;id=133dc15b05" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">

                            <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                            <div class="mc-field-group">
                                <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
                                </label>
                                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                            </div>
                            <div class="mc-field-group">
                                <label for="mce-FNAME">First Name </label>
                                <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                            </div>
                            <div class="mc-field-group">
                                <label for="mce-LNAME">Last Name </label>
                                <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
                            </div>
                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_bef0ae1d3d849c6a0162f5d66_133dc15b05" tabindex="-1" value=""></div>
                            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                        </div>
                    </form>
                </div>
                <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                <!--End mc_embed_signup-->


            </div>
        </main><!-- .site-main -->
    </div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>