<?php
@include_once '../app/views/inc/header.php';
?>
<div class="products container mt-5">
	<h1 class="text-dark text-center">View All The Baby <?=$data['param']?></h1>
	<div class="row">
	<?php
		foreach($data['products'] as $key=>$product) {
	?>		
			<div class="col-md-3 text-center mb-1">
				<div class="card mr-1">
				  <img class="card-img-top" src="/Sales&Marketing/public/assets/images/<?=$product->image?>" alt="Card image cap">
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
<?php
@include_once '../app/views/inc/footer.php';