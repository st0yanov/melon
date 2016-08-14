@extends('personal.manage.layouts.master')
@section('title', trans('manage.article.index.title'))

@section('content')
<h1 class="ui header">@lang('manage.article.index.heading')</h1>
<table class="ui striped table">
    <thead>
        <tr>
            <th>@lang('manage.article.index.table.id')</th>
            <th>@lang('manage.article.index.table.title')</th>
            <th>@lang('manage.article.index.table.user')</th>
            <th>@lang('manage.article.index.table.updated_at')</th>
            <th>@lang('manage.article.index.table.actions')</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->user->name }}</td>
                <td>{{ $article->updated_at->toDayDateTimeString() }}</td>
                <td>
                    {!! Form::open(['route' => ['manage::manage.article.destroy', $article], 'method' => 'delete']) !!}
                    <a href="{{ route('manage::manage.article.show', $article) }}" class="ui yellow icon button"><i class="edit icon"></i></a>
                    {!! Form::button('<i class="trash outline icon"></i>', ['class' => 'ui red icon button', 'type' => 'submit']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @empty
            <tr class="center aligned">
                <td colspan="5">@lang('manage.article.index.table.empty')</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
