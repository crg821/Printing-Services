$(document).ready(function(){
	$('#datepicker').datepicker( { dateFormat : "yy-mm-dd" }); 
	
	$('#call_back_btn').click(function() {
		
		//post request from jquery takes 3 parameters
		//location of the file to process
		$.post( "main/ajax", 
				{
					first_name : $('#first_name').val(),
					surname : $('#surname').val(),
					dob : $('#datepicker').datepicker().val()
				}, 
				function( data ){
					
					$('#responseText').val( data );
					
				} );
	});
});
