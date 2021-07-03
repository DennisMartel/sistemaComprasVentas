@extends('layouts.admin')

@section('title', 'Detalles de la compra '. $purchase->id)

@section('styles')
  
@endsection

@section('content')

<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        Detalle de la compra
      </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Panel Administrativo</a></li>
          <li class="breadcrumb-item"><a href="{{ route('purchases.index') }}">Compras</a></li>
          <li class="breadcrumb-item active" aria-current="page">Detalle de la compra</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="form-group row">
              <div class="col-md-4 text-center">
                  <label class="form-control-label" for="nombre"><strong>Proveedor</strong></label>
                  <p>{{$purchase->provider->name}}</p>
              </div>
              <div class="col-md-4 text-center">
                  <label class="form-control-label" for="num_compra"><strong>Número Compra</strong></label>
                  <p>{{$purchase->id}}</p>
              </div>
              <div class="col-md-4 text-center">
                  <label class="form-control-label" for="num_compra"><strong>Comprador</strong></label>
                  <p>{{$purchase->user->name}}</p>
              </div>
            </div>
            <div class="table-responsive col-md-12">
              <table class="table">
                <thead>
                  <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                      <th colspan="3"><p class="float-right">SUBTOTAL:</p></th>
                      <th><p class="float-right">${{number_format($subtotal, 2, '.', ',')}}</p></th>
                  </tr>
                  <tr>
                      <th colspan="3"><p class="float-right">TOTAL IMPUESTO ({{$purchase->tax}}%):</p></th>
                      <th><p class="float-right">${{number_format($subtotal * $purchase->tax/100, 2, '.', ',')}}</p></th>
                  </tr>
                  <tr>
                      <th colspan="3"><p class="float-right">TOTAL:</p></th>
                      <th><p class="float-right">${{number_format($purchase->total, 2, '.', ',')}}</p></th>
                  </tr>
  
              </tfoot>
                <tbody>
                  @foreach($purchaseDetails as $purchaseDetail)
                    <tr>
                      <td>{{ $purchaseDetail->product->name }}</td>
                      <td>${{ $purchaseDetail->price }}</td>
                      <td>{{ $purchaseDetail->quantity }}</td>
                      <td>${{ number_format($purchaseDetail->quantity *  $purchaseDetail->price, 2, '.', ',') }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer">
            <a href="{{ route('purchases.index') }}" class="btn btn-primary float-right">Regresar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@section('scripts')
  {{ Html::script("js/data-table.js") }}
@endsection
@endsection