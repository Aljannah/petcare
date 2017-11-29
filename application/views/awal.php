
   <!--/start-banner-->
  <div class="banner">
     <div class="container">
	       <div class="banner-inner">
						<div class="callbacks_container">
						<ul class="rslides callbacks callbacks1" id="slider4">
							<li class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								<h3>WHAT IS LIKE TO WORK AS A SUPERMODEL ON WOMEN’S FASHION</h3>
								<p>Lorem ipsum dolor sit amet</p>
								</div>
							</li>
							<li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								   <h3>FANTASTIC MAN MAGAZINE AND ITS INFLUENCE ON MEN’S FASHION</h3>
								 <p>Lorem ipsum dolor sit amet</p>
								</div>
							</li>
							<li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								 <h3>WHAT IS LIKE TO WORK AS A SUPERMODEL ON WOMEN’S FASHION</h3>
								<p>Lorem ipsum dolor sit amet</p>
								</div>	
							</li>
						</ul>
						</div>
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
   <div class="main-content">
	   <div class="container">
	        <div class="mag-inner">
				<div class="clearfix"></div>
					</div>
				 <div class="mag-bottom">
                     <h3 class="tittle bottom"><i class="glyphicon glyphicon-globe"></i>From around the World</h3>
		             <div class="grid">
						  <div class="col-md-4 m-b">
							<a href="single.html"> <figure class="effect-layla"></a>
								<img src="<?php base_url();?>assets/images/pic.jpg" alt="img25"/>
								<figcaption>
									<h4>News <span>Mag</span></h4>
									<a href="#">View more</a>
								</figcaption>			
							  </figure>
							   <div class="m-b-text">
									<a href="single.html" class="wd">Lorem ipsum dolor sit amet,interdum ullamcorper consectetur </a>
									<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
									<a class="read" href="single.html">Read More</a>
								</div>
						  </div>
						   <div class="col-md-4 m-b">
							 <figure class="effect-layla">
							<a href="single.html">	<img src="<?php base_url();?>assets/images/pic2.jpg" alt="img25"/></a>
								<figcaption>
									<h4>News <span>Mag</span></h4>
								</figcaption>			
							  </figure>
							  <div class="m-b-text">
									<a href="single.html" class="wd">Lorem ipsum dolor sit amet,interdum ullamcorper consectetur </a>
									<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
									<a class="read" href="single.html">Read More</a>
								</div>
						  </div>
						  <div class="col-md-4 m-b">
							 <figure class="effect-layla">
								<a href="single.html"><img src="<?php base_url();?>assets/images/pic3.jpg" alt="img25"/></a>
								<figcaption>
									<h4>News <span>Mag</span></h4>
								</figcaption>			
							  </figure>
							  <div class="m-b-text">
									<a href="single.html" class="wd">Lorem ipsum dolor sit amet,interdum ullamcorper consectetur </a>
									<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
									<a class="read" href="single.html">Read More</a>
								</div>
						  </div>
						 <div class="clearfix"></div>
						</div>
				  </div>
				 <!--//mag-bottom-->
	       </div>
      </div>
 <!--//end-main-->
 <?php $this->load->view('layout/footer');?>