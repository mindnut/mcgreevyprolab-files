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
      
			 <div class="page-container-full clearfix">  
				<?php print render($title_prefix); ?>
      <?php if ($title): ?>
      <h1 class="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
          <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?> 
          
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                 
                 
 
			   <?php print render($page['content']); ?>
            <?php print $feed_icons; ?>

		

				<div class="line clearfix"></div>

   <?php if ($page['sidebar_second']): ?>
      <div class="right-sidebar"> <?php print render($page['sidebar_second']); ?>here is sidebar_right </div>
       <?php endif; ?>
		
			</div>
          
		</div>
	

		<!-- End Content -->
  <!-- Footer -->
  <footer class="clearfix"> 
   
  </footer>
  <!-- End Footer --> 
</div>
<!-- End Container --> 


