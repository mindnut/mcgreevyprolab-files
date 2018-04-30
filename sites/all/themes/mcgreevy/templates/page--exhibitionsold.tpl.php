<body class="home">
<!-- Container --> 
<!-- Header -->
<header class="clearfix"> <?php print render($page['toplinks']); ?> 
  <!-- Navigation --> 
  <?php print render($page['header']); ?> 
  <!-- Navigation --> 
</header>
<!-- End Header -->
<div id="container">

 <?php print $messages; ?> 
  <!-- Content -->
  <div id="content" class="full-width clearfix">
    <div class="breadcrumb"><?php print $breadcrumb; ?></div>
     
       <?php if ($page['highlighted_banner']): ?>
       
		<?php print render($title_prefix); ?>
      <?php if ($title): ?>
      <h1 class="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
           <div class="highlighted_exhibition clearfix"> 	  
     <?php print render($page['highlighted_banner']); ?> </div>

       <?php endif; ?>
    
    	
		<?php if($page['sidebar_first']): ?>
      	<div class="left-sidebar"> <?php print render($page['sidebar_first']); ?> </div>
        <div class="page-container clearfix">  
        <?php  else: ?>
        <div class="page-container-full clearfix">  
         <?php endif; ?>
    
    <?php if (!$page['highlighted_banner']): ?>
		<?php print render($title_prefix); ?>
      <?php if ($title): ?>
      <h1 class="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
    <?php endif; ?>  
      
      
      <?php if ($page['banner_images']): ?>
      <div class="banner_images"> <?php print render($page['banner_images']); ?> </div>
      <?php endif; ?>
      <?php if ($tabs): ?>
      <br clear="all">
      <div class="tabs"><?php print render($tabs); ?></div>
      <?php endif; ?>
      <?php if ($action_links): ?>
      <ul class="action-links">
        <?php print render($action_links); ?>
      </ul>
      <?php endif; ?>
      
      <?php print $feed_icons; ?>
       
        
       <?php if ($page['sidebar_second'] && $page['sidebar_first']) : ?>
       <div class="middlerow">
       <?php else: ?>
        <div class="middlerow_full">
       <?php endif; ?>
       
	  <?php print render($page['content']); ?> 
     
       <?php if ($page['sidebar_second']): ?>
       </div>
      <div class="right-sidebar"> <?php print render($page['sidebar_second']); ?> </div>
       <?php endif; ?>
       
	   <?php if (!$page['sidebar_second'] && !$page['sidebar_first']) : ?>
       </div>
       <?php endif; ?>
        <?php if ($page['sidebar_first'] && !$page['sidebar_second']) : ?>
       </div>
       <?php endif; ?>
       
       </div></div>
  <!-- End Content --> 
  <!-- Footer -->
  <footer class="clearfix"> this is the exhibitions page.tpl </footer>
  <!-- End Footer --> 
</div>
<!-- End Container --> 