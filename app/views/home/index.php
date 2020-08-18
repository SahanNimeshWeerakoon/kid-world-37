<?php
@include_once '../app/views/inc/header.php';
?>
<div class="home">
	<div class="banner d-flex">
		<div></div>
		<div class="d-flex justify-content-center">
			<h1 class="text-primary">Welcome To Kid World</h1>
			<h3>Every Thing Your Kid Needs</h3>
			<p>Come visit our site to buy stupid stuff for your little rascals</p>
			<span>
				<a href="" class="btn btn-sm btn-outline-primary px-5 py-2">Shop</a>
				<a href="" class="btn btn-sm btn-outline-secondary px-5 py-2">New Items</a>
			</span>
		</div>
	</div>
	<div class="about container mt-5">
		<h1 class="text-center mb-3 text-primary">About Us</h1>
		<div class="d-flex justify-content-center">
			<div class="col-md-3 bg-primary mx-2 text-center">
				<h4 class="text-light mt-1 mb-2">Who we are</h4>
				<p class="text-light">Monawa hari meewata adaala me size ekata asannayen pirena tikak dala mata kiyanna. mama upload karannan. Monawa hari meewata adaala me size ekata asannayen pirena tikak dala mata kiyanna. mama upload karannan</p>
			</div>
			<div class="col-md-3 bg-success mx-2 text-center">
				<h4 class="text-light mt-1 mb-2">What we do</h4>
				<p class="text-light">Monawa hari meewata adaala me size ekata asannayen pirena tikak dala mata kiyanna. mama upload karannan. Monawa hari meewata adaala me size ekata asannayen pirena tikak dala mata kiyanna. mama upload karannan</p>
			</div>
			<div class="col-md-3 bg-warning mx-2 text-center">
				<h4 class="text-light mt-1 mb-2">Wow to use the site</h4>
				<p class="text-light">Monawa hari meewata adaala me size ekata asannayen pirena tikak dala mata kiyanna. mama upload karannan. Monawa hari meewata adaala me size ekata asannayen pirena tikak dala mata kiyanna. mama upload karannan</p>
			</div>
		</div>
	</div>
	<div class="best-selling container mt-5">
		<h1 class="text-center mb-3 text-primary">About Us</h1>
		<div class="row">
		<?php
			foreach($data['products'] as $key=>$product) {
		?>		
				<div class="col-md-3 text-center mb-1">
					<div class="card mr-1">
					  <img class="card-img-top" src="./assets/images/<?=$product->image?>" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title"><?= $product->title ?></h5>
					    <p class="card-text">
							<?= $product->description ?>
					    </p>
					    <a href="#" class="btn btn-primary">VIEW PRODUCT</a>
					  </div>
					</div>
				</div>
		<?php		
			}
		?>
		</div>
	</div>
	<div class="container contact mt-5">
		<h1 class="text-center mb-2">If you have anny issues feel free to contact us</h1>
		<div class="row text-center mt-5">
			<div class="col-md-4">
				<i class="fa fa-phone text-secondary" aria-hidden="true"></i>
				<h4 class="">Call</h4>
				<a href="tel:+94711231234" class="text-primary">+94711231234</a>
			</div>
			<div class="col-md-4">
				<i class="fa fa-envelope text-secondary" aria-hidden="true"></i>
				<h4 class="">Email</h4>
				<a href="mailto:admin@kidworld.com" class="text-primary">admin@kidworld.com</a>
			</div>
			<div class="col-md-4">
				<i class="fa fa-map-marker text-secondary" aria-hidden="true"></i>
				<h4 class="">Address</h4>
				<a class="text-primary">123, Some street, Colombo 10</a>
			</div>
		</div>
	</div>
</div>
<?php
@include_once '../app/views/inc/footer.php';