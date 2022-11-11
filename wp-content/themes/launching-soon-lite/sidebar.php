<?php
/**
 * @package launching-soon-lite
 */
?>
<div id="sidebar" class="col-md-4 col-lg-4 col-sm-12">    
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
         <?php dynamic_sidebar('sidebar-1');?>
    <?php endif; ?>	
</div><!-- sidebar -->