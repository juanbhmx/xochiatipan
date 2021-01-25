
$(document).ready(function(){
    $("#BtnId").on('click', function(){
        $.ajax({
            type : "POST",
            url : "delete.php",
            success : function(text){
                alert("Datos eliminados");
            }
        });
        return false;
    });
});
$(document).ready(function(){
    $("#BtnConf").on('click', function(){
        $.ajax({
            type : "POST",
            url : "confirm.php",
            success : function(text){
                //alert("Cita Confirmada");
                window.location.replace("about.html");
            }
        });
        return false;
    });
});

