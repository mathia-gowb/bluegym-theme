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
            <div class=" orange-txt">
            <a href="<?= home_url();?>" class="site-identity">
            <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                /* Outputs site image or name */
                if ( has_custom_logo() ) {
                    echo '<div id="logo-img"><img class="logo" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . ' "></div>';
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
        <div class="text-end">
            <i class="fa fa-times fa-3x close-button " aria-hidden="true"> </i>
        </div>
        <br>
        <?php
            get_search_form();
        ?>

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
                        <h1 class="main-heading main-home-heading transition">
                            <?=get_theme_mod('bluegymn-main-callout-headline')?>
                        </h1>
                        <br>
                        <p class="welcome-message transition">
                            <?= get_theme_mod('bluegymn-main-callout-message')?>
                        </p>
                        <br>
                        <button class="cta-button home-cta-button transition"><a href="#" class="white-link2 "><?= get_theme_mod('bluegymn-cta-button-text')?></a></button>
                    </div>
                    <div class="welcome-image">
                            <img src="<?=get_template_directory_uri(  )?>/assets/images/College.png" alt="">
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
                <span class="head-text">Upcoming programs</span>
                <div class="head-deco"></div>
            </h2>
            <br>
            <br>
            <div class="popular-programs-list">
                <div class="popular-program text-center">
                    <div class="program-icon">
                    <object data="<?=get_template_directory_uri()?>/assets/images/undraw_Hiking_re_k0bc.svg" width="100%" height="200px"></object>
                    </div>
                    <br>
                    <h3 class="program-heading white-txt">Hiking</h3>
                    <br>
                    <p class="program-description text-center white-txt">
                        This programme focussess on highly intensive training and is appropriate for intermmediate to advanced exercisers
                    </p>
                    <br>
                    <button class="text-decoration-line-through" disabled>Get Started</button>
                </div>
                <div class="popular-program text-center">
                    <div class="program-icon">
                        <object data="<?=get_template_directory_uri()?>/assets/images/undraw_mindfulness_scgo.svg" width="100%" height="200px"></object>
                    </div>
                    <br>
                    <h3 class="program-heading white-txt">Meditation</h3>
                    <br>
                    <p class="program-description text-center white-txt">
                        This programme focussess on highly intensive training and is appropriate for intermmediate to advanced exercisers
                    </p>
                    <br>
                    <button class="text-decoration-line-through" disabled>Get Started</button>
                </div>
                <div class="popular-program text-center">
                    <div class="program-icon">
                        <object data="<?=get_template_directory_uri()?>/assets/images/undraw_indoor_bike_pwa4 .svg" width="100%" height="200px"></object>
                    </div>
                    <br>
                    <h3 class="program-heading white-txt">Homeworkout</h3>
                    <br>
                    <p class="program-description text-center white-txt">
                        This programme focussess on highly intensive training and is appropriate for intermmediate to advanced exercisers
                    </p>
                    <br>
                    <button class="text-decoration-line-through" disabled>Get Started</button>
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