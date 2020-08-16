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
                   placeholder="{{ __('book.placeholder.title') }}"
                   @if(!empty(old('title')))
                   value="{{ old('title') }}"
                   @else
                   value="{{ $book_info->title }}"
                @endif>
            @if ($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="cost">{{ __('book.list.cost') }}</label>
            <input type="text" name="cost" class="form-control"
                   placeholder="{{ __('book.placeholder.cost') }}"
                   @if(!empty(old('cost')))
                   value="{{ old('cost') }}"
                   @else
                   value="{{ $book_info->cost }}"
                @endif>
            @if ($errors->has('cost'))
                <span class="text-danger">{{ $errors->first('cost') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="memo">{{ __('book.list.memo') }}</label>
            <textarea name="memo" rows="8" cols="80" class="form-control"
                      placeholder="{{ __('book.placeholder.memo') }}">@if(!empty(old('memo'))){{ old('memo') }}@else{{ $book_info->memo }}@endif</textarea>
            @if ($errors->has('memo'))
                <span class="text-danger">{{ $errors->first('memo') }}</span>
            @endif
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
