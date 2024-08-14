<?php

namespace App\Http\Controllers;

use App\Http\Resources\StakeholderResource;
use App\Models\Stakeholder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class StakeholderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $stakeholders  = Stakeholder::query()
            ->orderBy('name')
            ->when($request['filters']['search'] != '', function (Builder $q) use ($request) {
                $q->where('name', 'like', '%' . $request['filters']['search'] . '%');
            })->paginate($request['per_page'] ?? 5);
        return StakeholderResource::collection($stakeholders);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'is_active' => 'required',
            'created_by' => 'required',
        ]);
        $stakeholder = Stakeholder::create($validated);


        return new StakeholderResource($stakeholder);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stakeholder $stakeholder)
    {
        $validated = $request->validate([
            'name' => 'required',
            'is_active' => 'required',
            'created_by' => 'required',
        ]);


        $stakeholder->update($validated);

        return response()->json(new StakeholderResource($stakeholder), 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stakeholder $stakeholder)
    {
        $stakeholder->delete();
    }
}
