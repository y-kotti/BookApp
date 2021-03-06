@extends('layouts.base')

@section('heading-level1')
    <a class="navbar-brand">{{__('book.heading.create')}}</a>
@endsection

@section('content')
    <form action="/books-info/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">{{ __('book.list.title') }}
                <span class="badge badge-danger">{{ __('book.list.required')  }}</span>
            </label>
            <input type="text" name="title" class="form-control"
                   placeholder="{{ __('book.placeholder.title') }}"
                   value = "{{ old('title') }}">
            @if ($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="cost">{{ __('book.list.cost') }}
                <span class="badge badge-danger">{{ __('book.list.required')  }}</span>
            </label>
            <input type="text" name="cost" class="form-control"
                   placeholder="{{ __('book.placeholder.cost') }}"
                   value = "{{ old('cost') }}">
            @if ($errors->has('cost'))
                <span class="text-danger">{{ $errors->first('cost') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="memo">{{ __('book.list.memo') }}
                <span class="badge badge-danger">{{ __('book.list.required')  }}</span>
            </label>
            <textarea name="memo" rows="8" cols="80" class="form-control"
                      placeholder="{{ __('book.placeholder.memo') }}">{{ old('memo') }}</textarea>
            @if ($errors->has('memo'))
                <span class="text-danger">{{ $errors->first('memo') }}</span>
            @endif
        </div>
        <div class="text-right">
            <button type="button" class="create-confirm btn btn-success" data-toggle="modal"
                    data-target="#confirm-create">{{ __('book.btn.store') }}</button>
        </div>
        <!-- 登録確認ダイアログ -->
        <div class="modal fade" id="confirm-create" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        {{ __('book.dialog.confirm.create') }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">{{ __('book.btn.no') }}</button>
                        <form method="post" action="/books-info/store">
                            @csrf
                            <button type="submit" class="create-complete btn btn-success"
                                    data-toggle="modal" data-target="#complete-create">{{ __('book.btn.yes') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="text-left">
        <form action="/books-info">
            <button type="submit" class="btn btn-secondary">{{ __('book.btn.return') }}</button>
        </form>
    </div>
@endsection

<script>
    // 登録ダイアログの表示
    $('.create-confirm').click(function () {
        $('#createbtn').val($(this).val());
    });
</script>
