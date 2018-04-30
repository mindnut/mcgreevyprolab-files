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
    
    	<?php if($page['sidebar_first']): ?>
      	<div class="left-sidebar"> <?php print render($page['sidebar_first']); ?> </div>
        <div class="page-container clearfix">  
         <?php endif; ?>
         
         
    	<?php print render($title_prefix); ?>
      <?php if ($title): ?>
      <h1 class="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
     
      <?php print render($title_suffix); ?>
        
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
            
       <div class="middlerow">
       
       
	  <?php print render($page['content']); ?> 
       </div>
       <?php if ($page['sidebar_second']): ?>
       <div class="right-sidebar"> <?php print render($page['sidebar_second']); ?> </div>
       <?php endif; ?>
       
	  
       
       </div></div>
  <!-- End Content --> 
  <!-- Footer -->
  <footer class="clearfix"> this is the page.tpl </footer>
  <!-- End Footer --> 
</div>
<!-- End Container --> 