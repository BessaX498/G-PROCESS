$('#edit_perfil').submit(function(){
    $.ajax({
        url: 'model/api/perfil/edit_perfil.php',
        type: 'post',
        data: $('#edit_perfil').serialize(),
        success: function(data){
            alert(data);
        }
    })
});