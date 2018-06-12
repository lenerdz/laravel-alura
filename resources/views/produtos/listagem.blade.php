@extends('layout/principal')

@section('conteudo')
@if(empty($produtos))
  <div class="alert alert-danger">
    Você não tem nenhum produto cadastrado.
  </div>

 @else
    <h1>Listagem de produtos</h1>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Valor</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Ver mais</th>
                <th>Excluir</th>
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
                <td><a href="/produtos/remove/{{$p->id}}"><i class="fas fa-trash"></i></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endif

@if(old('nome'))
    <div class="alert alert-success">
        <strong>Sucesso!</strong> 
            O produto {{ old('nome') }} foi adicionado.
    </div>
@endif
@stop