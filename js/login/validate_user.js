$(document).ready(function(){
	$('#form_login').submit(function(){
		$.ajax({
			url: 'model/api/user/validate.php',
			type: 'POST',
			data: $('#form_login').serialize(),
			success: function(data){
				alert(data);
				window.location.href = 'index.php';
			}
		});
		return false;
	});
});