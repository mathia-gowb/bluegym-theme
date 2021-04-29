<?php
    get_header()
?>
    <main id="main-content-wrapper" class="wrapper-with-padding">
        <div class="main-page-content">
            <h1 class="section-heading">
                <span class="head-text"></span> 
            </h1>
        </div>
        <br>
        <br>
        <section class="blogs-list">
            <div class="blog-category">
                <p class="blog-section-heading">
                    <?php global $wp_query;
                        /* gets the name of the currently displayed category */
                        $cat_name=$wp_query->query['category_name'];
                        echo $cat_name;
                    ?>
                </p>
                <hr>
                <div class="category-blog-list">
                <?php
                /* Show posts by category */
                    $post_category=new WP_Query(
                        array(
                            'category_name'=>$cat_name
                        )
                    );
                    if($post_category->have_posts()){
                           while($post_category->have_posts()){
                                $post_category->the_post();
                                get_template_part('template-parts/content','archive');
                           }
                       }
                ?>
                </div>
                <!-- need to add pagination -->
                <div class="cta-button-wrapper">
                    <button class="cta-button home-cta-button"><a href="#" class="white-link2">Load More..</a></button>
                </div>
            </div>
        </section>
    </main>
<?php
    get_footer()
?>