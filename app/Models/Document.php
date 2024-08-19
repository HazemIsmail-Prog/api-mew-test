<?php

namespace App\Models;

use App\Observers\DocumentObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

#[ObservedBy(DocumentObserver::class)]
class Document extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'is_completed' => 'boolean'
    ];

    public function sender(): BelongsTo
    {
        return $this->belongsTo(Stakeholder::class, 'from_id');
    }

    public function receiver(): BelongsTo
    {
        return $this->belongsTo(Stakeholder::class, 'to_id');
    }

    public function contract(): BelongsTo
    {
        return $this->belongsTo(Contract::class);
    }

    public function steps(): HasMany
    {
        return $this->hasMany(Step::class);
    }

    public function attachments(): HasMany
    {
        return $this->hasMany(Attachment::class);
    }

    public function lastStep(): HasOne
    {
        return $this->hasOne(Step::class)->latestOfMany();
    }
}
