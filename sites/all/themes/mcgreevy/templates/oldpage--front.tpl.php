<body class="home">
<!-- Container --> 
<div id="container">
<!-- Header -->
<header class="clearfix">
<div class="left_header">
<div id="logo">
   <a href="/" title="<?php print t('Home'); ?>" rel="home" id="logo"> <img src="/<?php print path_to_theme() . '/images/mcg_logo.png'?>" alt="<?php print t('Home'); ?>" /> </a>
       <div class="slogan"><?php print $site_slogan ?></div>
 </div>
 </div>
 <div class="right_header">
 <div class="photocenter"><a href="http://mcgreevyprolab.lifepics.com"><img src="/<?php print path_to_theme() . '/images/onlinephotocenter.png'?>"></a></div>
   
   <div class="questions">Questions? 518-426-1039</div></div>
  <!-- Navigation --> 
  <?php print render($page['header']); ?> 
  <!-- Navigation --> 

</header>
 <!-- End Header --> 
 
  <!-- Slider --> 
 <div class="hp_slider"></div>
  <?php print render($page['highlighted']); ?> 
  <!-- End Slider --> 


  <?php print $messages; ?> 
  
  <!-- Content -->
  <div id="content" class="clearfix"> 
  <?php print render($page['hp_exhibitions']); ?>
    <div class="hp-posts-container clearfix"> 
	<?php print render($page['hp_featured']); ?> </div>
  </div>
   <!-- Sidebar --> 
  <?php print render($page['hp_sidebar']); ?> 
  <!-- End Sidebar --> 
  
  <!-- End Content --> 
  <!-- Footer -->
  <footer class="clearfix"> 
   
    
    <!-- Back to top -->
    <div id="top"> <a href="#top">back to top</a> </div>
    <!-- End Back to top --> 
    
    <!-- Copyright Message -->
    <div class="copyright">
      <p>© Copyright 2013 McGreevy Prolab and ProPress</p>
    </div>
    <!-- End Copyright Message --> 
  </footer>
  <!-- End Footer --> 
</div>
<!-- End Container --> 

