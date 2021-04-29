<?php
    get_header()
?>
    <div class="outer-wrapper">
    <main id="main-content-wrapper" class="wrapper-with-padding">
        <div class="main-page-content">
            <?php
            /* Show the main post */
                if(have_posts()){
                       while(have_posts()){
                            the_post();
                            get_template_part('template-parts/content','article');
                       }
                   }
            ?>
        </div>
    </main>
    <aside class="recent-posts-sidebar">
        <!-- Visible in -->
        <section class="aside-recent-posts">
            <br>
            <p class="aside-recent-heading">Recent Posts</p>
            <div class="aside-recent-posts-wrapper">

                <?php
                /* outputs recent articles on the sidebar */
                    $recent_args = array(
                        "posts_per_page" => 5,
                        "orderby"=> "date",
                        "order" => "DESC"
                    ); 

                    $recent_posts=new WP_Query($recent_args);
                    if($recent_posts->have_posts()):
                        while($recent_posts->have_posts()):
                            $recent_posts->the_post();
                        ?>
                            <article>
                            <img src="<?php the_post_thumbnail_url('small');?>" alt="blog image" srcset="" class="blog-image">
                            <h6 class="blog-heading"><a href="<?=the_permalink()?>" class=""><?=the_title()?> </a></h6>
                            <hr>
                            </article>
                <?php  
                     endwhile;
                    endif;


                ?>

            </div>


        </section>
    </aside>
    </div>
<?php
    get_footer()
?>