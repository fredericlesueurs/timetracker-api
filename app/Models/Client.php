<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'contact_name',
        'description',
        'comments',
        'address',
        'zip_code',
        'city',
        'phone',
        'email',
    ];

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }

    public function isWithoutContactInformation(): bool
    {
        return $this->email === null
            && $this->city === null
            && $this->zip_code === null
            && $this->address === null
            && $this->contact_name === null;
    }
}