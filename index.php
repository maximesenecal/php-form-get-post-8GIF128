<?php
include 'header.php';

	/***Code à écrire [3]***/
	if (isset($_COOKIE["greenshop"])) 
	{
		include 'liste_produit.php';
	}
	else
	{
		include 'identification.php';
	}


include 'footer.php';	
?>