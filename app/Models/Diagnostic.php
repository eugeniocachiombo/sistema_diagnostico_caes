<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostic extends Model
{
    use HasFactory;
    protected $table = "diagnostico";
    protected $fillable = ["sintoma1", "sintoma2", "sintoma3"];
}
