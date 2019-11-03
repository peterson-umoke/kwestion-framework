@extends('admin::layouts.master')
@if(!empty($user))
    @section("title","Edit User")
@else
    @section("title","Create User")
@endif

@section("content")

    hello booboo

@endsection
