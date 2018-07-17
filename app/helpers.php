<?php
	if(! function_exists('page_title')){

		function  page_title($title){
			
			$baseTitle='Laracarte - List of Artisan';

			if($title !='')
				return $title.' | '.$baseTitle;
			else
				return $baseTitle;
		}
	}