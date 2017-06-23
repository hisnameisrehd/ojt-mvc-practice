<?php

	$database = require "bootstrap.php";
	
	$query = $database->selectAll("user");
	require "index.view.php";