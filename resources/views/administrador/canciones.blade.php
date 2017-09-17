@extends('layouts.app')

@section('content')
 
<form name="FORMA" id="FORMA" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
  {{csrf_field()}}
<div class="container">

{{-- ********************************************LISTAR USUARIOS*************************************** --}}
<div class="row">
	
    <div class="card">
        <div class="card-header">
            <h2>Canciones</h2>
        </div>
         
  <div class="table-responsive">
    <div class="card">
        <div class="table-responsive">
          <p class="f-500 c-black m-b-20">Texto Canciones</p>
        </div>
        <div class="form-group">
          <div class="fg-line">
              <input type="text" class="form-control" placeholder="Texto Canciones" name="textCanciones">
          </div>
        </div>
    </div>
 				<p class="f-500 c-black m-b-20">Cancion 1</p>

                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                    <div>
                        <span class="btn btn-info btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="imgCancion1">
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
                  <input type="text" class="form-control" placeholder="Nombre 1" name="nombreCancion1">
              </div>
          </div>
        </div>
        
   		 	</div>
        </div>
        <br>

        <div class="card">
          <div class="table-responsive">

        <p class="f-500 c-black m-b-20">Cancion 2</p>

                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                    <div>
                        <span class="btn btn-info btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="imgCancion2">
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
                  <input type="text" class="form-control" placeholder="Nombre 2" name="nombreCancion2">
              </div>
          </div>
        </div>
        
        </div>
        </div>
<br><br>

         <div class="card">

  <div class="table-responsive">
        <p class="f-500 c-black m-b-20">Cancion 3</p>

                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                    <div>
                        <span class="btn btn-info btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="imgCancion3">
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
                  <input type="text" class="form-control" placeholder="Nombre 3" name="nombreCancion3">
              </div>
          </div>
        </div>
      
        </div>
        </div>


  </div>

 <div class="row">
    <div class="column">
        <button id="btnEnviar" type="submit">Enviar</button>
    </div>
  </div>


</div>
<br/>


</div>
    {{-- ********************************************FIN LISTAR USUARIOS*************************************** --}}

</form>

@stop




@section('scripts')
	
@stop

	
