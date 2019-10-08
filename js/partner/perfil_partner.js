$('.link_parceiro').click(function(){
    var id_parceiro = $(this).data('id_usuario');
    $.ajax({
        url: 'model/api/partner/partner.php',
        type: 'post',
        data: {parceiro: id_parceiro},
        success: function(data){
            $('#perfil_parceiro').html(data);
        }
    });
});