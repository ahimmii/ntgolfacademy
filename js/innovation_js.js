AOS.init({disable: 'mobile'});

 

function openNav() {
  document.getElementById("mySidenav").style.right = "0px"; 
  document.querySelector(".green_filter").style.width = "100%";
  document.querySelector(".green_filter").style.height = "100%";

}

function closeNav() {
  document.getElementById("mySidenav").style.right = "-100%";
  document.querySelector(".green_filter").style.width = "0%"; 
  document.querySelector(".green_filter").style.height = "0%";
}
 
 
let d_width = window.innerWidth;
if(d_width >= 1600){   
  let padding = (d_width - 1400) / 2;
  padding = padding + 6; 

  if(document.querySelector(".about_content")){
    document.querySelector(".about_content").style.paddingRight = padding+"px"; 
  }
   
 
}
if(d_width <= 1600){  
  let padding = (d_width - 1140) / 2;
  if(document.querySelector(".about_content")){
    document.querySelector(".about_content").style.paddingRight = padding+"px"; 
  }
}


$('.deals_slider').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,       
  arrows: true,
  prevArrow: $('.prev_arrow'),
  nextArrow: $('.next_arrow'),
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
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
 
$('.blog_sliders').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 1,      
  arrows: true,
  prevArrow: $('.prev_arrow_2'),
  nextArrow: $('.next_arrow_2'),
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
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
 
$( document ).ready(function() {       
    let deals_bg_image = $(".deals_bg_image").outerWidth();
    $(".deals_bg_image").css("min-height",deals_bg_image * 0.75);

    let blog_bloc = $(".blog_bloc").outerWidth();
    $(".blog_bloc").css("min-height",blog_bloc * 0.8);
       

    let about_bg = $(".about_bg").outerWidth();
    $(".about_bg").css("min-height",about_bg * 0.8);  
    $(".about").css("min-height",about_bg * 0.8);
    

    let services_section = $(".services_section").outerWidth();       
    $(".services_section").css("min-height",services_section * 0.5);   

    
    let single_blog_bg_image = $(".single_blog_bg_image").outerWidth();       
    $(".single_blog_bg_image").css("min-height",single_blog_bg_image * 0.5);   


    let single_big_img = $(".single_big_img").outerWidth();       
    $(".single_big_img").css("min-height",single_big_img * 0.6);       
     
}); 
 

$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 4,   
  slidesToScroll: 1,    
  asNavFor: '.slider-for',      
  dots: false,
  centerMode: true,
  focusOnSelect: true,
  arrows: true,
  prevArrow: $('.single_prev_arrow'),
  nextArrow: $('.single_next_arrow'),  
});
	
window.onscroll = () => {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 100) { 
    if(document.querySelector(".navbar")){ 
      document.querySelector(".navbar").classList.add("scroll");  
    } 
  } else { 
    if(document.querySelector(".navbar")){  
      document.querySelector(".navbar").classList.remove("scroll"); 
    } 
  }
}; 
  
$('.arrow_link').click(function(){
  $("body,html").animate({ scrollTop: window.pageYOffset + $(window).height()}, 600);
  return false;
});
  