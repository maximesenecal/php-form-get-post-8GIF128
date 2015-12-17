<?php

	if (isset($_GET['deconection']) ) {
  		$val=$_GET['deconection'];
		if ($val=="deconection")
		{
			setcookie ("greenshop", "", time() - 3600);
		}
		include 'index.php';
	}
	
	
	if (isset($_GET['identification_nom'])) {
  		$val=$_GET['identification_nom'];
  		echo $val;
		if ($val!="")
		{
			setcookie('greenshop', $val, (time() + 3600));
		}
			include 'index.php';
	}
	
	
		
	
		
	

	/***Code à écrire [2]***/


	/***Code à écrire []***/




?>