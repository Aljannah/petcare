<?php
session_start();
include "config.php";

if (isset($_SESSION['username'])){
?>
<!DOCTYPE HTML>
<html>
<head>
<title>PetCare.id</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/amcharts.js"></script>	
<script src="js/serial.js"></script>	
<script src="js/light.js"></script>	
<script src="js/radar.js"></script>	
<link href="css/barChart.css" rel='stylesheet' type='text/css' />
<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>

<script src="js/jquery.easydropdown.js"></script>
<script type="text/javascript">
    function startTime() {
		    var today = new Date();
		    var h = today.getHours();
		    var m = today.getMinutes();
		    var s = today.getSeconds();
		    m = checkTime(m);
		    s = checkTime(s);
		    document.getElementById('txt').innerHTML =
		    h + ":" + m + ":" + s;
		    var t = setTimeout(startTime, 500);
		}
		function checkTime(i) {
		    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
		    return i;
		}
</script>
<!--//skycons-icons-->
</head> 
<body onload="startTime();">
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
						<!--menu-right-->
						<div class="top_menu">    
							<!--/profile_details-->
								<div class="profile_details_left">
									<ul class="nofitications-dropdown">
										  <li class="dropdown note dra-down">
													   <script type="text/javascript">
																	function DropDown(el) {
																		this.dd = el;
																		this.placeholder = this.dd.children('span');
																		this.opts = this.dd.find('ul.dropdown > li');
																		this.val = '';
																		this.index = -1;
																		this.initEvents();
																	}
																	DropDown.prototype = {
																		initEvents : function() {
																			var obj = this;

																			obj.dd.on('click', function(event){
																				$(this).toggleClass('active');
																				return false;
																			});

																			obj.opts.on('click',function(){
																				var opt = $(this);
																				obj.val = opt.text();
																				obj.index = opt.index();
																				obj.placeholder.text(obj.val);
																			});
																		},
																		getValue : function() {
																			return this.val;
																		},
																		getIndex : function() {
																			return this.index;
																		}
																	}

																	$(function() {

																		var dd = new DropDown( $('#dd') );

																		$(document).click(function() {
																			// all dropdowns
																			$('.wrapper-dropdown-3').removeClass('active');
																		});

																	});

																</script>
										    </li>
							
							<li class="dropdown note">
								
														   		
							<div class="clearfix"></div>	
							</ul>
							</div>
							<div class="clearfix" style="padding-left:30px;padding-top:20px;"><p><?php echo indonesian_date()." "; ?> <span id="txt"/></p></div>	
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
					<!-- //header-ends -->
					<div class="outter-wp">
							<?php include_once "main_page.php"; ?>
				  </div>
									 <!--footer section start-->
										<footer>
										<p>&copy 2017 - Ghaziah Ahwas. </span></p>
										</footer>
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a class="sidebar-icon"><span class="fa fa-bars"></span>  </a> <a href="index.php"> <span id="logo"> <p>PetCare.id</p></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
									  <a title='Klik untuk upload/ubah foto' href="index.php?menu=upload">
									  <?php 
									  	 	$query = "SELECT * FROM customer WHERE username='".$_SESSION['username']."'";
                                      $q = mysqli_query($conn,$query);
									  $row = mysqli_fetch_assoc($q);
                                      if(!empty($row['foto'])){
										  ?>
									  		<img style="width:100px;height:100px;" src=<?php echo "images/".$row['foto'];?>></a>
									  <?php }else{ ?>
									  		<img style="width:70px;height:70px;" src="images/Nanang.jpg"></a>
									  <?php } ?>
                                     <p><?php echo $_SESSION['name'];?></p>
									<ul>
										<li><a class="tooltips" href="logout.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
									</ul>
									
									</div>
							   <!--//down-->
                           <div class="menu">
                               <ul id="menu" >
                                        <li><a href="#"><i class="lnr lnr-pencil"></i> <span>Pet Grooming</span><span class="fa fa-angle-right" style="float: right"></span></a>
											  <ul id="menu-academico-sub" >
														<li id="menu-academico-avaliacoes" ><a href="index.php?menu=groomanjing">Anjing</a></li>
														<li id="menu-academico-boletim" ><a href="index.php?menu=groomkucing">Kucing</a></li>
												</ul>
										</li>
                                        
										<li><a href="#"><i class="lnr lnr-pencil"></i> <span>Pet Shop</span><span class="fa fa-angle-right" style="float: right"></span></a>
											  <ul id="menu-academico-sub" >
														<li id="menu-academico-avaliacoes" ><a href="index.php?menu=food">Food</a></li>
														<li id="menu-academico-boletim" ><a href="index.php?menu=accesories">Accesories</a></li>
                                                  <li id="menu-academico-boletim" ><a href="index.php?menu=vitamin">Vitamin</a></li>
                                                  <li id="menu-academico-boletim" ><a href="index.php?menu=tools">Tools</a></li></ul>
										</li>
										<li><a href="index.php?menu=biodata&id=biodata"><i class="lnr lnr-book"></i> <span>My Account</span></a></li>
                                        
										</ul>
                                        
                                        
										
										
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<link rel="stylesheet" href="css/vroom.css">
<script type="text/javascript" src="js/vroom.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
}else{
	header("Location:index.html");
}

function indonesian_date ($timestamp = '', $date_format = 'l, j F Y ') {
    if (trim ($timestamp) == '')
    {
            $timestamp = time ();
    }
    elseif (!ctype_digit ($timestamp))
    {
        $timestamp = strtotime ($timestamp);
    }
    # remove S (st,nd,rd,th) there are no such things in indonesia :p
    $date_format = preg_replace ("/S/", "", $date_format);
    $pattern = array (
        '/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
        '/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
        '/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
        '/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
        '/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
        '/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
        '/April/','/June/','/July/','/August/','/September/','/October/',
        '/November/','/December/',
    );
    $replace = array ( 'Sen','Sel','Rab','Kam','Jum','Sab','Min',
        'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu',
        'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des',
        'Januari','Februari','Maret','April','Juni','Juli','Agustus','September',
        'Oktober','November','Desember',
    );
    $date = date ($date_format, $timestamp);
    $date = preg_replace ($pattern, $replace, $date);
    $date = "{$date}";
    return $date;
} 
?>