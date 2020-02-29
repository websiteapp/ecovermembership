<!-- Footer
================================================== -->
<hr>
	<div class="row">
		<div class="span12">
			<p class="footer">&copy; All rights reserved 2014 | <a href="home.php"><?php if (class_exists('Generic')) {
			$generic = new Generic();
		echo $generic->getOption('site-name'); }?></a></p>
			
		</div>
	</div>
</div>
	</div> <!-- /.span9 -->
	</div> <!-- /.row -->

</div> <!-- /.container -->

	<!-- Le javascript -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="assets/js/bootstrap-transition.js"></script>
	<script src="assets/js/bootstrap-collapse.js"></script>
	<script src="assets/js/bootstrap-modal.js"></script>
	<script src="assets/js/bootstrap-dropdown.js"></script>
	<script src="assets/js/bootstrap-button.js"></script>
	<script src="assets/js/bootstrap-tab.js"></script>
	<script src="assets/js/bootstrap-alert.js"></script>
	<script src="assets/js/bootstrap-tooltip.js"></script>
	<script src="assets/js/jquery.ba-hashchange.min.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/jquery.placeholder.min.js"></script>
	<script src="assets/js/jquery.jigowatt.js"></script>

  </body>
</html>
<?php ob_flush(); ?>