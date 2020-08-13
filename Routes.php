<?php
	Route::set('index.php', function() {
		Index::createView('Index');
	});

	Route::set('about-us', function() {
		AboutUs::CreateView('AboutUs');
		$tests = AboutUs::test();
		print_r($tests);
	});