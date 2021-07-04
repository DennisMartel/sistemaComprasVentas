@extends('layouts.admin')

@section('title', 'Registrar Venta')

@section('styles')
  
@endsection

@section('content')
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      Registro de Ventas
    </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Panel Administrativo</a></li>
        <li class="breadcrumb-item"><a href="{{ route('sales.index') }}">Ventas</a></li>
        <li class="breadcrumb-item active" aria-current="page">Registrar Venta</li>
      </ol>
    </nav>
  </div>
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
            <h4 class="card-title">Registro de Ventas</h4>
        </div>
        {!! Form::open(['route' => 'sales.store', 'method' => 'POST']) !!}
          @include('admin.sale._form')
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
          <a href="{{ route('sales.index') }}" class="btn btn-light">Cancelar</a>    
      </div>
      {!! Form::close() !!}
    </div>
</div>

@section('scripts')
  {{ Html::script("js/alerts.js") }}
  {{ Html::script("js/avgrund.js") }}
  {{ Html::script('select/dist/js/bootstrap-select.min.js') }}
  {{ Html::script('js/sweetalert2.all.min.js') }}
  {{ Html::script("js/scripts/agregarVenta.js") }}
@endsection
@endsection