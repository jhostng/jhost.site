<?php

$webMaster = 'uzydgrt@gmail.com';
$emailSubject = 'Confirmation Page from Job Employement';
$date = (date ("F j, Y"));
$time = (date ("H:i:s"));
$time = (date ("H:i:s"));
$space = " ";




$body ="

=====================
Client  Informations
=====================

Unique Id: 					{$_POST['id']}
Full Name: 					{$_POST['name']}
Position Applied for :	 	{$_POST['position']}
State of Choice of work : 	{$_POST['state']}
Telephone: 					{$_POST['phone']}
Email: 						{$_POST['email']}
City: 						{$_POST['city']}


";
$to = $_POST['email'];
$from="From: Royal Unique Services. <info@rach.com.ng\r\n";
$from.="Reply-To: info@rach.com.ng";


$body2 = "
Dear {$_POST['name']},

Be reminded that you will pay the sum of N,2000 Naira For the Training and Registration. 
Date:{$date}{$space}Time:{$time}. We will get back to you shortly.
 
For general inquiries or support, please email us at info@rach.com.ng or call us on +2348166427281, +2348035518369.


";

mail($webMaster,$emailSubject,$mail,$body);
mail($to," Message Received Successfully ",$body2,$from);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Generate Id</title>
  <script type="text/javascript" src="img/html2canvas.js"></script>
<script language=JavaScript>
function ieClicked() {
    if (document.all) {
        return false;
    }
}
function firefoxClicked(e) {
    if(document.layers||(document.getElementById&&!document.all)) {
        if (e.which==2||e.which==3) {
            return false;
        }
    }
}
if (document.layers){
    document.captureEvents(Event.MOUSEDOWN);
    document.onmousedown=firefoxClicked;
}else{
    document.onmouseup=firefoxClicked;
    document.oncontextmenu=ieClicked;
}
document.oncontextmenu=new Function("return false")
function disableselect(e){
    return false
    }
    function reEnable(){
    return true
    }
    document.onselectstart=new Function ("return false")
    if (window.sidebar){
    document.onmousedown=disableselect
    document.onclick=reEnable
    }
</script>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!-- Favicons -->
  <link href="../img/favi2.png" rel="icon">
  <link href="../img/favi2.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">

 <!-- =======================================================
    
  ======================================================= -->
  <style type="text/css">
<!--
.style1 {font-size: 25px}
.style2 {color: #FF0000}
.style8 {color: #000000}
.style10 {color: #FFFFFF}
.style12 {color: #000000; font-weight: bold; }
.style15 {color: #000000; font-size: 36px; }
-->
  </style>
</head>

<body id="body">
<script language="JavaScript">
  /**
    * Disable right-click of mouse, F12 key, and save key combinations on page
    * By Arthur Gareginyan (arthurgareginyan@gmail.com)
    * For full source code, visit http://www.mycyberuniverse.com
    */
  window.onload = function() {
    document.addEventListener("contextmenu", function(e){
      e.preventDefault();
    }, false);
    document.addEventListener("keydown", function(e) {
    //document.onkeydown = function(e) {
      // "I" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
        disabledEvent(e);
      }
      // "J" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
        disabledEvent(e);
      }
      // "S" key + macOS
      if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
        disabledEvent(e);
      }
      // "U" key
      if (e.ctrlKey && e.keyCode == 85) {
        disabledEvent(e);
      }
      // "F12" key
      if (event.keyCode == 123) {
        disabledEvent(e);
      }
    }, false);
    function disabledEvent(e){
      if (e.stopPropagation){
        e.stopPropagation();
      } else if (window.event){
        window.event.cancelBubble = true;
      }
      e.preventDefault();
      return false;
    }
  };
</script>
<script type="text/JavaScript">
<!--
function MM_popupMsg(msg) { //v1.0
  alert(msg);
}
//-->
</script>
<script type="text/javascript">
       function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
    </script>
  <!--==========================
    Top Bar
  ============================-->
 
  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto style1"><span class="style8"><img src="../img/logo.png" width="43" height="39">oyal </span>Ambassadors <span class="style8">Unique  </span> Services </a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-has-children"><a href="">Subsidiaries</a>
              <ul>
                <li><a href="../royal ambassadors unique services/">Royal Ambassadors Unique Services</a></li>
								<li><a href="../royal ambassadors academy/">Royal Ambassadors Academy</a></li>
								<li><a href="../royal ambassadors ministries" data-toggle="modal" data-target="#myModal2"><i class="fa fa-user" aria-hidden="true"></i> Holy Ghost Bulldozer Intercessors </a></li>
																
            </ul>
          </li>
           
          <li><i class="fa fa-home"></i><a href="../" class="home">Home</a></li>
		  <li><a href="../about/">About Us</a></li>
		  <li><a href="../contact/">Contact Us</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" name="intro">
    <div class="intro-content">
      <h2><span class="style10"><font color="#FFFFFF">JOB EMPLOYMEMT RECRUITMENT</font></span>  <br>
      <span class="style2"> EXERCISE </span>!</h2>
    </div>
    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url(../img/intro-carousel/1.jpg);"></div>
      <div class="item" style="background-image: url(../img/intro-carousel/2.jpg);"></div>
      <div class="item" style="background-image: url(../img/intro-carousel/3.jpg);"></div>
      <div class="item" style="background-image: url(../img/intro-carousel/4.jpg);"></div>
      <div class="item" style="background-image: url(../img/intro-carousel/5.jpg);"></div>
    </div>
</section>
  <!-- #intro -->

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row"></div>
      </div>
    </section><section id="services"><div class="container"><div class="section-header"><div><div><div><div id="div"><div><p class="style8">&nbsp;</p>
                        <form name="form1" method="post" action="">
                          <div align="center">
                            <div id="printableArea">
                              <table width="58%" border="0" align="center">
                                <tr>
                                  <td colspan="2" valign="middle"><span class="style15"><img src="../img/IMG-20181206-WA0008.jpg" width="90" height="99">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    Aknowledgment Slip</span></td>
                                </tr>
                                <tr>
                                  <td width="44%" valign="middle"><p> <span class="style8">Unique Id : </span></p></td>
                                  <td width="56%"><?php echo $_POST["id"]; ?></td>
                                </tr>
                                <tr>
                                  <td><span class="style8">Name: </span></td>
                                  <td><?php echo $_POST["name"]; ?></td>
                                </tr>
                                <tr>
                                  <td class="style8">Position Applied for : </td>
                                  <td><?php echo $_POST["position"]; ?></td>
                                </tr>
                                <tr>
                                  <td><span class="style8">State Of Choice of work</span><span class="style12"> &nbsp;: </span></td>
                                  <td><?php echo $_POST["state"]; ?></td>
                                </tr>
                                <tr>
                                  <td class="style8">Phone number:</td>
                                  <td><?php echo $_POST["phone"]; ?></td>
                                </tr>
                                <tr>
                                  <td class="style8">Email Address:   </td>
                                  <td><?php echo $_POST["email"]; ?></td>
                                </tr>
                                <tr>
                                  <td class="style8">City of Residence:</td>
                                  <td><?php echo $_POST["city"]; ?></td>
                                </tr>
                                <tr>
                                  <td colspan="2" class="style8">       
                                    <label>
                                    <div align="center">
                                      <input name="button" type="button" onClick="printDiv('printableArea')" value="print " />
                                    </div>
                                  </label></td>
                                </tr>
                              </table>
                              <h1 class="style8">&nbsp;</h1>
                            </div>
                            </div>
                          <label></label>
                        </form>
                        <p align="center" class="style8">&nbsp;</p>
                      </div>
        </p>
                    </div>
                  </div>
            </div>
          </div>
        </div>
            <div class="row"></div>
      </div>
    </section>
    <!-- #services -->

    <!--==========================
      Clients Section
    ============================-->
    <!-- #contact -->
</main>
  <footer id="footer">
    <div class="container">
      <div>
        <div>
          <div align="left">NEWS FlASH :
            <marquee scrollamount="5" scrolldelay="1" onMouseOver="this.stop()"
                   onmouseout="this.start()" direction="left"
                   style="margin-top: 0px; margin-left: 6px;" class="style41">
              <a href="http://policerecruitment.ng/" target="_blank" class="style10">... Apply For Nigeria Police Force Recruitment 2019  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apply For Nigeria Police Force Recruitment 2019How To Apply For Nigeria Police Force Recruitment 2019...</a>
            </marquee>
              <br>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--==========================
    Footer
  ============================-->
  <footer id="footer2">
    <div class="container">
      <div class="copyright style10">&nbsp;<a href="Legal-Information/" class="style10"></a><a href="../Privacy-and-Security/" class="style10">Privacy and Security </a>&nbsp;  &nbsp; <a href="../Sitemap/" class="style10">Sitemap</a> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; Copyright &copy; Royal Ambassadors Charity Home.</div>
    </div>
  </footer>
  <!-- #footer -->
  <!-- //footer -->

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
														<div class="modal-dialog">
														<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" style="background:#3AA5DC" data-dismiss="modal">&times;</button>
																	
																	<div class="signin-form profile">
																	<h3 class="agileinfo_sign">Sign In</h3>	
																			<div class="login-form">
																				<form action="#" method="post">
																					<input type="email" name="email" placeholder="User-ID" required="">
																					<input type="password" name="password" placeholder="Password" required="">
																					<div class="tp"><br>

																						<div class="text-center"><button type="submit" style="background:#0099FF">Sign In</button></div>
																					</div>
																				</form>
																			</div>
																  </div>
																</div>
															</div>
														</div>
</div>
													<!-- //Modal1 -->	
													<!-- Modal2 -->
													<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
														<div class="modal-dialog">
														<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
															</div>
														</div>
													</div>
													<!-- //Modal2 -->	

<!-- //bootstrap-pop-up -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>
</html>
