<div class="container-fluid">
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="dateVenta">Fecha</label>
            <input type="text" name="dateVenta" class="form-control form-control-sm col-sm-4" id="dateVenta" value="{{ $productos->dateVenta }}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="inaProd">Producto</label>
            <input type="text" name="inaProd" class="form-control form-control-sm col-sm-10" id="inaProd" value="{{ $productos->inaProd }}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="priceUnit">Precio</label>
            <input type="number" name="priceUnit" class="form-control form-control-sm col-sm-4" id="priceUnit" value="{{ $productos->priceUnit }}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="cantVenta">Cantidad</label>
            <input type="number" name="cantVenta" class="form-control form-control-sm col-sm-4" id="cantVenta" value="{{ $productos->cantVenta }}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="priceTot">Total a Pagar</label>
            <input type="number" name="priceTot" class="form-control form-control-sm col-sm-4" id="priceTot" step="0000.0001" value="{{ $productos->priceTot }}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="nameCliente">Cliente</label>
            <input type="text" name="nameCliente" class="form-control form-control-sm col-sm-10" id="nameCliente" value="{{ $productos->nameCliente }}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="telCliente">Telefono</label>
            <input type="text" name="telCliente" class="form-control form-control-sm col-sm-10" id="telCliente" value="{{ $productos->telCliente }}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="inaUsuario">Atendido por</label>
            <input type="text" name="inaUsuario" class="form-control form-control-sm col-sm-10" id="inaUsuario" value="{{ $productos->inaUsuario }}">
        </div>
    </div>
</div>
<div class="modal-footer">
    <a href="{{ route('ventas') }}" class="link btn btn-secondary">Cancelar</a>
    <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar"></input>
</div>
