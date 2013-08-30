<?php

	require_once("uClassify.php");
	
	$uclassify = new uClassify();
	
	// Set these values here
	$uclassify->setReadApiKey('read apikey pepo');
	$uclassify->setWriteApiKey('write api key pepo');

	echo "<h1> uClassify Examples (See source code for usage) </h1> <hr />";
	
	try {
		$t = array('Asus keren', 'smartfren lelet');
		
		echo "<h1>Read Calls</h1><hr />";
		echo "<h1>classify</h1>";
		$resp = $uclassify->classify('smartfren lelet', 'Sentiment', 'uClassify');
		echo "<pre>";
		print_r($resp);
		echo "</pre>";
		
		
	} catch (uClassifyException $e) {
		die($e->getMessage());
	}
	
?>
