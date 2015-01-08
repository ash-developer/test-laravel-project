@extends('layouts.admin')

@section('content')

<h2>Pages</h2>

<div style="margin-bottom: 10px;">

    <a href="{{{ route('admin.pages.create') }}}" class="btn btn-default">
        <i class="glyphicon glyphicon-plus"></i> add page
    </a>

    @if(count($pages) > 0)
    <a href="" class="btn btn-default">
        <i class="glyphicon glyphicon-minus"></i> delete pages
    </a>
    @endif

</div>

@if(count($pages) > 0)

    @foreach($pages as $page)

    <div>
        {{{ $page.title }}}
    </div>

    @endforeach
@else
    <div class="well">no pages</div>
@endif

@stop
