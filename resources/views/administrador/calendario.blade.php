@extends('layouts.app')

@section('content')

<?php use App\Calendario; ?>

<div class="block-header">
    <h2>Calendario</h2>
</div>
<div class="card">
    <div class="card-header">
        <h2>Evento 1</h2>
    </div>
    <div class="card-body card-padding">
        <form role="form" action="/calendario" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="calendario" value="1">
            <div class="form-group fg-line">
                <label>Fecha</label>
                <input type="text" required="" name="fechaCalendario" class="form-control input-mask" data-mask="0000/00/00" placeholder="Ejemplo: 2017/10/31" autocomplete="off" value="{{Calendario::find(1)->fecha}}">
            </div>
            <div class="form-group fg-line">
                <label>Nombre</label>
                <input type="text" required="" name="nombreCalendario" class="form-control input-sm" placeholder="Nombre del evento" value="{{Calendario::find(1)->nombre}}">
            </div>
            <div class="form-group fg-line">
                <label>Ubicación</label>
                <input type="text" required="" name="ubicacionCalendario" class="form-control input-sm" placeholder="Ubicación del evento" value="{{Calendario::find(1)->ubicacion}}">
            </div>
            <p class="f-500 c-black m-b-20">Image Preview</p>
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput">
                    <img src="{{Calendario::find(1)->imagen}}">
                </div>
                <div>
                    <span class="btn btn-info btn-file waves-effect">
                        <span class="fileinput-new">Seleccionar imagen</span>
                        <input type="file" name="imgCalendario">
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
        <h2>Evento 2</h2>
    </div>
    <div class="card-body card-padding">
        <form role="form" action="/calendario" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="calendario" value="2">
            <div class="form-group fg-line">
                <label>Fecha</label>
                <input type="text" required="" name="fechaCalendario" class="form-control input-mask" data-mask="0000/00/00" placeholder="Ejemplo: 2017/10/31" autocomplete="off" value="{{Calendario::find(2)->fecha}}">
            </div>
            <div class="form-group fg-line">
                <label>Nombre</label>
                <input type="text" required="" name="nombreCalendario" class="form-control input-sm" placeholder="Nombre del evento" value="{{Calendario::find(2)->nombre}}">
            </div>
            <div class="form-group fg-line">
                <label>Ubicación</label>
                <input type="text" required="" name="ubicacionCalendario" class="form-control input-sm" placeholder="Ubicación del evento" value="{{Calendario::find(2)->ubicacion}}">
            </div>
            <p class="f-500 c-black m-b-20">Image Preview</p>
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput">
                    <img src="{{Calendario::find(2)->imagen}}">
                </div>
                <div>
                    <span class="btn btn-info btn-file waves-effect">
                        <span class="fileinput-new">Seleccionar imagen</span>
                        <input type="file" name="imgCalendario">
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
        <h2>Evento 3</h2>
    </div>
    <div class="card-body card-padding">
        <form role="form" action="/calendario" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="calendario" value="3">
            <div class="form-group fg-line">
                <label>Fecha</label>
                <input type="text" required="" name="fechaCalendario" class="form-control input-mask" data-mask="0000/00/00" placeholder="Ejemplo: 2017/10/31" autocomplete="off" value="{{Calendario::find(3)->fecha}}">
            </div>
            <div class="form-group fg-line">
                <label>Nombre</label>
                <input type="text" required="" name="nombreCalendario" class="form-control input-sm" placeholder="Nombre del evento" value="{{Calendario::find(3)->nombre}}">
            </div>
            <div class="form-group fg-line">
                <label>Ubicación</label>
                <input type="text" required="" name="ubicacionCalendario" class="form-control input-sm" placeholder="Ubicación del evento" value="{{Calendario::find(3)->ubicacion}}">
            </div>
            <p class="f-500 c-black m-b-20">Image Preview</p>
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput">
                    <img src="{{Calendario::find(3)->imagen}}">
                </div>
                <div>
                    <span class="btn btn-info btn-file waves-effect">
                        <span class="fileinput-new">Seleccionar imagen</span>
                        <input type="file" name="imgCalendario">
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
        <h2>Evento 4</h2>
    </div>
    <div class="card-body card-padding">
        <form role="form" action="/calendario" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="calendario" value="4">
            <div class="form-group fg-line">
                <label>Fecha</label>
                <input type="text" required="" name="fechaCalendario" class="form-control input-mask" data-mask="0000/00/00" placeholder="Ejemplo: 2017/10/31" autocomplete="off" value="{{Calendario::find(4)->fecha}}">
            </div>
            <div class="form-group fg-line">
                <label>Nombre</label>
                <input type="text" required="" name="nombreCalendario" class="form-control input-sm" placeholder="Nombre del evento" value="{{Calendario::find(4)->nombre}}">
            </div>
            <div class="form-group fg-line">
                <label>Ubicación</label>
                <input type="text" required="" name="ubicacionCalendario" class="form-control input-sm" placeholder="Ubicación del evento" value="{{Calendario::find(4)->ubicacion}}">
            </div>
            <p class="f-500 c-black m-b-20">Image Preview</p>
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput">
                    <img src="{{Calendario::find(4)->imagen}}">
                </div>
                <div>
                    <span class="btn btn-info btn-file waves-effect">
                        <span class="fileinput-new">Seleccionar imagen</span>
                        <input type="file" name="imgCalendario">
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