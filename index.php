<?php 
/*echo'<pre>';
print_r(get_field('background'));
echo'</pre> ';
die();*/  
get_header();

 

?> 
 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
 
              

              <a class="navbar-brand" href="#"><img class="logo-custom" src="<?php bloginfo('template_url')?>/assets/img/ee.jpg" alt=""  /></a>


            </div>
            <div class="navbar-collapse collapse move-me">
            	     <?php ?>
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
                  <?php if(has_nav_menu('top-menu')): ?>
                        <?php echo $var;?>
                    <?php else: ?>
                        <ul>
                                
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="#">acceuil</a></li>
                                        <li><a href="#">Cours</a></li>
                                        <li><a href="#">professeurs</a></li>
                                        
                                    </ul>
                                
                                
                            

                    <?php endif;?>
            </div>
           
        </div>
    </div>
      <!--NAVBAR SECTION END-->
     <?php $back = get_field('background');?>
            <?php if($back['background']):?>
      
       <div class="home-sec" id="home" style="background: no-repeat center center url(<?php echo $back;?>); ">
        <?php else:?>
          <div class="home-sec" id="home" style="background: no-repeat center center url(<?php echo bloginfo('template_url')?>/assets/img/presidence.jpg); ">
   
<?php endif;?>
       
           <div class="overlay">
 <div class="container">
           <div class="row text-center " >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
                <div class="flexslider set-flexi" id="main-section" >
                    <ul class="slides move-me">
                        <!-- Slider 01 -->
                        <?php $me= get_field('menu');?>
                        <li>
                          <?php if($me):?>
                              <h1><?php echo $me;?></h1>
                              <?php else: ?>
                                <h1>école superieur de technologie sidi bennour</h1>
                           <?php endif;?>
                           

                            <?php $ta = get_field('menu_copie');?>
                           <?php if($ta):?>
                           <h3><?php  echo $ta;?></h3>
                           <?php else:?>
                           <h3> établissement public d’enseignement supérieur</h3>
                            <?php endif;?>
                          
                           
                            
                        </li>
                        <!-- End Slider 01 -->
                        
                        <!-- Slider 02 -->
                        <li>
                               <?php if($me):?>
                              <h1><?php echo $me;?></h1>
                              <?php else: ?>
                                <h1>école superieur de technologie sidi bennour</h1>
                          
                           <?php endif;?>
                           <?php $es = get_field('menu_copie2');?>
                           <?php if($es):?>
                           <h3><?php  echo $es;?></h3>
                           <?php else:?>
                           <h3>L’ESTSB est une composante de l’Université Chouaib Doukkali d’El Jadida.</h3>
                            <?php endif;?>
                          
                            
                        </li>
                        <!-- End Slider 02 -->
                        
                        <!-- Slider 03 -->
                        <li>
                            <?php if($me):?>
                              <h1><?php echo $me;?></h1>
                              <?php else: ?>
                                <h1>école superieur de technologie sidi bennour</h1>
                           <?php endif;?>
                           <?php $ti = get_field('menu_copie3');?>
                           <?php if($ti):?>
                           <h3><?php  echo $ti;?></h3>
                           <?php else:?>
                           <h3>La durée des études est de deux années universitaires </h3>
                            <?php endif;?>
                        </li>
                        <!-- End Slider 03 -->
                    </ul>
                </div>
                   
     
              
              
            </div>
                
               </div>
                </div>
           </div>
           
       </div>
       <!--HOME SECTION END-->   
    <div  class="tag-line" >
         <div class="container">
           <div class="row  text-center" >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><i class="fa fa-circle-o-notch"></i> bienvenu <i class="fa fa-circle-o-notch"></i> </h2>
                   </div>
               </div>
             </div>
        
    </div>
    <!--HOME SECTION TAG LINE END-->   
         <div id="features-sec" class="container set-pad" >
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                  <?php $ti= get_field('titrelist');?>
                  <?php if($ti):?>
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line"><?php echo $ti;?> </h1>
                     <?php else:?>
                      <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line"> A propos de l’EST Sidi Bennour </h1>
                   <?php endif;?>
                     <p data-scroll-reveal="enter from the bottom after 0.3s" >
                      <?php $t= get_field('textlist');?>
                  <?php if($t):?>
                     <?php echo $t?>
                     <?php else:?>
                   <p>   L’Ecole Supérieure de Technologie Sidi Bennour (ESTSB) est un établissement public d’enseignement supérieur à finalité de formation des Techniciens Supérieurs. Elle a été créée en Août 2016 par le Ministère de l’Enseignement Supérieur
                      </p>
                  <?php endif;?>
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->

           <div class="row" >
           
               
                 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="about-div">
                     <i class="fa fa-paper-plane-o fa-4x icon-round-border" ></i>

                   <h3 >qualité de l'éducation</h3>
                       <hr />
                   <p >
                    <?php $mo=get_field('first_champs');?>

                       <?php if($mo):?>
                        <?php echo $mo;?>
                        <?php else:?>
                        Sa vocation est de former des Techniciens Supérieurs polyvalents, hautement qualifiés et immédiatement opérationnels après leur sortie de l’Ecole en tant que collaborateurs d’ingénieurs et de managers
                        <?php endif;?>  
                       
                   </p>

             

                </div>
                   </div>
                   <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                     <div class="about-div">
                     <i class="fa fa-bolt fa-4x icon-round-border" ></i>

                   <h3 >le systéme de l'école</h3>

                       <hr />
                   <p >
                    <?php $ma=get_field('secend_champs');?>

                       <?php if($ma):?>
                        <?php echo $ma;?>
                        <?php else:?>
                        programmes d’enseignement comportent des Cours magistraux, des Travaux Pratiques (TP), des Travaux Dirigés (TD) et des Dossiers et Travaux de Réalisation, des Projets de Fin d’Etude
                        <?php endif;?>  
                       
                       
                   </p>

                </div>
                   </div>
                 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                     <div class="about-div">
                     <i class="fa fa-magic fa-4x icon-round-border" ></i>
                   <h3 >La formation appliquée</h3>
                
                       <hr />
                   <p >
                    <?php $mi=get_field('tred_champs');?>

                       <?php if($mi):?>
                        <?php echo $mi;?>
                        <?php else:?>
                         La formation appliquée à l’ESTSB est largement tournée vers les Technologies d’Information et de Communication, les Techniques de Gestion
                        <?php endif;?>  
                       
                   </p>

                </div>
                   </div>
                 
                 
               </div>
             </div>

   <!-- FEATURES SECTION END-->
   
    <!-- FACULTY SECTION END-->
   
             <!--/.HEADER LINE END-->


       
      <!-- COURSES SECTION END-->
        <?php $re=get_field('background2');?>
        <?php if($re):?>
    <div id="contact-sec"  style="background: no-repeat center center url('<?php echo $re;?>'); ">
      <?php else:?>
        <div id="contact-sec"  style="background: no-repeat center center url('<?php echo bloginfo('template_url')?>/assets/img/8.jpg); ">
        <?php endif?>
           <div class="overlay">
 <div class="container set-pad">
      <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">


                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line" >contactez nous </h1>

                     

            
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                      <?php $mm=get_field('contact');?>
                      <?php if($mm):?>
                        <?php echo $mm;?>
                        <?php else:?>
                        pour plus d'information a propos de notre école veuillez contactez notre support ou visiter notre réseaux sociaux
                        <?php endif;?> 
                       
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->
           <div class="row set-row-pad"  data-scroll-reveal="enter from the bottom after 0.5s" >
           
               
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <form>
                        <div class="form-group">

                          


                            <input type="text" class="form-control "  required="required" placeholder="votre nom" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control " required="required"  placeholder="voter email" />

                        </div>
                        <div class="form-group">
                            <textarea name="message" required="required" class="form-control" style="min-height: 150px;" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-block btn-lg">envoyer</button>
                        </div>

                    </form>
                </div>

                   
     
              
              
                
               </div>
                </div>
          </div> 
       </div>
     <div class="container">
             <div class="row set-row-pad"  >
    <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s">


                    <h2 ><strong>Notre emplacement </strong></h2>


                
        <hr />
                    <div ">
                      <?php $m=get_field('adresse');?>

                       <?php if($m):?>
                        <h4><?php echo get_field('adresse');?></h4>
                        <?php else:?>
                        <h4> Route Ben Maachou, 24.000 El Jadida, Maroc.</h4>
                        <?php endif;?> 
                        
                        

                        <?php $mp=get_field('tele');?>

                       <?php if($mp):?>
                        <h4><strong>Appel:</strong> <?php echo $mp;?></h4>
                        <?php else:?>
                         <h4><strong>Appel:</strong> +212672435415</h4>
                        <?php endif;?> 
                          
                        
                        <?php $mmp=get_field('tele');?>

                       <?php if($mmp):?>
                        <h4><strong>Email: </strong><?php echo $mmp;?></h4>

                        <?php else:?>
                         <h4><strong>Email: </strong> baddi.youssef@ucd.ac.ma</h4>
                        <?php endif;?> 
                    </div>


                </div>
                 <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.4s">


                    <h2 ><strong>Connectivité sociale </strong></h2>


                    

    
        <hr />
                    <div id="Social">
                      <?php
                      $button1=get_field('button1');
                      ?>
                        <a href="<?php echo $button1['url'];?>">  
                          
                          <?php echo $button1['title'];?>


                          <img src="<?php bloginfo('template_url')?>/assets/img/Social/facebook.png" alt="" /> </a>
   
                    </div>
                    </div>


                </div>
                 </div>

<?php get_footer();?>