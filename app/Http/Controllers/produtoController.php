<?php namespace Estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use Estoque\Produto;

class produtoController extends Controller {
    public function lista() {
        $produtos = Produto::all();
        // return view('listagem')->with('produtos', $produtos);
        // return view('listagem')->withProdutos($produtos); //magic method
        // return view('listagem', ['produtos' => $produtos]);
        // $data = ['produtos' => $produtos];
        $data = [];
        $data['produtos'] = $produtos;

        //return view('listagem', $data);
        if (view()->exists('produtos/listagem')) {
            return view('produtos/listagem', $data);
        }
    }

    public function mostra() {
        // $id = Request::input('id', '1');
        $id = Request::route('id');
        $produto = Produto::find($id);
        if(empty($produto)) return "Produto não encontrado";
        return view('produtos/detalhes')->with('p', $produto);
    }

    public function novo() {
        return view('produtos/formulario');
    }

    public function adiciona() {
        $nome = Request::input('nome');
        $quantidade = Request::input('quantidade');
        $valor = Request::input('valor');
        $descricao = Request::input('descricao');

        DB::insert('insert into produtos (nome, quantidade, valor, descricao) values (?,?,?,?)', array($nome, $quantidade, $valor, $descricao));

        // return view('produtos/adiciona')->withNome($nome);
        return redirect('produtos/')->withInput(Request::only('nome'));
    }

    public function listaJson(){
        $produtos = DB::select('select * from produtos');
        // return $produtos;
        return response()->json($produtos);
        // return response()->download($caminhoParaUmArquivo);

    }
}