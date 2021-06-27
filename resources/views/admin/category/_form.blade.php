<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" placeholder="Ingresa el nombre" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="description">Descripcion</label>
    <textarea name="description" id="description" rows="5" class="form-control @error('description') is-invalid @enderror" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit.">{{ old('description') }}</textarea>
    @error('description')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>