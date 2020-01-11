@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(isset($errors) && count($errors)> 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                        @endforeach
                    </div>
                @endif
            <div class="card">
                <div class="card-header">Adicionar um fornecedor</div>

                <div class="card-body">
                    <form action="{{route('suppliers.store')}}" method="POST" enctype="multipart/form-data">
                    	@csrf
                    	<div class="form-group">
						    <label>Nome do fornecedor:</label>
						    <input type="text" class="form-control" name="name" placeholder="Digite o nome do produto">
						  </div>
						  <div class="form-group">
						    <label>CEP:</label>
						    <input type="text" class="form-control" name="cep" placeholder="Digite o CEP do endereço">
						  </div>
                           <div class="form-group">
                            <label>Endereço:</label>
                            <input type="text" class="form-control" name="address" placeholder="Digite o endereço do fornecedor">
                          </div>
                          <div class="form-group">
                            <label>Número:</label>
                            <input type="text" class="form-control" name="number" placeholder="Digite o número do endereço">
                          </div>
                            <div class="form-group">
                            <label>Bairro:</label>
                            <input type="text" class="form-control" name="neighborhood" placeholder="Digite o bairro">
                          </div>
                            <div class="form-group">
                            <label>Cidade:</label>
                            <input type="text" class="form-control" name="city" placeholder="Digite a cidade">
                          </div>
                            <div class="form-group">
                            <label>Estado:</label>
                            <input type="text" class="form-control" name="state" placeholder="Digite o estado">
                          </div>
						  <div class="form-group">
						    <label>Telefone:</label>
						    <input type="text" name="phone" class="form-control" placeholder="Digite o número de telefone">
						  </div>
						 <button type="submit" class="btn btn-primary">Cadastrar</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection