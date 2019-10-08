$(".lista_membros").click(function(){
	var id_membro = $(this).data("id_membro");
	$.ajax({
		url: 'model/api/member/member.php',
		type: 'post',
		data: {membro: id_membro},
		success: function(data){
           	$('#perfil_membro').html(data);
          	
       	}
	});
});