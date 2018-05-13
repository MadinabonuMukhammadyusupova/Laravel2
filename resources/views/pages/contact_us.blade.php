<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Travel Uzbekistan - Contact us</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="libs/css/font-awesome.min.css"> -->
	<link rel="stylesheet" href="libs/Lato/css/font.css">
	<link rel="stylesheet" href="libs/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="libs/js/jquery-3.2.1.min.js"></script>
	<script src="libs/js/popper.min.js"></script>
	<script src="libs/js/bootstrap.min.js"></script>
	<script src="libs/js/bootstrap.bundle.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<div class="main">

		<header class="header">
			<div class="wrapper">
				<nav class="nav">
					<div class="logo">
						<a href="index.html"><img src="img/logo.png" alt="logo"></a>
					</div>
					<!-- ul.menu>li*3>a[#] -->
					<ul class="menu">
                        <li>
                             <a href="#" data-toggle="modal" data-target="#exampleModal">log in</a>
                         </li>
					</ul>
				</nav>
			</div>
			<div class="reg_form col-lg-5 col-sm-10 mx-auto pb-5">
					<h3 class="pb-3 align-left mbr-fonts-style display-2">
							Drop a Line
						</h2>
						<div class="icon-block pb-3">
								<span class="icon-block__icon">
									<span class="mbri-letter mbr-iconfont" media-simple="true"></span>
								</span>
								<h4 class="icon-block__title align-left mbr-fonts-style display-5">
									Don't hesitate to contact us
								</h4>
							</div>
							<div class="icon-contacts pb-3">
									<h5 class="align-left mbr-fonts-style display-7">
										Ready for offers and cooperation
									</h5>
									<p class="mbr-text align-left mbr-fonts-style display-7">
										Phone: +998 99 999 88 77 <br>
										Email: travel@gmail.com
									</p>
								</div>



					<form id="registration_form" class="form-horizontal" action='' method="POST">
						<div class="form-group row">
							<!-- Username -->
							<label class="col-2 col-form-label"for="fullname">Fullname</label>
							<div class="col-10">
								<input type="text" id="fullname" name="fullname" placeholder="Full Name" class="form-control" required>
							</div>
						</div>
	
						<div class="form-group row">
							<!-- E-mail -->
							<label class="col-2 col-form-label" for="email">E-mail</label>
							<div class="col-10">
								<input type="text" id="email" name="email" placeholder="e@mail.com" class="form-control" required>
							</div>
						</div>

						<div class="form-group row">
								<!-- Message -->
								<label class="col-2 col-form-label"for="message">Message</label>
								<div class="col-10">
									<textarea type="text" id="message" name="message" placeholder="Message" class="form-control" required></textarea>
								</div>
							</div>
	
						
	
						<div class="control-group">
							<!-- Button -->
							<div class="controls">
								<button type="submit" class="btn btn-success float-right">Send</button>
							</div>
						</div>
					</form>
				</div>	
		</header>

		<footer class="footer">
			<div class="wrapper">
				<p class="text_footer">Copyright © 2018 - Travel Uzbekistan</p>
			</div>
		</footer>
	</div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Log In</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
					<div class="modal-body">
						<form action="">
							<div class="container">
								<label for="uname"><b>Username</b></label>
								<input type="text" placeholder="Enter Username" name="uname" required>
								  
								<label for="psw"><b>Password</b></label>
								<input type="password" placeholder="Enter Password" name="psw" required>
								
								<div class="buttons">
									<button type="submit" class="btn btn-success btn-bg">Login</button>
									<a href="register.html" class="btn btn-success btn-bg float-right">Register</a>
								</div>
								

								<div class="brain">
									<label>
										<input type="checkbox" checked="checked" name="remember"> Remember me
									</label>
									<span class="psw">Forgot <a href="#">password?</a></span>
								</div>
								
							</div>
						</form>
					</div>	
					<div class="modal-footer" style="background-color:#f1f1f1">
							<button type="button" data-dismiss="modal" class="cancelbtn float-left">Cancel</button>
							
					</div>				
				</div>
			</div>
		</div>


</body>
</html>