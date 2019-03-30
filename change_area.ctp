<script type="text/javascript">

$(".select_country_list").on('change focus',function() {
	var id = $(this).val();			
	$(".select_state_list").find('option').remove();
	$('<option>').val('').text(' Select State ').appendTo($(".select_state_list"));			
	if (id) {
	var dataString = 'id='+ id;
	$.ajax({
		type: "POST",
		url: '<?php echo Router::url(array("controller"=>"commons","action" => "getStates",'admin'=>false)); ?>',
		data: dataString,
		cache: false,
		success: function(html) {					
			
			$('.select_state_list').html(html.data);			
				
			if($( ".select_state_list" ).hasClass( "chosen-select" ))
			{
				$(".select_state_list").trigger("chosen:updated");								
			}			
		} 
	});
	}	
	});	

$(".select_state_list").on('change focus',function() {

	var id = $(this).val();		
   
	$(".select_city_list").find('option').remove();
	$('<option>').val('').text(' Select District ').appendTo($(".select_city_list"));			
	if (id) {
	var dataString = 'id='+ id;
	$.ajax({
		type: "POST",
		url: '<?php echo Router::url(array("controller"=>"commons","action" => "getCities",'admin'=>false)); ?>',
		data: dataString,
		cache: false,
		success: function(html) {								
			
			$('.select_city_list').html(html.data);			
				
			if($( ".select_city_list" ).hasClass( "chosen-select" ))
			{							
				$(".select_city_list").trigger("chosen:updated");			
			}		
			
		} 
	});
	}	
	});
	
	$(".select_city_list").on('change focus',function() {
	var id = $(this).val();			
	$(".select_taluka_list").find('option').remove();
	$('<option>').val('').text(' Select Taluka ').appendTo($(".select_taluka_list"));			
	if (id) {
	var dataString = 'id='+ id;
	$.ajax({
		type: "POST",
		url: '<?php echo Router::url(array("controller"=>"commons","action" => "getTalukas",'admin'=>false)); ?>',
		data: dataString,
		cache: false,
		success: function(html) {								
			
			$('.select_taluka_list').html(html.data);			
				
			if($( ".select_taluka_list" ).hasClass( "chosen-select" ))
			{							
				$(".select_taluka_list").trigger("chosen:updated");			
			}				
						
		} 
	});
	}	
	});
	
	$(".select_taluka_list").on('change focus',function() {
	var id = $(this).val();			
	$(".select_village_list").find('option').remove();
	$('<option>').val('').text(' Select Village/Town ').appendTo($(".select_village_list"));			
	if (id) {
	var dataString = 'id='+ id;
	$.ajax({
		type: "POST",
		url: '<?php echo Router::url(array("controller"=>"commons","action" => "getVillages",'admin'=>false)); ?>',
		data: dataString,
		cache: false,
		success: function(html) {								
		
			$('.select_village_list').html(html.data);			
			
			if($( ".select_village_list" ).hasClass( "chosen-select" ))
			{							
			$(".select_village_list").trigger("chosen:updated");			
			}				
		} 
	});
	}	
});
</script>



<script type="text/javascript">

$(".change_country_list").on('change focus',function() {
	var id = $(this).val();			
	$(".change_state_list").find('option').remove();
	$('<option>').val('').text(' Select State ').appendTo($(".change_state_list"));			
	if (id) {
	var dataString = 'id='+ id;
	$.ajax({
		type: "POST",
		url: '<?php echo Router::url(array("controller"=>"commons","action" => "getStates",'admin'=>false)); ?>',
		data: dataString,
		cache: false,
		success: function(html) {								
			
			$('.change_state_list').html(html.data);			
			
			if($( ".change_state_list" ).hasClass( "chosen-select" ))
			{							
			$(".change_state_list").trigger("chosen:updated");			
			}				
			
		} 
	});
	}	
	});	

$(".change_state_list").on('change focus',function() {
	var id = $(this).val();			
	$(".change_city_list").find('option').remove();
	$('<option>').val('').text(' Select District ').appendTo($(".change_city_list"));			
	if (id) {
	var dataString = 'id='+ id;
	$.ajax({
		type: "POST",
		url: '<?php echo Router::url(array("controller"=>"commons","action" => "getCities",'admin'=>false)); ?>',
		data: dataString,
		cache: false,
		success: function(html) {								
			
			$('.change_city_list').html(html.data);			
			
			if($( ".change_city_list" ).hasClass( "chosen-select" ))
			{							
			$(".change_city_list").trigger("chosen:updated");			
			}				
			
		} 
	});
	}	
	});
	
	$(".change_city_list").on('change focus',function() {
	var id = $(this).val();			
	$(".change_taluka_list").find('option').remove();
	$('<option>').val('').text(' Select Taluka ').appendTo($(".change_taluka_list"));			
	if (id) {
	var dataString = 'id='+ id;
	$.ajax({
		type: "POST",
		url: '<?php echo Router::url(array("controller"=>"commons","action" => "getTalukas",'admin'=>false)); ?>',
		data: dataString,
		cache: false,
		success: function(html) {								
			
			$('.change_taluka_list').html(html.data);			
			
			if($( ".change_taluka_list" ).hasClass( "chosen-select" ))
			{							
			$(".change_taluka_list").trigger("chosen:updated");			
			}	
			
		} 
	});
	}	
	});
	
	$(".change_taluka_list").on('change focus',function() {
	var id = $(this).val();			
	$(".change_village_list").find('option').remove();
	$('<option>').val('').text(' Select Village/Town').appendTo($(".change_village_list"));			
	if (id) {
	var dataString = 'id='+ id;
	$.ajax({
		type: "POST",
		url: '<?php echo Router::url(array("controller"=>"commons","action" => "getVillages",'admin'=>false)); ?>',
		data: dataString,
		cache: false,
		success: function(html) {			
							
			$('.change_village_list').html(html.data);			
			
			if($( ".change_village_list" ).hasClass( "chosen-select" ))
			{							
			$(".change_village_list").trigger("chosen:updated");			
			}
			
		} 
	});
	}	
});

////// Select State and Show districts

$(".select_state_districts").on('change focus',function() {
	var id = $(this).val();			
	$(".select_city_list").find('option').remove();
	$('<option>').val('').text(' Select District ').appendTo($(".select_city_list"));			
	if (id) {
	var dataString = 'id='+ id;
	$.ajax({
		type: "POST",
		url: '<?php echo Router::url(array("controller"=>"commons","action" => "getDistricts",'admin'=>false)); ?>',
		data: dataString,
		cache: false,
		success: function(html) {								
			
			$('.select_city_list').html(html.data);			
			
			if($( ".select_city_list" ).hasClass( "chosen-select" ))
			{							
			$(".select_city_list").trigger("chosen:updated");			
			}
			
		} 
	});
	}	
	});
	

$(".select_state_allot").on('change select keyup',function() {
	var id = $(this).val();			
	$(".select_city_allot").find('option').remove();
	$('<option>').val('').text(' Select District ').appendTo($(".select_city_allot"));			
	if (id) {
	var dataString = 'id='+ id;
	$.ajax({
		type: "POST",
		url: '<?php echo Router::url(array("controller"=>"commons","action" => "getDistricts",'admin'=>false)); ?>',
		data: dataString,
		cache: false,
		success: function(html) {								
			
			$('.select_city_allot').html(html.data);			
			
			if($( ".select_city_allot" ).hasClass( "chosen-select" ))
			{							
			$(".select_city_allot").trigger("chosen:updated");			
			}
			
		} 
	});
	}	
	});	

	
$(".select_unit_list").on('change keyup',function() {

	var id = $(this).val();	
    $(".select_alternateunit_list").find('option').remove();
	$('<option>').val('').text(' Select Unit ').appendTo($(".select_alternateunit_list"));			
	if (id) {
	var dataString = 'id='+ id;
	$.ajax({
		type: "POST",
		url: '<?php echo Router::url(array("controller"=>"commons","action" => "getalternateUnits",'admin'=>false)); ?>',
		data: dataString,
		cache: false,
		success: function(html) {								
			
			$('.select_alternateunit_list').html(html.data);			
				
			
			
		} 
	});
	}	
	});
</script>