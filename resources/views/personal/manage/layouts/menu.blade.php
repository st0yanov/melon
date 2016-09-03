<div class="ui fixed inverted menu">
  <div class="ui container">
    <a href="#" class="header item">
      <img class="logo" src="{{ GlideImage::load('melon_logo.png')->modify(['w' => 35, 'h' => 35]) }}">
      @lang('global.website_name')
    </a>
    <a href="{{ route('manage::dashboard') }}" class="item">@lang('manage.menu.dashboard')</a>

    {{-- @permission(['article.show', 'article.manage']) --}}
    @if(Entrust::can(['article.show', 'article.manage']))
        <a href="{{ route('manage::article.index') }}" class="item">@lang('manage.menu.articles')</a>
    @endif
    {{-- @endpermission --}}
  </div>
</div>