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
								
			$(".select_state_list").chosen("destroy");					
			$('.select_state_list').html(html.data);			
			$(".select_state_list").chosen({width: "99%"});
			
			$(".select_city_list").chosen("destroy");					
			$(".select_city_list").chosen({width: "99%"});
			
			$(".select_taluka_list").chosen("destroy");					
			$(".select_taluka_list").chosen({width: "99%"});
			
			$(".select_village_list").chosen("destroy");	
			$(".select_village_list").chosen({width: "99%"}); 
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
				
			$(".select_city_list").chosen("destroy");					
			$('.select_city_list').html(html.data);			
			$(".select_city_list").chosen({width: "99%"});
						
			$(".select_taluka_list").chosen("destroy");					
			$(".select_taluka_list").chosen({width: "99%"});
			
			$(".select_village_list").chosen("destroy");	
			$(".select_village_list").chosen({width: "99%"});
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
			
			$(".select_taluka_list").chosen("destroy");					
			$('.select_taluka_list').html(html.data);			
			$(".select_taluka_list").chosen({width: "99%"});
						
			$(".select_village_list").chosen("destroy");	
			$(".select_village_list").chosen({width: "99%"});
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
		
			
			$(".select_village_list").chosen("destroy");
			$('.select_village_list').html(html.data);				
			$(".select_village_list").chosen({width: "99%"}); 
			

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
						
			$(".change_state_list").chosen("destroy");					
			$('.change_state_list').html(html.data);			
			$(".change_state_list").chosen({width: "99%"});
			
			
			$(".select_city_list").chosen("destroy");					
			$(".select_city_list").chosen({width: "99%"});
			
			$(".select_taluka_list").chosen("destroy");					
			$(".select_taluka_list").chosen({width: "99%"});
			
			$(".select_village_list").chosen("destroy");	
			$(".select_village_list").chosen({width: "99%"}); 
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
			
			$(".change_city_list").chosen("destroy");					
			$('.change_city_list').html(html.data);			
			$(".change_city_list").chosen({width: "99%"});
						
			$(".select_taluka_list").chosen("destroy");					
			$(".select_taluka_list").chosen({width: "99%"});
			
			$(".select_village_list").chosen("destroy");	
			$(".select_village_list").chosen({width: "99%"}); 
			
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
			
			$(".change_taluka_list").chosen("destroy");					
			$('.change_taluka_list').html(html.data);			
			$(".change_taluka_list").chosen({width: "99%"});
			
			$(".select_village_list").chosen("destroy");	
			$(".select_village_list").chosen({width: "99%"}); 
			
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
			
			$(".change_village_list").chosen("destroy");					
			$('.change_village_list').html(html.data);			
			$(".change_village_list").chosen({width: "99%"});
			
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
			
			$(".select_city_list").chosen("destroy");					
			$('.select_city_list').html(html.data);			
			$(".select_city_list").chosen({width: "99%"});
			
		} 
	});
	}	
	});

</script>