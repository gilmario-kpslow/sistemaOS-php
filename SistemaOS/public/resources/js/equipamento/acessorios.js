$(function() {
    $("#btnAdd").click(function() {
        incluirAcessorio();
    });
    $("#btnOk").click(function() {
        adicionaAcessorio();
    });
});

incluirAcessorio = (function() {
    $("#dialog").modal("show");
});

adicionaAcessorio = (function() {
    var ordem = proximaOrdem();
    var nome = $("#nome_prop").val();
    if (nome.length > 0) {
        $("#acessorios").append("<tr><td class='col-lg-1'>" + ordem + "</td><td class='col-lg-11'>" + nome + "</td></tr>");
        $("#nome_prop").val("");
        $("#dialog").modal("show");
    } else {
        mensagemAlerta("você deve especificar um nome.");
    }

});

proximaOrdem = (function() {
    var total = $("#acessorios").children().length;
    if (total != undefined) {
        return ++total;
    } else {
        return 1;
    }
});

