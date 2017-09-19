@extends('layouts.app')

@section('content')

<?php use App\Canciones; ?>

@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
  {{ Session::get('message') }}
</div>
@endif
<!-- CARD -->
<div class="card">
  <!-- HEADER -->
  <div class="card-header bgm-bluegray m-b-20">
    <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-9">
        <h2>Administra la lista de canciones en el apartado de descargas</h2>     
      </div>
    </div>
    <div>
      <button data-toggle="modal" data-target="#add-variable" class="pull-right btn btn-float btn-primary btn-icon waves-effect waves-circle waves-float"><i class="zmdi zmdi-plus"></i></button>
    </div>
  </div>
  <!-- end HEADER -->
  <!-- TABLE -->
  <div class="card-body">
    <table id="data-table-basic" class="table table-striped dataTable">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Imagen</th>
          <th>Enlace</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($canciones as $index => $cancion)
        <tr>
          <td class="text-capitalize" style="vertical-align: middle;">{{$cancion->nombre}}</td>
          <td>
            <div class="thumbnail" style="width: 100px;margin-bottom: 0px;">
              <img src="{{$cancion->imagen}}">
            </div>
          </td>
          <td style="vertical-align: middle;">{{$cancion->enlace}}</td>
          <td style="vertical-align: middle;">
            <button type="button" data-toggle="modal" data-target="#edit-variable" class="btn btn-primary waves-effect" onclick="editarCancion({{$cancion->id}}, '{{$cancion->nombre}}', '{{$cancion->enlace}}')"><i class="zmdi zmdi-edit"></i></button>
            <a class="btn bgm-red waves-effect" href="/canciones/eliminar/{{$cancion->id}}"><i class="zmdi zmdi-delete"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- end TABLE -->
</div>
<!-- end CARD -->
<!-- ADD MODAL -->
<div id="add-variable" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="/canciones/agregar" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="card">
          <div class="card-header bgm-blue m-b-20">
            <h2>Agrega una canción</h2>
            <button type="submit" class="btn bgm-deeporange btn-float waves-effect"><i class="zmdi zmdi-mail-send"></i></button>
          </div>
          <div class="card-body card-padding">
            <div class="form-group  m-b-30">
              <label for="exampleInputEmail1">Nombre</label>
              <input type="text" class="form-control input-sm" name="nombre" placeholder="Nombre de la canción">
            </div>
            <div class="form-group  m-b-30">
              <p class="f-500 c-black m-b-20">Imagen</p>
              <div class="fileinput fileinput-new" data-provides="fileinput">
                <span class="btn btn-primary btn-file m-r-10 waves-effect">
                  <span class="fileinput-new">Seleccionar imagen</span>
                  <input type="hidden" value="" name="..."><input type="file" name="imagen">
                </span>
                <span class="fileinput-filename"></span>
                <a href="#" class="close fileinput-exists" data-dismiss="fileinput">×</a>
              </div>
            </div>
            <div class="form-group  m-b-30">
              <p class="f-500 c-black m-b-20">Archivo Canción</p>
              <div class="fileinput fileinput-new" data-provides="fileinput">
                <span class="btn btn-primary btn-file m-r-10 waves-effect">
                  <span class="fileinput-new">Seleccionar archivo</span>
                  <input type="hidden" value="" name="..."><input type="file" name="cancion">
                </span>
                <span class="fileinput-filename"></span>
                <a href="#" class="close fileinput-exists" data-dismiss="fileinput">×</a>
              </div>
            </div>
            <input type="hidden" id="token" value="{{{ csrf_token() }}}" />
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- end ADD MODAL -->
<!-- EDIT MODAL -->
<div id="edit-variable" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="/canciones/editar" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="card">
          <div class="card-header bgm-blue m-b-20">
            <h2>Editar canción</h2>
            <button type="submit" class="btn bgm-deeporange btn-float waves-effect"><i class="zmdi zmdi-mail-send"></i></button>
          </div>
          <div class="card-body card-padding">
            <div class="form-group  m-b-30">
              <label for="exampleInputEmail1">Nombre</label>
              <input type="text" class="form-control input-sm" name="nombre" id="cancion_nombre" placeholder="Nombre de la canción" value="">
            </div>
            <div class="form-group  m-b-30">
              <p class="f-500 c-black m-b-20">Imagen</p>
              <div class="fileinput fileinput-new" data-provides="fileinput">
                <span class="btn btn-primary btn-file m-r-10 waves-effect">
                  <span class="fileinput-new">Seleccionar imagen</span>
                  <input type="hidden" value="" name="..."><input type="file" name="imagen">
                </span>
                <span class="fileinput-filename"></span>
                <a href="#" class="close fileinput-exists" data-dismiss="fileinput">×</a>
              </div>
            </div>
            <div class="form-group  m-b-30">
              <label for="exampleInputEmail1">Enlace</label>
              <input type="text" class="form-control input-sm" name="enlace" id="cancion_enlace" placeholder="Enlace de la canción" value="">
            </div>
            <input type="hidden" id="token" value="{{{ csrf_token() }}}" />
            <input type="hidden" id="cancion_id" name="cancion_id"/>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- end EDIT MODAL -->
<script type="text/javascript">
  function editarCancion(id, nombre, enlace){
    document.getElementById("cancion_id").value = id;
    document.getElementById("cancion_nombre").value = nombre;
    document.getElementById("cancion_enlace").value = enlace;
  }
</script>

@stop

@section('scripts')

@stop