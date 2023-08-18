
$(document).ready(function() {
    
    $("#form_login").submit(function(event){
        console.log("HOLAAAAA");
        event.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url: "./app/controllers/LoginController.php",
            type: "POST",
            data: formData,
            dataType:"json",
            success: function(response){
                $("#alertMessages").html(response.alerts);
            },
            error:function(xhr, status, error){
                console.log("Error en la petición AJAX:", error);
                console.log(formData);
            }
        });
    });
});