$(document).ready(function () {
    $('.modal-load').each(function(i, obj) {
        obj.dataset.target = "#general-modal";
        obj.dataset.backdrop = "static";
        obj.dataset.toggle = "modal";
    });
    swal_alert();
    modal_load();
});

var swal_alert = function () {
    $(".swal-alert-delete").on('click', function (e) {
        e.preventDefault();
        var bt = $(".swal-alert");
        var ajax_link = this.getAttribute("data-ajax-link");
        var method = this.getAttribute("data-method") || "DELETE";
        var csrf = $('meta[name="csrf-token"]').attr('content');
        var title = this.getAttribute("data-title");
        var text = this.getAttribute("data-text");
        var type = "warning";
        var redirect = this.getAttribute("data-redirect");
        var cancel = true;
        var cancelText = this.getAttribute("data-cancel-text") || "لغو";
        var confirmText = this.getAttribute("data-confirm-text") || "حذف شود";
        Swal.fire({
            title: title,
            text: text,
            type: type,
            showCancelButton: cancel,
            confirmButtonColor: '#d625c3',
            cancelButtonColor: '#d9ddc7',
            confirmButtonText: confirmText,
            cancelButtonText: cancelText
        }).then((result) => {
            if (result.value) {

                $.ajax({
                    url: ajax_link,
                    type: method,
                    data: {_token: csrf},
                    success: function (response) {
                        $.notify({
                            message: response,
                            target: "_blank"
                        }, {
                            element: "body",
                            position: null,
                            type: 'success',
                            allow_dismiss: !0,
                            newest_on_top: !0,
                            showProgressbar: !0,
                            placement: {
                                from: "top",
                                align: "left"
                            },
                            offset: 20,
                            spacing: 10,
                            z_index: 1031,
                            delay: 5e3,
                            timer: 2e3,
                            url_target: "_blank",
                            mouse_over: "pause",
                            animate: {
                                enter: "animated fadeInDown",
                                exit: "animated fadeOutUp"
                            },
                            onShow: null,
                            onShown: null,
                            onClose: null,
                            onClosed: null,
                            icon_type: "class",
                            template: '<div data-notify="container" class="col-11 col-sm-3 alert  alert-{0} " role="alert"><button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button><span data-notify="icon"></span> <span data-notify="title">{1}</span> <span data-notify="message">{2}</span><div class="progress" data-notify="progressbar"><div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div><a href="{3}" target="{4}" data-notify="url"></a></div>'
                        });
                        setTimeout(function () {
                            if (redirect){
                                window.location.replace(redirect);
                            }
                            else {
                                location.reload();
                            }
                        }, 1000)
                    },
                    error: function (response) {
                            $.notify({
                            message: response,
                            target: "_blank"
                        }, {
                            element: "body",
                            position: null,
                            type: 'primary',
                            allow_dismiss: !0,
                            newest_on_top: !0,
                            showProgressbar: !0,
                            placement: {
                                from: "top",
                                align: "left"
                            },
                            offset: 20,
                            spacing: 10,
                            z_index: 1031,
                            delay: 5e3,
                            timer: 2e3,
                            url_target: "_blank",
                            mouse_over: "pause",
                            animate: {
                                enter: "animated fadeInDown",
                                exit: "animated fadeOutUp"
                            },
                            onShow: null,
                            onShown: null,
                            onClose: null,
                            onClosed: null,
                            icon_type: "class",
                            template: '<div data-notify="container" class="col-11 col-sm-3 alert  alert-{0} " role="alert"><button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button><span data-notify="icon"></span> <span data-notify="title">{1}</span> <span data-notify="message">{2}</span><div class="progress" data-notify="progressbar"><div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div><a href="{3}" target="{4}" data-notify="url"></a></div>'
                        });

                    }
                });

            }
        })
    });
};
var modal_load = function () {
    $(document).on('click', '.modal-load', function (e) {
        e.preventDefault();

        var ajax_link = this.getAttribute("data-link");
        var title = this.getAttribute("data-modal-title")|| "";
        var size = this.getAttribute("data-modal-size") || "";
        var classes = this.getAttribute("data-modal-class") || "";
        var target = "general-modal";

        document.getElementById(target).className = '';
        document.getElementById(target).classList.add('modal');
        document.getElementById(target).classList.add('fade');
        document.getElementById(target).classList.add(classes);

        $("#" + target + " .modal-body").html('<div class="spinner-border"></div>');

        // $(target+" .modal-body").load(ajax_link);
        $.ajax({
            url: ajax_link,
            type: 'GET',
            // data: $(this).serialize(),

            success: function (response) {
                $("#" + target + " .modal-body").html(response);
            },

            error: function (response) {
                alert('مشکلی در بارگزاری صفحه بوجود آمده است')
            }
        });


        $("#" +target + " .modal-title").html(title);
        $("#" +target + " .modal-dialog").removeClass().addClass("modal-dialog");
        $("#" +target + " .modal-dialog").addClass(size);

    });
};
