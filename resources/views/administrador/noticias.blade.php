@extends('layouts.app')

@section('content')
 <form name="FORMA" id="FORMA" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
  {{csrf_field()}}

<div class="container">

{{-- ********************************************LISTAR USUARIOS*************************************** --}}
<div class="row">
	
    <div class="card">
       
  <div class="table-responsive">
    <div class="card">
        <div class="table-responsive">
          <p class="f-500 c-black m-b-20">Noticias</p>
        </div>
       
    </div>
 				<p class="f-500 c-black m-b-20">Noticia 1</p>

          <br/>
          <br/>
          <br/>
        <div class="col-sm-4">
          <div class="input-group">
              <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
              <div class="fg-line">
                  <input type="text" class="form-control" placeholder="Nombre Noticia 1" name="tituloNoticia1">
              </div>
          </div>
        </div>
        
         <div class="col-sm-4">
            <div class="input-group">
                          <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>

                <div class="fg-line">
                  <input type="text" class="form-control" placeholder="Sub Nombre Noticia 1" name="subtituloNoticia1">
                </div>
            </div>
        </div>
        <br/>
        <br/>
         <div class="col-sm-8">

        <p class="c-black f-500 m-b-20">Texto Noticia 1</p>
        <div class="form-group">
            <div class="fg-line">
                <textarea class="form-control" rows="5" placeholder="" name="ContenidoNoticia1"></textarea>
            </div>
        </div>
   		 	</div>
      </div>
        </div>
        <br>
        <div class="card">
  <div class="table-responsive">

        <p class="f-500 c-black m-b-20">Noticia 2</p>

             
          <br/>
          <br/>
          <br/>
        <div class="col-sm-4">
          <div class="input-group">
              <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
              <div class="fg-line">
                  <input type="text" class="form-control" placeholder="Nombre noticia 2" name="tituloNoticia2">
              </div>
          </div>
        </div>
        
         <div class="col-sm-4">
            <div class="input-group">
                          <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>

                <div class="fg-line">
                  <input type="text" class="form-control" placeholder="subNombre noticia 2" name="subtituloNoticia2">
                </div>
            </div>
        </div>
        <br/>
        <br/>
         <div class="col-sm-8">

        <p class="c-black f-500 m-b-20">Texto Noticia2</p>
        <div class="form-group">
            <div class="fg-line">
                <textarea class="form-control" rows="5" placeholder="" name="ContenidoNoticia2"></textarea>
            </div>
        </div>
        </div>
        </div>
        </div>
<br><br>

         <div class="card">
  <div class="table-responsive">

        <p class="f-500 c-black m-b-20">Noticia 3</p>

               
          <br/>
          <br/>
          <br/>
        <div class="col-sm-4">
          <div class="input-group">
              <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
              <div class="fg-line">
                  <input type="text" class="form-control" placeholder="Nombre noticia 3" name="tituloNoticia3">
              </div>
          </div>
        </div>
        
         <div class="col-sm-4">
            <div class="input-group">
                          <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>

                <div class="fg-line">
                  <input type="text" class="form-control" placeholder="Nombre noticia 3" name="subtituloNoticia3" >
                </div>
            </div>
        </div>
        <br/>
        <br/>
         <div class="col-sm-8">

        <p class="c-black f-500 m-b-20">Texto Noticia3</p>
        <div class="form-group">
            <div class="fg-line">
                <textarea class="form-control" rows="5" placeholder="" name="ContenidoNoticia3" ></textarea>
            </div>
        </div>
        </div>
        </div>
        </div>

  </div>




</div>
<br/>
<div class="row">
    <div class="column">
        <button id="btnEnviar" type="submit">Enviar</button>
    </div>
  </div>

</div>
</form>

    {{-- ********************************************FIN LISTAR USUARIOS*************************************** --}}



@stop




@section('scripts')
	
@stop

	
