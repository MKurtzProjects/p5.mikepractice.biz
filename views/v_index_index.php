<!DOCTYPE html>
<html>
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />   
	    
    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.js"></script>
	</head>

	<body>

		<?php if ($user): ?>
			
			<div class="right">

				<ul id="action_list">
					<li> <a href='/problems'>Try some problems</a> </li>
				</ul>


			</div>

			<div class="left">
				<h1> Welcome back, <?php echo $user->first_name; ?>!</h1>
			</div>


		<?php else: ?>
			<div class = "right">
				<h2> Sign In </h2>
				

				<form method='POST' action='/users/p_login'>

				    Email<br>
				    <input type='text' name='email'>

				    <br><br>

				    Password<br>
				    <input type='password' name='password'>

				    <br><br>



				    <?php if(isset($error)): ?>
				        <div class='error'>
				            Login failed. Please double check your email and password.
				        </div>
				        <br>
				    <?php endif; ?>

				    <input type='submit' value='Log in'>

				</form>



			</div>

			<div class = "left">
		    	<h2> Hone your math skills </h2>
		    	<h2> Try the same problem over and over and over </h2>
		    	<h2> Track your progress </h2>
		    	
			</div>


		<?php endif; ?>
	</body>
</html>

