@extends('layouts.base')

@section('heading-level1')
    <a class="navbar-brand">{{__('book.heading.index')}}</a>
@endsection

@section('content')
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">{{__('book.tbl_heading.title')}}</th>
            <th scope="col">{{__('book.tbl_heading.cost')}}</th>
            <th scope="col">{{__('book.tbl_heading.memo')}}</th>
            <th scope="col">{{__('book.tbl_heading.detail')}}</th>
            <th scope="col">{{__('book.tbl_heading.delete')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($books_info as $book_info)
            <tr>
                <td>{{$book_info->title}}</td>
                <td>{{$book_info->cost}}</td>
                <td>{{$book_info->memo}}</td>
                <td>
                    <form action="/books-info/{{$book_info->id}}">
                        <button type="submit" class="btn btn-secondary">{{ __('book.btn.detail') }}</button>
                    </form>
                </td>
                <td>
                    <form method="post" action="/books-info/delete/{{$book_info->id}}">
                        @csrf
                        <button type="submit" class="btn btn-danger">{{ __('book.btn.delete') }}</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="text-right">
        <form action="/books-info/create">
            <button type="submit" class="btn btn-primary">{{ __('book.btn.create') }}</button>
        </form>
    </div>
    <div class="mx-auto" style="width: 200px;">
        {{ $books_info->links() }}
    </div>
@endsection
