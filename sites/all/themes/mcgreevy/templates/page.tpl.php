<body class="home">
<!-- Container --> 
<div id="container">
<!-- Header -->
<header class="clearfix">
<div class="left_header">
<div id="logo">
   <a href="/" title="<?php print t('Home'); ?>" rel="home" id="logo"> <img src="/<?php print path_to_theme() . '/images/mcg_logo.png'?>" alt="<?php print t('Home'); ?>" /> </a>
 </div>
          <div class="slogan"><?php print $site_slogan ?></div>

 </div>

 <div class="right_header">
  <?php print render($page['pricelist']); ?> 
<div class="questions">Questions? 518-426-1039</div>

   </div>
  <!-- Navigation --> 
  <?php print render($page['header']); ?> 
  <!-- Navigation --> 

</header>
<!-- End Header -->

  <?php if($page['highlighted']): ?>
  <div class="highlightedspace column large-12">
 <?php print render($page['highlighted']); ?> 
 </div>
  <?php endif; ?>

 <?php print $messages; ?> 
  <!-- Content -->
  <div id="content" class="full-width clearfix">
  
    	<?php if($page['sidebar_first']): ?>
      	<div class="left-sidebar"> <?php print render($page['sidebar_first']); ?> </div>
        <div class="page-container clearfix">  
        <?php  else: ?>
        <div class="page-container-full clearfix">  
         <?php endif; ?>
    	<?php print render($title_prefix); ?>
    <!--  <?php if ($title): ?>
      <h1 class="page-title"><?php print $title; ?></h1>
      <?php endif; ?> -->
      <?php print render($title_suffix); ?>
      <?php if ($page['banner_images']): ?>
      <div class="banner_images"> <?php print render($page['banner_images']); ?> </div>
      <?php endif; ?>
      
      <?php if ($tabs): ?>
      
      <div class="tabs"><?php print render($tabs); ?></div>
      <?php endif; ?>
      <?php if ($action_links): ?>
      <ul class="action-links">
        <?php print render($action_links); ?>
      </ul>
      <?php endif; ?>
      <?php print $feed_icons; ?>
	  <?php print render($page['content']); ?> 
     
       </div></div>
  <!-- End Content --> 
   <div class="bottom-nav large-12">
 <?php print render($page['bottomnav']); ?>
  <div class="line clearfix"></div>
   </div>
  <!-- Footer -->
  <footer class="clearfix"> <?php print render($page['footer']); ?> 
<div class="columns large-4"><?php print render($page['footer_first']); ?> </div>
<div class="columns large-3"><?php print render($page['footer_second']); ?> </div>
<div class="columns large-4"><?php print render($page['footer_third']); ?> </div>
   </footer>
  <!-- End Footer --> 
</div>
<!-- End Container --> 