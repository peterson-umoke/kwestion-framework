@extends('admin::layouts.master')
{{--@section("title","All Admins")--}}

@section("content")

    {{Form::radio('name', 'value',false,['class' => 'wire'])}}
@endsection
