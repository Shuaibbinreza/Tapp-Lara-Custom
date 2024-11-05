@extends('layouts.master')
@section('title')
    @lang('translation.chat')
@endsection
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('build/libs/glightbox/css/glightbox.min.css') }}">
@endsection
@section('content')
    <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
        <div class="chat-leftsidebar minimal-border d-none">
            <div class="px-4 pt-4 mb-0">
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <h5 class="mb-4">Summarizer</h5>
                    </div>
                    <div class="flex-shrink-0">
                        <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="bottom" title="Add Contact">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-soft-success btn-sm material-shadow-none text-dark">
                                Upload File <i class="ri-add-line align-bottom"></i>
                            </button>
                        </div>
                    </div>
                </div>
                {{-- <div class="search-box">
                    <input type="text" class="form-control bg-light border-light" placeholder="Search here...">
                    <i class="ri-search-2-line search-icon"></i>
                </div> --}}
            </div> <!-- .p-4 -->

            <ul class="nav nav-tabs nav-tabs-custom nav-success nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#chats" role="tab">
                        Today's Uploaded Files
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#contacts" role="tab">
                        Contacts
                    </a>
                </li> --}}
            </ul>

            <div class="tab-content text-muted">
                <div class="tab-pane active" id="chats" role="tabpanel">
                    <div class="chat-room-list pt-3" data-simplebar>
                        {{-- <div class="d-flex align-items-center px-4 mb-2">
                            <div class="flex-grow-1">
                                <h4 class="mb-0 fs-11 text-muted text-uppercase">Direct Messages</h4>
                            </div>
                            <div class="flex-shrink-0">
                                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="bottom"
                                    title="New Message">

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-soft-success btn-sm shadow-none material-shadow">
                                        <i class="ri-add-line align-bottom"></i>
                                    </button>
                                </div>
                            </div>
                        </div> --}}

                        <div class="chat-message-list">

                            <ul class="list-unstyled chat-list chat-user-list" id="userList">

                            </ul>
                        </div>

                        <div class="d-flex align-items-center px-4 mt-4 pt-2 mb-2 d-none">
                            <div class="flex-grow-1">
                                <h4 class="mb-0 fs-11 text-muted text-uppercase">Channels</h4>
                            </div>
                            <div class="flex-shrink-0">
                                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="bottom"
                                    title="Create group">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-soft-success btn-sm">
                                        <i class="ri-add-line align-bottom"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="chat-message-list d-none">

                            <ul class="list-unstyled chat-list chat-user-list mb-0" id="channelList">
                            </ul>
                        </div>
                        <!-- End chat-message-list -->
                    </div>
                </div>

                <div class="tab-pane" id="contacts" role="tabpanel">
                    <div class="chat-room-list pt-3" data-simplebar>
                        <div class="sort-contact">
                        </div>
                    </div>
                </div>
            </div>
            <!-- end tab contact -->
        </div>

        <div class="email-menu-sidebar minimal-border">
            <div class="p-4 d-flex flex-column h-100">
                <div class="pb-4 border-bottom border-bottom-dashed">
                    <button type="button" class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#composemodal"><i
                            data-feather="plus-circle" class="icon-xs me-1 icon-dual-light"></i> Compose</button>
                </div>

                <div class="mx-n4 px-4 email-menu-sidebar-scroll" data-simplebar>
                    <div class="mail-list mt-3">
                        <a href="#" class="active"><i class="ri-mail-fill me-3 align-middle fw-medium"></i> <span
                                class="mail-list-link">Microsoft TIN Certificate BD</span> <span
                                class="badge bg-success-subtle text-success ms-auto  ">5</span></a>
                        <a href="#"><i class="ri-inbox-archive-fill me-3 align-middle fw-medium"></i> <span
                                class="mail-list-link">Google IPO Certificate</span> <span
                                class="badge bg-success-subtle text-success ms-auto  ">5</span></a>
                        <a href="#"><i class="ri-send-plane-2-fill me-3 align-middle fw-medium"></i><span
                                class="mail-list-link">Sent</span></a>
                        <a href="#"><i class="ri-edit-2-fill me-3 align-middle fw-medium"></i><span
                                class="mail-list-link">Draft</span></a>
                        <a href="#"><i class="ri-error-warning-fill me-3 align-middle fw-medium"></i><span
                                class="mail-list-link">Spam</span></a>
                        <a href="#"><i class="ri-delete-bin-5-fill me-3 align-middle fw-medium"></i><span
                                class="mail-list-link">Trash</span></a>
                        <a href="#"><i class="ri-star-fill me-3 align-middle fw-medium"></i><span
                                class="mail-list-link">Starred</span></a>
                        <a href="#"><i class="ri-price-tag-3-fill me-3 align-middle fw-medium"></i><span
                                class="mail-list-link">Important</span></a>

                                <a href="#" class="active"><i class="ri-mail-fill me-3 align-middle fw-medium"></i> <span
                                    class="mail-list-link">Microsoft TIN Certificate BD</span> <span
                                    class="badge bg-success-subtle text-success ms-auto  ">5</span></a>
                            <a href="#"><i class="ri-inbox-archive-fill me-3 align-middle fw-medium"></i> <span
                                    class="mail-list-link">Google IPO Certificate</span> <span
                                    class="badge bg-success-subtle text-success ms-auto  ">5</span></a>
                            <a href="#"><i class="ri-send-plane-2-fill me-3 align-middle fw-medium"></i><span
                                    class="mail-list-link">Sent</span></a>
                            <a href="#"><i class="ri-edit-2-fill me-3 align-middle fw-medium"></i><span
                                    class="mail-list-link">Draft</span></a>
                            <a href="#"><i class="ri-error-warning-fill me-3 align-middle fw-medium"></i><span
                                    class="mail-list-link">Spam</span></a>
                            <a href="#"><i class="ri-delete-bin-5-fill me-3 align-middle fw-medium"></i><span
                                    class="mail-list-link">Trash</span></a>
                            <a href="#"><i class="ri-star-fill me-3 align-middle fw-medium"></i><span
                                    class="mail-list-link">Starred</span></a>
                            <a href="#"><i class="ri-price-tag-3-fill me-3 align-middle fw-medium"></i><span
                                    class="mail-list-link">Important</span></a>

                                    <a href="#" class="active"><i class="ri-mail-fill me-3 align-middle fw-medium"></i> <span
                                        class="mail-list-link">Microsoft TIN Certificate BD</span> <span
                                        class="badge bg-success-subtle text-success ms-auto  ">5</span></a>
                                <a href="#"><i class="ri-inbox-archive-fill me-3 align-middle fw-medium"></i> <span
                                        class="mail-list-link">Google IPO Certificate</span> <span
                                        class="badge bg-success-subtle text-success ms-auto  ">5</span></a>
                                <a href="#"><i class="ri-send-plane-2-fill me-3 align-middle fw-medium"></i><span
                                        class="mail-list-link">Sent</span></a>
                                <a href="#"><i class="ri-edit-2-fill me-3 align-middle fw-medium"></i><span
                                        class="mail-list-link">Draft</span></a>
                                <a href="#"><i class="ri-error-warning-fill me-3 align-middle fw-medium"></i><span
                                        class="mail-list-link">Spam</span></a>
                                <a href="#"><i class="ri-delete-bin-5-fill me-3 align-middle fw-medium"></i><span
                                        class="mail-list-link">Trash</span></a>
                                <a href="#"><i class="ri-star-fill me-3 align-middle fw-medium"></i><span
                                        class="mail-list-link">Starred</span></a>
                                <a href="#"><i class="ri-price-tag-3-fill me-3 align-middle fw-medium"></i><span
                                        class="mail-list-link">Important</span></a>
                    </div>


                    {{-- <div>
                        <h5 class="fs-12 text-uppercase text-muted mt-4">Labels</h5>

                        <div class="mail-list mt-1">
                            <a href="#"><span class="ri-checkbox-blank-circle-line me-2 text-info"></span><span
                                    class="mail-list-link" data-type="label">Support</span> <span
                                    class="badge bg-success-subtle text-success ms-auto">3</span></a>
                            <a href="#"><span class="ri-checkbox-blank-circle-line me-2 text-warning"></span><span
                                    class="mail-list-link" data-type="label">Freelance</span></a>
                            <a href="#"><span class="ri-checkbox-blank-circle-line me-2 text-primary"></span><span
                                    class="mail-list-link" data-type="label">Social</span></a>
                            <a href="#"><span class="ri-checkbox-blank-circle-line me-2 text-danger"></span><span
                                    class="mail-list-link" data-type="label">Friends</span><span
                                    class="badge bg-success-subtle text-success ms-auto">2</span></a>
                            <a href="#"><span class="ri-checkbox-blank-circle-line me-2 text-success"></span><span
                                    class="mail-list-link" data-type="label">Family</span></a>
                        </div>
                    </div>

                    <div class="border-top border-top-dashed pt-3 mt-3">
                        <a href="#"
                            class="btn btn-icon btn-sm btn-soft-info rounded-pill float-end material-shadow-none"><i
                                class="bx bx-plus fs-16"></i></a>
                        <h5 class="fs-12 text-uppercase text-muted mb-3">Chat</h5>

                        <div class="mt-2 vstack email-chat-list mx-n4">
                            <a href="javascript: void(0);" class="d-flex align-items-center active">
                                <div class="flex-shrink-0 me-2 avatar-xxs chatlist-user-image">
                                    <img class="img-fluid rounded-circle" src="{{ URL::asset('build/images/users/avatar-2.jpg') }}"
                                        alt="">
                                </div>

                                <div class="flex-grow-1 chat-user-box overflow-hidden">
                                    <h5 class="fs-13 text-truncate mb-0 chatlist-user-name">Scott Median</h5>
                                    <small class="text-muted text-truncate mb-0">Hello ! are you there?</small>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-2 avatar-xxs chatlist-user-image">
                                    <img class="img-fluid rounded-circle" src="{{ URL::asset('build/images/users/avatar-4.jpg') }}"
                                        alt="">
                                </div>

                                <div class="flex-grow-1 chat-user-box overflow-hidden">
                                    <h5 class="fs-13 text-truncate mb-0 chatlist-user-name">Julian Rosa</h5>
                                    <small class="text-muted text-truncate mb-0">What about our next..</small>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-2 avatar-xxs chatlist-user-image">
                                    <img class="img-fluid rounded-circle" src="{{ URL::asset('build/images/users/avatar-3.jpg') }}"
                                        alt="">
                                </div>

                                <div class="flex-grow-1 chat-user-box overflow-hidden">
                                    <h5 class="fs-13 text-truncate mb-0 chatlist-user-name">David Medina</h5>
                                    <small class="text-muted text-truncate mb-0">Yeah everything is fine</small>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-2 avatar-xxs chatlist-user-image">
                                    <img class="img-fluid rounded-circle" src="{{ URL::asset('build/images/users/avatar-5.jpg') }}"
                                        alt="">
                                </div>

                                <div class="flex-grow-1 chat-user-box overflow-hidden">
                                    <h5 class="fs-13 text-truncate mb-0 chatlist-user-name">Jay Baker</h5>
                                    <small class="text-muted text-truncate mb-0">Wow that's great</small>
                                </div>
                            </a>
                        </div>
                    </div> --}}
                </div>

                <div class="mt-auto">
                    <h5 class="fs-13">1 out of 10 Document Used</h5>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end chat leftsidebar -->
        <!-- Start User chat -->
        <div class="user-chat w-100 overflow-hidden minimal-border">

            <div class="chat-content d-lg-flex">
                <!-- start chat conversation section -->
                <div class="w-100 overflow-hidden position-relative">
                    <!-- conversation user -->
                    <div class="position-relative">


                        <div class="position-relative" id="users-chat">
                            <div class="p-3 user-chat-topbar">
                                <div class="row align-items-center">
                                    <div class="col-sm-4 col-8">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 d-block d-lg-none me-3">
                                                <a href="javascript: void(0);" class="user-chat-remove fs-18 p-1"><i
                                                        class="ri-arrow-left-s-line align-bottom"></i></a>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3 ms-0">
                                                        <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}"
                                                            class="rounded-circle avatar-xs" alt="">
                                                        <span class="user-status"></span>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="text-truncate mb-0 fs-16"><a class="text-reset username"
                                                                data-bs-toggle="offcanvas" href="#userProfileCanvasExample"
                                                                aria-controls="userProfileCanvasExample">Lisa Parker</a>
                                                        </h5>
                                                        {{-- <p class="text-truncate text-muted fs-14 mb-0 userStatus"><small>Online</small></p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8 col-4 d-none">
                                        <ul class="list-inline user-chat-nav text-end mb-0">
                                            <li class="list-inline-item m-0">
                                                <div class="dropdown">
                                                    <button class="btn btn-ghost-secondary btn-icon material-shadow-none"
                                                        type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i data-feather="search" class="icon-sm"></i>
                                                    </button>
                                                    <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg">
                                                        <div class="p-2">
                                                            <div class="search-box">
                                                                <input type="text"
                                                                    class="form-control bg-light border-light"
                                                                    placeholder="Search here..."
                                                                    onkeyup="searchMessages()" id="searchMessage">
                                                                <i class="ri-search-2-line search-icon"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-inline-item d-none d-lg-inline-block m-0">
                                                <button type="button"
                                                    class="btn btn-ghost-secondary btn-icon material-shadow-none"
                                                    data-bs-toggle="offcanvas" data-bs-target="#userProfileCanvasExample"
                                                    aria-controls="userProfileCanvasExample">
                                                    <i data-feather="info" class="icon-sm"></i>
                                                </button>
                                            </li>

                                            <li class="list-inline-item m-0">
                                                <div class="dropdown">
                                                    <button class="btn btn-ghost-secondary btn-icon material-shadow-none"
                                                        type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i data-feather="more-vertical" class="icon-sm"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item d-block d-lg-none user-profile-show"
                                                            href="#"><i
                                                                class="ri-user-2-fill align-bottom text-muted me-2"></i>
                                                            View Profile</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="ri-inbox-archive-line align-bottom text-muted me-2"></i>
                                                            Archive</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="ri-mic-off-line align-bottom text-muted me-2"></i>
                                                            Muted</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="ri-delete-bin-5-line align-bottom text-muted me-2"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <!-- end chat user head -->
                            <div class="chat-conversation p-3 p-lg-4 " id="chat-conversation" data-simplebar>
                                <div id="elmLoader">
                                    <div class="spinner-border text-primary avatar-sm" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                                <ul class="list-unstyled chat-conversation-list" id="users-conversation">

                                </ul>
                                <!-- end chat-conversation-list -->
                            </div>
                            <div class="alert alert-warning alert-dismissible copyclipboard-alert px-4 fade show "
                                id="copyClipBoard" role="alert">
                                Message copied
                            </div>
                        </div>

                        <div class="position-relative" id="channel-chat">
                            <div class="p-3 user-chat-topbar">
                                <div class="row align-items-center">
                                    <div class="col-sm-4 col-8">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 d-block d-lg-none me-3">
                                                <a href="javascript: void(0);" class="user-chat-remove fs-18 p-1"><i
                                                        class="ri-arrow-left-s-line align-bottom"></i></a>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3 ms-0">
                                                        <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="text-truncate mb-0 fs-16"><a
                                                                class="text-reset username" data-bs-toggle="offcanvas"
                                                                href="#userProfileCanvasExample"
                                                                aria-controls="userProfileCanvasExample">Lisa Parker</a>
                                                        </h5>
                                                        <p class="text-truncate text-muted fs-14 mb-0 userStatus"><small>24
                                                                Members</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8 col-4">
                                        <ul class="list-inline user-chat-nav text-end mb-0">
                                            <li class="list-inline-item m-0">
                                                <div class="dropdown">
                                                    <button class="btn btn-ghost-secondary btn-icon" type="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i data-feather="search" class="icon-sm"></i>
                                                    </button>
                                                    <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg">
                                                        <div class="p-2">
                                                            <div class="search-box">
                                                                <input type="text"
                                                                    class="form-control bg-light border-light"
                                                                    placeholder="Search here..."
                                                                    onkeyup="searchMessages()" id="searchMessage">
                                                                <i class="ri-search-2-line search-icon"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-inline-item d-none d-lg-inline-block m-0">
                                                <button type="button" class="btn btn-ghost-secondary btn-icon"
                                                    data-bs-toggle="offcanvas" data-bs-target="#userProfileCanvasExample"
                                                    aria-controls="userProfileCanvasExample">
                                                    <i data-feather="info" class="icon-sm"></i>
                                                </button>
                                            </li>

                                            <li class="list-inline-item m-0">
                                                <div class="dropdown">
                                                    <button class="btn btn-ghost-secondary btn-icon" type="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i data-feather="more-vertical" class="icon-sm"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item d-block d-lg-none user-profile-show"
                                                            href="#"><i
                                                                class="ri-user-2-fill align-bottom text-muted me-2"></i>
                                                            View Profile</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="ri-inbox-archive-line align-bottom text-muted me-2"></i>
                                                            Archive</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="ri-mic-off-line align-bottom text-muted me-2"></i>
                                                            Muted</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="ri-delete-bin-5-line align-bottom text-muted me-2"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <!-- end chat user head -->
                            <div class="chat-conversation p-3 p-lg-4" id="chat-conversation" data-simplebar>
                                <ul class="list-unstyled chat-conversation-list" id="channel-conversation">
                                </ul>
                                <!-- end chat-conversation-list -->

                            </div>
                            <div class="alert alert-warning alert-dismissible copyclipboard-alert px-4 fade show "
                                id="copyClipBoardChannel" role="alert">
                                Message copied
                            </div>
                        </div>

                        <!-- end chat-conversation -->

                        <div class="chat-input-section p-3 p-lg-4">

                            <form id="chatinput-form" enctype="multipart/form-data">
                                <div class="row g-0 align-items-center">
                                    <div class="col-auto">
                                        <div class="chat-input-links me-2">
                                            <div class="links-list-item">
                                                <button type="button" class="btn btn-link text-decoration-none emoji-btn"
                                                    id="emoji-btn">
                                                    <i class="bx bx-smile align-middle"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="chat-input-feedback">
                                            Please Enter a Message
                                        </div>
                                        <input type="text" class="form-control chat-input bg-light border-light"
                                            id="chat-input" placeholder="Type your message..." autocomplete="off">
                                    </div>
                                    <div class="col-auto">
                                        <div class="chat-input-links ms-2">
                                            <div class="links-list-item">
                                                <button type="submit"
                                                    class="btn btn-success chat-send waves-effect waves-light">
                                                    <i class="ri-send-plane-2-fill align-bottom"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>

                        <div class="replyCard">
                            <div class="card mb-0">
                                <div class="card-body py-3">
                                    <div class="replymessage-block mb-0 d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h5 class="conversation-name"></h5>
                                            <p class="mb-0"></p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" id="close_toggle"
                                                class="btn btn-sm btn-link mt-n2 me-n3 fs-18">
                                                <i class="bx bx-x align-middle"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end chat-wrapper -->

    <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="userProfileCanvasExample">
        <!--end offcanvas-header-->
        <div class="offcanvas-body profile-offcanvas p-0">
            <div class="team-cover">
                <img src="{{ URL::asset('build/images/small/img-9.jpg') }}" alt="" class="img-fluid" />
            </div>
            <div class="p-1 pb-4 pt-0">
                <div class="team-settings">
                    <div class="row g-0">
                        <div class="col">
                            <div class="btn nav-btn">
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="user-chat-nav d-flex">
                                <button type="button" class="btn nav-btn favourite-btn active">
                                    <i class="ri-star-fill"></i>
                                </button>

                                <div class="dropdown">
                                    <a class="btn nav-btn" href="javascript:void(0);" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-inbox-archive-line align-bottom text-muted me-2"></i>Archive</a>
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-mic-off-line align-bottom text-muted me-2"></i>Muted</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-delete-bin-5-line align-bottom text-muted me-2"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <div class="p-3 text-center">
                <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt=""
                    class="avatar-lg img-thumbnail rounded-circle mx-auto profile-img">
                <div class="mt-3">
                    <h5 class="fs-16 mb-1"><a href="javascript:void(0);" class="link-primary username">Lisa Parker</a>
                    </h5>
                    <p class="text-muted"><i
                            class="ri-checkbox-blank-circle-fill me-1 align-bottom text-success"></i>Online</p>
                </div>

                <div class="d-flex gap-2 justify-content-center">
                    <button type="button" class="btn avatar-xs p-0" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Message">
                        <span class="avatar-title rounded bg-light text-body">
                            <i class="ri-question-answer-line"></i>
                        </span>
                    </button>

                    <button type="button" class="btn avatar-xs p-0" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Favourite">
                        <span class="avatar-title rounded bg-light text-body">
                            <i class="ri-star-line"></i>
                        </span>
                    </button>

                    <button type="button" class="btn avatar-xs p-0" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Phone">
                        <span class="avatar-title rounded bg-light text-body">
                            <i class="ri-phone-line"></i>
                        </span>
                    </button>

                    <div class="dropdown">
                        <button class="btn avatar-xs p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="avatar-title bg-light text-body rounded">
                                <i class="ri-more-fill"></i>
                            </span>
                        </button>

                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                        class="ri-inbox-archive-line align-bottom text-muted me-2"></i>Archive</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                        class="ri-mic-off-line align-bottom text-muted me-2"></i>Muted</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                        class="ri-delete-bin-5-line align-bottom text-muted me-2"></i>Delete</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="border-top border-top-dashed p-3">
                <h5 class="fs-15 mb-3">Personal Details</h5>
                <div class="mb-3">
                    <p class="text-muted text-uppercase fw-medium fs-12 mb-1">Number</p>
                    <h6>+(256) 2451 8974</h6>
                </div>
                <div class="mb-3">
                    <p class="text-muted text-uppercase fw-medium fs-12 mb-1">Email</p>
                    <h6>lisaparker@gmail.com</h6>
                </div>
                <div>
                    <p class="text-muted text-uppercase fw-medium fs-12 mb-1">Location</p>
                    <h6 class="mb-0">California, USA</h6>
                </div>
            </div>

            <div class="border-top border-top-dashed p-3">
                <h5 class="fs-15 mb-3">Attached Files</h5>

                <div class="vstack gap-2">
                    <div class="border rounded border-dashed p-2">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-xs">
                                    <div class="avatar-title bg-light text-secondary rounded fs-20">
                                        <i class="ri-folder-zip-line"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="fs-13 mb-1"><a href="#" class="text-body text-truncate d-block">App
                                        pages.zip</a></h5>
                                <div class="text-muted">2.2MB</div>
                            </div>
                            <div class="flex-shrink-0 ms-2">
                                <div class="d-flex gap-1">
                                    <button type="button"
                                        class="btn btn-icon text-muted btn-sm fs-18 material-shadow-none"><i
                                            class="ri-download-2-line"></i></button>
                                    <div class="dropdown">
                                        <button class="btn btn-icon text-muted btn-sm fs-18 dropdown material-shadow-none"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ri-share-line align-bottom me-2 text-muted"></i> Share</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ri-bookmark-line align-bottom me-2 text-muted"></i>
                                                    Bookmark</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ri-delete-bin-line align-bottom me-2 text-muted"></i>
                                                    Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border rounded border-dashed p-2">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-xs">
                                    <div class="avatar-title bg-light text-secondary rounded fs-20">
                                        <i class="ri-file-ppt-2-line"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="fs-13 mb-1"><a href="#" class="text-body text-truncate d-block">Velzon
                                        admin.ppt</a></h5>
                                <div class="text-muted">2.4MB</div>
                            </div>
                            <div class="flex-shrink-0 ms-2">
                                <div class="d-flex gap-1">
                                    <button type="button"
                                        class="btn btn-icon text-muted btn-sm fs-18 material-shadow-none"><i
                                            class="ri-download-2-line"></i></button>
                                    <div class="dropdown">
                                        <button class="btn btn-icon text-muted btn-sm fs-18 dropdown material-shadow-none"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ri-share-line align-bottom me-2 text-muted"></i> Share</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ri-bookmark-line align-bottom me-2 text-muted"></i>
                                                    Bookmark</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ri-delete-bin-line align-bottom me-2 text-muted"></i>
                                                    Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border rounded border-dashed p-2">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-xs">
                                    <div class="avatar-title bg-light text-secondary rounded fs-20">
                                        <i class="ri-folder-zip-line"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="fs-13 mb-1"><a href="#"
                                        class="text-body text-truncate d-block">Images.zip</a></h5>
                                <div class="text-muted">1.2MB</div>
                            </div>
                            <div class="flex-shrink-0 ms-2">
                                <div class="d-flex gap-1">
                                    <button type="button"
                                        class="btn btn-icon text-muted btn-sm fs-18 material-shadow-none"><i
                                            class="ri-download-2-line"></i></button>
                                    <div class="dropdown">
                                        <button class="btn btn-icon text-muted btn-sm fs-18 dropdown material-shadow-none"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ri-share-line align-bottom me-2 text-muted"></i> Share</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ri-bookmark-line align-bottom me-2 text-muted"></i>
                                                    Bookmark</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ri-delete-bin-line align-bottom me-2 text-muted"></i>
                                                    Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border rounded border-dashed p-2">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-xs">
                                    <div class="avatar-title bg-light text-secondary rounded fs-20">
                                        <i class="ri-image-2-line"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="fs-13 mb-1"><a href="#"
                                        class="text-body text-truncate d-block">bg-pattern.png</a></h5>
                                <div class="text-muted">1.1MB</div>
                            </div>
                            <div class="flex-shrink-0 ms-2">
                                <div class="d-flex gap-1">
                                    <button type="button"
                                        class="btn btn-icon text-muted btn-sm fs-18 material-shadow-none"><i
                                            class="ri-download-2-line"></i></button>
                                    <div class="dropdown">
                                        <button class="btn btn-icon text-muted btn-sm fs-18 dropdown material-shadow-none"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ri-share-line align-bottom me-2 text-muted"></i> Share</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ri-bookmark-line align-bottom me-2 text-muted"></i>
                                                    Bookmark</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ri-delete-bin-line align-bottom me-2 text-muted"></i>
                                                    Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-2">
                        <button type="button" class="btn btn-danger">Load more <i
                                class="ri-arrow-right-fill align-bottom ms-1"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!--end offcanvas-body-->
    </div>
    <!--end offcanvas-->

    <!-- Compose Modal -->
    <div class="modal fade" id="composemodal" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header p-3 bg-light">
                    <h5 class="modal-title" id="composemodalTitle">New Message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="mb-3 position-relative">
                            <input type="text" class="form-control email-compose-input" data-choices
                                data-choices-limit="15" value="support@themesbrand.com" data-choices-removeItem
                                placeholder="To">
                            <div class="position-absolute top-0 end-0">
                                <div class="d-flex">
                                    <button class="btn btn-link text-reset fw-semibold px-2" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#CcRecipientsCollapse"
                                        aria-expanded="false" aria-controls="CcRecipientsCollapse">
                                        Cc
                                    </button>
                                    <button class="btn btn-link text-reset fw-semibold px-2" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#BccRecipientsCollapse"
                                        aria-expanded="false" aria-controls="BccRecipientsCollapse">
                                        Bcc
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="CcRecipientsCollapse">
                            <div class="mb-3">
                                <label>Cc:</label>
                                <input type="text" class="form-control" data-choices data-choices-limit="15"
                                    data-choices-removeItem placeholder="Cc recipients">
                            </div>
                        </div>
                        <div class="collapse" id="BccRecipientsCollapse">
                            <div class="mb-3">
                                <label>Bcc:</label>
                                <input type="text" class="form-control" data-choices data-choices-limit="15"
                                    data-choices-removeItem placeholder="Bcc recipients">
                            </div>
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="ck-editor-reverse">
                            <div id="email-editor"></div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal">Discard</button>

                    <div class="btn-group">
                        <button type="button" class="btn btn-success">Send</button>
                        <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i
                                        class="ri-timer-line text-muted me-1 align-bottom"></i> Schedule Send</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->
@endsection
@section('script')
    <script src="{{ URL::asset('build/libs/glightbox/js/glightbox.min.js') }}"></script>

    <!-- fgEmojiPicker js -->
    <script src="{{ URL::asset('build/libs/fg-emoji-picker/fgEmojiPicker.js') }}"></script>
    {{-- <script src="{{ URL::asset('build/js/pages/profile-setting.init.js') }}"></script> --}}
    <script src="{{ URL::asset('build/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/mailbox.init.js') }}"></script>

    <!-- chat init js -->
    <script src="{{ URL::asset('build/js/pages/chat.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
