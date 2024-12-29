@extends('auth.layout')

@section('content')
    <div class="order-2 p-10 d-flex flex-column flex-lg-row-fluid w-lg-50 order-lg-1">
        <div class="d-flex flex-center flex-column flex-lg-row-fluid">
            <div class="p-10 w-lg-500px">
                <form class="form w-100" action="{{ route('password.email') }}" novalidate="novalidate"
                    id="kt_password_reset_form" data-kt-redirect-url="{{ route('home') }}" method="POST">

                    @csrf
                    <div class="mb-10 text-center">
                        <h1 class="mb-3 text-dark fw-bolder">Lupa Password ?</h1>
                        <div class="text-gray-500 fw-semibold fs-6">
                            Masukkan email Anda untuk reset password
                        </div>
                    </div>

                    @if ($errors->get('email'))
                        <div class="p-5 mb-6 alert alert-danger d-flex align-items-center">
                            <div class="d-flex flex-column">
                                <span>Email tidak terdaftar di dalam sistem</span>
                            </div>
                        </div>
                    @endif

                    @if (session('status'))
                        <div class="p-5 alert alert-success d-flex align-items-center mb-11">
                            <div class="d-flex flex-column">
                                <span>
                                    Kami sudah mengirim email yang berisi link untuk mereset password Anda!
                                </span>
                            </div>
                        </div>
                    @endif

                    <div class="mb-8 fv-row">
                        <label class="mb-2 fs-5 form-label">
                            <span>Email</span>
                        </label>
                        <input type="text" placeholder="user@example.com" name="email" autocomplete="off"
                            class="bg-transparent form-control" value="{{ old('email') }}" />
                    </div>

                    <div class="flex-wrap d-flex justify-content-center pb-lg-0">
                        <a href="{{ route('login') }}" class="btn btn-light me-4">Batal</a>
                        <button type="button" id="kt_password_reset_submit" class="btn btn-primary ">
                            <span class="indicator-label">Reset Password</span>
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
    <script src="{{ asset('assets/js/custom/authentication/reset-password/reset-password.js') }}"></script>
@endsection
