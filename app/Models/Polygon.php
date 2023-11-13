<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Polygon extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'polygons';

    public $fillable = [
        'id',
        'hectareas',
        'polygon'
    ];

    protected $casts = [
        'hectareas'=>'float',
        'polygon' => 'array'
        ];

    public static $rules = [
        'id' => 'required',
        'polygon' => 'required',
        'hectareas' => 'required'
    ];   
}
