<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractItem extends Model
{
    use HasFactory;

    protected $fillable = ["contract_id", "item_row", "description", "unit_id", "unit_price",];
}
