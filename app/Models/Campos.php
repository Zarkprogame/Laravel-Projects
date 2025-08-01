<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campos extends Model
{
    use HasFactory;
    protected $table = "campos";
    protected $primaryKey = "id";
    public $timestamps = true;
}
