<?php /* Template Name: Home - Page Template */
get_header();
$section_1 = get_field('section_1');
$section_3 = get_field('section_3');
$section_4 = get_field('section_4');
?>

  <section class="home-sec-1" id="sec_1">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="real-text"><h1><?php echo $section_1['title'];?></h1>
            <p><?php echo $section_1['content'];?></p>
            <h3><?php echo $section_1['subtitle'];?></h3>
          </div>
        </div>
      </div>
      <div class="row">
        <?php    $x=1;  
        $args = array( 
        'post_type' => 'product' , 
        'posts_per_page' => '3',
        'order'=>'ASC',); 
        $index_query = new WP_Query($args); 
        while ($index_query->have_posts()) : $index_query->the_post(); ?>
        <div class="col-lg-4 col-md-6">
          <div class="product-body">
            <img src="<?php echo the_post_thumbnail_url();?>" class="img-fluid" />
            <h3><?php echo the_title();?></h3>
            <p><?php echo wpautop(the_content());?></p>
            <a href="javaScript:;">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i> <i class="fa fa-angle-right"
                aria-hidden="true"></i></a>
          </div>
        </div>
        <?php $x++; endwhile; wp_reset_query(); ?>
      </div>
    </div>
  </section>
  
  
  <section class="home-sec-2" id="sec_2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="key-text">
            <h3><?php echo get_field('title_key_features');?></h3>
          </div>
        </div>
      </div>
      <div class="row">
         <?php    $x=1;  
            $args = array( 
            'post_type' => 'features' , 
            'posts_per_page' => '4',
            'order'=>'ASC',); 
            $index_query = new WP_Query($args); 
            while ($index_query->have_posts()) : $index_query->the_post(); ?>
        <div class="col-lg-3 col-md-6">
          <div class="key-box">
            <img src="<?php echo the_post_thumbnail_url();?>" class="img-fluid" />
            <h3><?php echo the_title();?></h3>
            <p>
              <?php wpautop(the_content());?>
            </p>
          </div>
        </div>
        <?php $x++; endwhile; wp_reset_query(); ?>
      </div>
    </div>
  </section>


  <section class="home-sec-3" id="sec_3">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="work-text">
            <h2><?php echo $section_3['title'];?></h3>
          </div>
        </div>
      </div>
      
      <div class="row work-slider">
          <?php if(have_rows('section_3')): while(have_rows('section_3')): the_row();?>
          <?php if(have_rows('logo')): while(have_rows('logo')): the_row();?>
        <div class="col-lg-3 col-md-12">
          <div class="work-img">
            <img src="<?php echo get_sub_field('logo_image');?>" class="img-fluid">
          </div>
        </div>
        <?php endwhile; endif; ?>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </section>
  
<section class="home-sec-4" id="sec_4">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="team-text">
            <h3><?php echo $section_4['title']; ?></h3>
            <p><?php echo $section_4['content']; ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
    <section class="home-sec-5">
    <div class="container">
      <div class="row">
      <?php    $x=1;  
        $args = array( 
        'post_type' => 'our_team' , 
        'posts_per_page' => '4',
        'order'=>'ASC',); 
        $index_query = new WP_Query($args); 
        while ($index_query->have_posts()) : $index_query->the_post(); ?>
        <div class="col-lg-3 col-md-6">
          <div class="team-body">
            <img src="<?php echo the_post_thumbnail_url();?>" class="img-fluid">
            <h3><?php echo the_title();?></h3>
            <h6><?php echo get_field('designation');?></h6>
            <p><?php echo wpautop(the_content());?></p>
          </div>
        </div>
        <?php $x++; endwhile; wp_reset_query(); ?>
      </div>
    </div>
  </section>



<?php get_footer();?>