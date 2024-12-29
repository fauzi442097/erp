@extends('auth.layout')

@section('content')
    <div class="order-2 p-10 d-flex flex-column flex-lg-row-fluid w-lg-50 order-lg-1">
        <div class="d-flex flex-center flex-column flex-lg-row-fluid">
            <div class="p-10 w-lg-500px">
                <form method="POST" action="{{ route('login') }}" class="form w-100" novalidate="novalidate"
                    id="kt_sign_in_form" data-kt-redirect-url="{{ route('home') }}">
                    @csrf
                    <div class="text-center mb-11">
                        <h1 class="mb-3 text-dark fw-bolder">Sign In</h1>
                        <div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
                    </div>

                    @if ($errors->get('email'))
                        <div class="p-5 alert alert-danger d-flex align-items-center mb-11">
                            <i class="ki-duotone ki-shield-tick fs-2hx text-success me-4"><span class="path1"></span><span
                                    class="path2"></span></i>

                            <div class="d-flex flex-column">
                                <h4 class="mb-1 text-danger">Login Gagal</h4>
                                <span>Username atau password salah</span>
                            </div>
                        </div>
                    @endif

                    @if (session('info'))
                        <div class="p-5 alert alert-warning d-flex align-items-center mb-11">
                            <div class="d-flex flex-column">
                                <span> {{ session('info') }} </span>
                            </div>
                        </div>
                    @endif

                    @if (session('status'))
                        <div class="p-5 alert alert-success d-flex align-items-center mb-11">
                            <div class="d-flex flex-column">
                                <span> {{ session('status') }} </span>
                            </div>
                        </div>
                    @endif

                    <div class="mb-8 fv-row">
                        <label class="mb-2 fs-5 form-label">
                            <span>Email</span>
                        </label>
                        <input type="text" placeholder="user@example.com" name="email" autocomplete="off"
                            class="bg-transparent form-control" />
                    </div>

                    <div class="mb-3 fv-row" data-kt-password-meter="true">
                        <div class="mb-1">
                            <label class="mb-2 fs-5 form-label">
                                <span>Password</span>
                            </label>
                            <div class="mb-3 position-relative">
                                {{-- <input class="bg-transparent form-control" value="{{ old('confirm-password') }}"
                                    type="password" placeholder="Password" name="password_confirmation"
                                    autocomplete="off" /> --}}

                                <input type="password" placeholder="*********" name="password" autocomplete="off"
                                    class="bg-transparent form-control" />
                                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                    data-kt-password-meter-control="visibility">
                                    <i class="bi bi-eye-slash fs-2"></i>
                                    <i class="bi bi-eye fs-2 d-none"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="flex-wrap gap-3 mb-8 d-flex flex-stack fs-base fw-semibold">
                        <div></div>
                        <a href="{{ route('password.request') }}" class="link-primary">Lupa Password ?</a>
                    </div>

                    <div class="mb-10 d-grid">
                        <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                            <span class="indicator-label">Sign In</span>
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
    <script src="{{ asset('assets/js/custom/authentication/sign-in/general.js') }}"></script>
@endsection
