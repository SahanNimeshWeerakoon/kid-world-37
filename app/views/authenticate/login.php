<?php
@include_once '../app/views/inc/header.php';
?>
<div class="login container mt-5">
	<h1 class="text-dark text-center">LOGIN</h1>
	<div class="row">
		<form action="" method="POST">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" />
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" />
			</div>
			<button class="btn btn-primary">LOGIN</button>
		</form>
	</div>
</div>
<?php
@include_once '../app/views/inc/footer.php';