<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" placeholder="Ingresa el nombre" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="sell_price">Precio Venta</label>
    <input type="text" name="sell_price" id="sell_price" placeholder="0.00" class="form-control @error('sell_price') is-invalid @enderror" value="{{ old('sell_price') }}" required>
    @error('sell_price')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="category_id">Nombre</label>
    <select name="category_id" id="category_id" class="form-control">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
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
            <option value="{{ $provider->id }}">{{ $provider->name }}</option>
        @endforeach
    </select>
    @error('provider_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="imagen">Imagen</label>
    <div class="custom-file">
        <input type="file" class="custom-file-input" name="picture" id="picture">
        <label class="custom-file-label" for="customFile">Seleccionar archivo...</label>
    </div>
</div>