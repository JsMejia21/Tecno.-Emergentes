<div class="container-fluid">
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="codProve">Código</label>
            <input type="text" name="codProve" class="form-control form-control-sm col-sm-4" id="codProve" value="{{ $productos->codProve }}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="nameProve">Nombre del proveedor</label>
            <input type="text" name="nameProve" class="form-control form-control-sm col-sm-10" id="nameProve" value="{{ $productos->nameProve }}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="dirProve">Direccion</label>
            <input type="text" name="dirProve" class="form-control form-control-sm col-sm-10" id="dirProve" value="{{ $productos->dirProve }}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="telProve">Telefono</label>
            <input type="text" name="telProve" class="form-control form-control-sm col-sm-10" id="telProve" value="{{ $productos->telProve }}">
        </div>
    </div>
</div>
    <div class="modal-footer">
        <a href="{{ route('categorias') }}" class="link btn btn-secondary">Cancelar</a>
        <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar"></input>
    </div>
