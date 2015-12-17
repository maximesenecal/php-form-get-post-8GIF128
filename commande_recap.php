<?php
	include 'header.php';

	$produit_nom_1 = $_POST['produit_nom_1'];
	$produit_prix_1 = $_POST['produit_prix_1'];
	$produit_qte_1 = $_POST['produit_qte_1'];
	
	$produit_nom_2 = $_POST['produit_nom_2'];
	$produit_prix_2 = $_POST['produit_prix_2'];
	$produit_qte_2 = $_POST['produit_qte_2'];
	
	$produit_nom_3 = $_POST['produit_nom_3'];
	$produit_prix_3 = $_POST['produit_prix_3'];
	$produit_qte_3 = $_POST['produit_qte_3'];
	
	$produit_nom_4 = $_POST['produit_nom_4'];
	$produit_prix_4 = $_POST['produit_prix_4'];
	$produit_qte_4 = $_POST['produit_qte_4'];
	
	$produit_nom_5 = $_POST['produit_nom_5'];
	$produit_prix_5 = $_POST['produit_prix_5'];
	$produit_qte_5 = $_POST['produit_qte_5'];
	
	

	if($produit_qte_1!="0" || $produit_qte_2!="0" || $produit_qte_3!="0" || $produit_qte_4!="0" || $produit_qte_5!="0")
	{
		$file = fopen("liste_commandes.txt", "w"); // ouvre le fichier
		fwrite($file, "Commande de : ");
		$t=$_COOKIE["greenshop"];
		fwrite($file, $t); 
		fwrite($file, " ");
		
		echo"<h1>R&eacutecapitulatif de votre commande</h1>";
		echo "<table id=\"produit_liste\"> 
		 <tr>
            <div id=commande_recap><th>Nom du produit</th></div>
      		<th>Quantit&eacute</th>
            <th>Prix unitaire</th>
            <th>Prix total</th> 
        <tr> ";
		
		if($produit_qte_1!="0")
		{
			echo"<tr><td>";
			echo $produit_nom_1;
			echo"</td><td>";
			echo $produit_qte_1;
			echo"</td><td>";
			echo $produit_prix_1;
			echo"</td><td>";
			$prix=$produit_qte_1*$produit_prix_1;
			echo $prix;
			echo"</td></td>";
			
			fwrite($file, $produit_nom_1); 
			fwrite($file, " ");
			fwrite($file, $produit_prix_1); 
			fwrite($file, " ");
		}
		if($produit_qte_2!="0")
		{
			echo"<tr><td>";
			echo $produit_nom_2;
			echo"</td><td>";
			echo $produit_qte_2;
			echo"</td><td>";
			echo $produit_prix_2;
			echo"</td><td>";
			$prix=$produit_qte_2*$produit_prix_2;
			echo $prix;
			echo"</td></td>";
			fwrite($file, $produit_nom_2); 
			fwrite($file, " ");
			fwrite($file, $produit_prix_2); 
			fwrite($file, " ");
		}
		if($produit_qte_3!="0")
		{
			echo"<tr><td>";
			echo $produit_nom_3;
			echo"</td><td>";
			echo $produit_qte_3;
			echo"</td><td>";
			echo $produit_prix_3;
			echo"</td><td>";
			$prix=$produit_qte_3*$produit_prix_3;
			echo $prix;
			echo"</td></td>";
			fwrite($file, $produit_nom_3); 
			fwrite($file, " ");
			fwrite($file, $produit_prix_3); 
			fwrite($file, " ");
		}
		if($produit_qte_4!="0")
		{
			echo"<tr><td>";
			echo $produit_nom_4;
			echo"</td><td>";
			echo $produit_qte_4;
			echo"</td><td>";
			echo $produit_prix_4;
			echo"</td><td>";
			$prix=$produit_qte_4*$produit_prix_4;
			echo $prix;
			echo"</td></td>";
			fwrite($file, $produit_nom_4); 
			fwrite($file, " ");
			fwrite($file, $produit_prix_4); 
			fwrite($file, " ");
		}
		if($produit_qte_5!="0")
		{
			echo"<tr><td>";
			echo $produit_nom_5;
			echo"</td><td>";
			echo $produit_qte_5;
			echo"</td><td>";
			echo $produit_prix_5;
			echo"</td><td>";
			$prix=$produit_qte_5*$produit_prix_5;
			echo $prix;
			echo"</td></td>";
			fwrite($file, $produit_nom_5); 
			fwrite($file, " ");
			fwrite($file, $produit_prix_5); 
			fwrite($file, " ");
		}
		
		$prix=$produit_qte_1*$produit_prix_1+$produit_qte_2*$produit_prix_2+$produit_qte_3*$produit_prix_3+$produit_qte_4*$produit_prix_4+$produit_qte_5*$produit_prix_5;
		echo"<tr><td>Total</td><td></td><td></td><td>";
		echo $prix;
		echo "</td><tr></table>";
		fwrite($file, "Total : ");
		fwrite($file, $prix); 
		fwrite($file, " ");
		fclose($file);
	}
	else
	{
		echo"<div id=bloc><p>Vous n’avez rien commandé.</p></div>";
		
	}
	
	include 'footer.php';
?>
    
    