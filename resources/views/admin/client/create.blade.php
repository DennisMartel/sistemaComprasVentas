@extends('layouts.admin')

@section('title', 'Registrar Client')

@section('styles')
  
@endsection

@section('content')
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      Registro de Clientes
    </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Panel Administrativo</a></li>
        <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">Clientes</a></li>
        <li class="breadcrumb-item active" aria-current="page">Registrar Client</li>
      </ol>
    </nav>
  </div>
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
            <h4 class="card-title">Registro de Clientes</h4>
        </div>
        {!! Form::open(['route' => 'clients.store', 'method' => 'POST', 'files' => true]) !!}
          @include('admin.client._form')
          <button type="submit" class="btn btn-primary">Guardar</button>
          <a href="{{ route('clients.index') }}" class="btn btn-light">Cancelar</a>
        {!! Form::close() !!}
      </div>
    </div>
</div>

@section('scripts')
  {{ Html::script("js/data-table.js") }}
@endsection
@endsection