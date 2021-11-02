<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coverpage extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'title', 'required_questions', 'file'];
}
