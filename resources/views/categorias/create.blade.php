@extends('layouts.app')
@section('PageTitle', 'Categorías')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::open(['route'=>'categorias.store', 'method'=>'POST']) }}
        @include('categorias.form_master')
      {{ form::close() }}
    </div>
  </div>
@endsection