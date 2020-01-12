@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           
            <div class="card">
                <div class="card-header">Lista de produtos</div>

                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <a href="{{route('products.create')}}">
                                <button type="" class="btn btn-success add">Adicionar</button>
                                </a>
                    </div>

                </div>    

                <div class="card-body">

                     <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Fornecedor</th>
                            <th scope="col">Imagem</th>
                            <th scope="col">Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->quant}}</td>
                            <td>{{$row->supplier_id}}</td>
                            <td><img src="{{url('storage/products/'.$row->image)}}" width="100px"></td>
                           
                            <td>
                                <a href="{{route('products.edit', $row->id)}}">
                                <button type="" class="btn btn-success">Editar</button>
                                </a>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $products->links() !!}
                
                    
            </div>
        </div>
        <br>
        <a href="{{route('home')}}">
                    <input type="button" class="btn btn-success" value="Voltar">
                </a>
    </div>
</div>


@endsection