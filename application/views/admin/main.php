<html>
	<head>
    <?php $this->load->view('admin/head');?>
    </head>
    
    <body class="fixed-nav sticky-footer" id="page-top">


         <?php $this->load->view('admin/header');?>
         
         <!--content-->
         <?php $this->load->view($temp,$this->data);?>
         
         <!--end content-->
         <?php $this->load->view('admin/footer')?>

        <div id="clear">
        </div>
    </body>
</html>