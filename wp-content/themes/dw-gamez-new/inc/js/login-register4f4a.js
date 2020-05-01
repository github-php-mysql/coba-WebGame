jQuery(document).ready(function($){
	$('#dw-gamez-login-modal-form').on('submit', function(){
		var data = { };
		$.each($(this).serializeArray(), function() {
			data[this.name] = this.value;
		});
		
		$.ajax({
			type: 'post',
			dataType: 'json',
			url: dw_gamez_ajax.ajax_url,
			data: {
				'action': 'dw_gamez_login_ajax',
				'security': dw_gamez_ajax.ajax_nonce,
				'data': data
			},
			success: function(resultData){
				if(resultData.success){
					window.location.reload();
				}
			},
			error: function(error) {
				console.log(error);
			}
		});
		return false;
	});
	
	$('#dw-gamez-register-modal-form').on('submit', function(){
		var data = { };
		$.each($(this).serializeArray(), function() {
			data[this.name] = this.value;
		});
		
		$.ajax({
			type: 'post',
			dataType: 'json',
			url: dw_gamez_ajax.ajax_url,
			data: {
				'action': 'dw_gamez_register_ajax',
				'security': dw_gamez_ajax.ajax_nonce,
				'data': data
			},
			success: function(resultData){
				if(resultData.success){
					
					// window.location.reload();
				}
			},
			error: function(error) {
				console.log(error);
			}
		});
		return false;
	});
	
	$('#dw-gamez-retrieve-password-modal-form').on('submit', function(){
		var data = { };
		$.each($(this).serializeArray(), function() {
			data[this.name] = this.value;
		});
		
		$.ajax({
			type: 'post',
			dataType: 'json',
			url: dw_gamez_ajax.ajax_url,
			data: {
				'action': 'dw_gamez_retrieve_password_ajax',
				'security': dw_gamez_ajax.ajax_nonce,
				'data': data
			},
			success: function(resultData){
				if(resultData.success){
					
					// window.location.reload();
				}
			},
			error: function(error) {
				console.log(error);
			}
		});
		return false;
	});
	
	$('.dw-gamez-login-register-show').on('click', function(){
		var id = $(this).data('id');
		var left = $('#'+id).position().left;
		$('#dw-gamez-login-register-modal .modal-slider-wrap').css('left',(-1*left));
	});
});