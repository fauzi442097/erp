<script type="text/javascript">
    var base_url = '//' + window.location.host;
    const NO_ACTION = 'NO_ACTION';
    const REFRESH_PAGE = 'REFRESH_PAGE';
    const RELOAD_DATATABLE = 'RELOAD_DATATABLE';
    const REDIRECT_PAGE = 'REDIRECT_PAGE';
    const REDIRECT_PAGE_AJAX = 'REDIRECT_PAGE_AJAX';
    const POST = 'POST';
    const PUT = 'PUT';
    const PATCH = 'PATCH';
    const DELETE = 'DELETE';
    const GET = 'GET';

    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 9000, // 9 Detik
        timerProgressBar: true,
        onOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
    });

    toastr.options = {
        "closeButton": true,
        "debug": true,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toastr-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    $(document).ajaxError(function(event, jqxhr, settings, exception) {
        if (jqxhr.status == 404) {
            return showAlert("warning", "Halaman tidak ditemukan", NO_ACTION);
        }

        if (jqxhr.status == 401 || jqxhr.status == 419) {
            let urlLogin = `${base_url}/login`;
            showAlert(
                "warning",
                ".<p style='margin-bottom: .5rem'> Sesi Login Habis </p> Silakan login kembali",
                REDIRECT_PAGE,
                urlLogin
            );
            return
        }

        if (jqxhr.status == 500) {
            return toastr.error("Internal Server Error");
        }

        if (jqxhr.status == 403) {
            let msg = "<p style='margin-bottom: .5rem'> Forbidden </p> Akses tidak diizinkan"
            let response = jqxhr.responseJSON;
            if (response?.rm) msg = response.rm;
            showAlert("warning", msg, NO_ACTION);
            return
        }
    });

    function notifToast(icon, message) {
        Toast.fire({
            icon: icon,
            title: message
        });
    }

    function setProcessingButton(id, processing) {
        if (processing === true) {
            $("#" + id).attr('data-kt-indicator', 'on');
            $("#" + id).attr('disabled', 'true');
        } else {
            $("#" + id).removeAttr('disabled data-kt-indicator');
        }
    }

    function doPost(url, formData, callback) {
        $.ajax({
            url: url,
            type: 'POST', // Gunakan metode PATCH
            data: formData, // Kirim FormData
            processData: false, // Jangan memproses data (karena FormData)
            contentType: false, // Jangan tentukan content-type (FormData akan menangani ini)
            global: true,
            success: function(response) {
                if (typeof callback == 'function') {
                    callback("", response);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                if (typeof callback == 'function') {
                    callback(jqXHR.responseJSON?.message, null);
                }
            }
        });
    }


    function doGet(url, callback) {
        $.get(url, function(response, status, xhr) {
            if (typeof callback == 'function') {
                callback("", response);
            }
        }).fail(function(response) {
            if (response.status === 401) {
                window.location.replace("/login");
            } else {
                if (typeof callback == 'function') {
                    callback(response.responseJSON?.message, null);
                }
            }
        });
    }

    function showAlert(type, message, action_type, new_page, btnLabel = 'Ok') {
        let confirmBtnStyle = '';
        switch (type) {
            case 'warning':
                confirmBtnStyle = 'font-weight-bold btn-warning'
                break;
            case 'success':
                confirmBtnStyle = 'font-weight-bold btn-success'
                break;
            case 'error':
                confirmBtnStyle = 'font-weight-bold btn-danger'
                break;
            case 'info':
                confirmBtnStyle = 'font-weight-bold btn-info'
                break;
        }

        Swal.fire({
            html: message,
            icon: type,
            buttonsStyling: false,
            confirmButtonText: btnLabel,
            customClass: {
                confirmButton: `btn ${confirmBtnStyle}`
            }
        }).then(function(result) {
            if (result.value) {
                switch (action_type) {
                    case REFRESH_PAGE:
                        // Reload
                        location.reload();
                        break;
                    case REDIRECT_PAGE_AJAX:
                        // New Page With Ajax
                        loadNewPage(new_page);
                        break;
                    case REDIRECT_PAGE:
                        // New Page
                        window.location.href = new_page;
                        break;
                    case NO_ACTION:
                        // No Action
                        break;
                    case RELOAD_DATATABLE:
                        // Reload Datatable
                        datatable.draw();
                        break;
                }
            }
        });
    }

    function showAlertConfirm(type = 'question', message, btnConfirm = 'Ya', callback) {
        let confirmBtnStyle = '';
        let showCancelBtn = false;
        switch (type) {
            case 'warning':
                confirmBtnStyle = 'font-weight-bold btn-warning'
                break;
            case 'success':
                confirmBtnStyle = 'font-weight-bold btn-success'
                break;
            case 'error':
                confirmBtnStyle = 'font-weight-bold btn-danger'
                break;
            case 'info':
                confirmBtnStyle = 'font-weight-bold btn-info'
                break;
            case 'question':
                confirmBtnStyle = 'font-weight-bold btn-primary'
                showCancelBtn = true
                break;
        }

        Swal.fire({
            html: message,
            icon: type,
            buttonsStyling: false,
            showCancelButton: showCancelBtn,
            confirmButtonText: btnConfirm,
            cancelButtonText: 'Batal',
            customClass: {
                confirmButton: `btn ${confirmBtnStyle}`,
                cancelButton: 'btn btn-secondary'
            }
        }).then(function(result) {
            if (typeof callback == 'function') {
                callback(result)
            }
        });
    }

    function mappingErrorInput(errors) {
        $('.error-input-message').removeClass('d-none');
        $.each(errors, function(key, messages) {
            $('#' + key + '_error').text(messages[0]);
            $('#' + key).addClass('is-invalid');
        })
    }

    function clearErrorInput() {
        $('.error-input-message').addClass('d-none');
    }
</script>
