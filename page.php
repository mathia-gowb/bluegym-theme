<?php
    get_header()
?>
<main id="main-content-wrapper" class="wrapper-with-padding">
    <div class="main-page-content">
            <br>
            <h1 class="section-heading">
                <span class="head-text"><?=the_title()?></span>
                <div class="head-deco"></div>
            </h1>
    </div>
    <?=the_content()?>
</main>

<?php
    get_footer()
?>