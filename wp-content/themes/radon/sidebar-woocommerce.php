<?php 
/**
 * This template for displaying woocommerce sidebar
 */

if( is_active_sidebar('sidebar-woocommerce') ): ?>

<div class="col-md-4">

	<?php dynamic_sidebar('sidebar-woocommerce'); ?>

</div>

<?php endif; ?>