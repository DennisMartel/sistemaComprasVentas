@extends('layouts.admin')

@section('title', 'Registrar Permiso')

@section('styles')
  
@endsection

@section('content')
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      Registro de Permisos
    </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Panel Administrativo</a></li>
        <li class="breadcrumb-item"><a href="{{ route('permissions.index') }}">Permisos</a></li>
        <li class="breadcrumb-item active" aria-current="page">Registrar Permiso</li>
      </ol>
    </nav>
  </div>
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
            <h4 class="card-title">Registro de Permiso</h4>
        </div>
        {!! Form::open(['route' => 'permissions.store', 'method' => 'POST']) !!}
          @include('admin.permission._form')
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
          <a href="{{ route('permissions.index') }}" class="btn btn-light">Cancelar</a>    
      </div>
      {!! Form::close() !!}
    </div>
</div>

@section('scripts')

@endsection
@endsection