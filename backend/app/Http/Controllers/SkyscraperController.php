<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSkyscraperRequest;
use App\Http\Requests\UpdateSkyscraperRequest;
use App\Http\Resources\SkyscraperResource;
use App\Models\Skyscraper;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;

class SkyscraperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        //Ez csak a felhokarcolokat adja vissza
        //return SkyscraperResource::collection(Skyscraper::all());
        return SkyscraperResource::collection(Skyscraper::with('city')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSkyscraperRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Skyscraper $skyscraper): JsonResource
    {
        return new SkyscraperResource($skyscraper->load('city'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSkyscraperRequest $request, Skyscraper $skyscraper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skyscraper $skyscraper): Response
    {
        return $skyscraper->delete() ? response()->noContent() : abort(500);
    }
}
