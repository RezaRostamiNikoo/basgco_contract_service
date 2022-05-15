<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        "contract_type_id", "person_id", "job_id", "site_id",
        "description", "contract_number", "status", "start_date", "finish_date"
    ];

    public function items(): HasMany
    {
        return $this->hasMany(ContractItem::class);
    }

    public function deductions(): BelongsToMany
    {
        return $this->belongsToMany(Deduction::class)->withPivot("amount");
    }
}
