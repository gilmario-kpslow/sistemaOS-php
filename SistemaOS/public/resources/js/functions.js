mensagemInfo = (function(men) {
    criaMensagem(men, "bg-info", "Informação");
});
mensagemSuccesso = (function(men) {
    criaMensagem(men, "bg-success", "Sucesso");
});
mensagemErro = (function(men) {
    criaMensagem(men, "bg-danger", "Erro");
});

mensagemAlerta = (function(men) {
    criaMensagem(men, "bg-warning", "Atenção");
});

criaMensagem = (function(mensagem, tipo, titulo) {
    $("#men-titulo").html(titulo);
    $("#men-informacao").html(mensagem);
    $("#men-tipo").attr("class", "");
    $("#men-tipo").addClass("modal-header");
    $("#men-tipo").addClass(tipo);
    $(".modal_info").modal("show");
});