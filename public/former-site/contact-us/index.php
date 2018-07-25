<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Contact Us</title>
		<meta name="description" content="" />
		<meta name="author" content="Abayomi Popoola" />
		<link rel="shortcut icon" href="../favicon.png">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,500|Roboto+Mono" rel="stylesheet">
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/demo.css" />
		<link rel="stylesheet" type="text/css" href="../css/pieces.css" />
		<script>document.documentElement.className = 'js';</script>
	</head>
	<body>
		<header>
			<div id="logo"><a href="../" target="_self"><img src="../img/logo.png" style="width: 150px; height: auto;"></a></div>

			<!-- <div id="cd-hamburger-menu"><a class="cd-img-replace" href="#0">Menu</a></div> -->
			<div id="cd-hamburger-menu"><a id="nav-toggle" href="#"><span></span></a></div>
			
		</header>
		<main>
			<div class="content">
				<div class="content__inner">
					<div class="parent-content">
						<div class="main_content" id="aa-contact">
					        <div class="aa-contact-area">
					            <div class="aa-contact-bottom">
					              <div class="aa-title">
					                <?php
					                  if(isset($_POST['submit-butt'])) {

					                      $author = $_POST['author'];
					                      $email = $_POST['email'];
					                      $subject = $_POST['subject'];
					                      $comment = $_POST['comment'];
					                      $radio_sel = $_POST['radio_sel'];

					                      if( $author == "" || $email == "" ){
					                          echo "<h4 align='center' style='color: #800000'>Fields Left Blank</h4>", "<p align='center' style='color: #800000'>Some Fields were left blank. Please fill up required fields.</p>";
					                      } else {
					                      	   if ($radio_sel == "investors" || $radio_sel == "proposal") {
					                      	   	$to = "gbenga.t@alanandgrant.com";
					                      	   }else{
					                      	   	$to = "info@alanandgrant.com";
					                      	   }
					                           
					                           $message = "<p>".$comment."</p>";
					                           
					                           $header = "From:".$email." \r\n";
					                           $header .= "MIME-Version: 1.0\r\n";
					                           $header .= "Content-type: text/html\r\n";
					                           
					                           $retval = mail ($to,$subject,$message,$header);
					                           
					                           if( $retval == true ) {
					                              $succMsg = "<h3 align='center'>Thanks you for your mail!</h3><p align='center'>We will get back to you soon.</p>";
					                              echo '
					                              <div class="form-group">
					                              <div class="alert alert-success">
					                              <span class="glyphicon glyphicon-ok-sign">&nbsp;</span>'.$succMsg.'
					                              </div>
					                              </div>
					                          ';
					                           }
					                      }
					                    }   
					                ?>
					                <span></span>
					                <h1 style="font-size: 28px; font-weight: 700; margin: 0;">Get a hold of us</h1>
					              </div>
					              <div class="aa-contact-form">
					                <form class="contactform" action='contact.php' method='post' accept-charset='UTF-8'>    
					                  <div class="radio-cl">
					                  	<ul>
										  <li>
										    <input type="radio" id="f-option" name="radio_sel" value="enquiry">
										    <label for="f-option">Enquiry</label>
										    <div class="check"></div>
										  </li>
										  
										  <li>
										    <input type="radio" id="s-option" name="radio_sel" value="investors">
										    <label for="s-option">Investors</label>
										    <div class="check"><div class="inside"></div></div>
										  </li>
										  
										  <li>
										    <input type="radio" id="t-option" name="radio_sel" value="proposal">
										    <label for="t-option">Request For Proposal</label>
										    <div class="check"><div class="inside"></div></div>
										  </li>
										</ul> 
					                  </div>             
					                  <p class="comment-form-author">
					                    <label for="author">Name/Company <span class="required">*</span></label>
					                    <input type="text" name="author" value="" size="30" required="required">
					                  </p>
					                  <p class="comment-form-email">
					                    <label for="email">Email <span class="required">*</span></label>
					                    <input type="email" name="email" value="" aria-required="true" required="required">
					                  </p>
					                  <p class="comment-form-url">
					                    <label for="subject">Subject</label>
					                    <input type="text" name="subject">  
					                  </p>
					                  <p class="comment-form-comment">
					                    <label for="comment">Message</label>
					                    <textarea name="comment" cols="45" rows="8" aria-required="true" required="required"></textarea>
					                  </p>                
					                  <p class="form-submit" style="color: #fff; text-align: center;">
					                    <input type="submit" name="submit-butt" class="aa-browse-btn" value="Send Message">
					                  </p>        
					                </form>
					              </div>
					            </div>
					          </div>
						</div>
						<div id="main-nav" class="menu">
							<ul class="menu__inner">
								<li class="menu__item"><a class="menu__link" data-switch href="../">About Us</a></li>
								<li class="menu__item"><a class="menu__link" data-switch href="../clientele">Clientele</a></li>
								<li class="menu__item"><a class="menu__link" data-switch href="../portfolio">Portfolio</a></li>
								<li class="menu__item"><a class="menu__link" data-switch href="../insights">Insights</a></li>
								<li class="menu__item"><a class="menu__link active" data-switch href="./">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div style="clear: both"></div>
				</div><!-- /content__inner-->
			</div><!-- /content -->
		</main>
		<div id="cd-shadow-layer"></div>
		<div class="container-fluid section">
			<div class="row">
			  <div style="text-align: center;">
			  	<h4>CONTACT US</h4>
				<p>ALAN & GRANT BUSINESS SOLUTIONS.<br>
				Lead Consultant - gbenga.t@alanandgrant.com<br>
				General Enquiries - info@alanandgrant.com<br>
				www.alanandgrant.com<br>
				09091648177</p>
				<p>
		          <!-- Add font awesome icons -->
		          <a href="contact-us" target="_blank" class="fa fa-envelope"></a>
		          <a href="https://www.instagram.com/alanandgrant.ng" target="_blank" class="fa fa-instagram"></a>
		          <a href="https://www.facebook.com/alanandgrant/" target="_blank" class="fa fa-facebook"></a>
		          <a href="https://twitter.com/alanandgrantng" target="_blank" class="fa fa-twitter"></a>
		        </p>
			  </div>
			</div>
		</div>
		<div class="content__bottom">
			<div class="switch mode mode--design">
				<a class="switch__item"><span class="mode mode--design" style="color: #fff;font-size: 12px; left: 2.4em;" data-switch data-glitch>&copy; <?php echo date('Y'); ?> Alan&Grant</span></a>
			</div>
		</div>
		<script type="text/javascript" src="../js/jquery-1.11.0.min.js"></script>
		<script src="../js/imagesloaded.pkgd.min.js"></script>
		<script src="../js/main.js"></script>
	</body>
</html>
