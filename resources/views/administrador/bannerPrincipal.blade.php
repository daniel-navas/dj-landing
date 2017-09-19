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
					<p class="f-500 c-black m-b-20">Banner Numero 1</p>
					<div class="fileinput fileinput-new" data-provides="fileinput">
						<div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
						<div>
							<span class="btn btn-info btn-file">
								<span class="fileinput-new">Select image</span>
								<span class="fileinput-exists">Change</span>
								<input type="file" name="imagen1" id="imagen1">
							</span>
							<a href="#" class="btn btn-danger fileinput-exists"
							data-dismiss="fileinput">Remove</a>
						</div>
					</div>
				</div>
				<div class="table-responsive">
					<p class="f-500 c-black m-b-20">Banner Numero 2</p>
					<div class="fileinput fileinput-new" data-provides="fileinput">
						<div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
						<div>
							<span class="btn btn-info btn-file">
								<span class="fileinput-new">Select image</span>
								<span class="fileinput-exists">Change</span>
								<input type="file" name="imagen2" id="imagen2">
							</span>
							<a href="#" class="btn btn-danger fileinput-exists"
							data-dismiss="fileinput">Remove</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="card">
				<div class="table-responsive">
					<p class="f-500 c-black m-b-20">Titulo Principal Banner 1</p>
				</div>
				<div class="form-group">
					<div class="fg-line">
						<input type="text" class="form-control" placeholder="Titulo Principal" name="TitPrin1" id="TitPrin1">
					</div>
				</div>
				<div class="table-responsive">
					<p class="f-500 c-black m-b-20">Subtitulo Principal Banner 1</p>
				</div>
				<div class="form-group">
					<div class="fg-line">
						<input type="text" class="form-control" placeholder="Subtitulo Principal" name="Subtit1" id="Subtit1">
					</div>
				</div>
				<div class="table-responsive">
					<p class="f-500 c-black m-b-20">Titulo Principal Banner 2</p>
				</div>
				<div class="form-group">
					<div class="fg-line">
						<input type="text" class="form-control" placeholder="Titulo Principal" name="TitPrin2" id="TitPrin2">
					</div>
				</div>
				<div class="table-responsive">
					<p class="f-500 c-black m-b-20">Subtitulo Principal Banner 2</p>
				</div>
				<div class="form-group">
					<div class="fg-line">
						<input type="text" class="form-control" placeholder="Subtitulo Principal" name="Subtit2" id="Subtit2">
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
</form>
{{-- ********************************************FIN LISTAR USUARIOS*************************************** --}}
@stop

@section('scripts')

@stop


