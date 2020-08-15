<?php
	Route::set('index.php', function() {
		Index::createView('Index');
	});

	Route::set('about-us', function() {
		$tests = AboutUs::test(); 
		AboutUs::CreateView('AboutUs', ['tests' => $tests]);
	});
