@extends('layouts.master')

@section('content')

<h2 style="margin: 0; padding: 0; padding-bottom: 10px;">Вход</h2>

<div style="width: 250px; margin: 0 auto;">

<form method="post">
  <div class="form-group">
    <input type="email" class="form-control" placeholder="Email" name="email">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" placeholder="Пароль" name="password">
  </div>
  <button type="submit" class="btn btn-default">Войти</button>
</form>

</div>

@stop
