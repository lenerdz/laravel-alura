@extends('layout/principal')

@section('conteudo')
    <h1>Listagem de produtos</h1>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Valor</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Ver mais</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $p)
            <tr {{ $p->quantidade <=1 ? 'class=table-danger' : '' }}>
                <td scope="row">{{$p->nome}}</td>
                <td>{{$p->valor}}</td>
                <td>{{$p->descricao}}</td>
                <td>{{$p->quantidade}}</td>
                <td><a href="/produtos/mostra/{{$p->id}}"><i class="fas fa-search"></i></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop