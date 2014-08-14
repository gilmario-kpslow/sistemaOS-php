isNew = (function() {
    return $("#id").val() != '';
});

executar = (function() {
    if (valida()) {
        if (isNew()) {
            salvar();
        } else {
            atualizar();
        }

    }
});

valida = (function() {
    $.each($('#form input'), function(i, o) {
        if ($(o).val() == '') {
            $(o).focus();
        }
    });

    return true;
});

salvar = (function() {


});

atualizar = (function() {

});

limpaFormulario = (function() {
    var inputs = $("#frmCriar input");
    $.each(inputs, function(i, o) {
        $(o).val("");
    });
    var textareas = $("#frmCriar textarea");
    $.each(textareas, function(i, o) {
        $(o).val("");
    });
});



