@extends('layouts.app')

@section('content')
 

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
              <input type="text" class="form-control" placeholder="Texto Servicios">
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
                            <input type="file" name="...">
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
                  <input type="text" class="form-control" placeholder="Nombre 1">
              </div>
          </div>
        </div>
        
         <div class="col-sm-4">
            <div class="input-group">
                          <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>

                <div class="fg-line">
                  <input type="text" class="form-control" placeholder="Nombre 2">
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
                            <input type="file" name="...">
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
                  <input type="text" class="form-control" placeholder="Nombre 1">
              </div>
          </div>
        </div>
        
         <div class="col-sm-4">
            <div class="input-group">
                          <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>

                <div class="fg-line">
                  <input type="text" class="form-control" placeholder="Nombre 2">
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
                            <input type="file" name="...">
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
                  <input type="text" class="form-control" placeholder="Nombre 1">
              </div>
          </div>
        </div>
        
         <div class="col-sm-4">
            <div class="input-group">
                          <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>

                <div class="fg-line">
                  <input type="text" class="form-control" placeholder="Nombre 2">
                </div>
            </div>
        </div>
        </div>

  </div>




</div>
<br/>


</div>
    {{-- ********************************************FIN LISTAR USUARIOS*************************************** --}}



@stop




@section('scripts')
	
@stop

	
