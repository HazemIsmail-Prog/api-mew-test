<?php

namespace App\Http\Controllers;

use App\Http\Resources\ContractResource;
use App\Http\Resources\StakeholderResource;
use App\Models\Contract;
use App\Models\Stakeholder;
use Illuminate\Http\Request;

class ReusableListController extends Controller
{
    public function contractsWithNoParent()
    {
        $contracts = Contract::query()
            ->where('contract_id',null)
            ->get();
        return ContractResource::collection($contracts);
    }
    public function allContracts()
    {
        $contracts = Contract::query()
            ->get();
        return ContractResource::collection($contracts);
    }
    public function allStakeholders()
    {
        $stakeholders = Stakeholder::query()
            ->get();
        return StakeholderResource::collection($stakeholders);
    }
}
