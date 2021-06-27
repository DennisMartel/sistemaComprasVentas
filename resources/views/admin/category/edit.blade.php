@extends('layouts.admin')

@section('title', 'Editar Categoria ' . $category->name)

@section('styles')
  
@endsection

@section('content')
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      Editar Categoria {{ $category->name }}
    </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Panel Administrativo</a></li>
        <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categorias</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar Categoria {{ $category->name }}</li>
      </ol>
    </nav>
  </div>
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
            <h4 class="card-title">Editar Categoria {{ $category->name }}</h4>
        </div>
        {!! Form::model($category, ['route' => ['categories.update', $category], 'method' => 'PUT']) !!}
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" placeholder="Ingresa el nombre" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $category->name) }}">
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Descripcion</label>
                <textarea name="description" id="description" rows="5" class="form-control @error('description') is-invalid @enderror" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit.">{{ old('description', $category->description) }}</textarea>
                @error('description')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('categories.index') }}" class="btn btn-light">Cancelar</a>
        {!! Form::close() !!}
      </div>
    </div>
</div>

@section('scripts')
  {{ Html::script("js/data-table.js") }}
@endsection
@endsection