<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AttachmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $bucketName = config('filesystems.disks.s3.bucket');

        return [
            'id' => $this->id,
            'description' => $this->description,
            'file' => "https://" . $bucketName . ".s3.amazonaws.com/" . $this->file,

        ];
    }
}
