@extends('layouts.admin')

@section('title', 'Detalles cliente '. $client->name)

@section('styles')
  
@endsection

@section('content')

<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        clientes
      </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Panel Administrativo</a></li>
          <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">clientes</a></li>
          <li class="breadcrumb-item active" aria-current="page">Detalle cliente</li>
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
                    <h3>{{ $client->name }}</h3>
                    <img src="{{ asset('image/'.$client->imagen) }}" alt="{{ $client->imagen }}" width="150">
                </div>
                <div class="border-bottom py-4">
                  <ul class="list-group">
                    <li class="list-group-item list-group-item-action active d-flex justify-content-between align-items-center">
                      Sobre cliente
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Historial de Compras
                      <span class="badge badge-primary badge-pill">{{ $client->stock }}</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-8 pl-lg-5">
                <div class="d-flex justify-content-between">
                  <div>
                    <h3>Información del cliente</h3>
                  </div>
                </div>
                <div class="mt-4 py-2">
                  <div class="row">
                      <div class="form-group col-md-6">
                          <strong><i class="fab fa-product-hunt mr-2"></i> Nombre</strong>
                          <p class="text-muted">{{ $client->name }}</p>
                          <hr>

                          <strong><i class="fas fa-address-card mr-2"></i> DUI</strong>
                          <p class="text-muted">{{ $client->dui }}</p>
                          <hr>

                          <strong><i class="fas fa-qrcode mr-2"></i> Código</strong>
                          <p class="text-muted">{{ $client->ruc }}</p>
                          <hr>
                      </div>
                      <div class="col-md-6">
                        <strong><i class="fas fa-mobile-alt mr-2"></i> Teléfono/Celular</strong>
                        <p class="text-muted">{{ $client->phone }}</p>
                        <hr>

                        <strong><i class="fas fa-envelope mr-2"></i> Correo Electrónico</strong>
                        <p class="text-muted">{{ $client->email }}</p>
                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-2"></i> Dirección</strong>
                        <p class="text-muted">{{ $client->address }}</p>
                        <hr>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <a href="{{ route('clients.index') }}" class="btn btn-primary float-right">Regresar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@section('scripts')
  {{ Html::script("js/data-table.js") }}
@endsection
@endsection