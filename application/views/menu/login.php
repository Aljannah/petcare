 <?php $this->load->view('layout/header')?>
 <script type ="text/javascript">
			function cekform(){
				if(!$("#username").val())
				{
					alert('Maaf username tidak boleh kosong');
					$("#username").focus();
					return false;
				}
				if(!$("#password").val())
				{
					alert('Maaf password tidak boleh kosong');
					$("#password").focus();
					return false;
				}	
			}
		</script>

  <!--/start-banner-->
  <div class="banner two">
       <div class="container">
	       <h2 class="inner-tittle">Silahkan Login</h2>
        </div>
  </div>			
	 <div class="sign_main">
			<h4 class="side">Login</h4>
			<div class="sign_up" align="center">
				<p class="sign">Login Sebagai Mitra atau Customer.</p>
				<form method="post" action="<?php echo base_url();?>index.php/con_login/cek_login" onsubmit="return cekform();">
					<input type="text" class="text" placeholder="Username" name="username" id="username" value="<?php echo set_value('username', '') ?>">
					</br>
					<input type="password" class="password" placeholder="Password" name="password" id="password" >
					<br>
					<a href="<?php echo base_url();?>index.php/con_home/register"><i><u>User Sign Up </u></i></a>
					<?php
					$info = $this->session->flashdata('info');
					if(!empty($info)){
						echo $info;	
					}
					?>
					<input type="submit" value="submit" >
				</form>
				<!--<p class="spam">We do not spam. We value your privacy!</p>-->
			</div>
	</div>

 <!--/start-footer-section-->
<?php $this->load->view('layout/footer')?>