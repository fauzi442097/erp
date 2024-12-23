@extends('layouts.app')

@section('content')
    <!--begin::Row-->
    <div class="row g-5 g-xl-10">
        <!--begin::Col-->
        <div class="col-xxl-6 mb-md-5 mb-xl-10">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-md-6 col-xl-6 mb-xxl-10">
                    <!--begin::Card widget 8-->
                    <div class="mb-5 overflow-hidden card h-md-50 mb-xl-10">
                        <!--begin::Card body-->
                        <div class="px-0 pb-0 card-body d-flex justify-content-between flex-column">
                            <!--begin::Statistics-->
                            <div class="mb-4 px-9">
                                <!--begin::Info-->
                                <div class="mb-2 d-flex align-items-center">
                                    <!--begin::Currency-->
                                    <span class="fs-4 fw-semibold text-gray-400 align-self-start me-1&gt;">$</span>
                                    <!--end::Currency-->
                                    <!--begin::Value-->
                                    <span class="text-gray-800 fs-2hx fw-bold me-2 lh-1">69,700</span>
                                    <!--end::Value-->
                                    <!--begin::Label-->
                                    <span class="badge badge-light-success fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="13" y="6" width="13" height="2"
                                                    rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                <path
                                                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->2.2%</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Description-->
                                <span class="text-gray-400 fs-6 fw-semibold">Total Online
                                    Sales</span>
                                <!--end::Description-->
                            </div>
                            <!--end::Statistics-->
                            <!--begin::Chart-->
                            <div id="kt_card_widget_8_chart" class="min-h-auto" style="height: 125px"></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 8-->
                    <!--begin::Card widget 5-->
                    <div class="card card-flush h-md-50 mb-xl-10">
                        <!--begin::Header-->
                        <div class="pt-5 card-header">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">1,836</span>
                                    <!--end::Amount-->
                                    <!--begin::Badge-->
                                    <span class="badge badge-light-danger fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="11" y="18" width="13" height="2"
                                                    rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                <path
                                                    d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->2.2%</span>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Subtitle-->
                                <span class="pt-1 text-gray-400 fw-semibold fs-6">Total
                                    Sales</span>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="pt-0 card-body d-flex align-items-end">
                            <!--begin::Progress-->
                            <div class="mt-3 d-flex align-items-center flex-column w-100">
                                <div class="mt-auto mb-2 d-flex justify-content-between w-100">
                                    <span class="fw-bolder fs-6 text-dark">1,048 to
                                        Goal</span>
                                    <span class="text-gray-400 fw-bold fs-6">62%</span>
                                </div>
                                <div class="mx-3 rounded h-8px w-100 bg-light-success">
                                    <div class="rounded bg-success h-8px" role="progressbar" style="width: 62%;"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 5-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-xl-6 mb-xxl-10">
                    <!--begin::Card widget 9-->
                    <div class="mb-5 overflow-hidden card h-md-50 mb-xl-10">
                        <!--begin::Card body-->
                        <div class="px-0 pb-0 card-body d-flex justify-content-between flex-column">
                            <!--begin::Statistics-->
                            <div class="mb-4 px-9">
                                <!--begin::Statistics-->
                                <div class="mb-2 d-flex align-items-center">
                                    <!--begin::Value-->
                                    <span class="text-gray-800 fs-2hx fw-bold me-2 lh-1">29,420</span>
                                    <!--end::Value-->
                                    <!--begin::Label-->
                                    <span class="badge badge-light-success fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="13" y="6" width="13" height="2"
                                                    rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                <path
                                                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->2.6%</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Statistics-->
                                <!--begin::Description-->
                                <span class="text-gray-400 fs-6 fw-semibold">Total Online
                                    Visitors</span>
                                <!--end::Description-->
                            </div>
                            <!--end::Statistics-->
                            <!--begin::Chart-->
                            <div id="kt_card_widget_9_chart" class="min-h-auto" style="height: 125px"></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 9-->
                    <!--begin::Card widget 7-->
                    <div class="card card-flush h-md-50 mb-xl-10">
                        <!--begin::Header-->
                        <div class="pt-5 card-header">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Amount-->
                                <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">6.3k</span>
                                <!--end::Amount-->
                                <!--begin::Subtitle-->
                                <span class="pt-1 text-gray-400 fw-semibold fs-6">Total
                                    New Customers</span>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-column justify-content-end pe-0">
                            <!--begin::Title-->
                            <span class="mb-2 text-gray-800 fs-6 fw-bolder d-block">Today’s
                                Heroes</span>
                            <!--end::Title-->
                            <!--begin::Users group-->
                            <div class="symbol-group symbol-hover flex-nowrap">
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                    <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                    title="Michael Eberon">
                                    <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                    title="Susan Redwood">
                                    <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                    title="Melody Macy">
                                    <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                    title="Perry Matthew">
                                    <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                    title="Barry Walter">
                                    <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                </div>
                                <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_view_users">
                                    <span class="text-gray-400 symbol-label bg-light fs-8 fw-bold">+42</span>
                                </a>
                            </div>
                            <!--end::Users group-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 7-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="mb-5 col-xxl-6 mb-xl-10">
            <!--begin::Maps widget 1-->
            <div class="card card-flush h-md-100">
                <!--begin::Header-->
                <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">World Sales</span>
                        <span class="pt-2 text-gray-400 fw-semibold fs-6">Top Selling
                            Countries</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                            data-kt-menu-overflow="true">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                            <span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4"
                                        fill="currentColor" />
                                    <rect x="11" y="11" width="2.6" height="2.6" rx="1.3"
                                        fill="currentColor" />
                                    <rect x="15" y="11" width="2.6" height="2.6" rx="1.3"
                                        fill="currentColor" />
                                    <rect x="7" y="11" width="2.6" height="2.6" rx="1.3"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--begin::Menu 3-->
                        <div class="py-3 menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                            data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="px-3 menu-item">
                                <div class="px-3 pb-2 menu-content text-muted fs-7 text-uppercase">
                                    Payments</div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <a href="#" class="px-3 menu-link">Create
                                    Invoice</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <a href="#" class="px-3 menu-link flex-stack">Create Payment
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                        title="Specify a target name for future usage and reference"></i></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <a href="#" class="px-3 menu-link">Generate
                                    Bill</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                <a href="#" class="px-3 menu-link">
                                    <span class="menu-title">Subscription</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class="py-4 menu-sub menu-sub-dropdown w-175px">
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="#" class="px-3 menu-link">Plans</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="#" class="px-3 menu-link">Billing</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="#" class="px-3 menu-link">Statements</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="my-2 separator"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <div class="px-3 menu-content">
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input w-30px h-20px" type="checkbox"
                                                    value="1" checked="checked" name="notifications" />
                                                <!--end::Input-->
                                                <!--end::Label-->
                                                <span class="form-check-label text-muted fs-6">Recuring</span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="px-3 my-1 menu-item">
                                <a href="#" class="px-3 menu-link">Settings</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body d-flex flex-center">
                    <!--begin::Map container-->
                    <div id="kt_maps_widget_1_map" class="w-100 h-350px"></div>
                    <!--end::Map container-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Maps widget 1-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-10">
        <!--begin::Col-->
        <div class="col-xl-4 mb-xl-10">
            <!--begin::Engage widget 1-->
            <div class="card h-md-100" dir="ltr">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column flex-center">
                    <!--begin::Heading-->
                    <div class="mb-2">
                        <!--begin::Title-->
                        <h1 class="text-center text-gray-800 fw-semibold lh-lg">Have you
                            tried
                            <br />new
                            <span class="fw-bolder">Invoice Manager ?</span>
                        </h1>
                        <!--end::Title-->
                        <!--begin::Illustration-->
                        <div class="py-10 text-center">
                            <img src="assets/media/svg/illustrations/easy/2.svg" class="theme-light-show w-200px"
                                alt="" />
                            <img src="assets/media/svg/illustrations/easy/2-dark.svg" class="theme-dark-show w-200px"
                                alt="" />
                        </div>
                        <!--end::Illustration-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Links-->
                    <div class="mb-1 text-center">
                        <!--begin::Link-->
                        <a class="btn btn-sm btn-primary me-2"
                            href="../../demo39/dist/apps/ecommerce/customers/listing.html">Try
                            now</a>
                        <!--end::Link-->
                        <!--begin::Link-->
                        <a class="btn btn-sm btn-light" href="../../demo39/dist/apps/invoices/view/invoice-1.html">Learn
                            more</a>
                        <!--end::Link-->
                    </div>
                    <!--end::Links-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Engage widget 1-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4 mb-xl-10">
            <!--begin::Chart widget 5-->
            <div class="card card-flush h-md-100">
                <!--begin::Header-->
                <div class="pt-5 card-header flex-nowrap">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">Top Selling
                            Categories</span>
                        <span class="pt-2 text-gray-400 fw-semibold fs-6">8k social
                            visitors</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                            data-kt-menu-overflow="true">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                            <span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4"
                                        fill="currentColor" />
                                    <rect x="11" y="11" width="2.6" height="2.6" rx="1.3"
                                        fill="currentColor" />
                                    <rect x="15" y="11" width="2.6" height="2.6" rx="1.3"
                                        fill="currentColor" />
                                    <rect x="7" y="11" width="2.6" height="2.6" rx="1.3"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--begin::Menu 2-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <div class="px-3 py-4 menu-content fs-6 text-dark fw-bold">
                                    Quick Actions</div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="mb-3 opacity-75 separator"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <a href="#" class="px-3 menu-link">New Ticket</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <a href="#" class="px-3 menu-link">New
                                    Customer</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item" data-kt-menu-trigger="hover"
                                data-kt-menu-placement="right-start">
                                <!--begin::Menu item-->
                                <a href="#" class="px-3 menu-link">
                                    <span class="menu-title">New Group</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--end::Menu item-->
                                <!--begin::Menu sub-->
                                <div class="py-4 menu-sub menu-sub-dropdown w-175px">
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="#" class="px-3 menu-link">Admin
                                            Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="#" class="px-3 menu-link">Staff
                                            Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="#" class="px-3 menu-link">Member
                                            Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <a href="#" class="px-3 menu-link">New Contact</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="mt-3 opacity-75 separator"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <div class="px-3 py-3 menu-content">
                                    <a class="px-4 btn btn-primary btn-sm" href="#">Generate Reports</a>
                                </div>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 2-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="pt-5 card-body ps-6">
                    <div id="kt_charts_widget_5" class="min-h-auto"></div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Chart widget 5-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="mb-5 col-xl-4 mb-xl-10">
            <!--begin::List widget 6-->
            <div class="card card-flush h-md-100">
                <!--begin::Header-->
                <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="text-gray-800 card-label fw-bold">Top Selling
                            Products</span>
                        <span class="mt-1 text-gray-400 fw-semibold fs-6">8k social
                            visitors</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <a href="../../demo39/dist/apps/ecommerce/catalog/categories.html"
                            class="btn btn-sm btn-light">View All</a>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="pt-4 card-body">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table my-0 align-middle table-row-dashed gs-0 gy-4">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="text-gray-500 fs-7 fw-bold border-bottom-0">
                                    <th class="p-0 pb-1 w-50px">ITEM</th>
                                    <th class="ps-0 min-w-140px"></th>
                                    <th class="p-0 pb-1 text-end min-w-140px">TOTAL PRICE
                                    </th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="assets/media/stock/ecommerce/210.gif" class="w-50px" alt="" />
                                    </td>
                                    <td class="ps-0">
                                        <a href="../../demo39/dist/apps/ecommerce/sales/details.html"
                                            class="mb-1 text-gray-800 fw-bold text-hover-primary fs-6 text-start pe-0">Elephant
                                            1802</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item:
                                            #XDG-2347</span>
                                    </td>
                                    <td>
                                        <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">$72.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/media/stock/ecommerce/215.gif" class="w-50px" alt="" />
                                    </td>
                                    <td class="ps-0">
                                        <a href="../../demo39/dist/apps/ecommerce/sales/details.html"
                                            class="mb-1 text-gray-800 fw-bold text-hover-primary fs-6 text-start pe-0">Red
                                            Laga</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item:
                                            #XDG-2347</span>
                                    </td>
                                    <td>
                                        <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">$45.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/media/stock/ecommerce/209.gif" class="w-50px" alt="" />
                                    </td>
                                    <td class="ps-0">
                                        <a href="../../demo39/dist/apps/ecommerce/sales/details.html"
                                            class="mb-1 text-gray-800 fw-bold text-hover-primary fs-6 text-start pe-0">RiseUP</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item:
                                            #XDG-2347</span>
                                    </td>
                                    <td>
                                        <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">$168.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/media/stock/ecommerce/214.gif" class="w-50px" alt="" />
                                    </td>
                                    <td class="ps-0">
                                        <a href="../../demo39/dist/apps/ecommerce/sales/details.html"
                                            class="mb-1 text-gray-800 fw-bold text-hover-primary fs-6 text-start pe-0">Yellow
                                            Stone</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item:
                                            #XDG-2347</span>
                                    </td>
                                    <td>
                                        <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">$72.00</span>
                                    </td>
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::List widget 6-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-10">
        <!--begin::Col-->
        <div class="col-xxl-4 mb-xxl-10">
            <!--begin::List widget 7-->
            <div class="card card-flush h-md-100">
                <!--begin::Header-->
                <div class="card-header py-7">
                    <!--begin::Statistics-->
                    <div class="m-0">
                        <!--begin::Heading-->
                        <div class="mb-2 d-flex align-items-center">
                            <!--begin::Title-->
                            <span class="text-gray-800 fs-2hx fw-bold me-2 lh-1 ls-n2">0.37%</span>
                            <!--end::Title-->
                            <!--begin::Badge-->
                            <span class="badge badge-light-danger fs-base">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                <span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                                            transform="rotate(90 13 6)" fill="currentColor" />
                                        <path
                                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->8.02%</span>
                            <!--end::Badge-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Description-->
                        <span class="text-gray-400 fs-6 fw-semibold">Online store
                            convertion rate</span>
                        <!--end::Description-->
                    </div>
                    <!--end::Statistics-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                            data-kt-menu-overflow="true">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                            <span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4"
                                        fill="currentColor" />
                                    <rect x="11" y="11" width="2.6" height="2.6" rx="1.3"
                                        fill="currentColor" />
                                    <rect x="15" y="11" width="2.6" height="2.6" rx="1.3"
                                        fill="currentColor" />
                                    <rect x="7" y="11" width="2.6" height="2.6" rx="1.3"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--begin::Menu 2-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <div class="px-3 py-4 menu-content fs-6 text-dark fw-bold">
                                    Quick Actions</div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="mb-3 opacity-75 separator"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <a href="#" class="px-3 menu-link">New Ticket</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <a href="#" class="px-3 menu-link">New
                                    Customer</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item" data-kt-menu-trigger="hover"
                                data-kt-menu-placement="right-start">
                                <!--begin::Menu item-->
                                <a href="#" class="px-3 menu-link">
                                    <span class="menu-title">New Group</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--end::Menu item-->
                                <!--begin::Menu sub-->
                                <div class="py-4 menu-sub menu-sub-dropdown w-175px">
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="#" class="px-3 menu-link">Admin
                                            Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="#" class="px-3 menu-link">Staff
                                            Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="#" class="px-3 menu-link">Member
                                            Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <a href="#" class="px-3 menu-link">New Contact</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="mt-3 opacity-75 separator"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <div class="px-3 py-3 menu-content">
                                    <a class="px-4 btn btn-primary btn-sm" href="#">Generate Reports</a>
                                </div>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 2-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="pt-0 card-body">
                    <!--begin::Items-->
                    <div class="mb-0">
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-5">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-5">
                                    <span class="symbol-label">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen004.svg-->
                                        <span class="svg-icon svg-icon-3 svg-icon-gray-600">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z"
                                                    fill="currentColor" />
                                                <path opacity="0.3"
                                                    d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Content-->
                                <div class="me-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Search
                                        Retargeting</a>
                                    <!--end::Title-->
                                    <!--begin::Desc-->
                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Direct
                                        link clicks</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center">
                                <!--begin::Number-->
                                <span class="text-gray-800 fw-bold fs-6 me-3">0.24%</span>
                                <!--end::Number-->
                                <!--begin::Info-->
                                <div class="d-flex flex-center">
                                    <!--begin::label-->
                                    <span class="badge badge-light-success fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="13" y="6" width="13" height="2"
                                                    rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                <path
                                                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->2.4%</span>
                                    <!--end::label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="my-3 separator separator-dashed"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-5">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-5">
                                    <span class="symbol-label">
                                        <!--begin::Svg Icon | path: icons/duotune/social/soc008.svg-->
                                        <span class="svg-icon svg-icon-3 svg-icon-gray-600">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M5.72502 20.1899C5.71502 20.1829 5.70401 20.179 5.69401 20.173C4.66853 19.48 3.87892 18.4906 3.43067 17.3369C2.98243 16.1833 2.89688 14.9202 3.18546 13.7167C3.47405 12.5131 4.12303 11.4263 5.04569 10.6013C5.96836 9.77636 7.12077 9.25259 8.34901 9.09998C8.49301 9.08498 8.67602 9.07397 8.87602 9.06897C9.11095 9.06456 9.33992 9.14308 9.52278 9.29065C9.70563 9.43822 9.83071 9.64541 9.87602 9.87598C9.86302 9.87598 9.85301 9.86902 9.84001 9.86902C9.64001 9.87402 9.457 9.88502 9.313 9.90002C8.18466 10.0339 7.11668 10.4822 6.23097 11.194C5.34525 11.9057 4.67748 12.8521 4.30387 13.9252C3.93026 14.9982 3.86585 16.1548 4.11802 17.2627C4.37019 18.3706 4.92879 19.3854 5.73002 20.191L5.72502 20.1899ZM18.252 6.69495C18.6924 6.96887 19.1764 7.16543 19.683 7.276C19.6261 7.08315 19.5171 6.90974 19.368 6.77478C19.219 6.63982 19.0356 6.54852 18.838 6.51099C18.3152 6.40512 17.8149 6.20855 17.36 5.93005C17.6224 6.222 17.9212 6.47898 18.249 6.69495H18.252ZM8.779 18.395C9.202 18.608 9.67239 18.7093 10.1455 18.6895C10.6187 18.6696 11.0789 18.5292 11.4826 18.2816C11.8863 18.034 12.22 17.6873 12.4522 17.2745C12.6843 16.8618 12.8071 16.3965 12.809 15.923V3.80005C12.809 3.53483 12.9144 3.28043 13.1019 3.0929C13.2894 2.90536 13.5438 2.80005 13.809 2.80005H15.109C15.143 2.80005 15.171 2.81402 15.209 2.81702C15.1441 2.58472 15.0058 2.37967 14.8148 2.23242C14.6237 2.08518 14.3902 2.00361 14.149 2H12.849C12.5838 2 12.3295 2.10531 12.1419 2.29285C11.9544 2.48038 11.849 2.73478 11.849 3V15.126C11.8473 15.5988 11.725 16.0633 11.4937 16.4756C11.2624 16.8879 10.9297 17.2344 10.5271 17.4823C10.1246 17.7302 9.66541 17.8713 9.19309 17.8922C8.72078 17.9131 8.25094 17.8133 7.82801 17.6021C8.08083 17.9363 8.40592 18.2091 8.779 18.4V18.395ZM17.29 5.89502C17.312 5.90902 17.338 5.91705 17.36 5.93005C16.7829 5.31815 16.3857 4.55892 16.212 3.73596C16.1661 3.4943 16.0431 3.27412 15.8613 3.1084C15.6795 2.94268 15.4489 2.84042 15.204 2.81702C15.2215 2.85569 15.2365 2.89545 15.249 2.93604C15.3725 3.5419 15.617 4.11659 15.9676 4.62585C16.3183 5.13512 16.7681 5.56851 17.29 5.90002V5.89502ZM9.91102 11.355C9.90901 11.6105 9.80922 11.8556 9.63218 12.0399C9.45514 12.2242 9.21425 12.3337 8.95899 12.3459C8.24648 12.3859 7.57535 12.6935 7.0799 13.2072C6.58446 13.7208 6.30125 14.4025 6.287 15.116C6.28677 15.6307 6.42963 16.1354 6.69962 16.5737C6.96962 17.012 7.35616 17.3667 7.81602 17.598H7.826C7.45283 17.1152 7.25027 16.5222 7.25001 15.912C7.26404 15.1984 7.54715 14.5165 8.04264 14.0028C8.53814 13.4891 9.20941 13.1817 9.92201 13.142C10.1771 13.1295 10.4177 13.0198 10.5946 12.8356C10.7714 12.6513 10.871 12.4064 10.873 12.151V10.864C10.8711 10.6 10.765 10.3474 10.5776 10.1614C10.3903 9.97535 10.137 9.87097 9.87299 9.87097C9.89293 9.93376 9.90634 9.99843 9.913 10.064L9.91102 11.355ZM19.8 7.31104C19.76 7.30304 19.723 7.285 19.683 7.276C19.7148 7.36988 19.7327 7.46794 19.736 7.56702V8.87305C19.736 9.00783 19.7072 9.141 19.6517 9.26379C19.5961 9.38659 19.5149 9.49613 19.4137 9.58508C19.3124 9.67404 19.1934 9.74036 19.0644 9.77966C18.9355 9.81896 18.7997 9.83033 18.666 9.81299C17.3993 9.64132 16.1936 9.16274 15.154 8.41895V14.912C15.1748 16.4605 14.617 17.9611 13.5898 19.12C12.5625 20.2789 11.1398 21.0127 9.60002 21.178C8.23377 21.2965 6.86771 20.9482 5.72502 20.1899C6.00882 20.4809 6.32067 20.7433 6.65602 20.973C7.80538 21.7435 9.18352 22.0981 10.562 21.978C12.1019 21.8128 13.5247 21.0789 14.5521 19.92C15.5795 18.7612 16.1376 17.2606 16.117 15.712V9.21899C17.1563 9.96278 18.3616 10.4414 19.628 10.613C19.7617 10.6304 19.8975 10.619 20.0264 10.5797C20.1554 10.5404 20.2744 10.4741 20.3757 10.3851C20.4769 10.2962 20.5581 10.1866 20.6137 10.0638C20.6692 9.94105 20.698 9.80776 20.698 9.67297V8.36694C20.695 8.11381 20.6036 7.86973 20.4396 7.67688C20.2757 7.48403 20.0494 7.35465 19.8 7.31104Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M15.149 14.912V8.41895C16.1886 9.16274 17.3943 9.64132 18.661 9.81299C18.7947 9.83033 18.9305 9.81896 19.0594 9.77966C19.1884 9.74036 19.3074 9.67404 19.4087 9.58508C19.5099 9.49613 19.5911 9.38659 19.6466 9.26379C19.7022 9.141 19.731 9.00783 19.731 8.87305V7.56702C19.7277 7.46794 19.7098 7.36988 19.678 7.276C19.1714 7.16543 18.6874 6.96887 18.247 6.69495C17.9182 6.47919 17.6184 6.22219 17.355 5.93005C17.333 5.91705 17.307 5.90902 17.285 5.89502C16.7636 5.56407 16.3142 5.13154 15.9635 4.62317C15.6129 4.1148 15.3681 3.541 15.244 2.93604C15.2315 2.89545 15.2165 2.85569 15.199 2.81702C15.166 2.81702 15.138 2.80005 15.099 2.80005H13.799C13.5338 2.80005 13.2794 2.90536 13.0919 3.0929C12.9044 3.28043 12.799 3.53483 12.799 3.80005V15.926C12.7986 16.5066 12.616 17.0725 12.277 17.5438C11.938 18.0152 11.4597 18.3683 10.9093 18.5533C10.359 18.7384 9.76452 18.7462 9.20957 18.5756C8.65462 18.4049 8.16721 18.0644 7.81602 17.6021H7.80601C7.34614 17.3707 6.95964 17.016 6.68964 16.5778C6.41964 16.1395 6.27679 15.6348 6.27701 15.12C6.29127 14.4065 6.57445 13.7247 7.06989 13.2111C7.56534 12.6974 8.2365 12.3899 8.94901 12.35C9.20427 12.3377 9.44516 12.2282 9.6222 12.0439C9.79924 11.8597 9.899 11.6146 9.90101 11.359V10.072C9.89434 10.0065 9.88093 9.94182 9.861 9.87903C9.848 9.87903 9.83802 9.87195 9.82502 9.87195C9.62502 9.87695 9.44201 9.88795 9.29801 9.90295C8.51517 9.85635 7.73118 9.97297 6.99573 10.2452C6.26029 10.5175 5.58941 10.9396 5.02564 11.4847C4.46187 12.0299 4.01752 12.6861 3.72071 13.412C3.42389 14.1379 3.2811 14.9176 3.3014 15.7015C3.32169 16.4855 3.50462 17.2568 3.8386 17.9663C4.17258 18.6759 4.6503 19.3082 5.24152 19.8235C5.83274 20.3387 6.52456 20.7255 7.27311 20.9594C8.02166 21.1932 8.81062 21.2691 9.59 21.182C11.1314 21.0179 12.5559 20.2839 13.5843 19.124C14.6127 17.9641 15.1707 16.462 15.149 14.912Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Content-->
                                <div class="me-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Social
                                        Retargeting</a>
                                    <!--end::Title-->
                                    <!--begin::Desc-->
                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Direct
                                        link clicks</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center">
                                <!--begin::Number-->
                                <span class="text-gray-800 fw-bold fs-6 me-3">0.94%</span>
                                <!--end::Number-->
                                <!--begin::Info-->
                                <div class="d-flex flex-center">
                                    <!--begin::label-->
                                    <span class="badge badge-light-danger fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="11" y="18" width="13" height="2"
                                                    rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                <path
                                                    d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->9.4%</span>
                                    <!--end::label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="my-3 separator separator-dashed"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-5">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-5">
                                    <span class="symbol-label">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                        <span class="svg-icon svg-icon-3 svg-icon-gray-600">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Content-->
                                <div class="me-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Email
                                        Retargeting</a>
                                    <!--end::Title-->
                                    <!--begin::Desc-->
                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Direct
                                        link clicks</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center">
                                <!--begin::Number-->
                                <span class="text-gray-800 fw-bold fs-6 me-3">1.23%</span>
                                <!--end::Number-->
                                <!--begin::Info-->
                                <div class="d-flex flex-center">
                                    <!--begin::label-->
                                    <span class="badge badge-light-success fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="13" y="6" width="13" height="2"
                                                    rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                <path
                                                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->0.2%</span>
                                    <!--end::label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="my-3 separator separator-dashed"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-5">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-5">
                                    <span class="symbol-label">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com001.svg-->
                                        <span class="svg-icon svg-icon-3 svg-icon-gray-600">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M19 10.4C19 10.3 19 10.2 19 10C19 8.9 18.1 8 17 8H16.9C15.6 6.2 14.6 4.29995 13.9 2.19995C13.3 2.09995 12.6 2 12 2C11.9 2 11.8 2 11.7 2C12.4 4.6 13.5 7.10005 15.1 9.30005C15 9.50005 15 9.7 15 10C15 11.1 15.9 12 17 12C17.1 12 17.3 12 17.4 11.9C18.6 13 19.9 14 21.4 14.8C21.4 14.8 21.5 14.8 21.5 14.9C21.7 14.2 21.8 13.5 21.9 12.7C20.9 12.1 19.9 11.3 19 10.4Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M12 15C11 13.1 10.2 11.2 9.60001 9.19995C9.90001 8.89995 10 8.4 10 8C10 7.1 9.40001 6.39998 8.70001 6.09998C8.40001 4.99998 8.20001 3.90005 8.00001 2.80005C7.30001 3.10005 6.70001 3.40002 6.20001 3.90002C6.40001 4.80002 6.50001 5.6 6.80001 6.5C6.40001 6.9 6.10001 7.4 6.10001 8C6.10001 9 6.80001 9.8 7.80001 10C8.30001 11.6 9.00001 13.2 9.70001 14.7C7.10001 13.2 4.70001 11.5 2.40001 9.5C2.20001 10.3 2.10001 11.1 2.10001 11.9C4.60001 13.9 7.30001 15.7 10.1 17.2C10.2 18.2 11 19 12 19C12.6 20 13.2 20.9 13.9 21.8C14.6 21.7 15.3 21.5 15.9 21.2C15.4 20.5 14.9 19.8 14.4 19.1C15.5 19.5 16.5 19.9 17.6 20.2C18.3 19.8 18.9 19.2 19.4 18.6C17.6 18.1 15.7 17.5 14 16.7C13.9 15.8 13.1 15 12 15Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Content-->
                                <div class="me-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Referrals
                                        Customers</a>
                                    <!--end::Title-->
                                    <!--begin::Desc-->
                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Direct
                                        link clicks</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center">
                                <!--begin::Number-->
                                <span class="text-gray-800 fw-bold fs-6 me-3">0.08%</span>
                                <!--end::Number-->
                                <!--begin::Info-->
                                <div class="d-flex flex-center">
                                    <!--begin::label-->
                                    <span class="badge badge-light-danger fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="11" y="18" width="13" height="2"
                                                    rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                <path
                                                    d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->0.4%</span>
                                    <!--end::label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="my-3 separator separator-dashed"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-5">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-5">
                                    <span class="symbol-label">
                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs026.svg-->
                                        <span class="svg-icon svg-icon-3 svg-icon-gray-600">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M7 20.5L2 17.6V11.8L7 8.90002L12 11.8V17.6L7 20.5ZM21 20.8V18.5L19 17.3L17 18.5V20.8L19 22L21 20.8Z"
                                                    fill="currentColor" />
                                                <path d="M22 14.1V6L15 2L8 6V14.1L15 18.2L22 14.1Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Content-->
                                <div class="me-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Other</a>
                                    <!--end::Title-->
                                    <!--begin::Desc-->
                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Direct
                                        link clicks</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center">
                                <!--begin::Number-->
                                <span class="text-gray-800 fw-bold fs-6 me-3">0.46%</span>
                                <!--end::Number-->
                                <!--begin::Info-->
                                <div class="d-flex flex-center">
                                    <!--begin::label-->
                                    <span class="badge badge-light-success fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="13" y="6" width="13" height="2"
                                                    rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                <path
                                                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->8.3%</span>
                                    <!--end::label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Items-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::List widget 7-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="mb-5 col-xxl-8 mb-xl-10">
            <!--begin::Chart widget 13-->
            <div class="card card-flush h-md-100">
                <!--begin::Header-->
                <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">Sales Statistics</span>
                        <span class="pt-2 text-gray-400 fw-semibold fs-6">Top Selling
                            Products</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                            data-kt-menu-overflow="true">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                            <span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4"
                                        fill="currentColor" />
                                    <rect x="11" y="11" width="2.6" height="2.6" rx="1.3"
                                        fill="currentColor" />
                                    <rect x="15" y="11" width="2.6" height="2.6" rx="1.3"
                                        fill="currentColor" />
                                    <rect x="7" y="11" width="2.6" height="2.6" rx="1.3"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--begin::Menu-->
                        <div class="py-4 menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-100px"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <a href="#" class="px-3 menu-link">Remove</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <a href="#" class="px-3 menu-link">Mute</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <a href="#" class="px-3 menu-link">Settings</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="pt-5 card-body">
                    <!--begin::Chart container-->
                    <div id="kt_charts_widget_13_chart" class="w-100 h-325px"></div>
                    <!--end::Chart container-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Chart widget 13-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-10">
        <!--begin::Col-->
        <div class="col-xl-4 mb-xl-10">
            <!--begin::List widget 8-->
            <div class="card card-flush h-xl-100">
                <!--begin::Header-->
                <div class="mb-5 card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="text-gray-800 card-label fw-bold">Visits by
                            Country</span>
                        <span class="mt-1 text-gray-400 fw-semibold fs-6">20 countries
                            share 97% visits</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <a href="../../demo39/dist/apps/ecommerce/sales/listing.html" class="btn btn-sm btn-light">View
                            All</a>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="pt-0 card-body">
                    <!--begin::Items-->
                    <div class="m-0">
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Flag-->
                            <img src="assets/media/flags/united-states.svg" class="me-4 w-25px"
                                style="border-radius: 4px" alt="" />
                            <!--end::Flag-->
                            <!--begin::Section-->
                            <div class="gap-2 d-flex flex-stack flex-row-fluid d-grid">
                                <!--begin::Content-->
                                <div class="me-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">United
                                        States</a>
                                    <!--end::Title-->
                                    <!--begin::Desc-->
                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Direct
                                        link clicks</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Content-->
                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-6 me-3 d-block">9,763</span>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="m-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success fs-base">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                            <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="13" y="6" width="13" height="2"
                                                        rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                    <path
                                                        d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->2.6%</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="my-3 separator separator-dashed"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Flag-->
                            <img src="assets/media/flags/brazil.svg" class="me-4 w-25px" style="border-radius: 4px"
                                alt="" />
                            <!--end::Flag-->
                            <!--begin::Section-->
                            <div class="gap-2 d-flex flex-stack flex-row-fluid d-grid">
                                <!--begin::Content-->
                                <div class="me-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Brasil</a>
                                    <!--end::Title-->
                                    <!--begin::Desc-->
                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">All
                                        Social Channels</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Content-->
                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-6 me-3 d-block">4,062</span>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="m-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-danger fs-base">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                            <span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="11" y="18" width="13" height="2"
                                                        rx="1" transform="rotate(-90 11 18)"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->0.4%</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="my-3 separator separator-dashed"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Flag-->
                            <img src="assets/media/flags/turkey.svg" class="me-4 w-25px" style="border-radius: 4px"
                                alt="" />
                            <!--end::Flag-->
                            <!--begin::Section-->
                            <div class="gap-2 d-flex flex-stack flex-row-fluid d-grid">
                                <!--begin::Content-->
                                <div class="me-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Turkey</a>
                                    <!--end::Title-->
                                    <!--begin::Desc-->
                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Mailchimp
                                        Campaigns</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Content-->
                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-6 me-3 d-block">1,680</span>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="m-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success fs-base">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                            <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="13" y="6" width="13" height="2"
                                                        rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                    <path
                                                        d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->0.2%</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="my-3 separator separator-dashed"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Flag-->
                            <img src="assets/media/flags/france.svg" class="me-4 w-25px" style="border-radius: 4px"
                                alt="" />
                            <!--end::Flag-->
                            <!--begin::Section-->
                            <div class="gap-2 d-flex flex-stack flex-row-fluid d-grid">
                                <!--begin::Content-->
                                <div class="me-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">France</a>
                                    <!--end::Title-->
                                    <!--begin::Desc-->
                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Impact
                                        Radius visits</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Content-->
                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-6 me-3 d-block">849</span>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="m-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success fs-base">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                            <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="13" y="6" width="13" height="2"
                                                        rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                    <path
                                                        d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->4.1%</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="my-3 separator separator-dashed"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Flag-->
                            <img src="assets/media/flags/india.svg" class="me-4 w-25px" style="border-radius: 4px"
                                alt="" />
                            <!--end::Flag-->
                            <!--begin::Section-->
                            <div class="gap-2 d-flex flex-stack flex-row-fluid d-grid">
                                <!--begin::Content-->
                                <div class="me-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">India</a>
                                    <!--end::Title-->
                                    <!--begin::Desc-->
                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Many
                                        Sources</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Content-->
                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-6 me-3 d-block">604</span>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="m-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-danger fs-base">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                            <span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="11" y="18" width="13" height="2"
                                                        rx="1" transform="rotate(-90 11 18)"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->8.3%</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="my-3 separator separator-dashed"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Flag-->
                            <img src="assets/media/flags/sweden.svg" class="me-4 w-25px" style="border-radius: 4px"
                                alt="" />
                            <!--end::Flag-->
                            <!--begin::Section-->
                            <div class="gap-2 d-flex flex-stack flex-row-fluid d-grid">
                                <!--begin::Content-->
                                <div class="me-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Sweden</a>
                                    <!--end::Title-->
                                    <!--begin::Desc-->
                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social
                                        Network</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Content-->
                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-6 me-3 d-block">237</span>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="m-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success fs-base">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                            <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="13" y="6" width="13" height="2"
                                                        rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                    <path
                                                        d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->1.9%</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Items-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::LIst widget 8-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4 mb-xl-10">
            <!--begin::List widget 9-->
            <div class="card card-flush h-xl-100">
                <!--begin::Header-->
                <div class="card-header py-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="text-gray-800 card-label fw-bold">Social Network
                            Visits</span>
                        <span class="mt-1 text-gray-400 fw-semibold fs-6">8k social
                            visitors</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-sm btn-light">View All</a>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="pt-3 card-body d-flex justify-content-between flex-column">
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Flag-->
                        <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="me-4 w-30px"
                            style="border-radius: 4px" alt="" />
                        <!--end::Flag-->
                        <!--begin::Section-->
                        <div class="flex-wrap gap-2 d-flex align-items-center flex-stack flex-row-fluid d-grid">
                            <!--begin::Content-->
                            <div class="me-5">
                                <!--begin::Title-->
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Dribbble</a>
                                <!--end::Title-->
                                <!--begin::Desc-->
                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Community</span>
                                <!--end::Desc-->
                            </div>
                            <!--end::Content-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center">
                                <!--begin::Number-->
                                <span class="text-gray-800 fw-bold fs-4 me-3">579</span>
                                <!--end::Number-->
                                <!--begin::Info-->
                                <div class="m-0">
                                    <!--begin::Label-->
                                    <span class="badge badge-light-success fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="13" y="6" width="13" height="2"
                                                    rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                <path
                                                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->2.6%</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="my-3 separator separator-dashed"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Flag-->
                        <img src="assets/media/svg/brand-logos/linkedin-1.svg" class="me-4 w-30px"
                            style="border-radius: 4px" alt="" />
                        <!--end::Flag-->
                        <!--begin::Section-->
                        <div class="flex-wrap gap-2 d-flex align-items-center flex-stack flex-row-fluid d-grid">
                            <!--begin::Content-->
                            <div class="me-5">
                                <!--begin::Title-->
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Linked
                                    In</a>
                                <!--end::Title-->
                                <!--begin::Desc-->
                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social
                                    Media</span>
                                <!--end::Desc-->
                            </div>
                            <!--end::Content-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center">
                                <!--begin::Number-->
                                <span class="text-gray-800 fw-bold fs-4 me-3">2,588</span>
                                <!--end::Number-->
                                <!--begin::Info-->
                                <div class="m-0">
                                    <!--begin::Label-->
                                    <span class="badge badge-light-danger fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="11" y="18" width="13" height="2"
                                                    rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                <path
                                                    d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->0.4%</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="my-3 separator separator-dashed"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Flag-->
                        <img src="assets/media/svg/brand-logos/slack-icon.svg" class="me-4 w-30px"
                            style="border-radius: 4px" alt="" />
                        <!--end::Flag-->
                        <!--begin::Section-->
                        <div class="flex-wrap gap-2 d-flex align-items-center flex-stack flex-row-fluid d-grid">
                            <!--begin::Content-->
                            <div class="me-5">
                                <!--begin::Title-->
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Slack</a>
                                <!--end::Title-->
                                <!--begin::Desc-->
                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
                                <!--end::Desc-->
                            </div>
                            <!--end::Content-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center">
                                <!--begin::Number-->
                                <span class="text-gray-800 fw-bold fs-4 me-3">794</span>
                                <!--end::Number-->
                                <!--begin::Info-->
                                <div class="m-0">
                                    <!--begin::Label-->
                                    <span class="badge badge-light-success fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="13" y="6" width="13" height="2"
                                                    rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                <path
                                                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->0.2%</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="my-3 separator separator-dashed"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Flag-->
                        <img src="assets/media/svg/brand-logos/youtube-3.svg" class="me-4 w-30px"
                            style="border-radius: 4px" alt="" />
                        <!--end::Flag-->
                        <!--begin::Section-->
                        <div class="flex-wrap gap-2 d-flex align-items-center flex-stack flex-row-fluid d-grid">
                            <!--begin::Content-->
                            <div class="me-5">
                                <!--begin::Title-->
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">YouTube</a>
                                <!--end::Title-->
                                <!--begin::Desc-->
                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Video
                                    Channel</span>
                                <!--end::Desc-->
                            </div>
                            <!--end::Content-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center">
                                <!--begin::Number-->
                                <span class="text-gray-800 fw-bold fs-4 me-3">1,578</span>
                                <!--end::Number-->
                                <!--begin::Info-->
                                <div class="m-0">
                                    <!--begin::Label-->
                                    <span class="badge badge-light-success fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="13" y="6" width="13" height="2"
                                                    rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                <path
                                                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->4.1%</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="my-3 separator separator-dashed"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Flag-->
                        <img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="me-4 w-30px"
                            style="border-radius: 4px" alt="" />
                        <!--end::Flag-->
                        <!--begin::Section-->
                        <div class="flex-wrap gap-2 d-flex align-items-center flex-stack flex-row-fluid d-grid">
                            <!--begin::Content-->
                            <div class="me-5">
                                <!--begin::Title-->
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Instagram</a>
                                <!--end::Title-->
                                <!--begin::Desc-->
                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social
                                    Network</span>
                                <!--end::Desc-->
                            </div>
                            <!--end::Content-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center">
                                <!--begin::Number-->
                                <span class="text-gray-800 fw-bold fs-4 me-3">3,458</span>
                                <!--end::Number-->
                                <!--begin::Info-->
                                <div class="m-0">
                                    <!--begin::Label-->
                                    <span class="badge badge-light-success fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="13" y="6" width="13" height="2"
                                                    rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                <path
                                                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->8.3%</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="my-3 separator separator-dashed"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Flag-->
                        <img src="assets/media/svg/brand-logos/facebook-3.svg" class="me-4 w-30px"
                            style="border-radius: 4px" alt="" />
                        <!--end::Flag-->
                        <!--begin::Section-->
                        <div class="flex-wrap gap-2 d-flex align-items-center flex-stack flex-row-fluid d-grid">
                            <!--begin::Content-->
                            <div class="me-5">
                                <!--begin::Title-->
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Facebook</a>
                                <!--end::Title-->
                                <!--begin::Desc-->
                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social
                                    Network</span>
                                <!--end::Desc-->
                            </div>
                            <!--end::Content-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center">
                                <!--begin::Number-->
                                <span class="text-gray-800 fw-bold fs-4 me-3">2,047</span>
                                <!--end::Number-->
                                <!--begin::Info-->
                                <div class="m-0">
                                    <!--begin::Label-->
                                    <span class="badge badge-light-success fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="13" y="6" width="13" height="2"
                                                    rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                <path
                                                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->1.9%</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::List widget 9-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="mb-5 col-xl-4 mb-xl-10">
            <!--begin::Chart widget 14-->
            <div class="card card-flush h-xl-100">
                <!--begin::Header-->
                <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">Departments</span>
                        <span class="pt-2 text-gray-400 fw-semibold fs-6">Performance &
                            achievements</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                            data-kt-menu-overflow="true">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                            <span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4"
                                        fill="currentColor" />
                                    <rect x="11" y="11" width="2.6" height="2.6" rx="1.3"
                                        fill="currentColor" />
                                    <rect x="15" y="11" width="2.6" height="2.6" rx="1.3"
                                        fill="currentColor" />
                                    <rect x="7" y="11" width="2.6" height="2.6" rx="1.3"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--begin::Menu 3-->
                        <div class="py-3 menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                            data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="px-3 menu-item">
                                <div class="px-3 pb-2 menu-content text-muted fs-7 text-uppercase">
                                    Payments</div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <a href="#" class="px-3 menu-link">Create
                                    Invoice</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <a href="#" class="px-3 menu-link flex-stack">Create Payment
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                        title="Specify a target name for future usage and reference"></i></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <a href="#" class="px-3 menu-link">Generate
                                    Bill</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item" data-kt-menu-trigger="hover"
                                data-kt-menu-placement="right-end">
                                <a href="#" class="px-3 menu-link">
                                    <span class="menu-title">Subscription</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class="py-4 menu-sub menu-sub-dropdown w-175px">
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="#" class="px-3 menu-link">Plans</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="#" class="px-3 menu-link">Billing</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="#" class="px-3 menu-link">Statements</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="my-2 separator"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <div class="px-3 menu-content">
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input w-30px h-20px" type="checkbox"
                                                    value="1" checked="checked" name="notifications" />
                                                <!--end::Input-->
                                                <!--end::Label-->
                                                <span class="form-check-label text-muted fs-6">Recuring</span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="px-3 my-1 menu-item">
                                <a href="#" class="px-3 menu-link">Settings</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="pt-5 card-body">
                    <!--begin::Chart container-->
                    <div id="kt_charts_widget_14_chart" class="w-100 h-350px"></div>
                    <!--end::Chart container-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Chart widget 14-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-10">
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::List widget 12-->
            <div class="card card-flush h-xl-100">
                <!--begin::Header-->
                <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="text-gray-800 card-label fw-bold">Visits by
                            Source</span>
                        <span class="mt-1 text-gray-400 fw-semibold fs-6">29.4k
                            visitors</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                            data-kt-menu-overflow="true">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                            <span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4"
                                        fill="currentColor" />
                                    <rect x="11" y="11" width="2.6" height="2.6" rx="1.3"
                                        fill="currentColor" />
                                    <rect x="15" y="11" width="2.6" height="2.6" rx="1.3"
                                        fill="currentColor" />
                                    <rect x="7" y="11" width="2.6" height="2.6" rx="1.3"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--begin::Menu 2-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <div class="px-3 py-4 menu-content fs-6 text-dark fw-bold">
                                    Quick Actions</div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="mb-3 opacity-75 separator"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <a href="#" class="px-3 menu-link">New Ticket</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <a href="#" class="px-3 menu-link">New
                                    Customer</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item" data-kt-menu-trigger="hover"
                                data-kt-menu-placement="right-start">
                                <!--begin::Menu item-->
                                <a href="#" class="px-3 menu-link">
                                    <span class="menu-title">New Group</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--end::Menu item-->
                                <!--begin::Menu sub-->
                                <div class="py-4 menu-sub menu-sub-dropdown w-175px">
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="#" class="px-3 menu-link">Admin
                                            Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="#" class="px-3 menu-link">Staff
                                            Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="#" class="px-3 menu-link">Member
                                            Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <a href="#" class="px-3 menu-link">New Contact</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="mt-3 opacity-75 separator"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <div class="px-3 py-3 menu-content">
                                    <a class="px-4 btn btn-primary btn-sm" href="#">Generate Reports</a>
                                </div>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 2-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body d-flex align-items-end">
                    <!--begin::Wrapper-->
                    <div class="w-100">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-30px me-5">
                                <span class="symbol-label">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                                    <span class="svg-icon svg-icon-3 svg-icon-gray-600">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M4.05424 15.1982C8.34524 7.76818 13.5782 3.26318 20.9282 2.01418C21.0729 1.98837 21.2216 1.99789 21.3618 2.04193C21.502 2.08597 21.6294 2.16323 21.7333 2.26712C21.8372 2.37101 21.9144 2.49846 21.9585 2.63863C22.0025 2.7788 22.012 2.92754 21.9862 3.07218C20.7372 10.4222 16.2322 15.6552 8.80224 19.9462L4.05424 15.1982ZM3.81924 17.3372L2.63324 20.4482C2.58427 20.5765 2.5735 20.7163 2.6022 20.8507C2.63091 20.9851 2.69788 21.1082 2.79503 21.2054C2.89218 21.3025 3.01536 21.3695 3.14972 21.3982C3.28408 21.4269 3.42387 21.4161 3.55224 21.3672L6.66524 20.1802L3.81924 17.3372ZM16.5002 5.99818C16.2036 5.99818 15.9136 6.08615 15.6669 6.25097C15.4202 6.41579 15.228 6.65006 15.1144 6.92415C15.0009 7.19824 14.9712 7.49984 15.0291 7.79081C15.0869 8.08178 15.2298 8.34906 15.4396 8.55884C15.6494 8.76862 15.9166 8.91148 16.2076 8.96935C16.4986 9.02723 16.8002 8.99753 17.0743 8.884C17.3484 8.77046 17.5826 8.5782 17.7474 8.33153C17.9123 8.08486 18.0002 7.79485 18.0002 7.49818C18.0002 7.10035 17.8422 6.71882 17.5609 6.43752C17.2796 6.15621 16.8981 5.99818 16.5002 5.99818Z"
                                                fill="currentColor" />
                                            <path
                                                d="M4.05423 15.1982L2.24723 13.3912C2.15505 13.299 2.08547 13.1867 2.04395 13.0632C2.00243 12.9396 1.9901 12.8081 2.00793 12.679C2.02575 12.5498 2.07325 12.4266 2.14669 12.3189C2.22013 12.2112 2.31752 12.1219 2.43123 12.0582L9.15323 8.28918C7.17353 10.3717 5.4607 12.6926 4.05423 15.1982ZM8.80023 19.9442L10.6072 21.7512C10.6994 21.8434 10.8117 21.9129 10.9352 21.9545C11.0588 21.996 11.1903 22.0083 11.3195 21.9905C11.4486 21.9727 11.5718 21.9252 11.6795 21.8517C11.7872 21.7783 11.8765 21.6809 11.9402 21.5672L15.7092 14.8442C13.6269 16.8245 11.3061 18.5377 8.80023 19.9442ZM7.04023 18.1832L12.5832 12.6402C12.7381 12.4759 12.8228 12.2577 12.8195 12.032C12.8161 11.8063 12.725 11.5907 12.5653 11.4311C12.4057 11.2714 12.1901 11.1803 11.9644 11.1769C11.7387 11.1736 11.5205 11.2583 11.3562 11.4132L5.81323 16.9562L7.04023 18.1832Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Container-->
                            <div class="flex-wrap gap-1 d-flex align-items-center flex-stack d-grid flex-row-fluid">
                                <!--begin::Content-->
                                <div class="me-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Direct
                                        Source</a>
                                    <!--end::Title-->
                                    <!--begin::Desc-->
                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Direct
                                        link clicks</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Content-->
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-4 me-3">1,067</span>
                                    <!--end::Number-->
                                    <!--begin::Info-->
                                    <!--begin::label-->
                                    <span class="badge badge-light-success fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="13" y="6" width="13" height="2"
                                                    rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                <path
                                                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->2.6%</span>
                                    <!--end::label-->
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="my-3 separator separator-dashed"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-30px me-5">
                                <span class="symbol-label">
                                    <!--begin::Svg Icon | path: icons/duotune/social/soc008.svg-->
                                    <span class="svg-icon svg-icon-3 svg-icon-gray-600">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M5.72502 20.1899C5.71502 20.1829 5.70401 20.179 5.69401 20.173C4.66853 19.48 3.87892 18.4906 3.43067 17.3369C2.98243 16.1833 2.89688 14.9202 3.18546 13.7167C3.47405 12.5131 4.12303 11.4263 5.04569 10.6013C5.96836 9.77636 7.12077 9.25259 8.34901 9.09998C8.49301 9.08498 8.67602 9.07397 8.87602 9.06897C9.11095 9.06456 9.33992 9.14308 9.52278 9.29065C9.70563 9.43822 9.83071 9.64541 9.87602 9.87598C9.86302 9.87598 9.85301 9.86902 9.84001 9.86902C9.64001 9.87402 9.457 9.88502 9.313 9.90002C8.18466 10.0339 7.11668 10.4822 6.23097 11.194C5.34525 11.9057 4.67748 12.8521 4.30387 13.9252C3.93026 14.9982 3.86585 16.1548 4.11802 17.2627C4.37019 18.3706 4.92879 19.3854 5.73002 20.191L5.72502 20.1899ZM18.252 6.69495C18.6924 6.96887 19.1764 7.16543 19.683 7.276C19.6261 7.08315 19.5171 6.90974 19.368 6.77478C19.219 6.63982 19.0356 6.54852 18.838 6.51099C18.3152 6.40512 17.8149 6.20855 17.36 5.93005C17.6224 6.222 17.9212 6.47898 18.249 6.69495H18.252ZM8.779 18.395C9.202 18.608 9.67239 18.7093 10.1455 18.6895C10.6187 18.6696 11.0789 18.5292 11.4826 18.2816C11.8863 18.034 12.22 17.6873 12.4522 17.2745C12.6843 16.8618 12.8071 16.3965 12.809 15.923V3.80005C12.809 3.53483 12.9144 3.28043 13.1019 3.0929C13.2894 2.90536 13.5438 2.80005 13.809 2.80005H15.109C15.143 2.80005 15.171 2.81402 15.209 2.81702C15.1441 2.58472 15.0058 2.37967 14.8148 2.23242C14.6237 2.08518 14.3902 2.00361 14.149 2H12.849C12.5838 2 12.3295 2.10531 12.1419 2.29285C11.9544 2.48038 11.849 2.73478 11.849 3V15.126C11.8473 15.5988 11.725 16.0633 11.4937 16.4756C11.2624 16.8879 10.9297 17.2344 10.5271 17.4823C10.1246 17.7302 9.66541 17.8713 9.19309 17.8922C8.72078 17.9131 8.25094 17.8133 7.82801 17.6021C8.08083 17.9363 8.40592 18.2091 8.779 18.4V18.395ZM17.29 5.89502C17.312 5.90902 17.338 5.91705 17.36 5.93005C16.7829 5.31815 16.3857 4.55892 16.212 3.73596C16.1661 3.4943 16.0431 3.27412 15.8613 3.1084C15.6795 2.94268 15.4489 2.84042 15.204 2.81702C15.2215 2.85569 15.2365 2.89545 15.249 2.93604C15.3725 3.5419 15.617 4.11659 15.9676 4.62585C16.3183 5.13512 16.7681 5.56851 17.29 5.90002V5.89502ZM9.91102 11.355C9.90901 11.6105 9.80922 11.8556 9.63218 12.0399C9.45514 12.2242 9.21425 12.3337 8.95899 12.3459C8.24648 12.3859 7.57535 12.6935 7.0799 13.2072C6.58446 13.7208 6.30125 14.4025 6.287 15.116C6.28677 15.6307 6.42963 16.1354 6.69962 16.5737C6.96962 17.012 7.35616 17.3667 7.81602 17.598H7.826C7.45283 17.1152 7.25027 16.5222 7.25001 15.912C7.26404 15.1984 7.54715 14.5165 8.04264 14.0028C8.53814 13.4891 9.20941 13.1817 9.92201 13.142C10.1771 13.1295 10.4177 13.0198 10.5946 12.8356C10.7714 12.6513 10.871 12.4064 10.873 12.151V10.864C10.8711 10.6 10.765 10.3474 10.5776 10.1614C10.3903 9.97535 10.137 9.87097 9.87299 9.87097C9.89293 9.93376 9.90634 9.99843 9.913 10.064L9.91102 11.355ZM19.8 7.31104C19.76 7.30304 19.723 7.285 19.683 7.276C19.7148 7.36988 19.7327 7.46794 19.736 7.56702V8.87305C19.736 9.00783 19.7072 9.141 19.6517 9.26379C19.5961 9.38659 19.5149 9.49613 19.4137 9.58508C19.3124 9.67404 19.1934 9.74036 19.0644 9.77966C18.9355 9.81896 18.7997 9.83033 18.666 9.81299C17.3993 9.64132 16.1936 9.16274 15.154 8.41895V14.912C15.1748 16.4605 14.617 17.9611 13.5898 19.12C12.5625 20.2789 11.1398 21.0127 9.60002 21.178C8.23377 21.2965 6.86771 20.9482 5.72502 20.1899C6.00882 20.4809 6.32067 20.7433 6.65602 20.973C7.80538 21.7435 9.18352 22.0981 10.562 21.978C12.1019 21.8128 13.5247 21.0789 14.5521 19.92C15.5795 18.7612 16.1376 17.2606 16.117 15.712V9.21899C17.1563 9.96278 18.3616 10.4414 19.628 10.613C19.7617 10.6304 19.8975 10.619 20.0264 10.5797C20.1554 10.5404 20.2744 10.4741 20.3757 10.3851C20.4769 10.2962 20.5581 10.1866 20.6137 10.0638C20.6692 9.94105 20.698 9.80776 20.698 9.67297V8.36694C20.695 8.11381 20.6036 7.86973 20.4396 7.67688C20.2757 7.48403 20.0494 7.35465 19.8 7.31104Z"
                                                fill="currentColor" />
                                            <path
                                                d="M15.149 14.912V8.41895C16.1886 9.16274 17.3943 9.64132 18.661 9.81299C18.7947 9.83033 18.9305 9.81896 19.0594 9.77966C19.1884 9.74036 19.3074 9.67404 19.4087 9.58508C19.5099 9.49613 19.5911 9.38659 19.6466 9.26379C19.7022 9.141 19.731 9.00783 19.731 8.87305V7.56702C19.7277 7.46794 19.7098 7.36988 19.678 7.276C19.1714 7.16543 18.6874 6.96887 18.247 6.69495C17.9182 6.47919 17.6184 6.22219 17.355 5.93005C17.333 5.91705 17.307 5.90902 17.285 5.89502C16.7636 5.56407 16.3142 5.13154 15.9635 4.62317C15.6129 4.1148 15.3681 3.541 15.244 2.93604C15.2315 2.89545 15.2165 2.85569 15.199 2.81702C15.166 2.81702 15.138 2.80005 15.099 2.80005H13.799C13.5338 2.80005 13.2794 2.90536 13.0919 3.0929C12.9044 3.28043 12.799 3.53483 12.799 3.80005V15.926C12.7986 16.5066 12.616 17.0725 12.277 17.5438C11.938 18.0152 11.4597 18.3683 10.9093 18.5533C10.359 18.7384 9.76452 18.7462 9.20957 18.5756C8.65462 18.4049 8.16721 18.0644 7.81602 17.6021H7.80601C7.34614 17.3707 6.95964 17.016 6.68964 16.5778C6.41964 16.1395 6.27679 15.6348 6.27701 15.12C6.29127 14.4065 6.57445 13.7247 7.06989 13.2111C7.56534 12.6974 8.2365 12.3899 8.94901 12.35C9.20427 12.3377 9.44516 12.2282 9.6222 12.0439C9.79924 11.8597 9.899 11.6146 9.90101 11.359V10.072C9.89434 10.0065 9.88093 9.94182 9.861 9.87903C9.848 9.87903 9.83802 9.87195 9.82502 9.87195C9.62502 9.87695 9.44201 9.88795 9.29801 9.90295C8.51517 9.85635 7.73118 9.97297 6.99573 10.2452C6.26029 10.5175 5.58941 10.9396 5.02564 11.4847C4.46187 12.0299 4.01752 12.6861 3.72071 13.412C3.42389 14.1379 3.2811 14.9176 3.3014 15.7015C3.32169 16.4855 3.50462 17.2568 3.8386 17.9663C4.17258 18.6759 4.6503 19.3082 5.24152 19.8235C5.83274 20.3387 6.52456 20.7255 7.27311 20.9594C8.02166 21.1932 8.81062 21.2691 9.59 21.182C11.1314 21.0179 12.5559 20.2839 13.5843 19.124C14.6127 17.9641 15.1707 16.462 15.149 14.912Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Container-->
                            <div class="flex-wrap gap-1 d-flex align-items-center flex-stack d-grid flex-row-fluid">
                                <!--begin::Content-->
                                <div class="me-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Social
                                        Networks</a>
                                    <!--end::Title-->
                                    <!--begin::Desc-->
                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">All
                                        Social Channels</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Content-->
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-4 me-3">24,588</span>
                                    <!--end::Number-->
                                    <!--begin::Info-->
                                    <!--begin::label-->
                                    <span class="badge badge-light-success fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="13" y="6" width="13" height="2"
                                                    rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                <path
                                                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->4.1%</span>
                                    <!--end::label-->
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="my-3 separator separator-dashed"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-30px me-5">
                                <span class="symbol-label">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                    <span class="svg-icon svg-icon-3 svg-icon-gray-600">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
                                                fill="currentColor" />
                                            <path
                                                d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Container-->
                            <div class="flex-wrap gap-1 d-flex align-items-center flex-stack d-grid flex-row-fluid">
                                <!--begin::Content-->
                                <div class="me-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Email
                                        Newsletter</a>
                                    <!--end::Title-->
                                    <!--begin::Desc-->
                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Mailchimp
                                        Campaigns</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Content-->
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-4 me-3">794</span>
                                    <!--end::Number-->
                                    <!--begin::Info-->
                                    <!--begin::label-->
                                    <span class="badge badge-light-success fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="13" y="6" width="13" height="2"
                                                    rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                <path
                                                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->0.2%</span>
                                    <!--end::label-->
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="my-3 separator separator-dashed"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-30px me-5">
                                <span class="symbol-label">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com001.svg-->
                                    <span class="svg-icon svg-icon-3 svg-icon-gray-600">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                fill="currentColor" />
                                            <path
                                                d="M19 10.4C19 10.3 19 10.2 19 10C19 8.9 18.1 8 17 8H16.9C15.6 6.2 14.6 4.29995 13.9 2.19995C13.3 2.09995 12.6 2 12 2C11.9 2 11.8 2 11.7 2C12.4 4.6 13.5 7.10005 15.1 9.30005C15 9.50005 15 9.7 15 10C15 11.1 15.9 12 17 12C17.1 12 17.3 12 17.4 11.9C18.6 13 19.9 14 21.4 14.8C21.4 14.8 21.5 14.8 21.5 14.9C21.7 14.2 21.8 13.5 21.9 12.7C20.9 12.1 19.9 11.3 19 10.4Z"
                                                fill="currentColor" />
                                            <path
                                                d="M12 15C11 13.1 10.2 11.2 9.60001 9.19995C9.90001 8.89995 10 8.4 10 8C10 7.1 9.40001 6.39998 8.70001 6.09998C8.40001 4.99998 8.20001 3.90005 8.00001 2.80005C7.30001 3.10005 6.70001 3.40002 6.20001 3.90002C6.40001 4.80002 6.50001 5.6 6.80001 6.5C6.40001 6.9 6.10001 7.4 6.10001 8C6.10001 9 6.80001 9.8 7.80001 10C8.30001 11.6 9.00001 13.2 9.70001 14.7C7.10001 13.2 4.70001 11.5 2.40001 9.5C2.20001 10.3 2.10001 11.1 2.10001 11.9C4.60001 13.9 7.30001 15.7 10.1 17.2C10.2 18.2 11 19 12 19C12.6 20 13.2 20.9 13.9 21.8C14.6 21.7 15.3 21.5 15.9 21.2C15.4 20.5 14.9 19.8 14.4 19.1C15.5 19.5 16.5 19.9 17.6 20.2C18.3 19.8 18.9 19.2 19.4 18.6C17.6 18.1 15.7 17.5 14 16.7C13.9 15.8 13.1 15 12 15Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Container-->
                            <div class="flex-wrap gap-1 d-flex align-items-center flex-stack d-grid flex-row-fluid">
                                <!--begin::Content-->
                                <div class="me-5">
                                    <!--begin::Title-->
                                    <a href="#"
                                        class="text-gray-800 fw-bold text-hover-primary fs-6">Referrals</a>
                                    <!--end::Title-->
                                    <!--begin::Desc-->
                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Impact
                                        Radius visits</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Content-->
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-4 me-3">6,578</span>
                                    <!--end::Number-->
                                    <!--begin::Info-->
                                    <!--begin::label-->
                                    <span class="badge badge-light-danger fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="11" y="18" width="13" height="2"
                                                    rx="1" transform="rotate(-90 11 18)"
                                                    fill="currentColor" />
                                                <path
                                                    d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->0.4%</span>
                                    <!--end::label-->
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="my-3 separator separator-dashed"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-30px me-5">
                                <span class="symbol-label">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs026.svg-->
                                    <span class="svg-icon svg-icon-3 svg-icon-gray-600">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M7 20.5L2 17.6V11.8L7 8.90002L12 11.8V17.6L7 20.5ZM21 20.8V18.5L19 17.3L17 18.5V20.8L19 22L21 20.8Z"
                                                fill="currentColor" />
                                            <path d="M22 14.1V6L15 2L8 6V14.1L15 18.2L22 14.1Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Container-->
                            <div class="flex-wrap gap-1 d-flex align-items-center flex-stack d-grid flex-row-fluid">
                                <!--begin::Content-->
                                <div class="me-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Other</a>
                                    <!--end::Title-->
                                    <!--begin::Desc-->
                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Many
                                        Sources</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Content-->
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-4 me-3">79,458</span>
                                    <!--end::Number-->
                                    <!--begin::Info-->
                                    <!--begin::label-->
                                    <span class="badge badge-light-success fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="13" y="6" width="13" height="2"
                                                    rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                <path
                                                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->8.3%</span>
                                    <!--end::label-->
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Link-->
                        <div class="pt-8 text-center d-1">
                            <a href="../../demo39/dist/apps/ecommerce/sales/details.html"
                                class="text-primary opacity-75-hover fs-6 fw-bold">View
                                Store Analytics
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon svg-icon-3 svg-icon-primary">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2"
                                            rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                        <path
                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon--></a>
                        </div>
                        <!--end::Link-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::List widget 12-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-8">
            <!--begin::Chart widget 15-->
            <div class="card card-flush h-xl-100">
                <!--begin::Header-->
                <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">Author Sales</span>
                        <span class="pt-2 text-gray-400 fw-semibold fs-6">Statistics by
                            Countries</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                            data-kt-menu-overflow="true">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                            <span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4"
                                        fill="currentColor" />
                                    <rect x="11" y="11" width="2.6" height="2.6" rx="1.3"
                                        fill="currentColor" />
                                    <rect x="15" y="11" width="2.6" height="2.6" rx="1.3"
                                        fill="currentColor" />
                                    <rect x="7" y="11" width="2.6" height="2.6" rx="1.3"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--begin::Menu-->
                        <div class="py-4 menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-100px"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <a href="#" class="px-3 menu-link">Remove</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <a href="#" class="px-3 menu-link">Mute</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <a href="#" class="px-3 menu-link">Settings</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="pt-5 card-body">
                    <!--begin::Chart container-->
                    <div id="kt_charts_widget_15_chart" class="mb-3 min-h-auto ps-4 pe-6 h-350px"></div>
                    <!--end::Chart container-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Chart widget 15-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
@endsection

@section('script')
    <script type="text/javascript"></script>
@endsection
