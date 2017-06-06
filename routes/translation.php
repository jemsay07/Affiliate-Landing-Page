<?php
Event::listen('routes.translation', function($locale, $attributes){
	// Do your magic

	return $attributes;
});