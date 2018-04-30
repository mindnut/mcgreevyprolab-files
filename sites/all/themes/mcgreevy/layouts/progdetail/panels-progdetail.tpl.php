<?php
/**
 * @file
 * Template for a 2 column panel layout.
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

    <div class="program_left">
	
	<div class="program_info"><?php print $content['content']; ?></div>
    
    <?php print $content['body']; ?>
    </div>
	
    <div class="program_right"><?php print $content['image']; ?>
     </div>  <div class="line clearfix"></div>
  

	
