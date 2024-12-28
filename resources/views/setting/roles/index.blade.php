@extends('layouts.app')

@section('toolbar')
    <x-toolbar :pageTitle="'Role'">
        <x-breadcrumb :items="[
            ['name' => 'Setting', 'url' => null],
            ['name' => 'Manajemen User', 'url' => null],
            ['name' => 'Role', 'url' => route('roles.index')],
        ]" />

        <x-slot name="toolbarActions">
            <div class="gap-2 d-flex align-items-center gap-lg-3">
                <a href="{{ route('roles.form', ['action' => 'create']) }}"
                    class="btn btn-flex btn-primary h-40px fs-7 fw-bold">Tambah
                    Role</a>
            </div>
        </x-slot>
    </x-toolbar>
@endsection


@section('content')
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
        @foreach ($roles as $role)
            <!--begin::Col-->
            <div class="col-md-4">
                <!--begin::Card-->
                <div class="card card-flush h-md-100">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>{{ ucwords($role->name) }}</h2>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="pt-1 card-body">
                        <!--begin::Users-->
                        <div class="mb-5 text-gray-600 fw-bold">Total user: {{ $role->users_count }}</div>
                        <!--end::Users-->
                        @foreach ($role->menus as $menu)
                            <!--begin::Permissions-->
                            @if ($menu->subMenu->isNotEmpty())
                                <div class="text-gray-600 d-flex flex-column" class="accordion accordion-icon-toggle"
                                    id="kt_accordion_{{ $menu->id }}">
                                    <div class="py-2 cursor-pointer d-flex align-items-center" data-bs-toggle="collapse"
                                        data-bs-target="#kt_accordion_{{ $menu->id }}_item" onclick="rotateIcon(this)">
                                        <span class="bullet bg-primary me-3"></span>
                                        {{ $menu->name }}

                                        <div class="accordion-header d-flex collapsed" style="margin-left: 8px;">
                                            <span class="accordion-icon">
                                                <i class="fas fa-angle-down fs-8"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="collapse" data-bs-parent="#kt_accordion_{{ $menu->id }}"
                                        id="kt_accordion_{{ $menu->id }}_item">
                                        @foreach ($menu->subMenu as $subMenu)
                                            <div class="py-2 mx-6 d-flex align-items-center">
                                                <span class="bullet bg-primary me-3"></span> {{ $subMenu->name }}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @else
                                <div class="text-gray-600 d-flex flex-column">
                                    <div class="py-2 d-flex align-items-center">
                                        <span class="bullet bg-primary me-3"></span> {{ $menu->name }}
                                    </div>
                                </div>
                            @endif
                            <!--end::Permissions-->
                        @endforeach

                    </div>
                    <!--end::Card body-->
                    <!--begin::Card footer-->
                    <div class="flex-wrap pt-0 card-footer">
                        <a href="{{ route('roles.form', ['action' => 'update', 'id' => $role->id]) }}"
                            class="my-1 btn btn-light btn-active-light-primary">Setting
                            Permission</a>
                    </div>
                    <!--end::Card footer-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Col-->
        @endforeach
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        function rotateIcon(elm) {
            let elmIcon = $(elm).find('i').toggleClass('fas fa-angle-down fas fa-angle-up');
        }
    </script>
@endsection
