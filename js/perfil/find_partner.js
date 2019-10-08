$(document).ready(function(){
    $.ajax({
        url: 'model/api/perfil/partner.php',
        success: function(data){
            $('.parceiros').html(data);
        }
    });
});