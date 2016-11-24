<?php

	$con = mysqli_connect('localhost','root','','db_miya');

	if(mysqli_connect_errno()){
		echo "FAILED".mysqli_connect_errno();
	}