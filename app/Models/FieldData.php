<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FieldData extends Model
{
    protected $fillable = ['attribute_name', 'database_name', 'is_fromdata', 'input_type', 'options'];
}
