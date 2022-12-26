<?php
/*
 * Template Name: Gallery Page
 */
?>
<?php get_header() ?> 

<section class="page_header" style="background-image:url('<?= get_field('header')['bg_image']['url'] ?>')">
    <div class="container">  
        <div class="row">
            <div class="col-12">
                <h2 class="header_main_title"><?= get_field('header')['titre'] ?></h2>    
            </div>
        </div>
    </div>
    <div class="arrow_link">
        <div class="arrow bounce">  
            <a href="#" aria-label="scroll_down"> 
                <svg width="8" height="61" viewBox="0 0 8 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.64645 60.3536C3.84171 60.5488 4.15829 60.5488 4.35355 60.3536L7.53553 57.1716C7.7308 56.9763 7.7308 56.6597 7.53553 56.4645C7.34027 56.2692 7.02369 56.2692 6.82843 56.4645L4 59.2929L1.17157 56.4645C0.976311 56.2692 0.659728 56.2692 0.464466 56.4645C0.269204 56.6597 0.269204 56.9763 0.464466 57.1716L3.64645 60.3536ZM4.5 60L4.5 0H3.5L3.5 60H4.5Z" fill="#fff"/>
                </svg> 
            </a>
        </div>
    </div>
</section>

<section class="gallery">
    <div class="container">
        <div class="row">
            <div class="col-12">
              <?= do_shortcode("[mwrp_gallery id='373']") ?>  
            </div>
        </div>
    </div>
</section>

<section class="welcome " style="background-image:url('<?= get_field('welcome')['image']['url'] ?>')">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="welcome_main_title"><?= get_field('welcome')['titre'] ?></h2> 
      </div>
    </div>
  </div>
</section>
<?php get_template_part('content','sidebar'); ?>    
<?php get_footer() ?>