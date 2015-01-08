@extends('layouts.admin')

@section('content')

<h2>Page Create</h2>


{{ Form::model($page, ['route' => ['admin.pages.create']]) }}

    <div class="form-group">
        {{ Form::text('path', null, ['class' => 'form-control', 'placeholder' => 'Path']) }}
    </div>
    <div class="form-group">
        {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) }}
    </div>
    <div class="form-group">
        {{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Content']) }}
    </div>

    {{ Form::submit('Save', ['class' => 'btn btn-default']); }}

{{ Form::close() }}

@stop
