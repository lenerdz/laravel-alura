@extends('layout/principal')

@section('conteudo')
    <form action="/produtos/adiciona" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="" aria-describedby="nome_ajuda">
            <small id="nome_ajuda" class="text-muted">Nome do produto</small>
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="number" name="quantidade" id="quantidade" class="form-control" placeholder="" aria-describedby="quantidade _ajuda">
            <small id="quantidade _ajuda" class="text-muted">Quantidade do produto</small>
        </div>
        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="text" name="valor" id="valor" class="form-control" placeholder="" aria-describedby="valor_ajuda">
            <small id="valor_ajuda" class="text-muted">Valor do produto</small>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" id="descricao" class="form-control" placeholder="" aria-describedby="descricao_ajuda">
            <small id="descricao_ajuda" class="text-muted">Descrição do produto</small>
        </div>
        <button type="submit" class="btn btn-success">Adicionar</button>
    </form>
@endsection