@extends('errors.layouts.error')

@section('content')
    <div class="jumbotron">
        <h1>{{__('error.heading.400')}}</h1>
        <p class="lead">{{__('error.message.note')}}</p>
        <form action="/books-info">
            <button type="submit" class="btn btn-primary">{{ __('error.btn.index') }}</button>
        </form>
    </div>
@endsection
