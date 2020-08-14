@extends('layouts.base')

@section('heading-level1')
    <a class="navbar-brand">{{__('book.heading.detail')}}</a>
@endsection

@section('content')
    <div class="form-group">
        <label for="title">{{ __('book.list.title') }}</label>
        <p>{{$book_info->title}}</p>
    </div>
    <div class="form-group">
        <label for="title">{{ __('book.list.cost') }}</label>
        <p>{{$book_info->cost}}</p>
    </div>
    <div class="form-group">
        <label for="title">{{ __('book.list.memo') }}</label>
        <p>{{$book_info->memo}}</p>
    </div>
    <form action="/books-info/edit/{{$book_info->id}}">
        <button type="submit" class="btn btn-primary">{{ __('book.btn.edit') }}</button>
    </form>
    <form method="post" action="/books-info/delete/{{$book_info->id}}">
        @csrf
        <button type="submit" class="btn btn-danger">{{ __('book.btn.delete') }}</button>
    </form>
    <form action="/books-info">
        <button type="submit" class="btn btn-primary">{{ __('book.btn.index') }}</button>
    </form>
@endsection
