@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <div class="card">
                <div class="card-header">Lista de produtos</div>

                <div class="card-body">

                     <table class="table">
                    <thead>
                        <tr>

                            <th scope="col">Nome</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Fornecedor</th>
                            <th scope="col">Imagem</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $row)
                        <tr>

                            <td>{{$row->name}}</td>
                            <td>{{$row->quant}}</td>
                            <td>{{$row->supplier_id}}</td>
                            <td><img src="{{url('storage/products/'.$row->image)}}" width="100px"></td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $products->links() !!}
                <a href="{{route('home')}}">
                    <input type="button" class="btn btn-success" value="Voltar">
                </a>
                    
            </div>
        </div>
    </div>
</div>


@endsection