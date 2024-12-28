@extends('layouts.app')

@section('toolbar')
    <x-toolbar :pageTitle="'User'">
        <x-breadcrumb :items="[['name' => 'Master Data', 'url' => null], ['name' => 'Users', 'url' => route('users.index')]]" />
    </x-toolbar>
@endsection

@section('content')
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card header-->
        <div class="pt-6 border-0 card-header">
            <!--begin::Card title-->
            <div class="card-title">

                <!--begin::Search-->
                <div class="my-1 d-flex align-items-center position-relative">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                            <path
                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <input type="text" data-kt-user-table-filter="search" class="form-control w-250px ps-14"
                        onkeyup="handleSearchDatatable(this)" placeholder="Search user" />
                </div>
                <!--end::Search-->

            </div>
            <!--begin::Card title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                    <!--begin::Add user-->
                    <button type="button" class="btn btn-primary" onclick="showModalForm('create')">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                    transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Tambah User</button>
                    <!--end::Add user-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Card toolbar-->

        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="py-4 card-body">
            <div class="table-responsive">
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                    <thead>
                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                            <th></th>
                            <th></th>
                            <th class="min-w-125px">Nama Lengkap</th>
                            <th class="min-w-125px">Email</th>
                            <th class="min-w-125px">Role</th>
                            <th>Status</th>
                            <th class="text-end min-w-100px">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 fw-semibold">
                    </tbody>
                </table>
            </div>
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
    @include('setting.users.modal_form')
@endsection

@section('script')
    <script type="text/javascript">
        var datatable;
        var fvUser;
        var formUser = document.getElementById("kt_modal_add_user_form");

        $(document).ready(function() {
            initDatatable();
            initFormUser();
        })

        function initDatatable() {
            datatable = $("#kt_table_users").DataTable({
                searchDelay: 500,
                processing: true,
                serverSide: true,
                pageLength: 10,
                scrollY: "400px",
                scrollX: true,
                scrollCollapse: true,
                ajax: {
                    url: '{{ route('users.get_data') }}',
                },
                columns: [{
                        name: 'id',
                        data: 'id',
                        orderable: false,
                        visible: false
                    },
                    {
                        name: 'photo_url',
                        data: 'photo_url',
                        orderable: false,
                        searchable: false,
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'email'
                    },
                    {
                        data: 'role',
                        orderable: true,
                        searchable: false,
                    },
                    {
                        data: 'status',
                        orderable: true,
                        searchable: false,
                    },
                    {
                        targets: -1,
                        data: 'actions',
                        orderable: false,
                        className: 'text-end',
                    }
                ],
                order: [
                    [0, 'desc']
                ],
                drawCallback: function(settings) {
                    KTMenu.init();
                }
            });
        }

        function initFormUser() {
            fvUser = FormValidation.formValidation(formUser, {
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

                    role: {
                        validators: {
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
                    }),
                },
            });
        }

        function handleDeleteUser(userId, name) {
            showAlertConfirm('remove_data', `Apakah Anda yakin akan menghapus user ${name}?`, 'Hapus', function(answer) {
                if (answer.value) {
                    let formData = new FormData()
                    formData.append('_method', 'DELETE')
                    formData.append('user_id', userId)
                    showLoading()
                    doPost(`users/${userId}`, formData, function(msg, res) {
                        hideLoading()
                        if (!res) return
                        if (res.rc == 200) {
                            showAlert('success', res.rm, RELOAD_DATATABLE);
                        }
                    })
                }
            })
        }

        function toggleSuspendUser(userId, name) {
            showAlertConfirm('remove_data', `Apakah Anda yakin akan menghapus user ${name}?`, 'Hapus', function(answer) {
                if (answer.value) {
                    let formData = new FormData()
                    formData.append('_method', 'DELETE')
                    formData.append('user_id', userId)
                    showLoading()
                    doPost(`users/${userId}`, formData, function(msg, res) {
                        hideLoading()
                        if (!res) return
                        if (res.rc == 200) {
                            showAlert('success', res.rm, RELOAD_DATATABLE);
                        }
                    })
                }
            })
        }

        function handleToogleAktifUser(userId, name, setActive) {
            let label = 'Menonaktifkan'
            let btnConfirmLabel = 'Non Aktif'


            if (setActive) {
                label = 'Mengaktifkan'
                btnConfirmLabel = 'Aktif'
            }

            showAlertConfirm('question', `Apakah Anda yakin akan ${label} user ${name}?`, btnConfirmLabel, function(
                answer) {
                if (answer.value) {
                    let formData = new FormData()
                    formData.append('_method', 'PATCH')
                    formData.append('active', setActive)
                    showLoading()
                    doPost(`users/${userId}/toogle_aktif`, formData, function(msg, res) {
                        hideLoading()
                        if (!res) return
                        if (res.rc == 200) {
                            showAlert('success', res.rm, RELOAD_DATATABLE);
                        }
                    })
                }
            })
        }

        function handleSearchDatatable(e) {
            datatable.search($(e).val()).draw();
        }

        function showModalForm(action, user_id) {

            fvUser.resetForm();
            formUser.reset();
            clearErrorInput();

            if (action == 'create') {
                $("#kt_modal_add_user").modal('show');
                $("#title_modal").text('Tambah User');
                $("#action_type").val('create');
                $("#container-photo-url").css('background-image',
                    'url(assets/media/svg/files/blank-image.svg)')
            } else {
                $("#title_modal").text('Ubah User');
                $("#action_type").val('update');
                showLoading()
                doGet(`/users/${user_id}`, function(message, res) {
                    hideLoading()
                    if (res.rc == 200) {
                        let user = res.data

                        if (user.full_photo_url) {
                            $("#container-photo-url").css('background-image', `url(${user.full_photo_url})`)
                        } else {
                            $("#container-photo-url").css('background-image',
                                'url(assets/media/svg/files/blank-image.svg)')

                        }

                        $("#user_id").val(user.id)
                        $("#name").val(user.name)
                        $("#email").val(user.email)
                        $("#kt_modal_add_user").modal('show');
                        $("#title_modal").text('Ubah User');
                        $("#action_type").val('update');

                        let roles = user.roles
                        if (roles.length > 0) {
                            $("input[name='role'][value='" + roles[0].id + "']").prop('checked', true)
                        }
                    }
                })
            }
        }

        function closeModal() {
            $("#kt_modal_add_user").modal('hide');
        }

        function handleStoreUser() {
            event.preventDefault();
            fvUser.validate().then(function(status) {
                if (status == "Valid") {
                    let formData = new FormData(formUser);
                    setProcessingButton("btn-store-user", true)
                    clearErrorInput()
                    doPost('/users', formData, function(message, res) {
                        setProcessingButton("btn-store-user", false)

                        if (!res) return
                        if (res.rc == 300) return showAlert('warning', res.rm, NO_ACTION)

                        if (res.rc == 400) {
                            var errors = res.data;
                            return mappingErrorInput(errors);
                        }

                        closeModal()
                        showAlert('success', res.rm, RELOAD_DATATABLE)
                    });
                }
            });
        }
    </script>
@endsection
