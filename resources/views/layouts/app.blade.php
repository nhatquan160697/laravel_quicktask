<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>{{ trans('home.title') }}</title>

        {{ Html::style(asset('css/app.css')) }}
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">

            </nav>
        </div>

        @yield('content')

        {{ Html::script(asset('js/app.js')) }}
    </body>
</html>
