$(document).ready(function(){
    $.ajax({
        url: 'model/api/perfil/partner_project.php',
        success: function(data){
            $('.parceiros_projetos').html(data);
        }
    });
});