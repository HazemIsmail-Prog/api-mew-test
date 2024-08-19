<?php

namespace App\Http\Controllers;

use App\Http\Resources\StepResource;
use App\Models\Document;
use App\Models\Step;
use Illuminate\Http\Request;

class StepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Document $document)
    {
        $steps =  Step::query()
            ->where('document_id', $document->id)
            ->get();
        return StepResource::collection($steps);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Document $document)
    {
        $validated = $request->validate([
            'action' => 'required',
            'is_completed' => 'required',
        ]);
        $validated['user_id'] = auth()->id();
        $step = $document->steps()->create($validated);

        return new StepResource($step);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document, Step $step)
    {
        $validated = $request->validate([
            'action' => 'required',
            'is_completed' => 'nullable',
        ]);
        $step->update($validated);

        return new StepResource($step);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document, Step $step)
    {
        $step->delete();
    }
}
