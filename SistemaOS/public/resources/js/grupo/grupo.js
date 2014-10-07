excluir = (function (id) {
    $("#id").val(id);
    $("#form_acao").attr("action", $("#acao_excluir").val());
    $("#mensagem_dialog").html("Excluir Grupo?");
    $("#mensagem_informacao").html("Deseja excluir esse registro?");
    $("#confirma").modal('show');
});

cancelar = (function () {
    $("#id").val();
    $("#form_acao").attr("action", "");
    $("#confirma").modal('hide');
});

editar = (function (id) {
    $("#id").val(id);
    $("#form_acao").attr("action", $("#acao_editar").val());
    $("#mensagem_informacao").html("Deseja editar esse registro?");
    $("#mensagem_dialog").html("Editar Grupo?");
    $("#confirma").modal('show');
});