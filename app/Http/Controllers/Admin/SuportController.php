<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSuportRequest;
use App\Models\Support;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class SuportController extends Controller
{
    public function index(Support $support)
    {
        $supports = $support->all(); 

        return view('admin/supports/index', compact('supports'));
    }

    public function show(string|int $id)
    {
        if (!$support = Support::find($id)) {
            return back();
        }
        return view('admin/supports/show', compact('support'));
    }

    public function create()

    {
        return view('admin/supports/create');
    }

    public function store(StoreUpdateSuportRequest $request, Support $support)
    {
        $data = $request->Validated();
        $data['status'] = 'a'; 

        Support::create($data);

        return redirect()->route('supports.index');
    }

    public function edit(Support $support, string|int $id)
    {
        if(!$support = $support->where('id', $id)->first()){

        }
        return view('admin/supports.edit', compact('support'));
    }

    public function update(StoreUpdateSuportRequest $request, Support $support, string $id)
    {
        if (!$support = $support->find($id)){
            return back();
        }
        
       $support->update($request->validated());

       return redirect()->route('supports.index');
    } 

    public function destroy(String|int $id)
    {
        if(!$support = Support::find($id)){
            return back();
        }
        $support->delete();

        return redirect()->route('supports.index');
    }

}
