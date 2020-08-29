@extends('layouts.base')

@section('heading-level1')
    <a class="navbar-brand">{{__('manage.heading.index')}}</a>
@endsection

@section('content')
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <div class="mb-3">
            <h5 class="border-bottom border-gray pb-2 mb-3">{{ __('manage.list.backup') }}</h5>
            <form action="/manage/csv" method="get">
                <button type="submit" class="btn btn-success">{{ __('manage.btn.csv') }}</button>
            </form>
        </div>
        <div class="mb-3">
            <h5 class="border-bottom border-gray pb-2 mb-3">{{ __('manage.list.access_log') }}</h5>
            <form action="/manage/user-info" method="get">
                <button type="submit" class="btn btn-success">{{ __('manage.btn.user') }}</button>
            </form>
        </div>
    </div>
    <div class="text-left">
        <form action="/books-info/">
            <button type="submit" class="btn btn-secondary">{{ __('book.btn.return') }}</button>
        </form>
    </div>
@endsection
