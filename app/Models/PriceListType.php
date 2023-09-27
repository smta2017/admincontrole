<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PriceListType extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
        'status',

        "created_by",
        "updated_by",
        "deleted_by"
    ];
    
}
