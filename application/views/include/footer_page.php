		<footer>
        <p>&copy; Stylo Men And Women Bag</p>
      </footer>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-button.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-typeahead.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.prettyPhoto.js"></script>
	<script src="<?php echo base_url('assets/js/')?>/jquery.stringToSlug.js"></script>
	<script type="text/javascript">
		$(document).ready( function() {
			$("#string").stringToSlug();
		});
	</script>
	<script type="text/javascript" charset="utf-8">
	  $(document).ready(function(){
		$("a[rel^='prettyPhoto']").prettyPhoto();
	  });
	</script>
	<script type="text/javascript">
		$("[rel=tooltip]").tooltip();
      $(document).ready(function()
	  {
		$(".thumbnail").hover
		(
		  function () 
		  {
			$(this).popover('show')
		  },
		  function () 
		  {
			$(this).popover('hide')
		  }
		);
      });
    </script>
  </body>
</html>