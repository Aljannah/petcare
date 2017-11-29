

<?php $this->load->view('layout/header');?>
   <!--/start-banner-->
  <div class="banner">
     <div class="container">
	       <div class="banner-inner">
						<!--banner-Slider-->
						<script src="<?php base_url();?>assets/js/responsiveslides.min.js"></script>
						 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
						auto: true,
						pager: true,
						nav:false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						  $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
						  $('.events').append("<li>after event fired.</li>");
						}
						  });

						});
						  </script>
				</div>
        </div>
  </div>
    <!--//end-banner-->
 <!--/start-main-->

 <!--//end-main-->
 <?php $this->load->view('layout/footer');?>