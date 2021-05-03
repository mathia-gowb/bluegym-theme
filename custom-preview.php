<?php
    /*Template Name: all programs */
?>
<?php
    get_header()
?>
    <main id="main-content-wrapper" class="programs-main-wrapper">
        <div class="main-page-content">
            <br>
            <h1 class="section-heading">
                
                <span class="head-text"><?=the_title()?></span>
                <div class="head-deco"></div>
            </h1>
        </div>
        <br>
        <br>
        <section class="program-list">
        <?php
            /* get all categories */
            $categories = get_categories( array(
                        'orderby' => 'name',
                        'parent'  => 0
            ) );
            /* displays set number of blogs per category */
            foreach ( $categories as $category ):
                $cat_name=$category->name;
                /* get id of the current category */
                $category_id=get_cat_ID($cat_name);
                /* get url of the category */
                $category_link=get_category_link($category_id);
            ?>
            <?php
                /* get most popular post in this category */
                    $latest=new WP_Query(
                        array(
                            'category_name'=>$cat_name,
                            'posts_per_page'=>1,
                        )
                        );
                        if($latest->have_posts()){
                            while($latest->have_posts()){
                               $latest->the_post();
                            }
                        }
            ?><!-- end the outputing of blogs in this category -->
            <section class="program-wrapper">
            <div class="program">
                <div class="program-img">
                    <img src="<?=the_post_thumbnail_url("medium")?>" alt="" srcset="">
                </div>
                <div class="program-meta">
                    <br>
                    <h2 class="program-name">Latest in <?=$cat_name?></h2>
                    <p class="program-description">
                    <a href="<?=the_permalink()?>" class="text-dark"><strong class="text-decoration-underline"><?=the_title()?></strong></a>
                        <?=the_excerpt()?>
                    </p>
                    <button class="cta-button home-cta-button"><a href="<?=$category_link?>" class="white-link2">Category Archive</a></button>
                </div>
            </div>
            <?php
                /* get most popular post in this category */
                    $most_popular=new WP_Query(
                        array(
                            'category_name'=>$cat_name,
                            'posts_per_page'=>1,
                            'meta_key'=>'popular_posts',
                            'orderby'=>'meta_value_num', 
                            'order'=>'DESC'
                        )
                        );
                        if($most_popular->have_posts()){
                            while($most_popular->have_posts()){
                               $most_popular->the_post();
                            }
                        }
            ?><!-- end the outputing of blogs in this category -->
            <div class="popular-programs-ls" style="background-image:url(<?=the_post_thumbnail_url("large")?>)">
                    <!-- This section will use the latest post image as a background -->
                    <div class="popular-programs-ls-overlay overlay">
                        <br>
                        <br>
                        <br>
                        <h3 class="section-heading">
                            <span class="head-text white-txt">Popular in <?=$cat_name?></span>
                            <div class="head-deco"></div>
                        </h3>
                        <br>
                        <br>
                        <div class="programs-list">
                            <?php
                            /* Show all posts by category */
                                $post_category=new WP_Query(
                                    array(
                                        'category_name'=>$cat_name,
                                        'posts_per_page'=>5,
                                        'meta_key'=>'popular_posts',
                                        'orderby'=>'meta_value_num', 'order'=>'DESC'
                                    )
                                );
                                if($post_category->have_posts()){
                                    while($post_category->have_posts()){
                                        $post_category->the_post();
                                        get_template_part('template-parts/content','archiveII');
                                    }
                                }
                            ?><!-- end the outputing of blogs in this category -->
                        </div>
                    </div>
                </div>
            </section><!-- end of program maiin wrapper -->
        <?php endforeach?>
        </section>
    </main>
<?php
    get_footer()
?>