<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function children(): HasMany
    {
        return $this->hasMany(Project::class, 'main_project_id');
    }

    public function main(): BelongsTo
    {
        return $this->belongsTo(Project::class, 'main_project_id');
    }
}
