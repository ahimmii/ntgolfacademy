<?php
/*
 * Template Name: centre Page
 */ 
?> 
<?php get_header() ?>

<section class="page_header" style="background-image:url('<?= get_field('header')['bg_image']['url'] ?>')">
    <div class="container">  
        <div class="row">
            <div class="col-12">
                <h2 class="header_main_title"><?= get_field('header')['titre'] ?></h2>   
                <div class="header_text_1"><?= get_field('header')['text_1'] ?></div>
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
 


<section class="services_bloc_1" data-aos="fade-up" data-aos-duration="3000"> 
  <div class="container container_services_bloc position-relative">   
    <div class="services_bloc_content" style="background-image:url('<?= get_field('cours')['flower_img']['url'] ?>')"> 
      <h2 class="services_title"><?= get_field('cours')['titre'] ?></h2>  
      <h2 class="sous_titre"><?= get_field('cours')['sous_titre'] ?></h2>
      <div class="services_desc"> 
        <?= get_field('cours')['description'] ?>
      </div>   
      <div class="services_btn_contain">
      <a href="<?= get_field('cours')['button_link']['url'] ?>" class="btn_services mt-3 ">
              <span><?= get_field('cours')['button_text'] ?></span>
        <span>
        <svg width="26" height="8" viewBox="0 0 26 8" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M25.3536 4.35355C25.5488 4.15829 25.5488 3.84171 25.3536 3.64645L22.1716 0.464466C21.9763 0.269204 21.6597 0.269204 21.4645 0.464466C21.2692 0.659728 21.2692 0.976311 21.4645 1.17157L24.2929 4L21.4645 6.82843C21.2692 7.02369 21.2692 7.34027 21.4645 7.53553C21.6597 7.7308 21.9763 7.7308 22.1716 7.53553L25.3536 4.35355ZM0 4.5H25V3.5H0V4.5Z" fill="white"/>
</svg>


        </span> 
        </a>
      </div>
    </div>
    <div class="services_mg_bg" style="background-image:url('<?= get_field('cours')['image_bg']['url'] ?>')">

    </div>
  </div>
</section>




<section class="services_valeurs" data-aos="fade-up" data-aos-duration="3000">
   <h1 class="services_valeurs_title">NT GOLF ACADEMY</h1>
   <h2 class="sous_services_titre">Nos valeurs</h2>
   
   <div class="container">
    <div class="row">
      <?php foreach(get_field('service') as $service): ?>
        <div class="col-lg-3 service_links_cols d-flex align-items-center">
            <div class="service_img_contain px-3"> 
              <?= $service['image'] ?>
            </div>
            <h2 class="service_title_valeurs"><?= $service['titre'] ?></h2>
            
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>



<section class="modalites_bloc"  data-aos="fade-up"  data-aos-duration="2000">        
          <div class="container">    
            <div class="row">  
              <div class="col-lg-6 pl-3 modalites_left_bloc">  
                <h2 class="modalites_bloc_1_titre" ><?= get_field('organisons_bloc')['titre'] ?></h2>
                <div class="modalites_bloc_1_desc" ><?= get_field('organisons_bloc')['description'] ?></div>
               
               <div  data-aos="fade-up"  >
                 <?php foreach(get_field('organisons_bloc')['categorie'] as $i=>$class): ?> 
                    <div class="metha_items_header d-flex  pt-3"> 
                    <div class="numbers_bloc_number4 mr-2"> <?= $i+1 ?></div>
                      <div class="cours_numbers"><?= $class['titre'] ?></div>
                    </div>
                              
                
              <?php endforeach; ?> 
            </div>
      </div>
            
              <div class="col-lg-6 modalites_right_bloc">
                  <h3 class="modalites_bloc_2_titre" ><?= get_field('organisons_bloc')['titre1'] ?></h3>
                  <div class="modalites_bloc_2_desc" ><?= get_field('organisons_bloc')['description1'] ?></div>
                  <div class="services_btn_contain d-flex mt-5">
      <a href="<?= get_field('organisons_bloc')['button_link']['url'] ?>" class="btn_services_1 mb-5 d-flex">
              <span><?= get_field('organisons_bloc')['button_text'] ?></span> 
       
              <svg width="26" height="8" viewBox="0 0 26 8" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M25.3536 4.35355C25.5488 4.15829 25.5488 3.84171 25.3536 3.64645L22.1716 0.464466C21.9763 0.269204 21.6597 0.269204 21.4645 0.464466C21.2692 0.659728 21.2692 0.976311 21.4645 1.17157L24.2929 4L21.4645 6.82843C21.2692 7.02369 21.2692 7.34027 21.4645 7.53553C21.6597 7.7308 21.9763 7.7308 22.1716 7.53553L25.3536 4.35355ZM0 4.5H25V3.5H0V4.5Z" fill="white"/>
</svg>
           
        </a>
        </div>
                </div>  
            
            </div>
          </div>
       </section>
  







 
 
 <?php get_template_part('content','sidebar'); ?>   
  
 <?php get_footer();?>
 
 <script>                     
   let container_services_bloc = $(".container_services_bloc").outerWidth();                                                 
   $(".container_services_bloc").css("min-height",container_services_bloc * 0.5);  
 </script>
 
 <script>
 $('.photos_slider').slick({
   dots: false,
   infinite: false,
   prevArrow: $('.photos_prev'),
   nextArrow: $('.photos_next'),
   speed: 300,  
   slidesToShow: 3,
   slidesToScroll: 1,
   responsive: [
     {
       breakpoint: 1024,
       settings: {
         slidesToShow: 3,
         slidesToScroll: 1,
         infinite: true,
         dots: false
       }
     },
     {
       breakpoint: 600,
       settings: {
         slidesToShow: 2,
         slidesToScroll: 1
       }
     },
     {
       breakpoint: 480,
       settings: {
         slidesToShow: 1,
         slidesToScroll: 1
       }
     }
     // You can unslick at a given breakpoint now by adding:
     // settings: "unslick"
     // instead of a settings object
   ]
 });
   
 $(document).ready(function() {
   $("#lightgallery").lightGallery({
         selector : 'a',
         thumbnail:true,
         pager: true,
         animateThumb: false,
         showThumbByeDefault: false,
     });
 });
 
 
 $(window).scroll(function () {     
   $(".about_bg_large").length && $(".about_bg_large").bgscroll();    
   $(".services_mg_bg").length && $(".services_mg_bg").bgscroll();   
 });
 
 </script>
   
 <script>
 let d_width_2 = window.innerWidth;
 if(d_width_2 >= 1600){   
   let padding = (d_width_2 - 1400) / 2;
   padding = padding + 6; 
 
   if(document.querySelector(".about_content")){
     document.querySelector(".about_content").style.paddingRight = padding+"px"; 
   } 
 
   if(document.querySelector(".about_content")){
     document.querySelector(".about_content").style.paddingRight = padding+"px"; 
   } 
 }
 if(d_width_2 <= 1600){    
   let padding = (d_width_2 - 1140) / 2;   
   if(document.querySelector(".about_content")){
     document.querySelector(".about_content").style.paddingRight = padding+"px"; 
   }
 
 }  
 </script> 