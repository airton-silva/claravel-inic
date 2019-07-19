@extends("template.app")

@section("content")
<br>
<div>
	@foreach($pessoas as $pessoa)
		<div class="col-md-3">
			<div class="panel panel-info">
				<div class="panel panel-heading">
					{{$pessoa->nome}}
					<a class="glyphicon glyphicon-pencil" style="margin-left:30px; float: right;" href="{{"/pessoas/$pessoa->id/editar"}}">editar</a>
				</div>
				<div class="panel-body">
					@foreach($pessoa->telefones as $telefone)
					<p><strong>Telefone:</strong>{{$telefone->ddd}} {{$telefone->telefone}}</p>
					@endforeach

				</div>
				
			</div>			
		</div>

	@endforeach
</div>
@endsection