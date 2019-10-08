$(document).ready(function(){
    $('.btn_parceiro').click(function(){
        var id_usuario = $(this).data('id_usuario');
        
        $.ajax({
            url: 'model/api/home/add_parceiro.php',
            method: 'post',
            data: {parceiro: id_usuario},
            success: function(data){
                alert(data);
                document.location.reload(true);
            }
        });
        
    });
});