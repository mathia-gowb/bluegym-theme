<?php
    /*Template Name: custom-about */
?>
<?php
    get_header()
?>
<main id="main-content-wrapper" class="wrapper-with-padding">
        <div class="main-page-content">
            <div class="about-main-content">
                <div class="about-img">
                    <img src="./images/post.jpg" alt="about-image" srcset="">
                </div>
                <div class="about-text">
                    <br>
                    <br>
                    <h1 class="page-heading">About</h1>
                    <br>
                    <br>
                    <p class="about-text">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit perferendis numquam, impedit amet labore modi debitis laboriosam voluptate nesciunt velit fugit, iusto at minima rerum temporibus accusamus ad dignissimos similique?
                    </p>
                </div>
            </div>
        </div>
        <br>
        <br>
    </main>
    <aside>
        <div class="about-widgets-wrapper" style="background-image:url(<?=get_background_image()?>)">
            <div class="about-widgets overlay">
                <h2 class="section-heading">
                    <span class="head-text white-txt">Contact</span>
                    <div class="head-deco"></div>
                </h2>
                <br>
                <br>
                <div class="widgets-list">
                    <div class="widget">
                        <h4 class="widget-heading orange-txt">Visit Us</h4>
                        <div class="widget-text">
                            <i class="fa fa-map fa-3x white-txt" aria-hidden="true"></i>
                            <p class="widget-paragraph white-txt">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            </p>
                        </div>
                    </div>
                    <div class="widget">
                        <h4 class="widget-heading orange-txt">Mail us</h4>
                        <div class="widget-text">
                            <i class="fa fa-envelope fa-3x white-txt" aria-hidden="true"></i>
                            <p class="widget-paragraph white-txt">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            </p>
                        </div>
                    </div>
                    <div class="widget">
                        <h4 class="widget-heading orange-txt">Call us</h4>
                        <div class="widget-text">
                            <i class="fa fa-phone-square fa-3x white-txt" aria-hidden="true"></i>
                            <p class="widget-paragraph white-txt">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            </p>
                        </div>
                    </div>
                    <div class="widget">
                        <h4 class="widget-heading-social orange-txt"> Social media</h4>
                        <br>
                        <ul class="social-widgets">
                            <li class="social-widget">
                                <i class="fa fa-twitter fa-2x white-txt" aria-hidden="true"></i>
                                <p><a href="#" class="white-link">Twitter</a></p>
                            </li>
                            <li class="social-widget">
                                <i class="fa fa-whatsapp fa-2x white-txt" aria-hidden="true"></i>
                                <p><a href="#" class="white-link">Whatsapp</a></p>
                            </li>
                            <li class="social-widget">
                                <i class="fa fa-facebook fa-2x white-txt" aria-hidden="true"></i>
                                <p><a href="#" class="white-link">Facebook</a></p>
                            </li>
                            <li class="social-widget">
                                <i class="fa fa-instagram fa-2x white-txt" aria-hidden="true"></i>
                                <p><a href="#" class="white-link">Instagram</a></p>
                            </li>
                            <li class="social-widget">
                                <i class="fa fa-telegram fa-2x white-txt" aria-hidden="true"></i>
                                <p><a href="#" class="white-link">Telegram</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
    </aside>
<?php
    get_footer();
?>