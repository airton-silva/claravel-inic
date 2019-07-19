@extends("template.app")

@section("content")

	<div class="col-md-12 col-md-offset-2">
		<h3>Editar Contato</h3>
	</div>

	<div class="col-md-6 well col-md-offset-2">
		<form  class="col-md-12" action="{{ url('/pessoas/update')}}" method="POST">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{$pessoa->id}}">
			<div class="col-md-12 from-group">
				<label for="nome" class="control-label">Nome</label>
					<input type="text" name="nome" value="{{ $pessoa->nome}}" class="form-control" placeholder="nome">
				
			</div>

			<button type="submit" class="btn btn-primary" style="margin-top: 5px; float: right;">Editar</button>

		</form>
	</div>
@endsection