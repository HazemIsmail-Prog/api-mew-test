<?php

namespace App\Models;

use App\Observers\AttachmentObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy(AttachmentObserver::class)]
class Attachment extends Model
{
    use HasFactory;

    protected $guarded = [];
}
