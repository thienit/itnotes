            <div id="sidebar" class="grid_5">
        <ul class="tabs">
            <li class="popular active">Phổ biến</li>
            <li class="recent">Ngẫu nhiên</li>
            <li class="tags">Tags</li>
        </ul>
        <div class="tab_container">
            <div id="popular" class="tab_content">
                <ul>
                    <?php global $post;
                        $args = array('numberpost'=>10, 'orderby'=>'comment_count');
                        $popular_posts = get_posts($args);
                        foreach($popular_posts as $post) : setup_postdata($post);?>
                        <li>
                            <div class="image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
                            <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        </li>
                    <?php endforeach; wp_reset_postdata(); ?>
                </ul>
            </div><!-- end popular -->

            <div id="recent" class="tab_content">
                <ul>
                    <?php global $post;
                        $args = array('numberposts'=>10, 'orderby'=>'rand');
                        $random_posts = get_posts($args);
                        foreach($random_posts as $post) : setup_postdata($post);?>
                        <li>
                            <div class="image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
                            <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        </li>
                    <?php endforeach; wp_reset_postdata();?>
                </ul>
            </div><!-- end recent -->

            <div id="tags" class="tab_content">
                <p><span>Advertising</span> <span>Awesome</span> <span>Beautiful</span> <span>Club</span> <span>Communication</span> <span>Company</span> <span>Cooking</span> <span>Cool</span> <span>Data</span> <span>Diet</span> <span>Equipment</span> <span>Event</span> <span>Food</span> <span>Lovely</span> <span>Success</span> <span>Technology</span> <span>Work</span></p>
            </div>
        </div><!-- end tab_container -->

        <?php if(is_single()) { ?>
        <div class="widget">
            <h3>Bài viết liên quan</h3>
            <ul>
                <li>
                    <div class="image"><a href="#"><img src="images/preview2.png" alt="prevew2"/></a></div>
                    <div class="title"><a href="#">Life Beyond 960px: Designing For Large Screens</a></div>
                    <div class="clear"></div>
                </li>
                <li>
                    <div class="image"><a href="#"><img src="images/css-image-viewer-150x150.png" alt="css image viewer"/></a></div>
                    <div class="title"><a href="#">Hide &#38; Show Image Gallery With Pure CSS</a></div>
                    <div class="clear"></div>
                </li>
            </ul>
        </div>
        <?php } ?>

        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>


        <?php endif; ?>

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <div class="fb-facepile" data-href="http://facebook.com/FacebookDevelopers" data-max-rows="1" data-width="300"></div>
    </div><!-- end sidebar -->
</div><!-- end content-wrap -->