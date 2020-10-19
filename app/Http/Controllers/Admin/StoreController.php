<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('user.has.store')->only(['create','store']);
    }
    public function index()
    {
        $stores = Auth::user()->store;

        return view('admin.stores.index',compact('stores'));
    }

    public function create()
    {
   
        return view('admin.stores.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $user = Auth::user();
        $store = $user->store()->create($data);

        flash('Loja criada com Sucesso')->success();
        return redirect()->route('admin.stores.index');
    }

    public function edit($store)
    {
        $store = Store::find($store);

     
        return view('admin.stores.edit',compact('store'));
    }

    public function update(Request $request,$store)
    {
        $data = $request->all();

        $store = Store::find($store);
        $store->update($data);

        flash('Loja atualizada com Sucesso')->success();
        return redirect()->route('admin.stores.index');
    }

    public function destroy($store)
    {
        $store = Store::find($store);
        $store->delete();

        flash('Loja deletada')->error();
        return redirect()->route('admin.stores.index');
    }
}
