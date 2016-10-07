<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'Default') | Panel de Administracion</title>
        <link rel="stylesheet" href="{{ asset("/css/bootstrap.min.css") }}">
    </head>
    <body>
        
        <section>
            @include('admin.template.partials.nav')
            <div class="row">
                <div class="col-md-2">@include('admin.template.partials.menu')</div>
                <div class="col-md-10">@yield('content')</div>
            </div>
        </section>
        @include('admin.template.partials.footer')
        <script src="{{ asset("/js/jquery.min.js") }}"></script>
        <script src="{{ asset("/js/bootstrap.min.js") }}"></script>
    </body>
</html>