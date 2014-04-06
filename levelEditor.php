<?php

	var command = null;
	if(array_key_exists('c',$_POST)){
		var command = $_POST['c'];
	}
	
	if(command === 'load'){
		if(array_key_exists('map',$_POST)){
			var command = $_POST['map'];
			
		}else{
			throw new Exception('No such Map to load.');
		}
	}