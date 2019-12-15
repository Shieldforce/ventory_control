<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    protected $header;

    public function __construct()
    {
        $this->middleware('auth');
        $this->header =
            [
                'crudName'=>"Painel Principal",
                'controller'=>'Principal'
            ];
    }

    public function index()
    {
        $header = $this->header;
        return view('panel.main.index', compact('header'));
    }
}
