@extends('layouts.master')

@section('title')
  Вход
@stop

@section('content')

<h2>Вход</h2>

<div class="form-container">

  @if ($error = Session::get('error'))
  <div class="alert alert-warning">
    {{ $error }}
  </div>
  @endif

  {{Form::open()}}

    <div class="form-group">
      {{Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email'])}}
    </div>
    <div class="form-group">
      {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Пароль'])}}
    </div>

    {{Form::submit('Войти', ['class' => 'btn btn-default'])}}

  {{Form::close()}}

</div>

@stop
