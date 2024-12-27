<div id="kt_app_toolbar" class="pt-6 pb-2 app-toolbar">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
        <!--begin::Toolbar wrapper-->
        <div class="flex-wrap gap-4 app-toolbar-wrapper d-flex flex-stack w-100">
            <!--begin::Page title-->
            <div class="gap-1 page-title d-flex flex-column justify-content-center me-3">

                <!--begin::Title-->
                <h1 class="m-0 page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3">
                    {{ $pageTitle }}
                </h1>
                <!--end::Title-->

                {{ $slot }}
            </div>
            <!--end::Page title-->

            <!--begin::Actions-->
            @isset($toolbarActions)
                {{ $toolbarActions }}
            @endisset
            <!--end::Actions-->
        </div>
        <!--end::Toolbar wrapper-->
    </div>
    <!--end::Toolbar container-->
</div>
<!--end::Toolbar-->
