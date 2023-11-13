<?php

namespace App\Http\Controllers\Admin;

use App\DTO\CreateSupportDTO;
use App\DTO\UpdateSupportDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSuportRequest;
use App\Models\Support;
use App\Services\SupportService;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class SuportController extends Controller
{
    public function __construct(
        protected SupportService $service
    )
    {}

    public function index(Request $request)
    {
        $supports = $this->service->getall($request->filter);

        return view('admin/supports/index', compact('supports'));
    
    }   
    public function show(string $id)
    {
        if (!$support = $this->service->findOne($id)) {
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
        $this->service->new(
            CreateSupportDTO::makeFromRequest($request)
        );

        return redirect()->route('supports.index');
    }

    public function edit(string $id)
    {
        if(!$support = $this->service->findOne($id) ){

        }
        return view('admin/supports.edit', compact('support'));
    }

    public function update(StoreUpdateSuportRequest $request, Support $support, string $id)
    {
       $support = $this->service->update(
            UpdateSupportDTO::makeFromRequest($request)
        );
        if (!$support){
            return back();
        }

       return redirect()->route('supports.index');
    } 

    public function destroy(String  $id)
    {
        $this->service->delete($id);

        return redirect()->route('supports.index');
    }

}