<?php /* Smarty version 2.6.0, created on 2009-01-26 14:46:36
         compiled from order_place.tpl.html */ ?>

<?php if ($this->_tpl_vars['order_is_placed'] != 0): ?>

	<?php echo @constant('STRING_ORDER_PLACED'); ?>


<?php else: ?>
	<br><br><br><center><b><?php echo @constant('CART_EMPTY'); ?>
</b></center>
<?php endif; ?>