$(document).ready(function(){
	$('#insert_user').submit(function(){
		var senha1 = $('#password').val();
		var senha2 = $('#password2').val();
		alert(senha1+ senha2);
		if (senha1 == senha2) {
			$.ajax({
				url: 'model/api/user/insert.php',
				type: 'POST',
				data: $('#insert_user').serialize(),
				success: function(data){
					alert(data);
					window.location.href = 'index.php';
				}
			});
			return false;
		}else{
			alert('Senhas Diferentes');
		}
	});
});