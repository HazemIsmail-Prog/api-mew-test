<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DocumentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'notes' => $this->notes,
            'type' => $this->type,
            'contract_id' => $this->contract_id,
            'to_id' => $this->to_id,
            'from_id' => $this->from_id,
            'contract' => new ContractResource($this->whenLoaded('contract')),
            'receiver' => new StakeholderResource($this->whenLoaded('receiver')),
            'sender' => new StakeholderResource($this->whenLoaded('sender')),
            'lastStep' => new StepResource($this->whenLoaded('lastStep')),
            'created_by' => $this->created_by,
            'is_completed' => $this->is_completed,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
