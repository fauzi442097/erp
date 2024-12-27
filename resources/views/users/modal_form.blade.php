 <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered mw-650px">
         <div class="modal-content">

             <div class="modal-header" id="kt_modal_add_user_header">
                 <h2 class="fw-bold" id="title_modal">Add User</h2>
                 <div class="btn btn-icon btn-sm btn-active-icon-primary" onclick="closeModal()">
                     <span class="svg-icon svg-icon-1">
                         <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                             <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                 transform="rotate(-45 6 17.3137)" fill="currentColor" />
                             <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                 transform="rotate(45 7.41422 6)" fill="currentColor" />
                         </svg>
                     </span>
                 </div>
             </div>

             <div class="mx-5 my-5 modal-body mx-xl-15">
                 <form id="kt_modal_add_user_form" class="form" action="#">
                     @csrf

                     <input type="hidden" id="action_type" name="action_type" />
                     <input type="hidden" id="user_id" name="user_id" />

                     <div class="d-flex flex-column me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true"
                         data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                         data-kt-scroll-dependencies="#kt_modal_add_user_header"
                         data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                         <div class="fv-row mb-7">
                             <label class="mb-5 d-block fw-semibold fs-6">Foto</label>
                             <style>
                                 .image-input-placeholder {
                                     background-image: url('assets/media/svg/files/blank-image.svg');
                                 }

                                 [data-bs-theme="dark"] .image-input-placeholder {
                                     background-image: url('assets/media/svg/files/blank-image-dark.svg');
                                 }
                             </style>
                             <div class="image-input image-input-outline image-input-placeholder"
                                 data-kt-image-input="true">
                                 <div class="image-input-wrapper w-125px h-125px" id="container-photo-url"
                                     style="background-image: url(assets/media/svg/files/blank-image.svg);"></div>
                                 <label
                                     class="shadow btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body"
                                     data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                     <i class="bi bi-pencil-fill fs-7"></i>
                                     <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                     <input type="hidden" name="avatar_remove" />
                                 </label>
                                 <span
                                     class="shadow btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body"
                                     data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                     <i class="bi bi-x fs-2"></i>
                                 </span>
                                 <span
                                     class="shadow btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body"
                                     data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                     <i class="bi bi-x fs-2"></i>
                                 </span>
                             </div>

                             <div class="error-input-message">
                                 <div id="avatar_error"></div>
                             </div>

                             <div class="form-text">Jenis file yang diizinkan: png, jpg, jpeg Maksimal 10MB</div>
                         </div>

                         <div class="fv-row mb-7">
                             <label class="mb-2 required fw-semibold fs-6">Nama Lengkap</label>
                             <input type="text" name="name" id="name" class="mb-3 form-control mb-lg-0"
                                 maxlength="255" />

                             <div class="error-input-message">
                                 <div id="name_error"></div>
                             </div>
                         </div>

                         <div class="fv-row mb-7">
                             <label class="mb-2 required fw-semibold fs-6">Email</label>
                             <input type="email" name="email" id="email" class="mb-3 form-control mb-lg-0"
                                 maxlength="255" />

                             <div class="error-input-message">
                                 <div id="email_error"></div>
                             </div>
                         </div>

                         <div class="fv-row mb-7">
                             <label class="mb-2 fw-semibold fs-6">Password</label>

                             <div class="input-group">
                                 <input type="password" class="form-control form-control-lg form-control-solid"
                                     name="password" id="password" disabled value="Admin@123123" />
                                 <button class="input-group-text" onclick="toggleShowPassword(this)"
                                     style="border: none">
                                     <i class="bi bi-eye" style="font-size: 18px;"></i>
                                 </button>
                             </div>
                         </div>

                         <div class="mb-7 fv-row">
                             <label class="mb-5 required fw-semibold fs-6">Role</label>
                             @foreach ($roles as $role)
                                 <div class="d-flex">
                                     <div class="form-check form-check-custom form-check-solid">
                                         <input class="form-check-input me-3" name="role" type="radio"
                                             value="{{ $role->id }}" id="{{ $role->name }}" />
                                         <label class="form-check-label" for="{{ $role->name }}">
                                             <div class="text-gray-800">{{ $role->name }}</div>
                                         </label>
                                     </div>
                                 </div>
                                 @if (!$loop->last)
                                     <div class='my-5 separator separator-dashed'></div>
                                 @endif
                             @endforeach
                         </div>
                     </div>

                     <div class="text-center pt-15">
                         <button type="reset" class="btn btn-light me-3" onclick="closeModal()">Batal</button>

                         <x-submit-button type="submit" id="btn-store-user" onclick="handleStoreUser()">
                             Simpan
                         </x-submit-button>
                     </div>

                 </form>
             </div>
         </div>
     </div>
 </div>
