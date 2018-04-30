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
?><div class="row ">
    <div class="large-6 column"><?php print $content['topleft']; ?></div>

    <div class="large-6 column "><?php print $content['topright']; ?> </div>
<div class="line clearfix"></div>

</div>

   <div class"row ">
   
	 <div class="large-9 column waystostart"><?php print $content['botleft']; ?></div>

    <div class="large-3 column"><?php print $content['botright']; ?></div>
   
    <div class="line clearfix"></div>
    </div>


