{{-- head,header,footerの共通用 --}}

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('book.title.book')}}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div class="container">
    <header>
        <nav class="navbar navbar-light bg-light">
            @yield('heading-level1')
            <form method="/books-info" class="form-inline">
                <input name="keyword" class="form-control mr-sm-2" type="search"
                       placeholder="{{ __('book.placeholder.search') }}"
                       aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0"
                        type="submit">{{ __('book.btn.search') }}</button>
            </form>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy;Company Name</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>--}}
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
