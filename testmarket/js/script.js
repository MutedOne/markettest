$(document).ready(function() {
	alert("YAWAAA NAG LIHOKKK KOOO");
	console.log("asda");
	let links = $('.dealerlink').each(function(i,ele){
		$(this).click(function(){
			alert("ples tawn gana na");
			console.log($(this));
			if(i == 0){
				console.log("working");
				$('#dashboard').removeClass('d-none').addClass('d-block');
				$('#dealer').removeClass('d-block').addClass('d-none');
				$('#user').removeClass('d-block').addClass('d-none');
				$('#product').removeClass('d-block').addClass('d-none');
				
			}else if(i == 1){
				$('#dashboard').removeClass('d-block').addClass('d-none');
				$('#dealer').removeClass('d-none').addClass('d-block');
				$('#user').removeClass('d-block').addClass('d-none');
				$('#product').removeClass('d-block').addClass('d-none');
			}else if(i == 2){
				$('#dashboard').removeClass('d-block').addClass('d-none');
				$('#dealer').removeClass('d-block').addClass('d-none');
				$('#user').removeClass('d-none').addClass('d-block');
				$('#product').removeClass('d-block').addClass('d-none');
			}else{
				$('#dashboard').removeClass('d-block').addClass('d-none');
				$('#dealer').removeClass('d-block').addClass('d-none');
				$('#user').removeClass('d-block').addClass('d-none');
				$('#product').removeClass('d-none').addClass('d-block');
			}
		});
		
	})

	$findDealId=$('.dealID').each(function(e,a){
		$('.valDealId').val($(this).text());
		
	})
	console.log(findDealId);

	
	//console.log($('.dealID').text());
	//console.log('asdasd');
	

   

});