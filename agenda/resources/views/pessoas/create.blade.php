@extends("template.app")

@section("content")
	<div class="col-md-12 col-md-offset-2">
		<h3>Novo Contato</h3>
	</div>

	<div class="col-md-6 well col-md-offset-2">
		<form  class="col-md-12" action="{{ url('/pessoas/store')}}" method="POST">
			{{ csrf_field() }}
			<div class="col-md-12 from-group">
				<label for="nome" class="control-label">Nome</label>
					<input type="text" name="nome" class="form-control" placeholder="nome">
				
			</div>

			<div class="col-md-2 from-group">
				<label for="ddd" class="control-label">DDD</label>
					<input type="text" name="ddd" class="form-control" placeholder="DDD">
				
			</div>

			<div class="col-md-10 from-group">
				<label for="telefone" class="control-label">TELEFONE</label>
					<input type="text" name="telefone" class="form-control" placeholder="Telefone">
				
			</div>

			<button type="submit" class="btn btn-primary" style="margin-top: 5px; float: right;">Salvar</button>

		</form>
	</div>
@endsection