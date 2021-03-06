@extends('layouts.app')
@section('PageTitle', 'Categorías')
@section('content')
  <div class="row justify-content-center align-items-center h-100">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::model($categorias,['route'=>['categorias.update',$categorias->cgID],'method'=>'PATCH']) }}
      @include('categorias.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection