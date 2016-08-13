<div class="ui fixed inverted menu">
  <div class="ui container">
    <a href="#" class="header item">
      <img class="logo" src="{{ GlideImage::load('melon_logo.png')->modify(['w' => 35, 'h' => 35]) }}">
      {{ trans('global.website_name') }}
    </a>
    <a href="{{ route('manage::dashboard') }}" class="item">{{ trans('manage.menu.dashboard') }}</a>

    @permission(['article.show', 'article.manage'])
        <a href="{{ route('manage::manage.article.index') }}" class="item">{{ trans('manage.menu.articles') }}</a>
    @endpermission
  </div>
</div>