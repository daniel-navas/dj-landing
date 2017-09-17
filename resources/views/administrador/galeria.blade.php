@extends('layouts.app')

@section('content')
  
<form name="FORMA" id="FORMA" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
  {{csrf_field()}}

<div class="container">
<div class="row">
  
    <div class="card">
        <div class="card-header">
            <h2>BANNER PRINCIPAL</h2>
        </div>
         
          <div class="table-responsive">
        <p class="f-500 c-black m-b-20">Galeria Numero 1</p>

                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                    <div>
                        <span class="btn btn-info btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="ImgGal1">
                        </span>
                        <a href="#" class="btn btn-danger fileinput-exists"
                           data-dismiss="fileinput">Remove</a>
                    </div>
                </div>
        </div>

        <div class="table-responsive">
        <p class="f-500 c-black m-b-20">Galeria Numero 2</p>

                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                    <div>
                        <span class="btn btn-info btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="ImgGal2">
                        </span>
                        <a href="#" class="btn btn-danger fileinput-exists"
                           data-dismiss="fileinput">Remove</a>
                    </div>
                </div>
        </div> <div class="table-responsive">
        <p class="f-500 c-black m-b-20">Galeria Numero 3</p>

                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                    <div>
                        <span class="btn btn-info btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="ImgGal3">
                        </span>
                        <a href="#" class="btn btn-danger fileinput-exists"
                           data-dismiss="fileinput">Remove</a>
                    </div>
                </div>
        </div> <div class="table-responsive">
        <p class="f-500 c-black m-b-20">Galeria Numero 4</p>

                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                    <div>
                        <span class="btn btn-info btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="ImgGal4">
                        </span>
                        <a href="#" class="btn btn-danger fileinput-exists"
                           data-dismiss="fileinput">Remove</a>
                    </div>
                </div>
        </div> <div class="table-responsive">
        <p class="f-500 c-black m-b-20">Galeria Numero 5</p>

                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                    <div>
                        <span class="btn btn-info btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="ImgGal5">
                        </span>
                        <a href="#" class="btn btn-danger fileinput-exists"
                           data-dismiss="fileinput">Remove</a>
                    </div>
                </div>
        </div> <div class="table-responsive">
        <p class="f-500 c-black m-b-20">Galeria Numero 6</p>

                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                    <div>
                        <span class="btn btn-info btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="ImgGal6">
                        </span>
                        <a href="#" class="btn btn-danger fileinput-exists"
                           data-dismiss="fileinput">Remove</a>
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
</form>
@stop




@section('scripts')
	
@stop

	
