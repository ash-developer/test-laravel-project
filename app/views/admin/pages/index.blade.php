@extends('../../layouts.admin')

@section('content')

<h2 style="height: 36px; line-height: 36px;">
    Pages

    <div class="pull-right">

        <a href="{{{ route('admin.pages.create') }}}" class="btn btn-default">
            <i class="glyphicon glyphicon-plus"></i> add page
        </a>

    </div>
</h2>


@if(count($pages) > 0)

    <table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Path</th>
        <th class="text-center" style="width: 100px;">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($pages as $page)
    <tr>
        <td>{{{ $page->id }}}</td>
        <td>{{{ $page->title }}}</td>
        <td>{{{ $page->path }}}</td>
        <td class="text-center">
            <a href="{{{ route('admin.pages.edit', ['user' => $page->id]) }}}"><span class="glyphicon glyphicon-edit"></span></a>
        </td>
    </tr>
    @endforeach
    </tbody>
    </table>
@else
    <div class="well">no pages</div>
@endif

@stop
