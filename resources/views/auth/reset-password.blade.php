@extends('auth.layout')

@section('content')
    <div class="order-2 p-10 d-flex flex-column flex-lg-row-fluid w-lg-50 order-lg-1">
        <div class="d-flex flex-center flex-column flex-lg-row-fluid">
            <div class="p-10 w-lg-500px">
                <form class="form w-100" novalidate="novalidate" id="kt_new_password_form" method="POST"
                    action="{{ route('password.store') }}" data-kt-redirect-url="{{ route('login') }}">
                    @csrf

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <div class="mb-10 text-center">
                        <h1 class="mb-3 text-dark fw-bolder">Setup New Password</h1>
                        <div class="text-gray-500 fw-semibold fs-6"> Sudah mengatur ulang password ?
                            <a href="{{ route('login') }}" class="link-primary fw-bold">Sign in</a>
                        </div>
                    </div>

                    <x-input-alert-error :messages="$errors->get('password')" />
                    <x-input-alert-error :messages="$errors->get('token')" />
                    <x-input-alert-error :messages="$errors->get('email')" />

                    <div class="mb-8 fv-row">
                        <label class="mb-2 fs-5 form-label">
                            <span>Email</span>
                        </label>
                        <input type="email" name="email" autocomplete="off" class="bg-transparent form-control"
                            value="{{ old('email', $request->email) }}" />
                    </div>

                    <div class="mb-8 fv-row" data-kt-password-meter="true">
                        <div class="mb-1">
                            <label class="mb-2 fs-5 form-label">
                                <span>Password</span>
                            </label>
                            <div class="mb-3 position-relative">
                                <input class="bg-transparent form-control" type="password" placeholder="Password"
                                    name="password" autocomplete="off" value="{{ old('password') }}" />
                                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                    data-kt-password-meter-control="visibility">
                                    <i class="bi bi-eye-slash fs-2"></i>
                                    <i class="bi bi-eye fs-2 d-none"></i>
                                </span>
                            </div>
                            <div class="mb-3 d-flex align-items-center" data-kt-password-meter-control="highlight"
                                id="kt_password_meter_control">
                                <div class="rounded flex-grow-1 bg-secondary bg-active-success h-5px me-2"></div>
                                <div class="rounded flex-grow-1 bg-secondary bg-active-success h-5px me-2"></div>
                                <div class="rounded flex-grow-1 bg-secondary bg-active-success h-5px me-2"></div>
                                <div class="rounded flex-grow-1 bg-secondary bg-active-success h-5px"></div>
                            </div>
                        </div>
                        <div class="text-muted">
                            Minimal 8 karakter atau lebih dengan campuran huruf kapital, huruf kecil, dan angka.
                        </div>
                    </div>

                    <div class="mb-8 fv-row" data-kt-password-meter="true">
                        <div class="mb-1">
                            <label class="mb-2 fs-5 form-label">
                                <span>Konfirmasi Password</span>
                            </label>
                            <div class="mb-3 position-relative">
                                <input class="bg-transparent form-control" value="{{ old('confirm-password') }}"
                                    type="password" placeholder="Password" name="password_confirmation"
                                    autocomplete="off" />
                                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                    data-kt-password-meter-control="visibility">
                                    <i class="bi bi-eye-slash fs-2"></i>
                                    <i class="bi bi-eye fs-2 d-none"></i>
                                </span>
                            </div>
                        </div>
                    </div>


                    <div class="mb-10 d-grid">
                        <button type="button" id="kt_new_password_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="align-middle spinner-border spinner-border-sm ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/custom/authentication/reset-password/new-password.js') }}"></script>
@endsection
