<?php include_once('classes/check.class.php'); ?>
<?php include_once('header.php'); ?>

<div class="features">
	<div class="row">
		<?php if( protectThis("*") ) : ?>
		<h1 class="page-header"><?php _e('Create eBook Cover<small>Start editing below</small>'); ?></h1>
		<center><iframe src="tool/app/installation/index.php" width="1220" height="810" frameborder="0"></iframe></center>
	<?php else : ?>
		<div class="alert alert-warning"><?php _e('<a href="login.php">Sign in</a> first to launch the software'); ?></div>
	<?php endif; ?>

	</div>

	
</div>

<?php include_once('footer.php'); ?>