<div class="container-fluid">
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="codAlm">Código</label>
            <input type="text" name="codAlm" class="form-control form-control-sm col-sm-4" id="codAlm" placeholder="Ej: AA-0001">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="dirAlm">Direccion del almacen</label>
            <input type="text" name="dirAlm" class="form-control form-control-sm col-sm-10" id="dirAlm" placeholder="Santa Ana">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="telAlm">Telefono</label>
            <input type="text" name="telAlm" class="form-control form-control-sm col-sm-10" id="telAlm" placeholder="2440-1234">
        </div>
    </div>
</div>
    <div class="modal-footer">
        <a href="{{ route('categorias') }}" class="link btn btn-secondary">Cancelar</a>
        <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar"></input>
    </div>
