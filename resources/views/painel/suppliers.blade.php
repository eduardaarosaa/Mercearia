@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <div class="card">
                <div class="card-header">Lista de fornecedores</div>

                <div class="card-body">

                     <table class="table">
                    <thead>
                        <tr>

                            <th scope="col">Nome</th>
                            <th scope="col">CEP</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Número</th>
                            <th scope="col">Bairro</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Telefone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($supplier as $row)
                        <tr>

                            <td>{{$row->name}}</td>
                            <td>{{$row->cep}}</td>
                            <td>{{$row->address}}</td>
                            <td>{{$row->number}}</td>
                            <td>{{$row->neighborhood}}</td>
                            <td>{{$row->city}}</td>
                            <td>{{$row->state}}</td>
                            <td>{{$row->phone}}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $supplier->links() !!}
                <a href="{{route('home')}}">
                    <input type="button" class="btn btn-success" value="Voltar">
                </a>
                    
            </div>
        </div>
    </div>
</div>


@endsection