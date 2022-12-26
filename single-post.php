<?php
/*
 * Template Name: single-post Page
 */ 
?> 
<?php get_header() ?>



<section class="detail_blog">
    <div class="container">  
        <div class="row">
            <div class="col-12">
                <div class="single_blog_bg_image position-relative" style="background-image:url('<?= get_the_post_thumbnail_url(); ?>')">
                    <div class="single_blog_dates">
                        <div class="blog_day_detail"><?= get_the_date('d') ?></div> 
                        <div class="blog_month_detail"><?php echo mb_substr(get_the_date('M'), 0, 3); ?></div>
                    </div> 
                    <div class="single_nlog_infos row">
                        <div class="col-sm-12"><h2 class="single_blog_title"><?= get_the_title(); ?></h2></div>
                    </div>      
                </div>
            </div>
            <div class="col-12 single_blog_content"> 
                <?= get_the_content(); ?> 
            </div>   
        </div>
    </div>
</section>
 
<?php get_footer();?>