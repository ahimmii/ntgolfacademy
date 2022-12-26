<!DOCTYPE html>

<html <?php language_attributes();?>>
<head>  
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5"> 
	<meta name="google-site-verification" content="Uc9nQBIjznGo4YbA-Vq9mpHazolGoO12GFZfgtQpz_M" />
	<title><?php wp_title('');?> </title> 
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Qwitcher+Grypen&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="<?php echo get_field('Favicon', 'option')['url'] ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <?php wp_head();?>  
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-HVFDLV19KG"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-HVFDLV19KG');
	</script>
</head>

<body <?php body_class();?>>  
	
<header class="fixed-top" id="top-menu"> 
     
<nav class="navbar_home navbar navbar-expand-lg d-md-block d-none navbar-light " role="navigation" id="navigation">
	<div class="container justify-content-center">
			<div class="col-sm-12  px-lg-0">
				<div class="row align-content-between"> 
					<div class="col-12 align-content-between d-none d-lg-none">
						<div class="row flex-center"> 
							<div class="col-6 col-xl-12 pl-3">       
								<a aria-label="Accueil" class="navbar-brand align-content-between text-left" href="/"> 
									<img src="<?php echo get_field('header_logo', 'option')['url'] ?>"  alt="<?php echo get_field('logo_header_white', 'option')['alt'] ?>" class="img-fluid header_logo ">
								</a>
							</div> 
							<div class="col-3 p-0 text-right d-flex align-items-center justify-content-end">  
                				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmainSupportedContent-2" aria-controls="navbarmainSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon d-flex justify-content-center align-items-center"><i class="fas fa-bars primary_color"></i></span>
								</button>  
							</div>
						</div>
					</div>   
					 

						<div class="col-12  header_nav">
							<div class="row">
								<div class="col-lg-3 px-0 col-6 header_logo d-flex align-items-center ">  
									<a href="<?php echo pll_home_url() ?>" class="header_logo_not_scrolled"> 
									<img src="<?php echo get_field('header_logo', 'option')['url'] ?>"  alt="<?php echo get_field('logo_header_white', 'option')['alt'] ?>" class="img-fluid header_logo ">
									</a>
									 
								</div> 
								<div class="col-lg-9 px-0 bottom_menu_col respo_menu d-flex justify-content-end align-items-center">
								<?php
									wp_nav_menu( array(     
										'theme_location'    => 'mobile-main-menu',   
										'depth'             => 3,  
										'container'         => 'div',
										'container_class'   => '',
										'container_id'      => 'navbarmainSupportedContent-2',
										'menu_class'        => 'nav navbar-nav main_menu',   
										'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
										'walker'            => new WP_Bootstrap_Navwalker(),
									) );
								?>
								
								</div> 
							</div> 
						</div>
 
					</div>
				</div>			 
			</div>
	</div>  
</nav>  

<!-- <div class="search_menu_header">
	<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
</div> -->

<nav class="navbar_home_mobile d-md-none navbar navbar-expand-lg navbar-light">  
		<div class="header_logo">  
			<a href="<?php echo pll_home_url() ?>" class="header_logo_not_scrolled"> 
				<img width="40" height="40" src="<?= get_field('header_logo','option')['url'] ?>" alt="logo">
			</a>  
		</div> 
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup-4" aria-controls="navbarNavAltMarkup-4" aria-expanded="false" aria-label="Toggle navigation">
			   <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                 <path fill-rule="evenodd" clip-rule="evenodd" d="M1.5 0.799999C1.1134 0.799999 0.800003 1.1134 0.800003 1.5C0.800003 1.8866 1.1134 2.2 1.5 2.2H19.5C19.8866 2.2 20.2 1.8866 20.2 1.5C20.2 1.1134 19.8866 0.799999 19.5 0.799999H1.5ZM1.5 9.8C1.1134 9.8 0.800003 10.1134 0.800003 10.5C0.800003 10.8866 1.1134 11.2 1.5 11.2H19.5C19.8866 11.2 20.2 10.8866 20.2 10.5C20.2 10.1134 19.8866 9.8 19.5 9.8H1.5ZM1.5 18.8C1.1134 18.8 0.800003 19.1134 0.800003 19.5C0.800003 19.8866 1.1134 20.2 1.5 20.2H19.5C19.8866 20.2 20.2 19.8866 20.2 19.5C20.2 19.1134 19.8866 18.8 19.5 18.8H1.5Z" fill="#0D404F"/>
                </svg>
             </button>	
	<div class="collapse navbar-collapse " id="navbarNavAltMarkup-4">
		<div class="navbar-nav">
		<?php
					wp_nav_menu( array(        
						'theme_location'    => 'mobile-main-menu', 
						'depth'             => 3,  
						'container'         => 'div',
						'container_class'   => '',
						'container_id'      => 'navbarmainSupportedContent',
						'menu_class'        => 'nav navbar-nav main_menu',   
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					) );
				?>
		</div>
	</div>
</nav>
  
<script type="text/javascript">
    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
</script> 		
</header>
