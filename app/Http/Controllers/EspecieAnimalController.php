<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\EspecieAnimalController as EspecieAnimalControllerRequest;

class EspecieAnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param EspecieAnimalControllerRequest\EspecieAnimalControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(EspecieAnimalControllerRequest\EspecieAnimalControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param EspecieAnimalControllerRequest\EspecieAnimalControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(EspecieAnimalControllerRequest\EspecieAnimalControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param EspecieAnimalControllerRequest\EspecieAnimalControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(EspecieAnimalControllerRequest\EspecieAnimalControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param EspecieAnimalControllerRequest\EspecieAnimalControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(EspecieAnimalControllerRequest\EspecieAnimalControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param EspecieAnimalControllerRequest\EspecieAnimalControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(EspecieAnimalControllerRequest\EspecieAnimalControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
