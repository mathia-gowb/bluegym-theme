<article class="blog article-preview"> 
    <div class="blog-image">
        <?=the_post_thumbnail('cropped-medium')?>
    </div>
    <div class="post-meta">
        <h5 class="article-heading"><a href="<?=the_permalink()?>"  class="white-link"><?=the_title()?></a></h5>
        <h6 class="article-date orange-txt">Published: <?=the_date()?></h6>
    </div>
</article>