@extends('layouts.admin')

@section('title', 'Editar Producto ' . $product->name)

@section('styles')
  
@endsection

@section('content')
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      Editar Producto {{ $product->name }}
    </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Panel Administrativo</a></li>
        <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Productos</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar Producto {{ $product->name }}</li>
      </ol>
    </nav>
  </div>
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
            <h4 class="card-title">Editar Producto {{ $product->name }}</h4>
        </div>
        {!! Form::model($product, ['route' => ['products.update', $product], 'method' => 'PUT', 'files' => true]) !!}
        <div class="form-group">
          <label for="name">Nombre</label>
          <input type="text" name="name" id="name" placeholder="Ingresa el nombre" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $product->name) }}" required>
          @error('name')
              <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
        <div class="form-group">
            <label for="sell_price">Precio Venta</label>
            <input type="text" name="sell_price" id="sell_price" placeholder="0.00" class="form-control @error('sell_price') is-invalid @enderror" value="{{ old('sell_price', $product->sell_price) }}" required>
            @error('sell_price')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="category_id">Nombre</label>
            <select name="category_id" id="category_id" class="form-control">
                @foreach($categories as $category)
                    @if ($category->id == $product->category_id)
                      <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                      <option value="{{ $category->id }}">{{ $category->name }}</option>    
                    @endif
                @endforeach
            </select>
            @error('category_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="provider_id">Proveedor</label>
            <select name="provider_id" id="provider_id" class="form-control">
                @foreach($providers as $provider)
                    @if ($provider->id == $product->provider_id)
                      <option value="{{ $provider->id }}" selected>{{ $provider->name }}</option>
                    @else
                      <option value="">{{ $provider->name }}</option>    
                    @endif
                @endforeach
            </select>
            @error('provider_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="card">
          <div class="card-body">
            <h4 class="card-title d-flex">Imagen de Producto
              <small class="ml-auto align-self-end">
                <a class="font-weight-light">Seleccionar archivo</a>
              </small>
            </h4>
            <input type="file" name="picture" id="picture" class="dropify" />
          </div>
        </div>
          <button type="submit" class="btn btn-primary">Actualizar</button>
          <a href="{{ route('products.index') }}" class="btn btn-light">Cancelar</a>
        {!! Form::close() !!}
      </div>
    </div>
</div>

@section('scripts')
  {{ Html::script("js/dropify.js") }}
@endsection
@endsection