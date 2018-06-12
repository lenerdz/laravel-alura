<?php

namespace Estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {
    protected $table = 'produtos';
    public $timestamps = false;
    protected $fillable = array('nome', 'quantidade', 'valor', 'descricao');
    //
}
