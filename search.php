<?php
    get_header()
?>
    <main id="main-content-wrapper" class="wrapper-with-padding">
        <div class="main-page-content">
            <h1 class="section-heading text-small">
                <span class="head-text">
                    <?php
                    if(have_posts()){
                        echo 'Search Results for "'.$_REQUEST['s'].'"';
                    }else{
                        echo 'No search results for "'.$_REQUEST['s'].'" ';
                    }
                    ?>
                </span> 
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
                    if(have_posts()){
                           while(have_posts()){
                                the_post();
                                get_template_part('template-parts/content','archive');
                           }
                       }
                ?>
                </div>

            </div>
        </section>
    </main>
<?php
    get_footer()
?>