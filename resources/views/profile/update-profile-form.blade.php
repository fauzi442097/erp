<!--begin::Basic info-->
<div class="mb-5 card mb-xl-10">
    <!--begin::Card header-->
    <div class="border-0 card-header">
        <!--begin::Card title-->
        <div class="m-0 card-title">
            <h3 class="m-0 fw-bold">Profil</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->
    <!--begin::Content-->
    <div id="kt_account_settings_profile_details" class="collapse show">
        <!--begin::Form-->
        <form id="kt_account_profile_details_form" class="form">
            @csrf
            @method('PATCH')

            <!--begin::Card body-->
            <div class="card-body border-top p-9">
                <!--begin::Input group-->
                <div class="mb-6 row">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Image input-->
                        <div class="image-input image-input-outline" data-kt-image-input="true"
                            style="background-image: url('assets/media/svg/avatars/blank.svg')">
                            <!--begin::Preview existing avatar-->
                            @if (auth()->user()->photo_url)
                                <div class="image-input-wrapper w-125px h-125px"
                                    style="background-image: url('{{ asset(auth()->user()->photo_url) }}')"></div>
                            @else
                                <div class="image-input-wrapper w-125px h-125px"
                                    style="background-image: url('assets/media/svg/avatars/blank.svg')"></div>
                            @endif

                            <!--end::Preview existing avatar-->
                            <!--begin::Label-->
                            <label class="shadow btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                <i class="bi bi-pencil-fill fs-7"></i>
                                <!--begin::Inputs-->
                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="avatar_remove" />

                                <!--end::Inputs-->
                            </label>



                            <!--end::Label-->
                            <!--begin::Cancel-->
                            <span class="shadow btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body"
                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <!--end::Cancel-->
                            <!--begin::Remove-->
                            <span class="shadow btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body"
                                data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <!--end::Remove-->
                        </div>
                        <!--end::Image input-->
                        <!--begin::Hint-->

                        <div class="error-input-message">
                            <div id="avatar_error"></div>
                        </div>

                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                        <!--end::Hint-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="mb-6 row">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6"> Nama Lengkap </label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-12 fv-row">
                                <input type="text" name="name" id="name" maxlength="255"
                                    class="mb-3 form-control form-control-lg form-control-solid mb-lg-0"
                                    placeholder="First name" value="{{ auth()->user()->name }}" />

                                <div class="error-input-message">
                                    <div id="name_error"></div>
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="mb-6 row">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Email</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <input type="email" id="email" name="email" maxlength="255"
                            class="form-control form-control-lg form-control-solid"
                            value="{{ auth()->user()->email }}" />

                        <div class="error-input-message">
                            <div id="email_error"></div>
                        </div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->


            </div>
            <!--end::Card body-->
            <!--begin::Actions-->
            <div class="py-6 card-footer d-flex justify-content-end px-9">
                <x-submit-button type="submit" id="kt_account_profile_details_submit" onclick="handleUpdateProfile()">
                    Simpan Perubahan
                </x-submit-button>
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Content-->
</div>
<!--end::Basic info-->
