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
							<option value="Hayatt Regency">Hayatt Regency</option>
							<option value="Wyndham">Wyndham</option>
							<option value="Radisson Blu">Radisson Blu</option>
						</select>
							<p>Chosse Transport</p>
						<select name="transport">
							<option value="Airline">Airline</option>
							<option value="Train">Train</option>
							<option value="Bus">Bus</option>
							<option value="Car">Car</option>
						</select>
						<p>Password</p>
						<input type="password" placeholder="Full name" name="password">
                    
				
	<a href="index.html">About Hotel</a>
				<button type="submit" class="btn btn-primary">Register</button>
					</form>
			</div>
		</div>
		</span>
	</div>	
</body>
</html>