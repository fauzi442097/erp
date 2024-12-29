"use strict";

// Class Definition
var KTAuthNewPassword = (function () {
    // Elements
    var form;
    var submitButton;
    var validator;
    var passwordMeter;

    var handleForm = function (e) {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validator = FormValidation.formValidation(form, {
            fields: {
                email: {
                    validators: {
                        regexp: {
                            regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                            message: "Format email tidak valid",
                        },
                        notEmpty: {
                            message: "Wajib diisi",
                        },
                    },
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: "Wajib diisi",
                        },
                        // callback: {
                        //     message: "Password tidak sesuai dengan ketentuan",
                        //     callback: function (input) {
                        //         if (input.value.length > 0) {
                        //             return validatePassword();
                        //         }
                        //     },
                        // },
                    },
                },
                password_confirmation: {
                    validators: {
                        notEmpty: {
                            message: "Wajib diisi",
                        },
                        identical: {
                            compare: function () {
                                return form.querySelector('[name="password"]')
                                    .value;
                            },
                            message:
                                "Password dan konfirmasi password tidak sama",
                        },
                    },
                },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger({
                    event: {
                        password: false,
                    },
                }),
                bootstrap: new FormValidation.plugins.Bootstrap5({
                    rowSelector: ".fv-row",
                    eleInvalidClass: "", // comment to enable invalid state icons
                    eleValidClass: "", // comment to enable valid state icons
                }),
            },
        });

        submitButton.addEventListener("click", function (e) {
            e.preventDefault();
            validator.revalidateField("password");
            validator.validate().then(function (status) {
                if (status == "Valid") {
                    submitButton.setAttribute("data-kt-indicator", "on");
                    submitButton.disabled = true;
                    form.submit();
                }
            });
        });

        form.querySelector('input[name="password"]').addEventListener(
            "input",
            function () {
                if (this.value.length > 0) {
                    validator.updateFieldStatus("password", "NotValidated");
                }
            }
        );
    };

    var validatePassword = function () {
        return passwordMeter.getScore() === 100;
    };

    // Public Functions
    return {
        // public functions
        init: function () {
            form = document.querySelector("#kt_new_password_form");
            submitButton = document.querySelector("#kt_new_password_submit");
            passwordMeter = KTPasswordMeter.getInstance(
                form.querySelector('[data-kt-password-meter="true"]')
            );

            handleForm();
        },
    };
})();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTAuthNewPassword.init();
});
