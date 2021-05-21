<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function datogenerals(){
        return $this->hasMany(DatoGeneral::class);
    }
}
