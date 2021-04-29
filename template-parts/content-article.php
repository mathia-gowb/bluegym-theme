            <br>
            <article class="blog">
                <div class="blog-meta">
                    <div class="blog-post-category">
                        <span class="in">In:</span>  
                        <span class="post-categories">
                        <?php
                            if(has_tag()){
                                the_tags('<span class="tag">','</span> , <span class="tag">','</span>');
                            }else{
                               echo 'No-tags';
                            }
                        ?>

                        </span> 
                        <?php
                         $categories = get_categories( array(
                            'orderby' => 'name',
                            
                        ) );

                        foreach ( $categories as $category ) {
                            printf( '<a href="%1$s">%2$s</a><br />',
                                esc_url( get_category_link( $category->term_id ) ),
                                esc_html( $category->name )
                            );
                        }
                        ?>
                    </div>
                    <h1 class="section-heading">
                        <span class="head-text"><?=the_title()?></span>
                        <div class="head-deco"></div>
                    </h1>
                    <br>
                    <p class="meta-small">
                        By <span class="author orange-txt"><?=get_author_name()?></span> 
                    </p>
                    <p class="meta-small"><?=the_date()?></p>
                    <br>
                </div>
                <img src="<?=the_post_thumbnail_url('large')?>" alt="blog-image" srcset="">
                <br>
                <?=the_content()?>
            </article>

