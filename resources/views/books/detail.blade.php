@extends('layouts.base')

@section('heading-level1')
    <a class="navbar-brand">{{__('book.heading.detail')}}</a>
@endsection

@section('content')
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h5 class="border-bottom border-gray pb-2 mb-3">{{ __('book.list.title') }}</h5>
        <p class="pb-2 mb-4">{{$book_info->title}}</p>
        <h5 class="border-bottom border-gray pb-2 mb-3">{{ __('book.list.cost') }}</h5>
        <p class="pb-2 mb-4">{{$book_info->cost}}</p>
        <h5 class="border-bottom border-gray pb-2 mb-3">{{ __('book.list.memo') }}</h5>
        <p class="pb-2 mb-4">{{$book_info->memo}}</p>
    </div>
    <div class="text-right">
        <form action="/books-info/edit/{{$book_info->id}}">
            <button type="submit" class="btn btn-success">{{ __('book.btn.edit') }}</button>
        </form>
    </div>
    <div class="text-right">
        <button type="button" class="delete-confirm btn btn-danger" data-toggle="modal"
                data-target="#confirm-delete">{{ __('book.btn.delete') }}</button>
    </div>
    <!-- 削除確認ダイアログ -->
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    {{ __('book.dialog.confirm.delete') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">{{ __('book.btn.no') }}</button>
                    <form method="post" action="/books-info/delete/{{$book_info->id}}">
                        @csrf
                        <button type="submit" class="delete-complete btn btn-danger"
                                data-toggle="modal" data-target="#complete-delete">{{ __('book.btn.yes') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <form action="/books-info">
        <button type="submit" class="btn btn-secondary">{{ __('book.btn.return') }}</button>
    </form>
@endsection

<script>
    // 削除確認ダイアログの表示
    $('.delete-confirm').click(function () {
        $('#deletebtn').val($(this).val());
    });
</script>
