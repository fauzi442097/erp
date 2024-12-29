"use strict";

// Class Definition
var KTAuthResetPassword = (function () {
    // Elements
    var form;
    var submitButton;
    var validator;

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
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap5({
                    rowSelector: ".fv-row",
                    eleInvalidClass: "", // comment to enable invalid state icons
                    eleValidClass: "", // comment to enable valid state icons
                }),
            },
        });

        submitButton.addEventListener("click", function (e) {
            e.preventDefault();

            // Validate form
            validator.validate().then(function (status) {
                if (status == "Valid") {
                    submitButton.setAttribute("data-kt-indicator", "on");
                    submitButton.disabled = true;
                    form.submit();
                }
            });
        });
    };

    // Public Functions
    return {
        // public functions
        init: function () {
            form = document.querySelector("#kt_password_reset_form");
            submitButton = document.querySelector("#kt_password_reset_submit");

            handleForm();
        },
    };
})();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTAuthResetPassword.init();
});
