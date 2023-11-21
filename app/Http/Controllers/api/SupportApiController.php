<?php

namespace App\Http\Controllers\api;

use App\Adapters\ApiAdapter;
use App\DTO\Supports\CreateSupportDTO;
use App\DTO\Supports\UpdateSupportDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSuportRequest;
use App\Http\Resources\SupportResource;
use App\Services\SupportService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SupportApiController extends Controller
{
    public function __construct(
        protected SupportService $service,
    ){}
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $supports = $this->service->paginate(
            page: $request->get('page', 1),
            totalPerPage: $request->geta('per_page', 1),
            filter: $request->filter,
        );

        return ApiAdapter::toJson($supports);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateSuportRequest $request )
    {
        $support = $this->service->new(
            CreateSupportDTO::makeFromRequest($request)
        );

        return new SupportResource($support);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (!$support = $this->service->findOne($id)) {
            return response()->json([
                'error' => 'Not found'    
            ], Response::HTTP_NOT_FOUND);
      }
        return new SupportResource($support);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateSuportRequest $request, string $id)
    {
        $support = $this->service->update(
            UpdateSupportDTO::makeFromRequest($request)
        );

            if (!$support){
            return response()->json([
                'error' => 'Not found'    
            ], Response::HTTP_NOT_FOUND);
        }

        return new SupportResource($support);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!$this->service->findOne($id)) {
            return response()->json([
                'error' => 'Not found'    
            ], Response::HTTP_NOT_FOUND);
      }
        $this->service->delete($id);

        return response()->json([],Response::HTTP_NO_CONTENT);
    }
}
