// JavaScript Document

function quantite_modif(id,comment){
	if(comment=="a"){
		document.getElementById("produit_qte_"+id).value++;
	}
	else{
		if(document.getElementById("produit_qte_"+id).value>0){
			document.getElementById("produit_qte_"+id).value--;
		}
	}
}

function verif_nombre(evt){
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
	return false;
	
	return true;
}