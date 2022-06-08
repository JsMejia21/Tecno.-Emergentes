<div class="container-fluid">
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="dateCompra">Fecha</label>
            <input type="text" name="dateCompra" class="form-control form-control-sm col-sm-4" id="dateCompra" placeholder="Ej: 12/05/2022">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="inaProd">Producto</label>
            <input type="text" name="inaProd" class="form-control form-control-sm col-sm-10" id="inaProd" placeholder="Codigo o Nombre del producto">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="priceUnit">Precio</label>
            <input type="number" name="priceUnit" class="form-control form-control-sm col-sm-4" id="priceUnit" step="0000.0001" placeholder="000.000">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="cantCompra">Cantidad</label>
            <input type="number" name="cantCompra" class="form-control form-control-sm col-sm-4" id="cantCompra" placeholder="0000">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="priceTot">Total a Pagar</label>
            <input type="number" name="priceTot" class="form-control form-control-sm col-sm-4" id="priceTot" step="0000.0001" placeholder="000.000">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="inaProv">Proveedor</label>
            <input type="text" name="inaProv" class="form-control form-control-sm col-sm-10" id="inaProv" placeholder="Codigo o Nombre del Proveedor">
        </div>
    </div>
</div>
<div class="modal-footer">
    <a href="{{ route('compras') }}" class="link btn btn-secondary">Cancelar</a>
    <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar"></input>
</div>
