$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });

    $("#celular").mask("(99) 999-9999");
    $("#cpf").mask("999.999.999-99");
});