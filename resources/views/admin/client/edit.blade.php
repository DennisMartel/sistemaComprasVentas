@extends('layouts.admin')

@section('title', 'Editar Cliente ' . $client->name)

@section('styles')
  
@endsection

@section('content')
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      Editar Cliente {{ $client->name }}
    </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Panel Administrativo</a></li>
        <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">Clientes</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar Cliente {{ $client->name }}</li>
      </ol>
    </nav>
  </div>
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
            <h4 class="card-title">Editar Cliente {{ $client->name }}</h4>
        </div>
        {!! Form::model($client, ['route' => ['clients.update', $client], 'method' => 'PUT', 'files' => true]) !!}
          <div class="form-group">
              <label for="dui">DUI</label>
              <input type="text" name="dui" id="dui" placeholder="Ingresa el nombre" class="form-control @error('dui') is-invalid @enderror" value="{{ old('dui', $client->dui) }}" required>
              @error('dui')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <div class="form-group">
              <label for="name">Nombre</label>
              <input type="text" name="name" id="name" placeholder="Ingresa el nombre" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $client->name) }}" required>
              @error('name')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <div class="form-group">
              <label for="ruc">Código</label>
              <input type="text" name="ruc" id="ruc" placeholder="Ingresa el nombre" class="form-control @error('ruc') is-invalid @enderror" value="{{ old('ruc', $client->ruc) }}">
              @error('ruc')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <div class="form-group">
              <label for="address">Dirección</label>
              <input type="text" name="address" id="address" placeholder="Ingresa el nombre" class="form-control @error('address') is-invalid @enderror" value="{{ old('address', $client->address) }}">
              @error('address')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <div class="form-group">
              <label for="address">Teléfono/Celular</label>
              <input type="text" name="phone" id="phone" placeholder="Ingresa el nombre" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $client->phone) }}">
              @error('phone')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <div class="form-group">
              <label for="address">Correo Electrónico</label>
              <input type="email" name="email" id="email" placeholder="Ingresa el nombre" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $client->email) }}">
              @error('email')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <button type="submit" class="btn btn-primary">Actualizar</button>
          <a href="{{ route('clients.index') }}" class="btn btn-light">Cancelar</a>
        {!! Form::close() !!}
      </div>
    </div>
</div>

@section('scripts')
  {{ Html::script("js/dropify.js") }}
@endsection
@endsection