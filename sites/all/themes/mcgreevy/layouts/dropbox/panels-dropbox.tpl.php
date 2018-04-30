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
              <div class="large-12 columns">
                  <?php print $content['topfull']; ?>
                   <div class="line clearfix"></div>
              </div>


              <div class="large-7 columns">
                  <?php print $content['topleft']; ?>
              </div>
              <div class="large-5 columns">
                  <?php print $content['right']; ?> 
              </div>
               <div class="line clearfix"></div>

          <div class="row large-12 online-quarters">
              <div class="small-3 columns column ">
                  <?php print $content['topone']; ?>
                   <div class="line clearfix"></div>
              </div>
              <div class="small-3 columns">
                  <?php print $content['toptwo']; ?>
                   <div class="line clearfix"></div>
              </div>
              <div class="small-3 columns">
                  <?php print $content['topthree']; ?>
                   <div class="line clearfix"></div>
              </div>
              <div class="small-3 columns">
                  <?php print $content['topfour']; ?>
                   <div class="line clearfix"></div>
              </div>
          </div> 
  
               <div class="large-12 columns">
                  <?php print $content['bottomfull']; ?>
                <div class="line clearfix"></div>
                </div>
          </div>
   </div></div>



	
