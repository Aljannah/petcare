<?php $this->load->view('layout/header');?>
  <!--/start-banner-->
  <div class="banner two">
       <div class="container">
	       <h2 class="inner-tittle">Contact</h2>
        </div>
  </div>
<!--//end-banner-->
<!--/contact-->
	 <div class="section-contact">
	    <div class="container">
				<div class="contact-main">
					<div class="col-md-6 contact-in">
						<h5>Lorem ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor.</h5>
						<p class="para1">Lorem ipsum dolor sit amet. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.  </p>
						<div class="more-address"> 
								<address>
								  <strong>Twitter, Inc.</strong><br>
								  795 Folsom Ave, Suite 600<br>
								  San Francisco, CA 94107<br>
								  <abbr title="Phone">P :</abbr> (123) 456-7890
								</address>
								<address>
								  <strong>Full Name</strong><br>
								  <a href="mailto:info@example.com">mail@example.com</a>
							   </address>
						  </div>
					</div>
					<div class="col-md-6 contact-grid">
						<form>
							<p class="your-para">Your Name :</p>
							<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
							<p class="your-para">Your Mail :</p>
							<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
							<p class="your-para">Your Message :</p>
							<textarea cols="77" rows="6" onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"></textarea>
							<div class="send">
								<input type="submit" value="Send" >
							</div>
						</form>
					</div>
						<div class="clearfix"> </div>
			      </div>
				  	<!--map-->
				 <h3 class="h-tittle">Find Us</h3>
					<div class="map">
						<iframe src="" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="map-bottom">
					<div class="col-md-4 adrs-left adrs-left">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						<p><a href="mailto:example@email.com">mail@example.com</a></p>
					</div>
					<div class="col-md-4 adrs-left adrs-middle">
						<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
						<p>+655 8654 7799 , +055 726 3845</p>
					</div>

					<div class="col-md-4 adrs-left adrs-right">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
						<p>Jatinangor - Jawa Barat, Indonesia 45363</p>
					</div>
					
					<div class="clearfix"></div>
				</div>

						<!--//map-->
	       </div>
     </div>
<!--//contact-->
<?php $this->load->view('layout/footer');?>