@extends('layouts.app')

@section('toolbar')
    <x-toolbar :pageTitle="$pageTitle">
        <x-breadcrumb :items="[['name' => 'Setting', 'url' => null], ['name' => 'Role', 'url' => route('roles.index')]]" />

        <x-slot name="toolbarActions">
            <div class="gap-2 d-flex align-items-center gap-lg-3">
                <a href="{{ route('roles.index') }}"
                    class="btn btn-flex btn-outline btn-color-gray-700 btn-active-color-primary bg-body h-40px fs-7 fw-bold">Kembali</a>
            </div>
        </x-slot>
    </x-toolbar>
@endsection


@section('content')
    <form id="role_form" class="form" action="#">

        <input type="hidden" id="action" value="{{ $action }}" />
        <input type="hidden" name="role_id" id="role_id" value="{{ $id }}" />

        @csrf
        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_role_scroll" data-kt-scroll="true"
            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
            data-kt-scroll-dependencies="#kt_modal_update_role_header"
            data-kt-scroll-wrappers="#kt_modal_update_role_scroll" data-kt-scroll-offset="300px">
            <div class="mb-10 fv-row col-12 col-xl-4">
                <label class="mb-2 fs-5 fw-bold form-label">
                    <span class="required">Nama Role</span>
                </label>
                <input class="form-control" name="role_name" id="role_name" maxlength="30" />

                <div class="error-input-message">
                    <div id="role_name_error"></div>
                </div>
            </div>

            <div class="fv-row">
                <label class="mb-2 fs-5 fw-bold form-label">Role Permissions</label>
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                        <tbody class="text-gray-600 fw-semibold">
                            <tr>
                                <td class="text-gray-800">Administrator Access
                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                        title="Allows a full access to the system"></i>
                                </td>
                                <td>
                                    <label class="form-check form-check-sm form-check-custom me-9">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="kt_roles_select_all" onclick="selectAll(this)" />
                                        <span class="form-check-label" for="kt_roles_select_all"> Pilih Semua </span>
                                    </label>
                                </td>
                            </tr>

                            @foreach ($menus as $menu)
                                @php
                                    $array = explode(',', trim($menu->path, '{}'));
                                    $array = array_map('intval', $array);

                                    $mlClass = '';
                                    if (count($array) == 2) {
                                        $mlClass = 'mx-7';
                                    } elseif (count($array) == 3) {
                                        $mlClass = 'mx-14';
                                    }
                                @endphp
                                <tr id="{{ $menu->parent_id }}_{{ $menu->id }}">
                                    <td class="text-gray-800">
                                        <span class="{{ $mlClass }}">
                                            {{ $menu->name }}</span>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <label class="form-check form-check-sm form-check-custom me-5 me-lg-20">
                                                <input class="form-check-input checkbox-menu parent_{{ $menu->parent_id }}"
                                                    type="checkbox" value="{{ $menu->id }}"
                                                    id="menu_{{ $menu->id }}" name="menus[]"
                                                    onclick="setActiveMenu(this)" />
                                                <span class="form-check-label"></span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="text-center pt-15">
            <x-submit-button type="submit" id="btn-store-role" onclick="handleStore()">
                Simpan
            </x-submit-button>
        </div>
    </form>
    <!--end::Form-->
@endsection

@section('script')
    <script type="text/javascript">
        var fvRole;
        var formRole = document.getElementById("role_form");
        var dataRole = @json($role);

        $(document).ready(function() {
            initFormRole();

            if (dataRole) {
                $("#role_name").val(dataRole.name)
                $("#role_id").val(dataRole.id)

                if (dataRole.menus.length > 0) {
                    dataRole.menus.forEach(function(menu) {
                        $("#menu_" + menu.id).prop('checked', true);
                    })
                }
            }
        });

        function initFormRole() {
            fvRole = FormValidation.formValidation(formRole, {
                fields: {
                    role_name: {
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

        function selectAll(elm) {
            let checked = $(elm).prop('checked');
            $('.checkbox-menu').prop('checked', checked);
        }

        function handleStore() {
            event.preventDefault();
            fvRole.validate().then(function(status) {
                if (status == "Valid") {

                    let totalCheckMenu = $(".checkbox-menu:checked").length;
                    if (totalCheckMenu <= 0) {
                        return showAlert('warning', 'Pilih minimal satu menu')
                    }

                    let formData = new FormData(formRole);
                    setProcessingButton("btn-store-role", true)
                    clearErrorInput()
                    doPost('/roles', formData, function(message, res) {
                        setProcessingButton("btn-store-role", false)
                        if (!res) return
                        if (res.rc == 300) return showAlert('warning', res.rm, NO_ACTION)

                        if (res.rc == 400) {
                            var errors = res.data;
                            return mappingErrorInput(errors);
                        }

                        let redirectUrl = base_url + '/roles';
                        showAlert('success', res.rm, REDIRECT_PAGE, redirectUrl);
                    });
                }
            });
        }

        function setActiveMenu(elm) {
            let checked = $(elm).prop('checked');
            let value = $(elm).val();
            $(".parent_" + value).prop('checked', checked);

            let parentIdClass = $(elm).attr('class').split(' ')[2];
            if (parentIdClass) {
                let parentId = parentIdClass.split('_')[1]
                if (parentId != '') {
                    let totalChild = $(".parent_" + parentId).length;
                    let checkedChild = $(".parent_" + parentId + ':checked').length;
                    let setCheckedParent = totalChild == checkedChild;
                    $("#menu_" + parentId).prop('checked', setCheckedParent);
                }
            }
        }
    </script>
@endsection
