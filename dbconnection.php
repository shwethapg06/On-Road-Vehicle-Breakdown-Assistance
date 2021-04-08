<?php
	$conn = mysqli_connect('localhost', 'Shwetha', 'GodZilla@123', 'eworkshop');

	if(!$conn){
		echo "Connection error: ".mysqli_connect_error();
	}