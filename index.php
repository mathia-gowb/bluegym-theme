<?php
    get_header()
?>

    <main id="main-content-wrapper" class="wrapper-with-padding">
        <div class="main-page-content">
            <h1 class="section-heading">
                <span class="head-text">Blog</span>
                <div class="head-deco"></div>
            </h1>
        </div>
        <br>
        <br>
        <section class="blogs-list">

        <?php
            /* get all categories */
            $categories = get_categories( array(
                        
                        'orderby' => 'name',
                        'parent'  => 0
            ) );
            /* displays set number of blogs per category */
            foreach ( $categories as $category ):
                $cat_name=$category->name;
        ?>
            <div class="blog-category">
            <h2 class='blog-section-heading'><?=$cat_name?></h2>
            <hr>
                <div class="category-blog-list">
                <?php
                /* Show all posts by category */
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
                ?><!-- end the outputing of blogs in this category -->
                </div>
                <div class="cta-button-wrapper">
                    <button class="cta-button home-cta-button"><a href="#" class="white-link2">Load More..</a></button>
                </div>
            </div>
            <?php endforeach?>
        </section>
    </main>
<?php
    get_footer()
?>