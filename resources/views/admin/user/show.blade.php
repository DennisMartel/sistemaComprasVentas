@extends('layouts.admin')

@section('title', 'Detalles de la venta '. $sale->id)

@section('styles')
  
@endsection

@section('content')

<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        Detalle de la venta
      </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Panel Administrativo</a></li>
          <li class="breadcrumb-item"><a href="{{ route('sales.index') }}">ventas</a></li>
          <li class="breadcrumb-item active" aria-current="page">Detalle de la venta</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="form-group row">
              <div class="col-md-4 text-center">
                  <label class="form-control-label" for="num_venta"><strong>Número venta</strong></label>
                  <p>{{$sale->id}}</p>
              </div>
            </div>
            <div class="table-responsive col-md-12">
              <table class="table">
                <thead>
                  <tr>
                    <th>Producto</th>
                    <th>Precio Venta</th>
                    <th>Cantidad</th>
                    <th>Descuento (%)</th>
                    <th>Subtotal</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                      <th colspan="4"><p class="float-right">SUBTOTAL:</p></th>
                      <th><p class="float-right">${{number_format($subtotal, 2, '.', ',')}}</p></th>
                  </tr>
                  <tr>
                      <th colspan="4"><p class="float-right">TOTAL IMPUESTO ({{$sale->tax}}%):</p></th>
                      <th><p class="float-right">${{number_format($subtotal * $sale->tax/100, 2, '.', ',')}}</p></th>
                  </tr>
                  <tr>
                      <th colspan="4"><p class="float-right">TOTAL:</p></th>
                      <th><p class="float-right">${{number_format($sale->total, 2, '.', ',')}}</p></th>
                  </tr>
  
              </tfoot>
                <tbody>
                  @foreach($saleDetails as $saleDetail)
                    <tr>
                      <td>{{ $saleDetail->product->name }}</td>
                      <td>${{ $saleDetail->price }}</td>
                      <td>{{ $saleDetail->quantity }}</td>
                      <td>{{ $saleDetail->discount }}%</td>
                      <td>${{ number_format(($saleDetail->quantity*$saleDetail->price)-($saleDetail->quantity*$saleDetail->price*$saleDetail->discount/100), 2, '.', ',') }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer">
            <a href="{{ route('sales.index') }}" class="btn btn-primary float-right">Regresar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@section('scripts')
  {{ Html::script("js/data-table.js") }}
@endsection
@endsection