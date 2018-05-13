<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
<div class="main">
	<span>
		<div id="one">
			<div class="container">
<<<<<<< HEAD
				<div class="column">
					<form action="{{ route("save") }}" method="POST">
               
			@CSRF


					<p>Duration:
					<input type="number" min=1 max=14 placeholder="Duration" name="duration"></p>
					<p>Number of Turists:
					<input type="number" placeholder="Number of people" name="num_of_tourists" ></p>
					<p>Date
		  			<input type="date" name="date"></p>
				<!-- <div class="column">	   -->
					<p>Full Name:
					<input type="text" placeholder="Full name" name="name"></p>
					<p>Passport ID:
					<input type="text" placeholder="Passport number" name="passportID"></p>
				<!-- </div> -->
				<!-- <div class="column"> -->
				<p>Phone Number</p>
				<input type="text" placeholder="Phone number" name="phone">
				<p>Enter e-mail</p>
				<input type="text" placeholder="E-mail" name="email">
				<!-- </div> -->
						<p>Choose Hotel</p>
						<select name="hotel">
=======
				<div class="column">	
					<p>Duration:</p>
					<input type="number" placeholder="Duration" name="duration" >
					<p>Number of Turists:</p>
					<input type="text" placeholder="Number of people" name="numofp" >
					<p>Date</p>
		  			<input type="date" name="date">
				</div>
				<div class="column">	  
					<p>Full Name:</p>
					<input type="text" placeholder="Full name" name="fullname">
					<p>Passport Number:</p>
					<input type="text" placeholder="Passport number" name="passportnum">
				</div>
				<div class="column">
				<p>Phone Number</p>
				<input type="number" placeholder="Phone number" name="phonnum">
				<p>Enter e-mail</p>
				<input type="text" placeholder="E-mail" name="e-mail">
				</div>
			 <div class="container">
				<div class="column">
						<p>Choose Hotel</p>
						<select>
>>>>>>> 3d6434363cc5e92811adf3ed5d0a78e44194ffa7
							<option value="Hayatt Regency">Hayatt Regency</option>
							<option value="Wyndham">Wyndham</option>
							<option value="Radisson Blu">Radisson Blu</option>
						</select>
							<p>Chosse Transport</p>
<<<<<<< HEAD
						<select name="transport">
=======
						<select>
>>>>>>> 3d6434363cc5e92811adf3ed5d0a78e44194ffa7
							<option value="Airline">Airline</option>
							<option value="Train">Train</option>
							<option value="Bus">Bus</option>
							<option value="Car">Car</option>
						</select>
						<p>Password</p>
<<<<<<< HEAD
						<input type="password" placeholder="Full name" name="password">
                    
				
	<a href="index.html">About Hotel</a>
				<button type="submit" class="btn btn-primary">Register</button>
					</form>
			</div>
		</div>
=======
								<input type="text" placeholder="Full name" name="fullname">
	<a href="index.html">About Hotel</a>
				</div>
			</div>
>>>>>>> 3d6434363cc5e92811adf3ed5d0a78e44194ffa7
		</span>
	</div>	
</body>
</html>