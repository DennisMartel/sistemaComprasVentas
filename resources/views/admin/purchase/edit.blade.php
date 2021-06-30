@extends('layouts.admin')

@section('title', 'Editar Proveedor ' . $provider->name)

@section('styles')
  
@endsection

@section('content')
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      Editar Proveedor {{ $provider->name }}
    </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Panel Administrativo</a></li>
        <li class="breadcrumb-item"><a href="{{ route('providers.index') }}">Proveedors</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar Proveedor {{ $provider->name }}</li>
      </ol>
    </nav>
  </div>
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
            <h4 class="card-title">Editar Proveedor {{ $provider->name }}</h4>
        </div>
        {!! Form::model($provider, ['route' => ['providers.update', $provider], 'method' => 'PUT']) !!}
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" placeholder="Ingresa el nombre" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $provider->name) }}" required>
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Correo</label>
                <input type="email" name="email" id="email" placeholder="ejemplocorreo@gmail.com" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $provider->email) }}" required>
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="ruc_number">Código</label>
                <input type="text" name="ruc_number" id="ruc_number" placeholder="12345678" class="form-control @error('ruc_number') is-invalid @enderror" value="{{ old('ruc_number', $provider->ruc_number) }}" required>
                @error('ruc_number')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="address">Dirección</label>
                <input type="text" name="address" id="address" placeholder="" class="form-control @error('address') is-invalid @enderror" value="{{ old('address', $provider->address) }}">
                @error('address')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="phone">Telefóno/Celular</label>
                <input type="text" name="phone" id="phone" placeholder="" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $provider->phone) }}" required>
                @error('phone')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('providers.index') }}" class="btn btn-light">Cancelar</a>
        {!! Form::close() !!}
      </div>
    </div>
</div>

@section('scripts')
  {{ Html::script("js/data-table.js") }}
@endsection
@endsection