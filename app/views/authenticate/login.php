<?php
	session_start();
	
	$message = '';
	
	if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		if($username!=='' && $password!=='') {

			require_once('../app/core/Model.php');
			$model = new Model();
			$users = $model::loginUser($username, $password);
			
			// if() {

			// }
		} else {
			$message = 'Please insert username and password.';
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kid World</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
	<link rel="stylesheet" href="/Sales&Marketing/public/css/style.css" />
</head>
<body>
	<div class="login container d-flex flex-column align-items-center justify-content-center" style="min-height: 100vh;">
		<h1 class="text-dark text-center mb-5">LOGIN</h1>
		<div class="row" style="width: 30%;">
			<form action="" method="POST" style="width: 100%;">
				<div class="text-danger">
					<h6><?= $message ?></h6>
				</div>
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="username" id="username" class="form-control" />
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control" />
				</div>
				<button class="btn btn-primary float-right" name="submit" value="login">LOGIN</button>
			</form>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/6eee881363.js"></script>
</body>
</html>