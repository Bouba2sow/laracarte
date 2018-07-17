<?php
	if(! function_exists('page_title')){

		function  page_title($title){
			
			$baseTitle= config('app.name'). ' - List of Artisan';

			if($title !='')
				return $title.' | '.$baseTitle;
			else
				return $baseTitle;
		}
	}

	if(! function_exists('setActiveRoute')){

		function  setActiveRoute($route){
			
			return Route::is($route) ? 'active' :'';
		}
	}