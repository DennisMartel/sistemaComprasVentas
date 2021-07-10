<div class="form-group">
    <label for="name">Rol</label>
    <input type="name" name="name" id="name" placeholder="Ingresa el nombre" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="client_id">Permisos</label>
    <select name="client_id" id="client_id" class="form-control @error('client_id') is-invalid @enderror" value="{{ old('client_id') }}">
        <option value="">Selecciona el Permiso</option>
        @foreach($permissions as $permission)
            <option value="{{ $permission->id }}">{{ $permission->name }}</option>
        @endforeach
    </select>
    @error('client_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>