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
                    <img src="{{ asset('image/'.$product->imagen) }}" alt="{{ $product->imagen }}" width="150">
                </div>
                <div class="border-bottom py-4">
                  <ul class="list-group">
                    <li class="list-group-item list-group-item-action active d-flex justify-content-between align-items-center">
                      Sobre Producto
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      En stock
                      <span class="badge badge-primary badge-pill">{{ $product->stock }}</span>
                    </li>
                  </ul>
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
                          <p class="text-muted">{{ $product->code }}</p>
                          <hr>

                          <strong><i class="fas fa-dollar-sign mr-2"></i> Precio Venta</strong>
                          <p class="text-muted">${{ $product->sell_price }}</p>
                          <hr>
                      </div>
                      <div class="col-md-6">
                        <strong><i class="fas fa-thumbs-up mr-2"></i> Estado</strong>
                        <p class="text-muted">{{ $product->status }}</p>
                        <hr>

                        <strong><i class="fas fa-tag mr-2"></i> Categoria</strong>
                        <p class="text-muted">{{ $product->category->name }}</p>
                        <hr>

                        <strong><i class="fas fa-truck mr-2"></i> Proveedor</strong>
                        <p class="text-muted">{{ $product->provider->name }}</p>
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