@extends('layouts.app')

@section('content')
    @include('profile.update-profile-form')
    @include('profile.change-password-form')
@endsection

@section('script')
    <script type="text/javascript">
        var formPasswordValidation;
        var fvUpdateProfile;
        var passwordForm = document.getElementById("kt_signin_change_password");
        var updateProfileForm = document.getElementById("kt_account_profile_details_form");

        $(document).ready(function() {
            initFormChangePassword();
            initFormUpdateProfile();
            toggleInputFormBackground();
        });

        function toggleInputFormBackground() {
            $('input').focus(function() {
                $(this).removeClass('form-control-solid');
            });

            // Remove class 'highlight' when the input loses focus (blur)
            $('input').blur(function() {
                $(this).addClass('form-control-solid');
            });
        }

        function toggleChangePasswordForm() {
            $("#kt_signin_password").toggleClass('d-none');
            $("#kt_signin_password_edit").toggleClass('d-none');
            $("#kt_signin_password_button").toggleClass('d-none');
            passwordForm.reset();
            formPasswordValidation.resetForm();
            clearErrorInput()
        }

        function initFormChangePassword() {
            formPasswordValidation = FormValidation.formValidation(passwordForm, {
                fields: {
                    currentpassword: {
                        validators: {
                            notEmpty: {
                                message: "Wajib diisi",
                            },
                            stringLength: {
                                min: 8,
                                message: 'Minimal diisi 8 karakter'
                            }
                        },
                    },

                    newpassword: {
                        validators: {
                            notEmpty: {
                                message: "Wajib diisi",
                            },
                            stringLength: {
                                min: 8,
                                message: 'Minimal diisi 8 karakter'
                            }
                        },
                    },

                    confirmpassword: {
                        validators: {
                            notEmpty: {
                                message: "Wajib diisi",
                            },
                            identical: {
                                compare: function() {
                                    return passwordForm.querySelector(
                                        '[name="newpassword"]'
                                    ).value;
                                },
                                message: "Password baru dan konfirmasi password tidak sama",
                            },
                            stringLength: {
                                min: 5,
                                message: 'Minimal diisi 8 karakter'
                            }
                        },
                    },
                },

                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                    }),
                },
            });
        }

        function initFormUpdateProfile() {
            fvUpdateProfile = FormValidation.formValidation(updateProfileForm, {
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: "Wajib diisi",
                            },
                        },
                    },

                    email: {
                        validators: {
                            notEmpty: {
                                message: "Wajib diisi",
                            },
                            emailAddress: {
                                message: 'Format email tidak valid'
                            }
                        },
                    },
                },

                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                    }),
                },
            });
        }

        function handleChangePassword() {
            event.preventDefault();
            formPasswordValidation.validate().then(function(status) {
                if (status == "Valid") {
                    let formData = new FormData(passwordForm);
                    setProcessingButton("kt_password_submit", true)
                    clearErrorInput()
                    doPost('/update_password', formData, function(message, res) {
                        setProcessingButton("kt_password_submit", false)
                        if (!res) return
                        if (res.rc == 300) return showAlert('warning', res.rm, NO_ACTION)

                        if (res.rc == 400) {
                            var errors = res.data;
                            return mappingErrorInput(errors);
                        }

                        showAlertConfirm('success', res.rm, 'Ok', function(answer) {
                            toggleChangePasswordForm()
                        });
                    });
                }
            });
        }

        function handleUpdateProfile() {
            event.preventDefault();
            fvUpdateProfile.validate().then(function(status) {
                if (status == "Valid") {
                    let formData = new FormData(updateProfileForm);
                    setProcessingButton("kt_account_profile_details_submit", true)
                    clearErrorInput()
                    doPost('/profile', formData, function(message, res) {
                        setProcessingButton("kt_account_profile_details_submit", false)
                        if (!res) return
                        if (res.rc == 300) return showAlert('warning', res.rm, NO_ACTION)

                        if (res.rc == 400) {
                            var errors = res.data;
                            return mappingErrorInput(errors);
                        }

                        showAlert('success', res.rm, REFRESH_PAGE)
                    });
                }
            });
        }
    </script>
@endsection
