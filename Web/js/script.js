var $ = jQuery.noConflict();



// Progress Bar

$(function () {

    $('.btn-show').click(function (event) {
        event.preventDefault();
        var target = $(this).attr('href');
        $(target).toggleClass('hidden show');
        
        
    });

});

$(".icon").click(function(){
	$(".section-modal").remove();

});


$(function () {

	var liste = $(".compte");

    liste.change(function (event) {
        event.preventDefault();

               
       if((this.options[this.selectedIndex].innerHTML) == "Agent de Sante"){

       	$("#cs_choix").toggleClass('hidden show')
       }

       else {
       		if($("#cs_choix").attr('class') =='show'){
       				$("#cs_choix").toggleClass('show hidden')

       		}

       }
          
                       
    });

});

$(function () {

    $('.btn-info').click(function (event) {
 		event.preventDefault();
    	$("#bodyRight").toggleClass("hidden show");   
	        
           
    });

});

//ajout d'un nouvel examen
$(function(){

    $('.add').click(function(event){
    	
    	event.preventDefault(true);
    	
    	// var ajout =$('#addition');
    	// ajout.remove();

        var copie = $('#exam').clone(true);

        
        copie.appendTo('#exam');
        // ajout.appendTo(copie);
           
    });
});

//ajout d'un nouveau medicaments

$(function(){

    $('.add').click(function(event){
    	
    	event.preventDefault(true);
    	
    	// var ajout =$('#addition');
    	// ajout.remove();

        var copie = $('#medoc').clone(true);

        
        copie.appendTo('#medoc');
        // ajout.appendTo(copie);
           
    });
});


$(function(){

    $('.add').click(function(event){
    	
    	event.preventDefault(true);
    	
        var copie = $('#hospi').clone(true);
        
        copie.appendTo('#hospi');
        // ajout.appendTo(copie);
           
    });
});


