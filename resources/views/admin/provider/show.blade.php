@extends('layouts.admin')

@section('title', 'Detalles Proveedor '. $provider->name)

@section('styles')
  
@endsection

@section('content')

<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        Proveedores
      </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Panel Administrativo</a></li>
          <li class="breadcrumb-item"><a href="{{ route('providers.index') }}">Proveedores</a></li>
          <li class="breadcrumb-item active" aria-current="page">Detalle Proveedor</li>
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
                    <h3>{{ $provider->name }}</h3>
                </div>
                <div class="border-bottom py-4">
                  <div class="list-group">
                      <button type="button" class="list-group-item list-group-item-action active">Sobre Proveedor</button>
                      <button type="button" class="list-group-item list-group-item-action">Productos</button>
                      <button type="button" class="list-group-item list-group-item-action">Registrar Producto</button>
                  </div>
                </div>
              </div>
              <div class="col-lg-8 pl-lg-5">
                <div class="d-flex justify-content-between">
                  <div>
                    <h3>Información del Proveedor</h3>
                  </div>
                </div>
                <div class="mt-4 py-2">
                  <div class="row">
                      <div class="form-group col-md-6">
                          <strong><i class="fab fa-product-hunt mr-2"></i> Nombre</strong>
                          <p class="text-muted">{{ $provider->name }}</p>
                          <hr>

                          <strong><i class="fas fa-address-card mr-2"></i> Código</strong>
                          <p class="text-muted">{{ $provider->ruc_number }}</p>
                          <hr>
                      </div>
                      <div class="col-md-6">
                        <strong><i class="fas fa-mobile-alt mr-2"></i> Telefóno</strong>
                        <p class="text-muted">{{ $provider->phone }}</p>
                        <hr>

                        <strong><i class="fas fa-envelope mr-2"></i> Correo</strong>
                        <p class="text-muted">{{ $provider->email }}</p>
                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-2"></i> Dirección</strong>
                        <p class="text-muted">{{ $provider->address }}</p>
                        <hr>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <a href="{{ route('providers.index') }}" class="btn btn-primary float-right">Regresar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@section('scripts')
  {{ Html::script("js/data-table.js") }}
@endsection
@endsection