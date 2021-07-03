@extends('layouts.admin')

@section('title', 'Registrar Compra')

@section('styles')
  
@endsection

@section('content')
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      Registro de Compras
    </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Panel Administrativo</a></li>
        <li class="breadcrumb-item"><a href="{{ route('purchases.index') }}">Compras</a></li>
        <li class="breadcrumb-item active" aria-current="page">Registrar Compra</li>
      </ol>
    </nav>
  </div>
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
            <h4 class="card-title">Registro de Compras</h4>
        </div>
        {!! Form::open(['route' => 'purchases.store', 'method' => 'POST']) !!}
          @include('admin.purchase._form')
          <button type="button" class="btn btn-success float-right" id="agregar">Añadir Producto</button>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
          <a href="{{ route('purchases.index') }}" class="btn btn-light">Cancelar</a>    
      </div>
      {!! Form::close() !!}
    </div>
</div>

@section('scripts')
  {{ Html::script("js/alerts.js") }}
  {{ Html::script("js/avgrund.js") }}
  {{ Html::script("js/scripts/agregarProducto.js") }}
@endsection
@endsection