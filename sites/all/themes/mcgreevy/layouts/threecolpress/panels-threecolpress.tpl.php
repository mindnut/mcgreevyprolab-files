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
 <div class="row">
    <div class="columns large-2-5 leftnav">
      <?php print $content['navarea']; ?>
    </div>
    
    <div class="columns large-9-5 mcgreevycontent">
          <div class="row">
              <div class="large-12 column">
                  <?php print $content['topfull']; ?>
                   <div class="line clearfix"></div>
              </div>


                <div class="large-6 column"><?php print $content['topleft']; ?></div>
                <div class="large-6 column "><?php print $content['topright']; ?> </div>
                <div class="line clearfix"></div>


               <div class"row ">
              <div class="large-9 column waystostart"><?php print $content['botleft']; ?></div>
              <div class="large-3 column"><?php print $content['botright']; ?></div>
              <div class="line clearfix"></div>
              </div>
              <div class="large-12 column">
                  <?php print $content['botfull']; ?>
                   <div class="line clearfix"></div>
              </div>

            </div>
    </div>
          
  </div>



	
