var modal = document.querySelector('.modal-dialog-success');

function textModal(title, text) {
    modal.showModal();
    $("#texto_modal").html(text);
    $("#h_title").html(title);
    if (!modal.showModal) {
        dialogPolyfill.registerDialog(modal);
    }
}

function buscarPerfil() {
    // var operacao = "A"; //"A"=Adição; "E"=Edição
    // var indice_selecionado = -1; //Índice do item selecionado na lista
    var tbClientes = localStorage.getItem("tbClientes");// Recupera os dados armazenados
    var clientes = JSON.parse(tbClientes); // Converte string para objeto
    // console.log(clientes['uf04_cod_expert']);
    return clientes;
}

$(document).ready(function () {
    var user = buscarPerfil();
    if (!user) {
        goToIndex();
    }
    var btn_close = $('.close-button');
    var load = $('.load-tag');
    var btn = $('#btn_send');
    var success = false;
    load.hide();
    $('.mdl-dialog__content').css({height: "500px", overflow: "auto"})

    btn.click(function () {
        // btn.hide();
        // load.show();
        sendData();
    });

    function sendData() {
        var data = $('.form-data-send').serialize();
        if (data) {
            $.ajax({
                method: "POST",
                url: "php/validated-form.php",
                data: data,
                beforeSend: function (xhr) {
                    load.show();
                    btn.hide();
                }
            })
                .done(function (msg) {
                    btn.show();
                    load.hide();
                    if (msg == 0) {
                        textModal("Pay Attention", "There are empty fields.");
                    } else if (msg == 1) {
                        textModal("Tranks.", "Your answer was sent successfully.");
                        success = true;
                    } else {
                        textModal("Pay Attention", 'Your answer was not sent.');
                    }
                })
                .fail(function (jqXHR, textStatus) {
                    textModal("Pay Attention", 'Your answer was not sent.');
                    btn.show();
                    load.hide();
                });
        } else {
            textModal("Pay Attention", 'Your answer are empty');
        }
    }


    btn_close.click(function () {
        if (success) {
            goToIndex();
        } else {
            modal.close();
        }
    });

    function goToIndex() {
        window.location.replace("./index.html");
    }
});