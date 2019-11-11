function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

var dialog = document.querySelector('.modal-dialog-functional');
var showModalButton = document.querySelector('.show-modal-functional');
if (!dialog.showModal) {
    dialogPolyfill.registerDialog(dialog);
}
showModalButton.addEventListener('click', function () {
    dialog.showModal();
});
dialog.querySelector('.close').addEventListener('click', function () {
    dialog.close();
});


var dialogReliability = document.querySelector('.modal-dialog-reliability');
var showModalButtonReliability = document.querySelector('.show-modal-reliability');
if (!dialogReliability.showModal) {
    dialogPolyfill.registerDialog(dialogReliability);
}
showModalButtonReliability.addEventListener('click', function () {
    dialogReliability.showModal();
});
dialogReliability.querySelector('.close').addEventListener('click', function () {
    dialogReliability.close();
});

var dialogEfficiency = document.querySelector('.modal-dialog-efficiency');
var showModalButtonEfficiency = document.querySelector('.show-modal-efficiency');
if (!dialogEfficiency.showModal) {
    dialogPolyfill.registerDialog(dialogEfficiency);
}
showModalButtonEfficiency.addEventListener('click', function () {
    dialogEfficiency.showModal();
});
dialogEfficiency.querySelector('.close').addEventListener('click', function () {
    dialogEfficiency.close();
});


var dialogOperability = document.querySelector('.modal-dialog-operability');
var showModalButtonOperability = document.querySelector('.show-modal-operability');
if (!dialogOperability.showModal) {
    dialogPolyfill.registerDialog(dialogOperability);
}
showModalButtonOperability.addEventListener('click', function () {
    dialogOperability.showModal();
});
dialogOperability.querySelector('.close').addEventListener('click', function () {
    dialogOperability.close();
});

var dialogSecurity = document.querySelector('.modal-dialog-security');
var showModalButtonSecurity = document.querySelector('.show-modal-security');
if (!dialogSecurity.showModal) {
    dialogPolyfill.registerDialog(dialogSecurity);
}
showModalButtonSecurity.addEventListener('click', function () {
    dialogSecurity.showModal();
});
dialogSecurity.querySelector('.close').addEventListener('click', function () {
    dialogSecurity.close();
});

var dialogCompatibility = document.querySelector('.modal-dialog-compatibility');
var showModalButtonCompatibility = document.querySelector('.show-modal-compatibility');
if (!dialogCompatibility.showModal) {
    dialogPolyfill.registerDialog(dialogCompatibility);
}
showModalButtonCompatibility.addEventListener('click', function () {
    dialogCompatibility.showModal();
});
dialogCompatibility.querySelector('.close').addEventListener('click', function () {
    dialogCompatibility.close();
});


var dialogMaintainability = document.querySelector('.modal-dialog-maintainability');
var showModalButtonMaintainability = document.querySelector('.show-modal-maintainability');
if (!dialogMaintainability.showModal) {
    dialogPolyfill.registerDialog(dialogMaintainability);
}
showModalButtonMaintainability.addEventListener('click', function () {
    dialogMaintainability.showModal();
});
dialogMaintainability.querySelector('.close').addEventListener('click', function () {
    dialogMaintainability.close();
});

var dialogTransferability = document.querySelector('.modal-dialog-transferability');
var showModalButtonTransferability = document.querySelector('.show-modal-transferability');
if (!dialogTransferability.showModal) {
    dialogPolyfill.registerDialog(dialogTransferability);
}
showModalButtonTransferability.addEventListener('click', function () {
    dialogTransferability.showModal();
});
dialogTransferability.querySelector('.close').addEventListener('click', function () {
    dialogTransferability.close();
});

var dialogEpic = document.querySelector('.modal-dialog-epic');
var showModalButtonEpic = document.querySelector('.show-modal-epic');
if (!dialogEpic.showModal) {
    dialogPolyfill.registerDialog(dialogEpic);
}
showModalButtonEpic.addEventListener('click', function () {
    dialogEpic.showModal();
});
dialogEpic.querySelector('.close').addEventListener('click', function () {
    dialogEpic.close();
});

var dialogContext = document.querySelector('.modal-dialog-context');
var showModalButtonContext = document.querySelector('.show-modal-context');
if (!dialogContext.showModal) {
    dialogPolyfill.registerDialog(dialogContext);
}
showModalButtonContext.addEventListener('click', function () {
    dialogContext.showModal();
});
dialogContext.querySelector('.close').addEventListener('click', function () {
    dialogContext.close();
});

var dialogMobility = document.querySelector('.modal-dialog-mobility');
var showModalButtonMobility = document.querySelector('.show-modal-mobility');
if (!dialogMobility.showModal) {
    dialogPolyfill.registerDialog(dialogMobility);
}
showModalButtonMobility.addEventListener('click', function () {
    dialogMobility.showModal();
});
dialogMobility.querySelector('.close').addEventListener('click', function () {
    dialogMobility.close();
});


var dialogAttention = document.querySelector('.modal-dialog-attention');
var showModalButtonAttention = document.querySelector('.show-modal-attention');
if (!dialogAttention.showModal) {
    dialogPolyfill.registerDialog(dialogAttention);
}
showModalButtonAttention.addEventListener('click', function () {
    dialogAttention.showModal();
});
dialogAttention.querySelector('.close').addEventListener('click', function () {
    dialogAttention.close();
});

var dialogCalmness = document.querySelector('.modal-dialog-calmness');
var showModalButtonCalmness = document.querySelector('.show-modal-calmness');
if (!dialogCalmness.showModal) {
    dialogPolyfill.registerDialog(dialogCalmness);
}
showModalButtonCalmness.addEventListener('click', function () {
    dialogCalmness.showModal();
});
dialogCalmness.querySelector('.close').addEventListener('click', function () {
    dialogCalmness.close();
});

var dialogTransparency = document.querySelector('.modal-dialog-transparency');
var showModalButtonTransparency = document.querySelector('.show-modal-transparency');
if (!dialogTransparency.showModal) {
    dialogPolyfill.registerDialog(dialogTransparency);
}
showModalButtonTransparency.addEventListener('click', function () {
    dialogTransparency.showModal();
});
dialogTransparency.querySelector('.close').addEventListener('click', function () {
    dialogTransparency.close();
});
