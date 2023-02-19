<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crudoperation extends Model
{
    use HasFactory;
    protected $fillable=['id','actual_name','short_name','allow_decimal','base_unit_id',
                        'base_unit_multiplier','base_unit'];
}
