@extends('layouts.app')

@section('toolbar')
    <x-toolbar :pageTitle="'User List'">
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
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_add_user">
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
                        <!--end::Svg Icon-->Add User</button>
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
    @include('users.modal')
@endsection

@section('script')
    <script type="text/javascript">
        var datatable;

        $(document).ready(function() {
            initDatatable();
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
                        data: null,
                        orderable: false,
                        className: 'text-end',
                        render: function(data, type, row) {
                            let setActive = false
                            let labelAktif = 'Non Aktif'
                            if (row.suspended) {
                                setActive = true
                                labelAktif = 'Aktif'
                            }

                            return `
                                <a href="javascript:;" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                    Actions
                                    <span class="m-0 svg-icon fs-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="currentColor" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)"></path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                                <!--begin::Menu-->
                                <div class="py-4 menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="javascript:;" class="px-3 menu-link" data-kt-docs-table-filter="edit_row" onclick="handleToogleAktifUser('${row.id}', '${row.name}', '${setActive}')">
                                            ${labelAktif}
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="javascript:;" onclick="handleDeleteUser('${row.id}', '${row.name}')" class="px-3 menu-link" data-kt-docs-table-filter="delete_row">
                                            Hapus
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->`;
                        },
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


            if (setActive == 'true') {
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
    </script>
@endsection
