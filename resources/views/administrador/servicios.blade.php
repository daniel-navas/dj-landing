@extends('layouts.app')

@section('content')

<?php use App\Servicios; ?>

<div class="block-header">
    <h2>Servicios</h2>
</div>
<div class="card">
    <div class="card-header">
        <h2>Servicio 1</h2>
    </div>
    <div class="card-body card-padding">
        <form role="form" action="/servicios" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="servicio" value="1">
            <div class="form-group fg-line">
                <label>Titulo</label>
                <input type="text" required="" name="tituloServicio" class="form-control input-sm" placeholder="Titulo del evento" value="{{Servicios::find(1)->titulo}}">
            </div>
            <div class="form-group fg-line">
                <label>Enlace</label>
                <input type="text" required="" name="enlaceServicio" class="form-control input-sm" placeholder="Enlace del evento" value="{{Servicios::find(1)->enlace}}">
            </div>
            <p class="f-500 c-black m-b-20">Image Preview</p>
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput">
                    <img src="{{Servicios::find(1)->imagen}}">
                </div>
                <div>
                    <span class="btn btn-info btn-file waves-effect">
                        <span class="fileinput-new">Seleccionar imagen</span>
                        <input type="file" name="imgServicio">
                    </span>
                    <a href="#" class="btn btn-danger fileinput-exists waves-effect" data-dismiss="fileinput">Quitar</a>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-sm m-t-10 waves-effect">Guardar</button>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h2>Servicio 2</h2>
    </div>
    <div class="card-body card-padding">
        <form role="form" action="/servicios" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="servicio" value="2">
            <div class="form-group fg-line">
                <label>Titulo</label>
                <input type="text" required="" name="tituloServicio" class="form-control input-sm" placeholder="Titulo del evento" value="{{Servicios::find(2)->titulo}}">
            </div>
            <div class="form-group fg-line">
                <label>Enlace</label>
                <input type="text" required="" name="enlaceServicio" class="form-control input-sm" placeholder="Enlace del evento" value="{{Servicios::find(2)->enlace}}">
            </div>
            <p class="f-500 c-black m-b-20">Image Preview</p>
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput">
                    <img src="{{Servicios::find(2)->imagen}}">
                </div>
                <div>
                    <span class="btn btn-info btn-file waves-effect">
                        <span class="fileinput-new">Seleccionar imagen</span>
                        <input type="file" name="imgServicio">
                    </span>
                    <a href="#" class="btn btn-danger fileinput-exists waves-effect" data-dismiss="fileinput">Quitar</a>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-sm m-t-10 waves-effect">Guardar</button>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h2>Servicio 3</h2>
    </div>
    <div class="card-body card-padding">
        <form role="form" action="/servicios" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="servicio" value="3">
            <div class="form-group fg-line">
                <label>Titulo</label>
                <input type="text" required="" name="tituloServicio" class="form-control input-sm" placeholder="Titulo del evento" value="{{Servicios::find(3)->titulo}}">
            </div>
            <div class="form-group fg-line">
                <label>Enlace</label>
                <input type="text" required="" name="enlaceServicio" class="form-control input-sm" placeholder="Enlace del evento" value="{{Servicios::find(3)->enlace}}">
            </div>
            <p class="f-500 c-black m-b-20">Image Preview</p>
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput">
                    <img src="{{Servicios::find(3)->imagen}}">
                </div>
                <div>
                    <span class="btn btn-info btn-file waves-effect">
                        <span class="fileinput-new">Seleccionar imagen</span>
                        <input type="file" name="imgServicio">
                    </span>
                    <a href="#" class="btn btn-danger fileinput-exists waves-effect" data-dismiss="fileinput">Quitar</a>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-sm m-t-10 waves-effect">Guardar</button>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h2>Servicio 4</h2>
    </div>
    <div class="card-body card-padding">
        <form role="form" action="/servicios" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="servicio" value="4">
            <div class="form-group fg-line">
                <label>Titulo</label>
                <input type="text" required="" name="tituloServicio" class="form-control input-sm" placeholder="Titulo del evento" value="{{Servicios::find(4)->titulo}}">
            </div>
            <div class="form-group fg-line">
                <label>Enlace</label>
                <input type="text" required="" name="enlaceServicio" class="form-control input-sm" placeholder="Enlace del evento" value="{{Servicios::find(4)->enlace}}">
            </div>
            <p class="f-500 c-black m-b-20">Image Preview</p>
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput">
                    <img src="{{Servicios::find(4)->imagen}}">
                </div>
                <div>
                    <span class="btn btn-info btn-file waves-effect">
                        <span class="fileinput-new">Seleccionar imagen</span>
                        <input type="file" name="imgServicio">
                    </span>
                    <a href="#" class="btn btn-danger fileinput-exists waves-effect" data-dismiss="fileinput">Quitar</a>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-sm m-t-10 waves-effect">Guardar</button>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h2>Servicio 5</h2>
    </div>
    <div class="card-body card-padding">
        <form role="form" action="/servicios" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="servicio" value="5">
            <div class="form-group fg-line">
                <label>Titulo</label>
                <input type="text" required="" name="tituloServicio" class="form-control input-sm" placeholder="Titulo del evento" value="{{Servicios::find(5)->titulo}}">
            </div>
            <div class="form-group fg-line">
                <label>Enlace</label>
                <input type="text" required="" name="enlaceServicio" class="form-control input-sm" placeholder="Enlace del evento" value="{{Servicios::find(5)->enlace}}">
            </div>
            <p class="f-500 c-black m-b-20">Image Preview</p>
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput">
                    <img src="{{Servicios::find(5)->imagen}}">
                </div>
                <div>
                    <span class="btn btn-info btn-file waves-effect">
                        <span class="fileinput-new">Seleccionar imagen</span>
                        <input type="file" name="imgServicio">
                    </span>
                    <a href="#" class="btn btn-danger fileinput-exists waves-effect" data-dismiss="fileinput">Quitar</a>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-sm m-t-10 waves-effect">Guardar</button>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h2>Servicio 6</h2>
    </div>
    <div class="card-body card-padding">
        <form role="form" action="/servicios" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="servicio" value="6">
            <div class="form-group fg-line">
                <label>Titulo</label>
                <input type="text" required="" name="tituloServicio" class="form-control input-sm" placeholder="Titulo del evento" value="{{Servicios::find(6)->titulo}}">
            </div>
            <div class="form-group fg-line">
                <label>Enlace</label>
                <input type="text" required="" name="enlaceServicio" class="form-control input-sm" placeholder="Enlace del evento" value="{{Servicios::find(6)->enlace}}">
            </div>
            <p class="f-500 c-black m-b-20">Image Preview</p>
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput">
                    <img src="{{Servicios::find(6)->imagen}}">
                </div>
                <div>
                    <span class="btn btn-info btn-file waves-effect">
                        <span class="fileinput-new">Seleccionar imagen</span>
                        <input type="file" name="imgServicio">
                    </span>
                    <a href="#" class="btn btn-danger fileinput-exists waves-effect" data-dismiss="fileinput">Quitar</a>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-sm m-t-10 waves-effect">Guardar</button>
        </form>
    </div>
</div>

@stop

@section('scripts')
	
@stop