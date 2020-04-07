<?php /* Template Name: Cours */ ?>
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
  <!-- Google	Fonts -->
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
      <!--NAVBAR SECTION END-->
      
    <!-- FACULTY SECTION END-->
      <div id="course-sec" class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <?php $ti= get_field('titre');?>
                  <?php if($ti):?>
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line"><?php echo $ti;?></h1>
                     <?php else:?>
                      <h1 data-scroll-reveal="enter from the bottom after 0.1s"  class="header-line"> nos cours </h1>
                   <?php endif;?>
                     <?php $tii= get_field('text');?>
                  <?php if($tii):?>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                     
                     <?php echo $tii;?>
                         </p>

                         <?php else:?>
                             <p data-scroll-reveal="enter from the bottom after 0.3s">
                     
                     voila les cours du notre professeurs en format pdf
                         </p>   
                      <?php endif;?>
                         
                 </div>

             </div>
             <!--/.HEADER LINE END-->


           <div class="row set-row-pad" >
           <div class="col-lg-3 col-md-3 col-sm-3 " data-scroll-reveal="enter from the bottom after 0.4s" >
<?php $im= get_field('image')?>
                <?php if($im ): ?>
    <img src="<?php echo $im; ?>" />
    <?php else:?>
        <img style="" src="<?php echo bloginfo('template_url')?>/assets/img/11.jpg ?>" />
<?php endif; ?>
           </div>
               <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">

                    <?php if( have_rows('repe') ): ?>
                            <div class="panel-group" id="accordion">
                                 <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.5s">
                        
    <?php while( have_rows('repe') ): the_row(); 

        // vars
        $lien = get_sub_field('le_titre');
        $desc = get_sub_field('decription');
        
        ?>
        <?php $ui= get_field('repe')?>
        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.5s">
                           <?php if($desc):?>
                            <div class="panel-heading" >
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="collapsed">
                                  <strong>   COURS</strong> <?php echo $desc;?> 
                                    </a>
                                </h4>
                            </div>
                        
                        <?php else:?>
                            <div class="panel-heading" >
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="collapsed">
                                  <strong>   COURS</strong> réseaux avencer 
                                    </a>
                                </h4>
                            </div>
                            <?php endif;?>
                            <?php if($lien):?>
                            <div id="collapse1" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <p><a href="<?php echo $lien['url'];?>" target="_blank"><?php echo $desc;?></a></p>
                                </div>
                            </div>
                            <?php else:?>
                                <div id="collapse1" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <p><a href="https://drive.google.com/file/d/1qqhGqkquh1Zgm7I6yQYS-BH2aDttaxnx/view" target="_blank">réseaux avencer</a></p>
                                </div>
                            </div>
                            <?php endif;?>
                        </div>



                           

    <?php endwhile; ?>
                        </div>
                        </div>

<?php endif; ?>




                        
                  
             
                 
                 
             
             </div>

    
                   
          
             </div>

      <!-- COURSES SECTION END-->

     <!-- FOOTER SECTION END-->
   
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="assets/js/custom.js"></script>
</body>
</html>
<?php get_footer();?>

