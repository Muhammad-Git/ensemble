<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta charset="<?php bloginfo( 'charset' ); ?>" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <!--<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" />-->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lib.css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@200;300;400;500;600;700;800;900&display=swap"rel="stylesheet" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
      <title><?php bloginfo( 'title' ); ?></title>
      <?php wp_head();?>
     
   </head>
   <?php
      global $options;
      global $logo;
      global $copyrite;
      $options = get_option('cOptn');
      $logo = $options['logo'];
      $copyrite = $options['copyrite'];
      $size = 344;
      $options['logo'] = wp_get_attachment_image($logo, array($size, $size), false);
      $att_img = wp_get_attachment_image($logo, array($size, $size), false);
      $logoSrc = wp_get_attachment_url($logo);
      $att_src_thumb = wp_get_attachment_image_src($logo, array($size, $size), false);
      ?>
   <body <?php body_class(); ?>>
      <a id="scroll-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
      <header class="sticky">
         <div class="container">
            <div class="row">
               <div class="col-sm-5">
                  <div class="header-logo">
                     <a href="<?php echo site_url();?>"><img src="<?php echo $logoSrc;?>" class="img-fluid" /></a>
                  </div>
               </div>
               <div class="col-sm-7 text-right">
                  <div class="header-btn">
                     <a href="#sec_1">Products</a>
                     <a class="them-btn" href="#">Schedule a Demo</a>
                  </div>
               </div>
            </div>
         </div>
      </header>
      
<?php if(is_home() || is_front_page() ){ $home_page_banner = get_field('home_page_banner');?>

<section class="banner-sec" id="banner-effect">
   <div class="global">
       <?php if(have_rows('home_page_banner')) : while(have_rows('home_page_banner')): the_row();?>
       <?php if(have_rows('star')) : $x=1;while(have_rows('star')): the_row();?>
      <img class="glob-<?php echo $x;?> element ele-<?php echo $x;?>" src="<?php echo get_sub_field('star_image');?>">
      <?php $x++;endwhile; endif;?>
      <?php endwhile; endif;?>
     
      <!-- <img class="glob-3" src="assets/images/Global03.png"> -->
      <div class="glob-earth-3">
         <section id="solar-system">
             <img class="img-fluid mobile-sun" src="https://insitechstaging.com/demo/ensemble-2/wp/wp-content/uploads/2022/10/Sun-1.png"> 
            <div id="sun"></div>
            <article id="mercury-trajectory">  
            </article>
         </section>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12">
            <div class="text-banner">
               <h1><?php echo $home_page_banner['title'];?></h1>
               <p><?php echo $home_page_banner['content'];?></p>
            </div>
         </div>
      </div>
   </div>
</section>

<?php } ?>