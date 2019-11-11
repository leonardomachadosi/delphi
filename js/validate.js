var modal = document.querySelector('.modal-dialog-success');

function textModal(title, text) {
    modal.showModal();
    $("#texto_modal").html(text);
    $("#h_title").html(title);
    if (!modal.showModal) {
        dialogPolyfill.registerDialog(modal);
    }
}

function definedCLient() {
    localStorage.setItem('tbClientes', []);
}

function Adicionar(user) {
    localStorage.setItem("tbClientes", JSON.stringify(user));
}


$(document).ready(function () {
    definedCLient();
    var btn = $('#btn_send');
    var btn_close = $('.close-button');
    var load = $('.load-tag');
    var success = false;
    var ob;
    load.hide();
    btn.click(function () {
        validEmail();
    });

    function validEmail() {
        var email = $('#form-data-send').serialize();
        var text_email = $('.email').val();
        var bt_next = $('#bt_bt');
        if (text_email) {
            $.ajax({
                method: "POST",
                url: "php/email-validate.php",
                data: email,
                beforeSend: function (xhr) {
                    load.show();
                    btn.hide();
                }
            })
                .done(function (msg) {
                    btn.show();
                    load.hide();
                    ob = $.parseJSON(msg);
                    if (ob['uf04_cod_expert']) {
                        success = true;
                        btn_close.html('Next');
                        textModal("Success", "Click in next.");
                    } else {
                        textModal("Sorry", "E-mail not found.");
                    }
                })
                .fail(function (jqXHR, textStatus) {
                    textModal("Pay Attention", 'Your answer was not sent.');
                    btn.show();
                    load.hide();
                });

        } else {
            textModal("Pay attention", "Your e-mail are empty.");
        }
    }

    btn_close.click(function () {
        if (success) {
            Adicionar(ob);
            window.location.replace("./forms-send.html");
        } else {
            modal.close();
        }
    });

});


