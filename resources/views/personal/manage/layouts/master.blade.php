@css('semantic/semantic.min.css')
@css('css/manage.css')
@js('js/bundle.js', 'bundle')
@js('semantic/semantic.min.js', 'semantic', 'bundle')

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>@lang('global.website_name') - @lang('manage.global_title') - @yield('title')</title>

    {!! Asset::styles() !!}
    {!! Asset::container('header-scripts')->scripts() !!}
</head>
<body>
    @include('manage.layouts.menu')

    <div class="ui main container">
        @yield('content')
    </div>

    {!! Asset::scripts() !!}
</body>
</html>