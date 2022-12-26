<?php
/*
 * Template Name: Contact Page
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

<section class="contact">
    <div class="container contact_container">
        <div class="row">
            <div class="col-lg-8">  
                <?= do_shortcode("[contact-form-7 id='349' title='Contact']")  ?>
            </div> 
            <div class="col-lg-4 modsl_right_bloc">
                <h3 class="modal_adress_title">Contact</h3>
                <a href="tel:0522 23 40 40" class="contact_links">0522 23 40 40</a>
                <a href="mailto:lerocherspa@gmail.com" class="contact_links">lerocherspa@gmail.com</a> 

                <h3 class="modal_adress_title">Adresse</h3>  
                <div class="contact_content">
                28 rue rouissi, route El Jadida a côté du marché des fleurs, Casablanca, Morocco
                </div>

                <div class="contact_rs"> 
                    <?php if(get_field('media_social','option')['tiktok']): ?>
                        <a aria-label="Linkedin" target="blank" href="<?= get_field('media_social','option')['tiktok'] ?>" class="side_rs_link">
                        <svg width="26" height="28" viewBox="0 0 26 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.2321 6.76749C25.2321 6.64284 25.2287 6.63645 25.0923 6.63964C24.7629 6.64284 24.4368 6.60449 24.114 6.55654C22.9394 6.38715 19.1261 4.4663 18.4805 1.32454C18.4672 1.26381 18.3241 0.483967 18.3241 0.151573C18.3241 0.00455259 18.3208 0.0013565 18.1711 0.0013565C18.1345 0.0013565 18.1012 0.0013565 18.0646 0.0013565C16.5738 0.0013565 15.0798 0.0013565 13.5891 0.0013565C13.2896 0.0013565 13.3295 -0.0338005 13.3295 0.253848C13.3295 6.46705 13.3295 12.6803 13.3295 18.8935C13.3295 19.1268 13.3228 19.3569 13.2796 19.5838C13.0533 20.7856 12.4144 21.7284 11.3297 22.3708C10.3913 22.9269 9.36974 23.0867 8.28497 22.879C7.94223 22.8151 7.62279 22.6904 7.30335 22.569C7.27673 22.5466 7.25011 22.5242 7.22681 22.5019C7.12033 22.4156 7.00054 22.3421 6.88408 22.2653C5.50315 21.3481 4.84763 20.0728 5.04728 18.478C5.25026 16.8607 6.21857 15.7613 7.81579 15.1956C8.29162 15.0262 8.79408 14.9559 9.30319 14.9846C9.63262 15.0006 9.95872 15.0422 10.2748 15.1285C10.3846 15.1572 10.4445 15.1221 10.4512 15.0102C10.4545 14.9719 10.4545 14.9303 10.4545 14.892C10.4545 13.7765 10.4113 11.3411 10.4046 11.3347C10.4079 11.0151 10.4079 10.6923 10.4146 10.3727C10.4179 10.28 10.368 10.264 10.2881 10.2544C9.68586 10.1873 9.08358 10.1713 8.47797 10.2161C7.64276 10.2736 6.83084 10.4398 6.04221 10.7115C4.78441 11.1461 3.683 11.8173 2.73132 12.7122C1.91275 13.4825 1.27054 14.371 0.801356 15.3746C0.348812 16.3334 0.0925921 17.3402 0.0193864 18.3885C-0.0105613 18.8423 -0.00723382 19.2994 0.0393516 19.7564C0.0992471 20.386 0.225693 21.0029 0.425345 21.6069C0.99768 23.3392 2.04252 24.7583 3.52327 25.8865C3.67301 26.0016 3.81942 26.1262 3.99911 26.1997C4.07564 26.2637 4.14885 26.3276 4.22538 26.3915C4.46497 26.5641 4.72119 26.7143 4.99072 26.839C6.64782 27.6252 8.39478 27.9448 10.2349 27.7307C12.6241 27.4494 14.6139 26.4331 16.1779 24.6816C17.652 23.0324 18.3674 21.0988 18.3807 18.935C18.4007 15.8412 18.384 12.7474 18.3873 9.65036C18.3873 9.57685 18.3441 9.47138 18.4273 9.43303C18.4938 9.40426 18.5604 9.48736 18.6236 9.52891C19.8215 10.2864 21.1159 10.8329 22.5168 11.1397C23.3321 11.3187 24.154 11.4274 24.9925 11.4274C25.2554 11.4274 25.292 11.4146 25.292 11.1621C25.292 10.0627 25.2287 7.05833 25.2321 6.76749Z" fill="#C99E35"/>
                        </svg> 
                        </a>
                    <?php endif ?> 

                    <?php if(get_field('media_social','option')['facebook']): ?> 
                        <a aria-label="Facebook" target="blank" href="<?= get_field('media_social','option')['facebook'] ?>" class="side_rs_link">
                        <svg width="16" height="28" viewBox="0 0 16 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.1817 15.5162L14.9676 10.5241H10.0476V7.28475C10.0476 5.91838 10.7362 4.58783 12.9386 4.58783H15.1752V0.337754C15.1752 0.337754 13.1462 0 11.204 0C7.15131 0 4.50209 2.38987 4.50209 6.71927V10.5241H0V15.5162H4.50472V27.5858C5.40882 27.724 6.33394 27.7957 7.27746 27.7957C8.22099 27.7957 9.14611 27.724 10.0502 27.5858V15.5162H14.1817Z" fill="#C99E35"/>
                        </svg> 
                        </a> 
                    <?php endif ?>
                
                    <?php if(get_field('media_social','option')['instagram']): ?> 
                        <a aria-label="Facebook" target="blank" href="<?= get_field('media_social','option')['instagram'] ?>" class="side_rs_link">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.6426 9.11671C10.3205 9.11671 8.42554 10.9911 8.42554 13.2878C8.42554 15.5846 10.3205 17.459 12.6426 17.459C14.9647 17.459 16.8596 15.5846 16.8596 13.2878C16.8596 10.9911 14.9647 9.11671 12.6426 9.11671ZM25.2906 13.2878C25.2906 11.5606 25.3064 9.84892 25.2083 8.12477C25.1102 6.12213 24.6484 4.34479 23.1678 2.88036C21.6841 1.4128 19.8903 0.959076 17.8656 0.862073C16.1194 0.76507 14.3889 0.780716 12.6457 0.780716C10.8995 0.780716 9.16898 0.76507 7.42585 0.862073C5.40116 0.959076 3.60425 1.41593 2.1237 2.88036C0.639983 4.34792 0.181265 6.12213 0.0831939 8.12477C-0.0148769 9.85205 0.000940987 11.5637 0.000940987 13.2878C0.000940987 15.012 -0.0148769 16.7267 0.0831939 18.4509C0.181265 20.4535 0.643147 22.2309 2.1237 23.6953C3.60742 25.1629 5.40116 25.6166 7.42585 25.7136C9.17214 25.8106 10.9026 25.7949 12.6457 25.7949C14.392 25.7949 16.1225 25.8106 17.8656 25.7136C19.8903 25.6166 21.6872 25.1597 23.1678 23.6953C24.6515 22.2277 25.1102 20.4535 25.2083 18.4509C25.3095 16.7267 25.2906 15.0151 25.2906 13.2878ZM12.6426 19.7057C9.05193 19.7057 6.15409 16.8394 6.15409 13.2878C6.15409 9.73627 9.05193 6.86999 12.6426 6.86999C16.2332 6.86999 19.1311 9.73627 19.1311 13.2878C19.1311 16.8394 16.2332 19.7057 12.6426 19.7057ZM19.3968 8.106C18.5585 8.106 17.8815 7.43637 17.8815 6.60715C17.8815 5.77793 18.5585 5.1083 19.3968 5.1083C20.2352 5.1083 20.9122 5.77793 20.9122 6.60715C20.9124 6.80405 20.8734 6.99906 20.7973 7.18102C20.7213 7.36299 20.6097 7.52832 20.4689 7.66755C20.3281 7.80678 20.161 7.91717 19.977 7.99241C19.7931 8.06765 19.5959 8.10625 19.3968 8.106Z" fill="#C99E35"/>
                        </svg>  
                        </a> 
                    <?php endif ?>
                </div>
            </div>
        </div>
        <img src="<?= get_field('contact_image_1')['url'] ?>" alt="<?= get_field('contact_image_1')['alt'] ?>" class="contact_image_1">
        <img src="<?= get_field('contact_image_2')['url'] ?>" alt="<?= get_field('contact_image_2')['alt'] ?>" class="contact_image_2"> 
    </div>
</section>
 
<section class="contact_map"> 
    <?= get_field('map'); ?> 
</section>   

<!-- <div id="map_wrapper_1">
    <div id="map_canvas_1" class="mapping"></div>
</div> -->

 
<?php get_template_part('content','sidebar'); ?>    
<?php get_footer() ?>

<script>
jQuery(function($) {
  // Asynchronously Load the map API 
  var script = document.createElement('script');   
  script.src = "//maps.googleapis.com/maps/api/js?key=AIzaSyCCFx_UTa0JIxgs_1PZSPQ2rbxqHXpgE2o&sensor=false&callback=initialize";
  document.body.appendChild(script);
});
 
var gmarkers1 = [];
var markerCount;

function initialize() {
  var map; 
  var bounds = new google.maps.LatLngBounds();      
  var mapOptions = {
      mapTypeId: 'roadmap'
  };

   
                  
  // Display a map on the page
  map = new google.maps.Map(document.getElementById("map_canvas_1"), mapOptions); 
  map.setTilt(45);
      
  // Multiple Markers
  var markers =   [     
              
    ['titre','145.5','15.5','style','style'], 
       
  ];

  console.table(markers);
         
  markerCount = markers.length;
  // Info Window Content
  var infoWindowContent = [   
        
    ['<div class="info_content">' +    
      '<h3><a href="#">title</a></h3>' +      
      '<p class="info_content_map_adresse_title"><i class="fas fa-map-pin"></i>adresse</p>' +  
      "<div class='info_content_map_adresse'>adresse</div>" +                       
      "<a class='info_content_map_link' href='#'>infos</a>" +              
      '</div>'],               
  ];           
      
  // Display multiple markers on a map
  var infoWindow = new google.maps.InfoWindow(), marker, i;
  
  // Loop through our array of markers & place each one on the map  
  for( i = 0; i < markers.length; i++ ) {
      var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
     
      var img_url = 'https://lerocher.ma/wp-content/uploads/2022/03/Vector-39.svg';
         
      bounds.extend(position);
      marker = new google.maps.Marker({ 
          position: position,
          map: map,   
          title: markers[i][0], 
          category: markers[i][4],
          icon: img_url       
      });

      
      gmarkers1.push(marker);  
      
      // Allow each marker to have an info window    
      google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
              infoWindow.setContent(infoWindowContent[i][0]);
              infoWindow.open(map, marker);
          }
      })(marker, i));

      // Automatically center the map fitting all markers on the screen
      map.fitBounds(bounds);
  }

  // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
  var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
      this.setZoom(9);  
      google.maps.event.removeListener(boundsListener);
  });
   
}     


updateView = function(element) {


  var choix = [];
  $.each($("input[name='status']:checked"), function(){
    choix.push($(this).val());
  });
 
 console.log(choix);  
 
  
  if (element) {
    //Get array with names of the checked boxes
    checkedBoxes = ([...document.querySelectorAll('input[type=checkbox]:checked')]).map(function(o) {
      return o.id;
    }); 
    for (i = 0; i < markerCount; i++) { 
      marker = gmarkers1[i]; 
      //Filter to show any markets containing ALL of the selected options
      //if(typeof marker.category == 'venir' && marker.category.length === checkedBoxes.length && checkedBoxes.reduce((a, b) => a && marker.category.includes(b), true)){
      if(  choix.includes(marker.category)  ){
        marker.setVisible(true);
      } else {
        marker.setVisible(false);
      }
    }
  } else {
    console.log('No param given');
  }
}  

</script>