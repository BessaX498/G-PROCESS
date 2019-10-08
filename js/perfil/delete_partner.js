$(document).ready(function(){
    $('.btn_parceiro_delete').click(function(){
        var id_usuario = $(this).data('id_usuario');
        $.ajax({
            url: 'model/api/perfil/delete_partner.php',
            method: 'post',
            data: {parceiro: id_usuario},
            success: function(data){
				alert(data);
                document.location.reload(true);
            }
        });
    });
});