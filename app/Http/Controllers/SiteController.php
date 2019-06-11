<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return 'Homepage do site';
    }

    public function contato() {
        return 'página de contatos';
    }

    public function categoria($idCategoria = '1') {
        return "O id da categoria é {$idCategoria}";
    }

}
