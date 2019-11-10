<?php

namespace Modules\Saller\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Saller\Http\Requests\SallerRequest;
use Modules\Saller\Repositories\SallerRepository;
use Modules\Saller\Entities\Saller;

class SallerController extends Controller
{


    public function index(Request $request){
        return view('saller::index');
    }


    public function create()
    {
        return view('saller::create');
    }


    public function store(SallerRequest $request){
        SallerRepository::store($request->all());
        return redirect()->route('sallers.index')->with('success', 'Representante cadastrado.');
    }


    public function edit(Request $request, Saller $saller)
    {
        return view('saller::edit');
    }


    public function update(SallerRequest $request, Saller $saller){
        SallerRepository::update($saller, $request->all());
        return redirect()->route('sallers.edit', $saller->id)->with('success', 'Representante atualizado.');
    }


    public function destroy(Request $request, Saller $saller){
        SallerRepository::destroy($saller);
        return back()->with('success', 'Representante deletado.');
    }


}
