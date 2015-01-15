@extends('layouts.admin')

@section('content')

<h2>{{ $page->id ? 'Page Update' : 'Page Create' }}</h2>

@if(count($errors) > 0)
<div class="alert alert-warning">

    <ul>
        @foreach($errors as $error)
        <li>{{{ $error }}}</li>
        @endforeach
    </ul>

</div>
@endif

{{ Form::model($page) }}

    <div class="form-group">
        {{ Form::text('path', null, ['class' => 'form-control', 'placeholder' => 'Path']) }}
    </div>
    <div class="form-group">
        {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) }}
    </div>
    <div class="form-group">
        {{ Form::textarea('content', null, ['class' => 'form-control ckeditor', 'placeholder' => 'Content']) }}
    </div>

    {{ Form::submit($page->id ? 'Update' : 'Save', ['class' => 'btn btn-default']); }}

{{ Form::close() }}

@stop
