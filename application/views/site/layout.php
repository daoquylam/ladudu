
<!DOCTYPE html>
<html lang="en">

<head>
   <?php $this->load->view('site/head');?>
</head>

<body>
	
	<div id="page">
            
	<?php $this->load->view('site/header');?>
	
	<!-- /header -->
		
	<main>
		<?php $this->load->view($temp , $this->data);?>
	</main>
	<!-- /main -->
	
	<footer>
		<?php $this->load->view('site/footer');?>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->

	
	<div id="toTop"></div><!-- Back to top button -->
	
<!--	 COMMON SCRIPTS -->
    <script src="<?php echo public_url();?>/site/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo public_url();?>/site/js/common_scripts.js"></script>
    <script src="<?php echo public_url();?>/site/js/main.js"></script>
	<script src="<?php echo public_url();?>/site/assets/validate.js"></script>
	
<!--	 SPECIFIC SCRIPTS -->
    <script src="<?php echo public_url();?>/site/js/input_qty.js"></script>
    <script src="<?php echo public_url();?>/site/layerslider/js/greensock.js"></script>
    <script src="<?php echo public_url();?>/site/layerslider/js/layerslider.transitions.js"></script>
    <script src="<?php echo public_url();?>/site/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
    <script>
        'use strict';
        $('#layerslider').layerSlider({
            autoStart: true,
            navButtons: false,
            navStartStop: false,
            showCircleTimer: false,
            responsive: true,
            responsiveUnder: 1280,
            layersContainer: 1200,
            skinsPath: '<?php echo public_url();?>/site/layerslider/skins/'
                // Please make sure that you didn't forget to add a comma to the line endings
                // except the last line!
        });
    </script>
	
	
	
</body>
</html>