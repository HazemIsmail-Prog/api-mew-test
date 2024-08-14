<?php

namespace App\Http\Controllers;

use App\Http\Resources\ContractResource;
use App\Models\Contract;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ContractController extends Controller
{

    public function getContracts()
    {
        $contracts = Contract::query()
            ->where('contract_id',null)
            ->get();
        return ContractResource::collection($contracts);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $contracts  = Contract::query()
        ->orderBy('contract_id')
        ->orderBy('name')
            ->with('parentContract')
            ->when($request['filters']['search'] != '', function (Builder $q) use ($request) {
                $q->where('name', 'like', '%' . $request['filters']['search'] . '%');
            })->paginate($request['per_page'] ?? 5);
        return ContractResource::collection($contracts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'contract_id' => 'nullable',
            'is_active' => 'required',
            'created_by' => 'required',
        ]);
        $contract = Contract::create($validated);
        $contract->load('parentContract');


        return new ContractResource($contract);
    }

    /**
     * Display the specified resource.
     */
    public function show(Contract $contract)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contract $contract)
    {
        $validated = $request->validate([
            'name' => 'required',
            'contract_id' => 'nullable',
            'is_active' => 'required',
            'created_by' => 'required',
        ]);


        $contract->update($validated);
        $contract->load('parentContract');

        return response()->json(new ContractResource($contract), 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contract $contract)
    {
        $contract->delete();
    }
}
