 <!--begin::Sign-in Method-->
 <div class="mb-5 card mb-xl-10">
     <!--begin::Card header-->
     <div class="border-0 card-header">
         <div class="m-0 card-title">
             <h3 class="m-0 fw-bold"> Ubah Password </h3>
         </div>
     </div>
     <!--end::Card header-->
     <!--begin::Content-->
     <div id="kt_account_settings_signin_method" class="collapse show">
         <!--begin::Card body-->
         <div class="card-body border-top p-9">
             <!--begin::Password-->
             <div class="flex-wrap mb-10 d-flex align-items-center">
                 <!--begin::Label-->
                 <div id="kt_signin_password">
                     <div class="mb-1 fs-6 fw-bold">Password</div>
                     <div class="text-gray-600 fw-semibold">************</div>
                 </div>
                 <!--end::Label-->
                 <!--begin::Edit-->
                 <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                     <!--begin::Form-->
                     <form id="kt_signin_change_password" class="form">
                         @csrf
                         <div class="mb-1 row">
                             <div class="col-lg-4">
                                 <div class="mb-0 fv-row">
                                     <label for="currentpassword" class="mb-3 form-label fs-6 fw-bold">Password
                                         Saat Ini</label>

                                     <div class="input-group">
                                         <input type="password" class="form-control form-control-lg form-control-solid"
                                             name="currentpassword" id="currentpassword" />
                                         <button class="input-group-text" onclick="toggleShowPassword(this)"
                                             style="border: none">
                                             <i class="bi bi-eye" style="font-size: 18px;"></i>
                                         </button>
                                     </div>

                                     <div class="error-input-message">
                                         <div id="currentpassword_error"></div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-4">
                                 <div class="mb-0 fv-row" data-kt-password-meter="true">
                                     <label for="newpassword" class="mb-3 form-label fs-6 fw-bold">Password Baru</label>


                                     <div class="input-group">
                                         <input type="password" class="form-control form-control-lg form-control-solid"
                                             name="newpassword" id="newpassword" />
                                         <button class="border-none input-group-text" style="border: none"
                                             onclick="toggleShowPassword(this)">
                                             <i class="bi bi-eye" style="font-size: 18px;"></i>
                                         </button>
                                     </div>

                                     <div class="error-input-message">
                                         <div id="newpassword_error"></div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-4">
                                 <div class="mb-0 fv-row">
                                     <label for="confirmpassword" class="mb-3 form-label fs-6 fw-bold">Konfirmasi
                                         Password Baru</label>


                                     <div class="input-group">
                                         <input type="password" class="form-control form-control-lg form-control-solid"
                                             name="confirmpassword" id="confirmpassword" />
                                         <button class="border-none input-group-text" style="border: none"
                                             onclick="toggleShowPassword(this)">
                                             <i class="bi bi-eye" style="font-size: 18px;"></i>
                                         </button>
                                     </div>

                                     <div class="error-input-message">
                                         <div id="confirmpassword_error"></div>
                                     </div>
                                 </div>
                             </div>

                         </div>

                         <div class="mb-5 form-text">
                             Minimal 8 karakter atau lebih dengan campuran huruf kapital, huruf kecil, dan angka.
                         </div>

                         <div class="d-flex" style="gap: 8px">
                             <x-submit-button type="submit" id="kt_password_submit" onclick="handleChangePassword()">
                                 Ubah Password
                             </x-submit-button>

                             <button id="kt_password_cancel" type="button"
                                 class="px-6 btn btn-color-gray-400 btn-active-light-primary"
                                 onclick="toggleChangePasswordForm()">Batal</button>
                         </div>
                     </form>
                     <!--end::Form-->
                 </div>
                 <!--end::Edit-->
                 <!--begin::Action-->
                 <div class="ms-auto" id="kt_signin_password_button">
                     <button class="btn btn-light btn-active-light-primary" onclick="toggleChangePasswordForm()">Ubah
                         Password</button>
                 </div>
                 <!--end::Action-->
             </div>
             <!--end::Password-->
         </div>
         <!--end::Card body-->
     </div>
     <!--end::Content-->
 </div>
 <!--end::Sign-in Method-->
