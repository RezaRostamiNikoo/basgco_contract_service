<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deduction extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ["contract_id", "deduction_id", "amount"];
}
