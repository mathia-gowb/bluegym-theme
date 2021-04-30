<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
    wp_head()
?>
<body>
    <header>
        <nav class="home-nav"><!-- class="dark-solid" -->
            <div class="logo orange-txt">
            <a href="<?= home_url();?>" class="site-identity">
            <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                /* Outputs site image or name */
                if ( has_custom_logo() ) {
                    echo '<div id="logo"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . ' "></div>';
                } else {
                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                }
            ?>
            </a>
            </div>
            <div class="nav-links">
                <ul id="nav-ul">
                   <?php wp_nav_menu( 
                        array(
                            'menu'=>'primary',
                            'container'=>'',
                            'theme_location'=>'primary',
                        )
                    );
                    ?>
                </ul>
                <ul class="action-buttons">
                    <li class="drop-button"><a class="btn " data-bs-toggle="collapse" href="#collapsenav" role="button" aria-expanded="false" aria-controls="collapsenav">
                        <i class="fa fa-bars  orange-txt" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li>
                    <a class="btn search-link" data-bs-toggle="collapse" href="#collapsesearch" role="button" aria-expanded="false" aria-controls="collapsesearch">
                        <i class="fa fa-search orange-txt" aria-hidden="true"></i>
                      </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="collapse" id="collapsenav">
            <div class="card card-body">
                <ul class="dropdown-ul">
                   <?php wp_nav_menu( 
                        array(
                            'menu'=>'primary',
                            'container'=>'',
                            'theme_location'=>'primary',
                        )
                    );
                    ?>
                </ul>

            </div>
        </div>

    </header>
    <div class="search-area text-center ">
        <div class="text-end ">
            Close
            <i class="fa fa-times fa-3x close-button " aria-hidden="true"> </i>
        </div>
        <br>
        <input type="search" name="search" id="search" class="search-input" placeholder="Search For A blog Topic">
    </div>
    <main class="home-main">
        <section id="landing-section" class="ovelays-container" style=<?php 
            if(get_background_image()){
                echo"background-image:url(".get_background_image().")";
            }else{
                echo "background-image:url(".get_template_directory_uri()."/assets/images/default.jpg)";
            }
            ?>
        >
            <div id="landing-section-content" class="overlay">
                <div class="ls-content-wrapper">
                    <div class="welcome-text-wrapper  ">
                        <h1 class="main-heading main-home-heading transition">Stay at home <br> Stay   healthy</h1>
                        <br>
                        <p class="welcome-message transition">Stay in shape even at home, Exercising   will help you to stay healthy easily wherever and whenever you are</p>
                        <br>
                        <button class="cta-button home-cta-button transition"><a href="#" class="white-link2 ">Get Started</a></button>
                    </div>
                    <div class="welcome-image">
                            <img src="./images/College.png" alt="">
                    </div>
                </div>
                <h4 class="scroll-down">
                    <a href="#scroll-to" class="white-link">Scroll Down <span class="down-button"><i class="fa fa-caret-down" aria-hidden="true"></i></span></a><!-- hide scroll down on all mobiles -->
                </h4>
                <div id="scroll-to"></div>
            </div>
        </section><!-- end of landing page front -->
        <section id="popular-programs" class="dark-solid popular-programs white-txt">
            <br>
            <br>
            <h2 class="section-heading">
                <span class="head-text">Popular Programs</span>
                <div class="head-deco"></div>
            </h2>
            <br>
            <br>
            <div class="popular-programs-list">
                <div class="popular-program text-center">
                    <div class="program-icon">
                        <i class="fa fa-forumbee fa-5x" aria-hidden="true"></i>
                    </div>
                    <br>
                    <h3 class="program-heading white-txt">HIIT</h3>
                    <br>
                    <p class="program-description text-center white-txt">
                        This programme focussess on highly intensive training and is appropriate for intermmediate to advanced exercisers
                    </p>
                    <br>
                    <button class="cta-button home-cta-button"><a href="#" class="white-link2">Get Started</a></button>
                </div>
                <div class="popular-program text-center">
                    <div class="program-icon">
                        <i class="fa fa-forumbee fa-5x" aria-hidden="true"></i>
                    </div>
                    <br>
                    <h3 class="program-heading white-txt">HIIT</h3>
                    <br>
                    <p class="program-description text-center white-txt">
                        This programme focussess on highly intensive training and is appropriate for intermmediate to advanced exercisers
                    </p>
                    <br>
                    <button class="cta-button home-cta-button"><a href="#" class="white-link2">Get Started</a></button>
                </div>
                <div class="popular-program text-center">
                    <div class="program-icon">
                        <i class="fa fa-forumbee fa-5x" aria-hidden="true"></i>
                    </div>
                    <br>
                    <h3 class="program-heading white-txt">HIIT</h3>
                    <br>
                    <p class="program-description text-center white-txt">
                        This programme focussess on highly intensive training and is appropriate for intermmediate to advanced exercisers
                    </p>
                    <br>
                    <button class="cta-button home-cta-button"><a href="#" class="white-link2">Get Started</a></button>
                </div>
            </div>
        </section>
        <section class=" popular-posts">
            <br>
            <h2 class="section-heading">
                <span class="head-text">Popular Posts</span>
                <div class="head-deco"></div>
            </h2>
            <br>
            <br>
            <div class="popular-posts-list">
            <?php
                /* get most popular post in this category */
                    $popular=new WP_Query(
                        array(
                            'posts_per_page'=>4,
                            'meta_key'=>'popular_posts',
                            'orderby'=>'meta_value_num', 
                            'order'=>'DESC'
                        )
                        );
                        if($popular->have_posts()){
                            while($popular->have_posts()){
                               $popular->the_post();
                               get_template_part('template-parts/content','home-archive');
                            }
                        }
            ?><!-- end the outputing of blogs in this category -->
            </div>
        </section>
    </main>
<?php
    get_footer()
?>