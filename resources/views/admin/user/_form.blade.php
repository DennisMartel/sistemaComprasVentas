<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" placeholder="Ingresa el nombre" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="email">Correo</label>
    <input type="email" name="email" id="email" placeholder="Ingresa el correo" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
    @error('email')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="password">Contraseña</label>
    <input type="password" name="password" id="password" placeholder="Ingresa la contraseña" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
    @error('password')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <select name="rol" id="rol" class="form-control">
        <option value="">-- Seleccionar rol --</option>
        @foreach ($roles as $role)
            <option value="{{ $role->id }}">{{ $role->name }}</option>
        @endforeach
    </select>
</div>
