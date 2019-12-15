<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    protected $header;
    protected $model;
    protected $route;

    public function __construct(User $model)
    {
        $this->middleware('auth');
        $this->model = $model;
        $this->header =
            [
                'crudName'=>"Usuários",
                'controller'=>'Usuários'
            ];
    }

    public function index(Request $request)
    {
        $header = $this->header;
        $list = $this->model->all();
        return view($request->route()->getName(), compact('header', 'list'));
    }

    public function create(Request $request)
    {
        $header = $this->header;
        return view($request->route()->getName(), compact('header'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Request $request, $id)
    {
        $header = $this->header;
        $item = $this->model->find($id);
        return view($request->route()->getName(), compact('header', 'item'));
    }

    public function edit(Request $request, $id)
    {
        $header = $this->header;
        $item = $this->model->find($id);
        return view($request->route()->getName(), compact('header', 'item'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request $request, $id)
    {
        //
    }
}
