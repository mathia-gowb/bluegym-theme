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
        <section id="landing-section" class="ovelays-container" style="background-image:url(<?=get_template_directory_uri()?>/assets/images/404.jpg)"
        >
            <div id="landing-section-content" class="overlayII">
                <div class="ls-content-wrapper">
                    <div class="welcome-text-wrapper  ">
                        <h1 class="main-heading main-home-heading transition">
                            OOPS! you are lost
                        </h1>
                        <br>
                        <p class="welcome-message transition">
                            The Page you are looking for does not exist;
                            
                        </p>
                        <br>
                        <button class="cta-button home-cta-button transition"><a class="white-link2 " href="<?= home_url();?>"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Go To Home Page</a></button>
                    </div>
                </div>
            </div>
        </section><!-- end of landing page front -->
    </main>
<?php
    wp_footer()
?>