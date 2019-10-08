function atualizaProjetos() {
		$.ajax({
			url: '../../model/api/project/query.php',
			success: function (data) {
				$('#find_project').html(data);
			}
		});
	}
	atualizaProjetos();