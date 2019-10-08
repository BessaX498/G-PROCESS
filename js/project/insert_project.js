$(document).ready(function(){
	$('#project_insert').submit(function(){
		$.ajax({
			url: 'model/api/project/insert.php',
			type: 'post',
			data: $('#project_insert').serialize(),
			success: function(data){
				alert(data);
			}
		});
	});
});