<?php
/*
 * Template Name: Offres Page
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
                <path d="M3.64645 60.3536C3.84171 60.5488 4.15829 60.5488 4.35355 60.3536L7.53553 57.1716C7.7308 56.9763 7.7308 56.6597 7.53553 56.4645C7.34027 56.2692 7.02369 56.2692 6.82843 56.4645L4 59.2929L1.17157 56.4645C0.976311 56.2692 0.659728 56.2692 0.464466 56.4645C0.269204 56.6597 0.269204 56.9763 0.464466 57.1716L3.64645 60.3536ZM4.5 60L4.5 0H3.5L3.5 60H4.5Z" fill="white"/>
                </svg> 
            </a>
        </div>
    </div>
</section>
  
<section class="offres_prices" data-aos="fade-up" data-aos-duration="3000">
    <div class="container offres_container">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Femme</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Homme</a>
                    </li> 
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="offres_prices_contain">
                            <?php foreach(get_field('femme_offres') as $offre): ?>
                                <div class="offre_full_bloc">
                                    <div class="offre_full_bloc_title_contain">
                                        <div class="offre_full_bloc_title">
                                            <?= $offre['titre'] ?>
                                        </div>
                                        <div class="offre_full_bloc_desc">
                                            <?= $offre['description'] ?> 
                                        </div>
                                    </div>  

                                    <div class="offre_full_bloc_title_price"><?= $offre['price'] ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="offres_prices_contain">
                            <?php foreach(get_field('homme_offres') as $offre): ?> 
                                <div class="offre_full_bloc">
                                    <div class="offre_full_bloc_title_contain">
                                        <div class="offre_full_bloc_title">
                                            <?= $offre['titre'] ?>
                                        </div>
                                        <div class="offre_full_bloc_desc">
                                            <?= $offre['description'] ?> 
                                        </div>
                                    </div>  

                                    <div class="offre_full_bloc_title_price"><?= $offre['price'] ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div> 
                </div>
            </div>
        </div>  
        <img class="img-fluid offes_image_1" src="<?= get_field('page_image_1')['url'] ?>" alt="<?= get_field('page_image_1')['alt'] ?>">
        <img class="img-fluid offes_image_2" src="<?= get_field('page_image_2')['url'] ?>" alt="<?= get_field('page_image_2')['alt'] ?>">
    </div>
</section> 
<?php get_template_part('content','sidebar'); ?>    

<?php get_footer() ?>