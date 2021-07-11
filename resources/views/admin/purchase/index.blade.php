@extends('layouts.admin')

@section('title', 'Gestión de Compras')

@section('styles')
  
@endsection

@section('content')
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      Compras
    </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Panel Administrativo</a></li>
        <li class="breadcrumb-item active" aria-current="page">Compras</li>
      </ol>
    </nav>
  </div>
  <div class="card">
    <div class="card-body">
      <div class="d-flex justify-content-between">
          <h4 class="card-title">Compras</h4>
          <div class="nav-link">
            {{-- <span class="dropdown-toggle btn btn-outline-dark" id="languageDropdown" data-toggle="dropdown">English</span> --}}
          <i class="fas fa-ellipsis-v" data-toggle="dropdown"></i>
          <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
            <a class="dropdown-item font-weight-medium" href="{{ route('purchases.create') }}">
              Agregar
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                    <th>Id</th>
                    <th>Fecha</th>
                    <th>Total</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($purchases as $purchase)
                  <tr>
                    <td><a href="{{ route('purchases.show', $purchase) }}">{{ $purchase->id }}</a></td>
                    <td>{{ $purchase->purchase_date }}</td>
                    <td>${{ $purchase->total }}</td>
                    <td>
                      @if($purchase->status == 'VALID')
                        <a href="{{ route('purchases.change_status', $purchase) }}" class="btn btn-success">VALIDA</a>
                      @else
                        <a href="{{ route('purchases.change_status', $purchase) }}" class="btn btn-danger">CANCELADA</a>
                      @endif
                    <td>
                      <a href="{{ route('purchases.pdf', $purchase) }}" class="jsgrid-button jsgrid-edit-button text-danger" title=""><i class="fas fa-file-pdf"></i></a>
                      <a href="" class="jsgrid-button jsgrid-edit-button text-warning" title=""><i class="fas fa-print"></i></a>
                      <a href="{{ route('purchases.show', $purchase) }}" class="jsgrid-button jsgrid-edit-button text-success" title=""><i class="fas fa-eye"></i></a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@section('scripts')
  {{ Html::script("js/data-table.js") }}
@endsection
@endsection