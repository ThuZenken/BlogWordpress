<?php 
/**
 * This template for displaying sidebar
 */

if( is_active_sidebar('sidebar-primary') ): ?>

<div class="col-md-4" role="complementary">

	<?php dynamic_sidebar('sidebar-primary'); ?>

</div>

<?php endif; ?>