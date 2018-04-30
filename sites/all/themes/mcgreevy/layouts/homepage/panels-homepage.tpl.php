<?php
/**
 * @file
 * Template for a 3 lab column panel layout.
 *
 * This template provides a two column panel display layout, with
 * each column roughly equal in width.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 */
?>

    <div class="columns homepage_banner ">
      <?php print $content['topbanner']; ?>
       <div class="line clearfix"></div>
    </div><br clear="all">

    
          <div class="row large-12 homepage-quarters">
              
                  <?php print $content['topone']; ?>
               
              <div class="line clearfix"></div>
          </div> 

<br clear="all">
       <div class="large-12 homepage-bottom">
             <?php print $content['bottom']; ?>
                 <div class="line clearfix"></div>
      </div>
            <div class="row large-12 homepage-bottomadvert">
            
                  <?php print $content['bottomtwoa']; ?>
              
              <div class="line clearfix"></div>
</div>

    







	
