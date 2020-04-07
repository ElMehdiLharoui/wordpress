<?php /* Template Name: professeurs */ 
get_header();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    
    
    <title>EST'SB</title>
<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
<link href="<?php bloginfo('template_url');?>/ flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" />    
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/assets/css/bootstrap.css">
</head>
<body >
   
 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="#"><img class="logo-custom" src="<?php bloginfo('template_url');?>/assets/img/ee.jpg" alt=""  /></a>

            </div>
            <div class="navbar-collapse collapse move-me">
                  <?php 
                wp_nav_menu(
                        array(
                        'theme_location' => 'top-menu',
                        'menu_id' =>  'main-menu',
                        'container' => 'ul',
                        'menu_class' => 'nav navbar-nav navbar-right'
                        )

                );
                ?>
            </div>
           
        </div>
    </div>

  <div id="faculty-sec" >
    <div class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                  <?php $le=get_field('titre')?>
                  <?php if($le):?>
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line"><?php echo $le;?> </h1>
                     <?php else:?>
                      <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">nos professeurs </h1>
                      <?php endif;?>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                      <?php $l=get_field('letexte')?>
                  <?php if($l):?>
                      <?php echo $l;?>
                        <?php else:?>
                          les meilleurs professeurs nationaux sont désireux de vous fournir une excellente qualité
                            <?php endif;?>
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->



           <div class="row" >
           <?php
           if(have_rows('photo')) :?>
           <div class="d-flex" >
           

            <?php while (have_rows('photo')) :the_row(); ?>
               
                    <div class="col-lg-3  col-md-3 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                     <div class="faculty-div">
                          <?php $a=get_sub_field('sub_photo'); ?>
                          <?php if($a):?>
                     <img src="<?php echo $a;?>"  class="img-rounded" />
                     <?php else:?>
                    <img src="<?php bloginfo('template_url');?>/assets/img/0.jpg"  class="img-rounded" />
                  <?php endif;?>
                  <?php $b=get_sub_field('sub_texte');?>
                  <?php if($b):?>
                     <h3 ><?php echo $b;?></h3>
                     <?php else:?>
                      <h3 >baddi youssef</h3>
                    <?php endif;?>
                     <hr />
                     <?php $bb=get_sub_field('departement');?>
                  <?php if($bb):?>

                         <h4>département <br /> <?php echo $bb ;?> </h4>
                         <?php else:?>
                           <h4>département <br /> informatique </h4>
                         <?php endif;?>
                      <p >
                         <?php $cc=get_sub_field('title');?>
                  <?php if($cc):?>
                       <?php echo $cc; ?>
                       <?php else:?>
                        PROFESSEUR ASSISTANT | CONSULTANT | FORMATEUR | KEYNOTE SPEAKER
                       <?php endif;?>
                   </p>
                </div>
                
                 
                   </div>
            <?php endwhile; ?>
             </div>
            <?php endif;?> 

               

        </div>
        <?php get_footer();?>
