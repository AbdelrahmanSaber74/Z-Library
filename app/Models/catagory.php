<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catagory extends Model
{
    use HasFactory;
    protected $fillable = [
        'path',
        'name',
    ];

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function steps()
    {
        return $this->hasMany(catagory::class);
    }


}
