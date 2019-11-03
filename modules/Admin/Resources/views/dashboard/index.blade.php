@extends('admin::layouts.master')
@section("title","Dashboard")

@push("css")
    <style>
        .cursor:hover {
            cursor: pointer;
        }
    </style>
    <link rel="stylesheet" href="{{url('/modules/Admin/')}}/Resources/assets/examples/css/dashboard/team.css">
@endpush

@section('content')
    <div class="row text-center">
        <div class="col">
            <div class="card card-shadow card-completed-options cursor"
                 onclick="window.location='{{route('admin.users.index')}}'">
                <div class="card-body card-block py-1">
                    <h1 class="display-3 font-weight-bold">5</h1>
                    <h4>Users</h4>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-shadow card-completed-options cursor"
                 onclick="window.location='{{route('admin.admin-acl.index')}}'">
                <div class="card-body card-block py-1">
                    <h1 class="display-3 font-weight-bold">10</h1>
                    <h4>Admins</h4>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-shadow card-completed-options cursor"
                 onclick="window.location='{{route('admin.users.index')}}'">
                <div class="card-body card-block py-1">
                    <h1 class="display-3 font-weight-bold">20</h1>
                    <h4>Pages</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xxl-4" style="">
            <div id="recentActivityWidget" class="card card-shadow card-lg pb-20">
                <div class="card-header card-header-transparent pb-10">
                    <h5 class="card-title font-weight-bold">
                        RECENT ACTIVITY
                    </h5>
                </div>
                <ul class="timeline timeline-icon">
                    <li class="timeline-reverse timeline-item">
                        <div class="timeline-content-wrap">
                            <div class="timeline-dot bg-green-600">
                                <i class="icon wb-chat" aria-hidden="true"></i>
                            </div>
                            <div class="timeline-content">
                                <div class="title">
                                    <span class="authors">Victor Erixon</span> assigned to a task
                                </div>
                                <div class="metas">
                                    active 14 minutes ago
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-reverse timeline-item">
                        <div class="timeline-content-wrap">
                            <div class="timeline-dot bg-blue-600">
                                <i class="icon wb-image" aria-hidden="true"></i>
                            </div>
                            <div class="timeline-content">
                                <div class="title">
                                    <span class="authors">Alex Bender</span>uploaded 3 photos
                                </div>
                                <div class="metas">
                                    active 2 hours ago
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-reverse timeline-item">
                        <div class="timeline-content-wrap">
                            <div class="timeline-dot bg-cyan-600">
                                <i class="icon wb-file" aria-hidden="true"></i>
                            </div>
                            <div class="timeline-content">
                                <div class="title">
                                    <span class="authors">Jeff Erixon</span>
                                    invite you to attend topic discussion in
                                    <span class="room-number">B205</span>
                                    classroom
                                </div>
                                <div class="metas">
                                    active 4 hours ago
                                </div>
                                <div class="tags">
                                    As user experience designers we have to find the sweet spot
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-reverse timeline-item">
                        <div class="timeline-content-wrap">
                            <div class="timeline-dot bg-orange-600">
                                <i class="icon wb-map" aria-hidden="true"></i>
                            </div>
                            <div class="timeline-content">
                                <div class="title">
                                    <span class="authors">Jeff Erixon</span>
                                    invite you to attend topic discussion in
                                    <span class="room-number">B205</span>
                                    classroom
                                </div>
                                <div class="metas">
                                    active 3 hours ago
                                </div>
                                <ul class="operates">
                                    <li>
                                        <button class="btn btn-outline btn-success btn-round">Accept</button>
                                    </li>
                                    <li>
                                        <button class="btn btn-outline btn-danger btn-round">Refuse</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
