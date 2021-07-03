<div class="form-group">
    <label for="provider_id">Proveedor</label>
    <select name="provider_id" id="provider_id" class="form-control @error('provider_id') is-invalid @enderror" value="{{ old('provider_id') }}">
        @foreach($providers as $provider)
            <option value="{{ $provider->id }}">{{ $provider->name }}</option>
        @endforeach
    </select>
    @error('provider_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="tax">Impuesto</label>
    <input type="text" name="tax" id="tax" placeholder="Ingresa el nombre" class="form-control @error('tax') is-invalid @enderror" value="{{ old('tax') }}">
    @error('tax')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="product_id">Producto</label>
    <select name="product_id" id="product_id" class="form-control @error('product_id') is-invalid @enderror" value="{{ old('product_id') }}">
        @foreach($products as $product)
            <option value="{{ $product->id }}">{{ $product->name }}</option>
        @endforeach
    </select>
    @error('product_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="quantity">Cantidad</label>
    <input type="number" name="quantity" id="quantity" min="1" placeholder="0.01" class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity') }}">
    @error('quantity')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="price">Precio</label>
    <input type="number" name="price" id="price" step="0.01" min="0.01" placeholder="1" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">
    @error('price')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <div class="table-responsive col-md-12">
        <table id="detalles" class="table table-striped">
            <thead>
                <tr>
                    <th>Eliminar</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th colspan="4">
                        <p class="float-right">TOTAL: </p>
                    </th>
                    <th colspan="4">
                        <p class="float-right"><span id="total">$0.00</span></p>
                    </th>
                </tr>
                <tr id="divOcultar">
                    <th colspan="4">
                        <p class="float-right">TOTAL IMPUESTO: </p>
                    </th>
                    <th colspan="4">
                        <p class="float-right"><span id="total_impuesto">$0.00</span></p>
                    </th>
                </tr>
                <tr>
                    <th colspan="4">
                        <p class="float-right">TOTAL PAGAR: </p>
                    </th>
                    <th colspan="4">
                        <p class="float-right">
                            <span id="total_pagar_html">$0.00</span>
                            <input type="hidden" name="total" id="total_pagar">
                        </p>
                    </th>
                </tr>
            </tfoot>
            <tbody></tbody>
        </table>
    </div>
</div>