<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    </head>
    <body>
        <h1>@yield('title')</h1>
        <div class="content">
            @yield('content')
        </div>

        <div class="footer">
        <p>作成日　2020/06/14</p>
        </div>
    </body>
</html>