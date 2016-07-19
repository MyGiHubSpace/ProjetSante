$(document).ready(function (){
	
	var prefixe;
	$(".icon").click(function (e){
		e.preventDefault();
		prefixe=this.id;
		$("#prefixe_button").html(prefixe);
		switch(prefixe)
		{
			case 'AS':
				$("#titre_acteur").html("Assureur");
 			break;

 			case 'MU':
				$("#titre_acteur").html("Mutuelle");
 			break;

 			case 'SP':
				$("#titre_acteur").html("Societe Privée");
 			break;

 			case 'CS':
				$("#titre_acteur").html("Centre de sante");
 			break;

 			case 'OF':
				$("#titre_acteur").html("Officine");
 			break;

 			case 'AG':
				$("#titre_acteur").html("agent de Sante");
 			break;

 			case 'PA':
				$("#titre_acteur").html("Particulier");
 			break;
			 		
	 		default:
		}
		
	});

	$(".cl_btn_valider").click(function (e){
		e.preventDefault();
		id=this.id;
		ref=$('input[name='+id+']').val();
		
		$("#result").load("http://projetsante.com/sendajaxdata", { // N'oubliez pas l'ouverture des accolades !
		 		ref : prefixe+ref,
		 		send: id,
		 		prefixe : prefixe
		 	});
		
		// $("#etatUpOrdre");fadeIn();
		
	});
	
	
	
});