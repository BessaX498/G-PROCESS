$(document).ready(function(){
	function atualizaPessoas() {
		$.ajax({
			url: 'model/api/home/find_people.php',
			success: function (data) {
				$('#find_people').html(data);
			}
		});
	}
	atualizaPessoas();
});