@extends('layouts.admin')

@section('title', 'Detalles Producto '. $product->name)

@section('styles')
  
@endsection

@section('content')

<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        Productos
      </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Panel Administrativo</a></li>
          <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Productos</a></li>
          <li class="breadcrumb-item active" aria-current="page">Detalle Producto</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-4">
                <div class="border-bottom text-center pb-4">
                    <h3>{{ $product->name }}</h3>
                </div>
                <div class="border-bottom py-4">
                  <div class="list-group">
                      <button type="button" class="list-group-item list-group-item-action active">Sobre Producto</button>
                      <button type="button" class="list-group-item list-group-item-action">Productos</button>
                      <button type="button" class="list-group-item list-group-item-action">Registrar Producto</button>
                  </div>
                </div>
              </div>
              <div class="col-lg-8 pl-lg-5">
                <div class="d-flex justify-content-between">
                  <div>
                    <h3>Información del Producto</h3>
                  </div>
                </div>
                <div class="mt-4 py-2">
                  <div class="row">
                      <div class="form-group col-md-6">
                          <strong><i class="fab fa-product-hunt mr-2"></i> Nombre</strong>
                          <p class="text-muted">{{ $product->name }}</p>
                          <hr>

                          <strong><i class="fas fa-address-card mr-2"></i> Código</strong>
                          <p class="text-muted">{{ $product->ruc_number }}</p>
                          <hr>
                      </div>
                      <div class="col-md-6">
                        <strong><i class="fas fa-mobile-alt mr-2"></i> Telefóno</strong>
                        <p class="text-muted">{{ $product->phone }}</p>
                        <hr>

                        <strong><i class="fas fa-envelope mr-2"></i> Correo</strong>
                        <p class="text-muted">{{ $product->email }}</p>
                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-2"></i> Dirección</strong>
                        <p class="text-muted">{{ $product->address }}</p>
                        <hr>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <a href="{{ route('products.index') }}" class="btn btn-primary float-right">Regresar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@section('scripts')
  {{ Html::script("js/data-table.js") }}
@endsection
@endsection