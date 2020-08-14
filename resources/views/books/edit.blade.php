@extends('layouts.base')

@section('heading-level1')
    <a class="navbar-brand">{{__('book.heading.edit')}}</a>
@endsection

@section('content')
            <form action="/books-info/update/{{$book_info->id}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">{{ __('book.list.title') }}</label>
                    <input type="text" name="title" class="form-control"
                           value={{ $book_info->title }} placeholder="{{ __('book.placeholder.title') }}">
                </div>
                <div class="form-group">
                    <label for="cost">{{ __('book.list.cost') }}</label>
                    <input type="text" name="cost" class="form-control"
                           value={{ $book_info->cost }} placeholder="{{ __('book.placeholder.cost') }}">
                </div>
                <div class="form-group">
                    <label for="memo">{{ __('book.list.memo') }}</label>
                    <textarea name="memo" rows="8" cols="80" class="form-control"
                              placeholder="{{ __('book.placeholder.memo') }}">{{ $book_info->memo }}</textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">{{ __('book.btn.update') }}</button>
                </div>
            </form>
            <div class="text-right">
                <form action="/books-info">
                    <button type="submit" class="btn btn-primary">{{ __('book.btn.index') }}</button>
                </form>
            </div>

@endsection
