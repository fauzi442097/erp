@extends('layouts.app')

@section('toolbar')
    <x-toolbar :pageTitle="'User'">
        <x-breadcrumb :items="[['name' => 'Master Data', 'url' => null], ['name' => 'Users', 'url' => route('users.index')]]" />

        <x-slot name="toolbarActions">
            <div class="gap-2 d-flex align-items-center gap-lg-3">
                <button type="button" class="btn btn-primary" onclick="showModalForm('create')">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->Tambah User</button>
            </div>
        </x-slot>

    </x-toolbar>
@endsection

@section('content')
    <!--begin::Card-->
    <div class="card my-card">
        <!--begin::Card header-->
        <div class="border-0 card-header">
            <!--begin::Card title-->
            <div class="card-title">

                <!--begin::Search-->
                <div class="my-1 d-flex align-items-center position-relative">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                            <path
                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <input type="text" data-kt-user-table-filter="search"
                        class="form-control w-250px ps-14 form-control-solid search-datatable"
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

                    <ul class="mb-5 nav nav-tabs nav-line-tabs nav-line-tabs-2x fs-6 my-tabs-datatable">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_active_user"
                                onclick="initDatatable('kt_table_users', 'active')"> Active User </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_deleted_user"
                                onclick="initDatatable('kt_table_deleted_users', 'deleted')"> Deleted User </a>
                        </li>
                    </ul>

                    <!--end::Add user-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Card toolbar-->

        </div>
        <!--end::Card header-->

        <!--begin::Card body-->

        <div class="pt-0 card-body tab-content" id="myTabContent">

            <div class="tab-pane fade show active" id="kt_tab_active_user" role="tabpanel">
                @include('setting.users.datatables.table', ['tableId' => 'kt_table_users'])
            </div>

            <div class="tab-pane fade" id="kt_tab_deleted_user" role="tabpanel">
                @include('setting.users.datatables.table', ['tableId' => 'kt_table_deleted_users'])
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
            initDatatable('kt_table_users', 'active');
            initFormUser();
        })

        function initDatatable(table_id, filter_user) {
            datatable = $("#" + table_id).DataTable({
                searchDelay: 500,
                processing: true,
                serverSide: true,
                pageLength: 10,
                scrollY: "500px",
                scrollX: true,
                scrollCollapse: true,
                destroy: true,
                ajax: {
                    url: '{{ route('users.get_data') }}?type=' + filter_user,
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
                        data: 'deleted_at',
                        orderable: true,
                        searchable: false,
                        visible: filter_user == 'deleted'
                    },
                    {
                        data: 'status',
                        orderable: true,
                        searchable: false,
                        visible: filter_user == 'active'
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

        function handleRestoreUser(userId, name) {
            showAlertConfirm('question', `Apakah Anda yakin akan mengembalikan user ${name}?`, 'Restore', function(answer) {
                if (answer.value) {
                    let formData = new FormData()
                    formData.append('_method', 'PATCH')
                    showLoading()
                    doPost(`users/${userId}/restore`, formData, function(msg, res) {
                        hideLoading()
                        if (!res) return
                        if (res.rc == 300) {
                            return showAlert('warning', res.rm, NO_ACTION);
                        }

                        if (res.rc == 200) {
                            showAlert('success', res.rm, RELOAD_DATATABLE);
                        }
                    })
                }
            })
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
