$(document).ready(function(){
    $("#reset").mouseenter(function(){
        $("#alert_delete").show();
    });
    $("#insert_form").keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            $("#submit_success").show();
        }
    });
});