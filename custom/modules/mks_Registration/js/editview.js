$( document ).ready(function() {

	var mks_courses_id_c = $( "#mks_courses_id_c" ).val();	
	
	if (! $('input[name="duplicateId"]').length){
		
		var i=1;
	    
		$(".panel-content > div").each(function ()
		{			
			
			if(i == 5)
			{	
				$(this).remove();			
			}
			i++;
		});
		
	}
	else
	{
		$("#paymentplan").val("");
		$("#mks_paymentplan_id_c").val("");		
	}
	
	
	// se deshabilita temporalmente
	//validateGroups(mks_courses_id_c);
	haveCustomPlan();
			
	$("#btn_paymentplan").unbind( "click" );
	
	$("#btn_grouptheory").unbind( "click" );
	
	$("#btn_grouppractice").unbind( "click" );
	
	$("#btn_paymentplan").click(function(){ 

	var course = $( "#course" ).val();
		
	open_popup(
				"mks_PaymentPlan", 
				600, 
				400, 
				"&mks_paymentplan_mks_courses_name_advanced="+course, 
				true, 
				false, 
				{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"mks_paymentplan_id_c","name":"paymentplan"}}, 
				"single", 
				true
				);

	});
	
	$("#btn_grouptheory").click(function(){ 

	var course = $( "#course" ).val();
	
	open_popup(
				"mks_AcademicGroups", 
				600, 
				400, 
				"&type_advanced=theory&courses_advanced="+course,
				true, 
				false, 
				{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"mks_academicgroups_id_c","name":"grouptheory"}}, 
				"single", 
				true
				);

	});
	
	$("#btn_grouppractice").click(function(){ 

	var course = $( "#course" ).val();
	
	open_popup(
				"mks_AcademicGroups", 
				600, 
				400, 
				"&type_advanced=practice&courses_advanced="+course,
				true, 
				false, 
				{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"mks_academicgroups_id1_c","name":"grouppractice"}}, 
				"single", 
				true
				);

	});
	
});

/* se deshabilita temporalmente
$(function(){
    var Y = YUI().use('node', 'event', function (Y) {
        // node and event modules are loaded.
    });    
    var container = Y.one('#course');
    container.on('change', function (e) {  
		var mks_courses_id_c = Y.one('#mks_courses_id_c').get('value');	
		validateGroups(mks_courses_id_c);	
    });
});
*/

function validateGroups(mks_courses_id_c)
{
		
		$.post( "index.php?entryPoint=getCourseById", { 
			mks_courses_id_c: mks_courses_id_c 
		}, function( data ) {
			
					
			if(data.theory=="1")
			{					
				$( "#grouptheory" ).prop( "disabled", false );
				$( "#btn_grouptheory" ).prop( "disabled", false );
				$( "#btn_clr_grouptheory" ).prop( "disabled", false );						
			}
			else{
				$( "#grouptheory" ).prop( "disabled", true );
				$( "#btn_grouptheory" ).prop( "disabled", true );
				$( "#btn_clr_grouptheory" ).prop( "disabled", true );
			}			
			if(data.practice=="1")				
			{	
				$( "#grouppractice" ).prop( "disabled", false );
				$( "#btn_grouppractice" ).prop( "disabled", false );
				$( "#btn_clr_grouppractice" ).prop( "disabled", false );
			}
			else{
				$( "#grouppractice" ).prop( "disabled", true );
				$( "#btn_grouppractice" ).prop( "disabled", true );
				$( "#btn_clr_grouppractice" ).prop( "disabled", true );
			}			
			
		},"json"); 	
}

function haveCustomPlan()
{
	var registration_id = $("[name='record']").val();
	
	if(registration_id!='')
	{
		$.post( "index.php?entryPoint=getCustomPaymentPlan", { 
		registration_id: registration_id 
			}, function( data ) {
				
				if( data.count > 0 )
				{
					$( "#paymentplan" ).prop( "disabled", true );
					$( "#btn_paymentplan" ).prop( "disabled", true );
					$( "#btn_clr_paymentplan" ).prop( "disabled", true );				
					
				}
				
			},"json"); 	
    }
}