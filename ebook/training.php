<?php include_once('classes/check.class.php'); ?>
<?php include_once('header.php'); ?>
<?php if( protectThis("*") ) : ?>
<div class="row">

	<div class="span6">
		<h1 class="page-header"><?php _e('Software. <small>Creating graphics.</small>'); ?></h1>
		<p><?php _e(' ')?></p>
		<div class="videowrapper"><?php _e('<iframe width="573" height="300" src="//www.youtube.com/embed/14dbEqzu7Tw?rel=0" frameborder="0" allowfullscreen></iframe>')?></div>
	</div>

</div>

<div class="row">

	

	<div class="span6">
		<h1 class="page-header"><?php _e('Support. <small>Get in touch.</small>'); ?></h1>
		<p><?php _e('If you need any help with this software please contact us at the following address. ')?></p>
		<pre><?php if (class_exists('Generic')) {
    $generic = new Generic(); echo $generic->getOption('support-email'); }?></pre>
	</div>

</div>
<?php else : ?>
		<div class="alert alert-warning"><?php _e('<a href="login.php">Sign in</a> first to see training videos.'); ?></div>
	<?php endif; ?>

<?php include_once('footer.php'); ?>