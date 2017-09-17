@extends('layouts.app')

@section('content')
 
<form name="FORMA" id="FORMA" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
  {{csrf_field()}}
<div class="container">

{{-- ********************************************LISTAR USUARIOS*************************************** --}}
<div class="row">
	
    <div class="card">
        <div class="card-header">
            <h2>NUESTROS SERVICIOS</h2>
        </div>
         
  <div class="table-responsive">
    <div class="card">
        <div class="table-responsive">
          <p class="f-500 c-black m-b-20">Texto Servicios</p>
        </div>
        <div class="form-group">
          <div class="fg-line">
              <input type="text" class="form-control" placeholder="Texto Servicios" name="textServicios">
          </div>
        </div>
    </div>
 				<p class="f-500 c-black m-b-20">Servicio 1</p>

                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                    <div>
                        <span class="btn btn-info btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="imgServ1" id="imgServ1">
                        </span>
                        <a href="#" class="btn btn-danger fileinput-exists"
                           data-dismiss="fileinput">Remove</a>
                    </div>
                </div>
          <br/>
          <br/>
          <br/>
        <div class="col-sm-4">
          <div class="input-group">
              <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
              <div class="fg-line">
                  <input type="text" class="form-control" placeholder="Nombre 1" name="txtNombreServ1">
              </div>
          </div>
        </div>
        
   		 	</div>
        </div>
        <br>
        <div class="card">

        <p class="f-500 c-black m-b-20">Servicio 2</p>

                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                    <div>
                        <span class="btn btn-info btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="imgServ2">
                        </span>
                        <a href="#" class="btn btn-danger fileinput-exists"
                           data-dismiss="fileinput">Remove</a>
                    </div>
                </div>
          <br/>
          <br/>
          <br/>
        <div class="col-sm-4">
          <div class="input-group">
              <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
              <div class="fg-line">
                  <input type="text" class="form-control" placeholder="Nombre 1" name="txtNombreServ2">
              </div>
          </div>
        </div>
       
        </div>
<br><br>
         <div class="card">

        <p class="f-500 c-black m-b-20">Servicio 3</p>

                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                    <div>
                        <span class="btn btn-info btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="imgServ3">
                        </span>
                        <a href="#" class="btn btn-danger fileinput-exists"
                           data-dismiss="fileinput">Remove</a>
                    </div>
                </div>
          <br/>
          <br/>
          <br/>
        <div class="col-sm-4">
          <div class="input-group">
              <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
              <div class="fg-line">
                  <input type="text" class="form-control" placeholder="Nombre 1" name="txtNombreServ3">
              </div>
          </div>
        </div>
        
        </div>

  </div>




</div>
<br/>


</div>
    {{-- ********************************************FIN LISTAR USUARIOS*************************************** --}}
<div class="row">
    <div class="column">
        <button id="btnEnviar" type="submit">Enviar</button>
    </div>
  </div>
</form>

@stop




@section('scripts')
	
@stop

	
