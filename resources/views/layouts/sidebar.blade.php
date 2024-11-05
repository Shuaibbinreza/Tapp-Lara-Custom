<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div class="dropdown sidebar-user m-1 rounded">
        <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="d-flex align-items-center gap-2">
                <img class="rounded header-profile-user" src="@if (Auth::user()->avatar != ''){{ URL::asset('images/' . Auth::user()->avatar) }}@else{{ URL::asset('build/images/users/avatar-1.jpg') }}@endif" alt="Header Avatar">
                <span class="text-start">
                    <span class="d-block fw-medium sidebar-user-name-text">{{Auth::user()->name}}</span>
                    <span class="d-block fs-14 sidebar-user-name-sub-text"><i
                            class="ri ri-circle-fill fs-10 text-success align-baseline"></i> <span
                            class="align-middle">Online</span></span>
                </span>
            </span>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <h6 class="dropdown-header">Welcome {{Auth::user()->name}}!</h6>
            <a class="dropdown-item" href="pages-profile"><i
                    class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                    class="align-middle">Profile</span></a>
            <a class="dropdown-item" href="apps-chat"><i
                    class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span
                    class="align-middle">Messages</span></a>
            <a class="dropdown-item" href="apps-tasks-kanban"><i
                    class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span
                    class="align-middle">Taskboard</span></a>
            <a class="dropdown-item" href="pages-faqs"><i
                    class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span
                    class="align-middle">Help</span></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="pages-profile"><i
                    class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Balance :
                    <b>$5971.67</b></span></a>
            <a class="dropdown-item" href="pages-profile-settings"><span
                    class="badge bg-success-subtle text-success mt-1 float-end">New</span><i
                    class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span
                    class="align-middle">Settings</span></a>
            <a class="dropdown-item" href="auth-lockscreen-basic"><i
                    class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock
                    screen</span></a>

            <a class="dropdown-item " href="javascript:void();"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                    class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                    key="t-logout">@lang('translation.logout')</span></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span>@lang('translation.menu')</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span>@lang('translation.dashboards')</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="dashboard-analytics" class="nav-link">@lang('translation.analytics')</a>
                            </li>
                            <li class="nav-item">
                                <a href="index" class="nav-link">@lang('translation.crm')</a>
                            </li>
                            <li class="nav-item">
                                <a href="ecommerce" class="nav-link">@lang('translation.ecommerce')</a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crypto" class="nav-link">@lang('translation.crypto')</a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-projects" class="nav-link">@lang('translation.projects')</a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-nft" class="nav-link"> @lang('translation.nft')</a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-job" class="nav-link">@lang('translation.job')</a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->


                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-apps-2-line"></i> <span>@lang('translation.apps')</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-chat" class="nav-link" role="button"
                                    aria-expanded="false" aria-controls="sidebarCalendar" data-key="t-calender">
                                    {{-- @lang('translation.calendar') --}}
                                    Summarizer
                                </a>
                                {{-- <div class="collapse menu-dropdown" id="sidebarCalendar">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-calendar" class="nav-link"> @lang('translation.main-calender') </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-calendar-month-grid" class="nav-link"> @lang('translation.month-grid')
                                            </a>
                                        </li>
                                    </ul>
                                </div> --}}
                            </li>

                            <li class="nav-item">
                                <a href="invoice1" class="nav-link" role="button"
                                    aria-expanded="false" aria-controls="sidebarCalendar" data-key="t-calender">
                                    {{-- @lang('translation.calendar') --}}
                                    Invoice
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="certificate" class="nav-link" role="button"
                                    aria-expanded="false" aria-controls="sidebarCalendar" data-key="t-calender">
                                    {{-- @lang('translation.calendar') --}}
                                    Certificate
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="proposal-making" class="nav-link" role="button"
                                    aria-expanded="false" aria-controls="sidebarCalendar" data-key="t-calender">
                                    {{-- @lang('translation.calendar') --}}
                                    Make Proposal
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="itt-upload" class="nav-link" role="button"
                                    aria-expanded="false" aria-controls="sidebarCalendar" data-key="t-calender">
                                    {{-- @lang('translation.calendar') --}}
                                    Image to Text
                                </a>
                            </li>

                            {{-- <li class="nav-item">
                                <a href="#sidebarEcommerce" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false"
                                    aria-controls="sidebarEcommerce">@lang('translation.ecommerce')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarEcommerce">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-products" class="nav-link">@lang('translation.products')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-product-details"
                                                class="nav-link">@lang('translation.product-Details')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-add-product"
                                                class="nav-link">@lang('translation.create-product')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-orders" class="nav-link">@lang('translation.orders')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-order-details"
                                                class="nav-link">@lang('translation.order-details')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-customers" class="nav-link">@lang('translation.customers')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-cart" class="nav-link">@lang('translation.shopping-cart')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-checkout" class="nav-link">@lang('translation.checkout')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-sellers" class="nav-link">@lang('translation.sellers')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-seller-details"
                                                class="nav-link">@lang('translation.sellers-details')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarProjects" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarProjects">@lang('translation.projects')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarProjects">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-projects-list" class="nav-link">@lang('translation.list')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-projects-overview" class="nav-link">@lang('translation.overview')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-projects-create" class="nav-link">@lang('translation.create-project')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarTasks" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarTasks">@lang('translation.tasks')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarTasks">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-tasks-kanban" class="nav-link">@lang('translation.kanbanboard')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-tasks-list-view" class="nav-link">@lang('translation.list-view')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-tasks-details" class="nav-link">@lang('translation.task-details')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarCRM" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarCRM">@lang('translation.crm')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarCRM">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-crm-contacts" class="nav-link">@lang('translation.contacts')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crm-companies" class="nav-link">@lang('translation.companies')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crm-deals" class="nav-link">@lang('translation.deals')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crm-leads" class="nav-link">@lang('translation.leads')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarCrypto" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarCrypto">@lang('translation.crypto')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarCrypto">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-crypto-transactions" class="nav-link">@lang('translation.transactions')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crypto-buy-sell" class="nav-link">@lang('translation.buy-sell')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crypto-orders" class="nav-link">@lang('translation.orders')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crypto-wallet" class="nav-link">@lang('translation.my-wallet')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crypto-ico" class="nav-link">@lang('translation.ico-list')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crypto-kyc" class="nav-link">@lang('translation.kyc-application')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarInvoices" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarInvoices">@lang('translation.invoices')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarInvoices">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-invoices-list" class="nav-link">@lang('translation.list-view')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-invoices-details" class="nav-link">@lang('translation.details')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-invoices-create" class="nav-link">@lang('translation.create-invoice')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li> --}}
                            {{-- <li class="nav-item">
                                <a href="#sidebarTickets" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarTickets">@lang('translation.supprt-tickets')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarTickets">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-tickets-list" class="nav-link">@lang('translation.list-view')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-tickets-details" class="nav-link">@lang('translation.ticket-details')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarnft" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarnft">
                                    @lang('translation.nft-marketplace')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarnft">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-nft-marketplace" class="nav-link"> @lang('translation.marketplace') </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-explore" class="nav-link"> @lang('translation.explore-now') </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-auction" class="nav-link"> @lang('translation.live-auction') </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-item-details" class="nav-link"> @lang('translation.item-details') </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-collections" class="nav-link"> @lang('translation.collections') </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-creators" class="nav-link"> @lang('translation.creators') </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-ranking" class="nav-link"> @lang('translation.ranking') </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-wallet" class="nav-link"> @lang('translation.wallet-connect') </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-create" class="nav-link"> @lang('translation.create-nft') </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="apps-file-manager" class="nav-link"> <span>@lang('translation.file-manager')</span></a>
                            </li> --}}
                            {{-- <li class="nav-item">
                                <a href="apps-todo" class="nav-link"> <span>@lang('translation.to-do')</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarjobs" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarjobs"> @lang('translation.jobs')</a>
                                <div class="collapse menu-dropdown" id="sidebarjobs">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-job-statistics" class="nav-link"> @lang('translation.statistics') </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarJoblists" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarJoblists">
                                                @lang('translation.job-lists')
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarJoblists">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-job-lists" class="nav-link"> @lang('translation.list')
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-job-grid-lists" class="nav-link">
                                                            @lang('translation.grid') </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-job-details" class="nav-link">
                                                            @lang('translation.overview')</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarCandidatelists" class="nav-link"
                                                data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                aria-controls="sidebarCandidatelists">
                                                @lang('translation.candidate-lists')
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarCandidatelists">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-job-candidate-lists" class="nav-link">
                                                            @lang('translation.list-view')
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-job-candidate-grid" class="nav-link">
                                                            @lang('translation.grid-view')</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-job-application" class="nav-link"> @lang('translation.application') </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-job-new" class="nav-link"> @lang('translation.new-job') </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-job-companies-lists" class="nav-link"> @lang('translation.companies-list')
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-job-categories" class="nav-link"> @lang('translation.job-categories')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="apps-api-key" class="nav-link"> @lang('translation.api-key')</a>
                            </li> --}}
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ri-layout-3-line"></i> <span>@lang('translation.layouts')</span><span
                            class="badge badge-pill bg-danger">@lang('translation.hot')</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="layouts-horizontal" target="_blank" class="nav-link">@lang('translation.horizontal')</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-detached" target="_blank" class="nav-link">@lang('translation.detached')</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-two-column" target="_blank" class="nav-link">@lang('translation.two-column')</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-vertical-hovered" target="_blank"
                                    class="nav-link">@lang('translation.hovered')</a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->


                <li class="menu-title"><i class="ri-more-fill"></i> <span>@lang('translation.pages')</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarAuth">
                        <i class="ri-account-circle-line"></i> <span>@lang('translation.authentication')</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAuth">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#sidebarSignIn" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarSignIn">@lang('translation.signin')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarSignIn">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-signin-basic" class="nav-link">@lang('translation.basic')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-signin-cover" class="nav-link">@lang('translation.cover')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarSignUp" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarSignUp">@lang('translation.signup')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarSignUp">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-signup-basic" class="nav-link">@lang('translation.basic')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-signup-cover" class="nav-link">@lang('translation.cover')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarResetPass" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false"
                                    aria-controls="sidebarResetPass">@lang('translation.password-reset')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarResetPass">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-pass-reset-basic" class="nav-link">@lang('translation.basic')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-pass-reset-cover" class="nav-link">@lang('translation.cover')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarchangePass" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false"
                                    aria-controls="sidebarchangePass">@lang('translation.password-create')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarchangePass">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-pass-change-basic" class="nav-link">@lang('translation.basic')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-pass-change-cover" class="nav-link">@lang('translation.cover')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarLockScreen" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false"
                                    aria-controls="sidebarLockScreen">@lang('translation.lock-screen')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarLockScreen">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-lockscreen-basic" class="nav-link">@lang('translation.basic')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-lockscreen-cover" class="nav-link">@lang('translation.cover')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarLogout" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarLogout">@lang('translation.logout')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarLogout">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-logout-basic" class="nav-link">@lang('translation.basic')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-logout-cover" class="nav-link">@lang('translation.cover')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarSuccessMsg" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false"
                                    aria-controls="sidebarSuccessMsg">@lang('translation.success-message')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarSuccessMsg">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-success-msg-basic" class="nav-link">@lang('translation.basic')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-success-msg-cover" class="nav-link">@lang('translation.cover')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarTwoStep" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarTwoStep">@lang('translation.two-step-verification')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarTwoStep">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-twostep-basic" class="nav-link">@lang('translation.basic')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-twostep-cover" class="nav-link">@lang('translation.cover')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarErrors" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarErrors">@lang('translation.errors')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarErrors">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-404-basic" class="nav-link">@lang('translation.404-basic')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-404-cover" class="nav-link">@lang('translation.404-cover')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-404-alt" class="nav-link">@lang('translation.404-alt')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-500" class="nav-link">@lang('translation.500')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-offline" class="nav-link">@lang('translation.offline-page')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarPages">
                        <i class="ri-pages-line"></i> <span>@lang('translation.pages')</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="pages-starter" class="nav-link">@lang('translation.starter')</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarProfile" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarProfile">@lang('translation.profile')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarProfile">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="pages-profile" class="nav-link">@lang('translation.simple-page')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-profile-settings" class="nav-link">@lang('translation.settings')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="pages-team" class="nav-link">@lang('translation.team')</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-timeline" class="nav-link">@lang('translation.timeline')</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-faqs" class="nav-link">@lang('translation.faqs')</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-pricing" class="nav-link">@lang('translation.pricing')</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-gallery" class="nav-link">@lang('translation.gallery')</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-maintenance" class="nav-link">@lang('translation.maintenance')</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-coming-soon" class="nav-link">@lang('translation.coming-soon')</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-sitemap" class="nav-link">@lang('translation.sitemap')</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-search-results" class="nav-link">@lang('translation.search-results')</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-privacy-policy" class="nav-link">@lang('translation.privacy-policy')</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-term-conditions" class="nav-link">@lang('translation.term-conditions')</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarLanding">
                        <i class="ri-rocket-line"></i> <span>@lang('translation.landing')</span>

                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLanding">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="landing" class="nav-link"> @lang('translation.one-page') </a>
                            </li>
                            <li class="nav-item">
                                <a href="nft-landing" class="nav-link"> @lang('translation.nft-landing') </a>
                            </li>
                            <li class="nav-item">
                                <a href="job-landing" class="nav-link">@lang('translation.job')</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title"><i class="ri-more-fill"></i> <span>@lang('translation.components')</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarUI">
                        <i class="ri-pencil-ruler-2-line"></i> <span>@lang('translation.base-ui')</span>
                    </a>
                    <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ui-alerts" class="nav-link">@lang('translation.alerts')</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-badges" class="nav-link">@lang('translation.badges')</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-buttons" class="nav-link">@lang('translation.buttons')</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-colors" class="nav-link">@lang('translation.colors')</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-cards" class="nav-link">@lang('translation.cards')</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-carousel" class="nav-link">@lang('translation.carousel')</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-dropdowns" class="nav-link">@lang('translation.dropdowns')</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-grid" class="nav-link">@lang('translation.grid')</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ui-images" class="nav-link">@lang('translation.images')</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-tabs" class="nav-link">@lang('translation.tabs')</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-accordions" class="nav-link">@lang('translation.accordion-collapse')</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-modals" class="nav-link">@lang('translation.modals')</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-offcanvas" class="nav-link">@lang('translation.offcanvas')</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-placeholders" class="nav-link">@lang('translation.placeholders')</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-progress" class="nav-link">@lang('translation.progress')</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-notifications" class="nav-link">@lang('translation.notifications')</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ui-media" class="nav-link">@lang('translation.media-object')</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-embed-video" class="nav-link">@lang('translation.embed-video')</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-typography" class="nav-link">@lang('translation.typography')</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-lists" class="nav-link">@lang('translation.lists')</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-links" class="nav-link"><span>@lang('translation.links')</span> <span
                                                class="badge badge-pill bg-success">@lang('translation.new')</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-general" class="nav-link">@lang('translation.general')</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-ribbons" class="nav-link">@lang('translation.ribbons')</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-utilities" class="nav-link">@lang('translation.utilities')</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                {{-- "More" menu located in the last --}}
                <li class="nav-item d-none">
                    <a class="nav-link menu-link" href="#sidebarAdvanceUI" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarAdvanceUI">
                        <i class="ri-stack-line"></i> <span>@lang('translation.advance-ui')</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAdvanceUI">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="advance-ui-sweetalerts" class="nav-link">@lang('translation.sweet-alerts')</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-nestable" class="nav-link">@lang('translation.nestable-list')</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-scrollbar" class="nav-link">@lang('translation.scrollbar')</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-animation" class="nav-link">@lang('translation.animation')</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-tour" class="nav-link">@lang('translation.tour')</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-swiper" class="nav-link">@lang('translation.swiper-slider')</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-ratings" class="nav-link">@lang('translation.ratings')</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-highlight" class="nav-link">@lang('translation.highlight')</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-scrollspy" class="nav-link">@lang('translation.scrollSpy')</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item d-none">
                    <a class="nav-link menu-link" href="widgets">
                        <i class="ri-honour-line"></i> <span>@lang('translation.widgets')</span>
                    </a>
                </li>

                <li class="nav-item d-none">
                    <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarForms">
                        <i class="ri-file-list-3-line"></i> <span>@lang('translation.forms')</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarForms">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="forms-elements" class="nav-link">@lang('translation.basic-elements')</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-select" class="nav-link">@lang('translation.form-select')</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-checkboxs-radios" class="nav-link">@lang('translation.checkboxs-radios')</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-pickers" class="nav-link">@lang('translation.pickers')</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-masks" class="nav-link">@lang('translation.input-masks')</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-advanced" class="nav-link">@lang('translation.advanced')</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-range-sliders" class="nav-link">@lang('translation.range-slider')</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-validation" class="nav-link">@lang('translation.validation')</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-wizard" class="nav-link">@lang('translation.wizard')</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-editors" class="nav-link">@lang('translation.editors')</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-file-uploads" class="nav-link">@lang('translation.file-uploads')</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-layouts" class="nav-link">@lang('translation.form-layouts')</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-select2" class="nav-link">@lang('translation.select2') </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item d-none">
                    <a class="nav-link menu-link" href="#sidebarTables" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarTables">
                        <i class="ri-layout-grid-line"></i> <span>@lang('translation.tables')</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarTables">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="tables-basic" class="nav-link">@lang('translation.basic-tables')</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-gridjs" class="nav-link">@lang('translation.grid-js')</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-listjs" class="nav-link">@lang('translation.list-js')</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-datatables" class="nav-link">@lang('translation.datatables')</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item d-none">
                    <a class="nav-link menu-link" href="#sidebarCharts" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarCharts">
                        <i class="ri-pie-chart-line"></i> <span>@lang('translation.charts')</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarCharts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#sidebarApexcharts" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false"
                                    aria-controls="sidebarApexcharts">@lang('translation.apexcharts')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarApexcharts">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="charts-apex-line" class="nav-link">@lang('translation.line')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-area" class="nav-link">@lang('translation.area')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-column" class="nav-link">@lang('translation.column')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-bar" class="nav-link">@lang('translation.bar')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-mixed" class="nav-link">@lang('translation.mixed')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-timeline" class="nav-link">@lang('translation.timeline')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-range-area"
                                                class="nav-link"><span>@lang('translation.range-area')</span> <span
                                                    class="badge badge-pill bg-success">@lang('translation.new')</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-funnel"
                                                class="nav-link"><span>@lang('translation.funnel')</span> <span
                                                    class="badge badge-pill bg-success">@lang('translation.new')</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-candlestick" class="nav-link">@lang('translation.candlstick')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-boxplot" class="nav-link">@lang('translation.boxplot')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-bubble" class="nav-link">@lang('translation.bubble')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-scatter" class="nav-link">@lang('translation.scatter')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-heatmap" class="nav-link">@lang('translation.heatmap')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-treemap" class="nav-link">@lang('translation.treemap')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-pie" class="nav-link">@lang('translation.pie')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-radialbar" class="nav-link">@lang('translation.radialbar')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-radar" class="nav-link">@lang('translation.radar')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-polar" class="nav-link">@lang('translation.polar-area')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="charts-chartjs" class="nav-link">@lang('translation.chartjs')</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-echarts" class="nav-link">@lang('translation.echarts')</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item d-none">
                    <a class="nav-link menu-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarIcons">
                        <i class="ri-compasses-2-line"></i> <span>@lang('translation.icons')</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarIcons">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="icons-remix" class="nav-link"><span>@lang('translation.remix')</span><span
                                        class="badge badge-pill bg-info">v3.5</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-boxicons" class="nav-link"><span>@lang('translation.boxicons')</span><span
                                        class="badge badge-pill bg-info">v2.1.4</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-materialdesign"
                                    class="nav-link"><span>@lang('translation.material-design')</span><span
                                        class="badge badge-pill bg-info">v7.2.96</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-lineawesome" class="nav-link">@lang('translation.line-awesome')</a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-feather" class="nav-link"><span>@lang('translation.feather')</span><span
                                        class="badge badge-pill bg-info">v4.29</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-crypto" class="nav-link"> <span>@lang('translation.crypto-svg')</span></a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item d-none">
                    <a class="nav-link menu-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarMaps">
                        <i class="ri-map-pin-line"></i> <span>@lang('translation.maps')</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMaps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="maps-google" class="nav-link">
                                    @lang('translation.google')
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="maps-vector" class="nav-link">
                                    @lang('translation.vector')
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="maps-leaflet" class="nav-link">
                                    @lang('translation.leaflet')
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item d-none">
                    <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                        <i class="ri-share-line"></i> <span>@lang('translation.multi-level')</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMultilevel">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link">@lang('translation.level-1.1')</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false"
                                    aria-controls="sidebarAccount">@lang('translation.level-1.2')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarAccount">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">@lang('translation.level-2.1')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarCrm" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false"
                                                aria-controls="sidebarCrm">@lang('translation.level-2.2')
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarCrm">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">@lang('translation.level-3.1')</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">@lang('translation.level-3.2')</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
