@extends('layouts.master')

@section('title')
    {{{$page->title}}}
@stop

@section('content')

    <div class="{{{$page->path}}}-page">
        {{$page->content}}
    </div>

@stop
